<?php


namespace Wave\SDK\SchemaGenerator\Parser;


use Symfony\Component\Yaml\Yaml;
use Wave\Annotation;
use Wave\Config;
use Wave\DB\Column;
use Wave\DB\Model;
use Wave\Reflector;
use Wave\Router\Action;
use Wave\Router\Generator;
use Wave\SDK\SchemaGenerator\Operation;
use Wave\SDK\SchemaGenerator\Parameter;
use Wave\Validator;

class FromRoutes extends Parser {

    const INCLUDE_SCHEMA_KEY = 'x-include-schema';

    static $type_translations = array(
        'int' => 'integer',
        'string' => '%s'
    );

    static $allowed_methods = array(
        'get', 'post', 'put', 'delete',
        'options', 'head', 'patch'
    );

    protected $controller_dir;
    protected $schema_dir;
    protected $includes_dir;

    protected $definitions = [];

    public function __construct($controller_dir, $schema_dir, $includes_dir) {
        $this->controller_dir = $controller_dir;
        $this->schema_dir = $schema_dir;
        $this->includes_dir = $includes_dir;
    }


    public function getOperations() {

        $reflector = new Reflector($this->controller_dir);
        $reflected_options = $reflector->execute();
        $routes = Generator::buildRoutes($reflected_options);

        /**
         * @var string $callable
         * @var Action $action
         */
        $operations = [];

        foreach($routes['default'] as $callable => $action){

            // Retrieve class and method
            list($class, $function) = explode('.', $action->getAction());

            $class = preg_replace('/^Controllers\\\\?/i', '', $class);
            $class = preg_replace('/Controller$/i', '', $class);

            foreach($action->getRoutes() as $route){

                $matches = preg_split('/(?<!<)\/(?!>)/', $route);
                $method = strtolower(array_shift($matches));

                if(!in_array($method, self::$allowed_methods)){
                    continue;
                }

                $in_hint = $this->getParameterInHint($method);

                $operation = new Operation([
                    'method' => $method,
                    'class' => $class,
                    'function' => $function
                ]);


                foreach($action->getAnnotations() as $key => $annotations){
                    foreach($annotations as $annotation){
                        $this->applyAnnotation($key, $annotation, $operation, $in_hint);
                    }
                }


                foreach ($matches as $i => $part) {
                    if (preg_match('/<(?<type>.+?)>(?<name>\w+)/i', $part, $match)) {
                        $matches[$i] = sprintf('{%s}', $match['name']);
                        $parameter = array(
                            'name' => $match['name'],
                            'in' => Parameter::IN_PATH,
                            'required' => true
                        );
                        $this->convertType($match['type'], $parameter);
                        $operation->addParameter(new Parameter($parameter));
                    }
                }

                $route = '/' . implode('/', $matches);

                $operation->path = $route;
                $operation->resolveParameterPlacement();

                if(!array_key_exists($route, $operations))
                    $operations[$route] = array();

                $operations[$route][$method] = $operation;
            }
        }

        return $operations;

    }

    private function applyAnnotation($key, Annotation $annotation, Operation &$operation, $in_hint){

        $fix_case = array(
            'operationid' => 'operationId'
        );

        $key = isset($fix_case[$key]) ? $fix_case[$key] : $key;

        switch($key){
            case 'summary':
            case 'description':
            case 'operationId':
                $operation->$key = $annotation->getValue();
                break;
            case 'deprecated':
                $operation->$key = in_array($annotation->getValue(), array(1, true, '1', 'true'), true);
                break;
            case 'tags':
            case 'consumes':
            case 'produces':
            case 'schemes':
                $operation->$key->merge(array_map(function($v){ return trim($v); }, explode(',', $annotation->getValue())));
                break;
            case 'parameter':
                $operation->addParameter($this->parseParameter($annotation->getValue(), $in_hint));
                break;
            case 'params':
            case 'validate':
                $operation->mergeParameters($this->resolveSchema($annotation->getValue(), $in_hint));
                break;
            case 'response':
                $operation->addResponse($this->parseResponseParameter($annotation->getValue()));
        }

    }



    private function parseResponseParameter($annotation){

        if(preg_match('/(?<fq_class>(?<ns>[\w\\\\]+)\\\\(?<class>[\w]+))(?<is_array>\[\])?(\s(?<in_var>[\w]+))?$/', $annotation, $matches)){
            $schema = $this->parseModelResponse($annotation, $matches);
        } elseif(preg_match('/(?<var_type>int|float|string)(?<is_array>\[\])?(\s(?<in_var>[\w]+))?$/', $annotation, $matches)) {
            //It's primitive
            $schema = $this->parsePrimitiveResponse($matches);
        } else {
            //Whoops!
            return [];
        }

        $is_array = !empty($matches['is_array']);
        $in_var = empty($matches['in_var']) ? null : $matches['in_var'];


        if($is_array){
            $schema = ['type' => 'array', 'items' => $schema];
        }

        if($in_var !== null){
            $schema = ['type' => 'object', 'properties' => [$in_var => $schema]];
        }

        return ['description' => 'A successful request', 'schema' => $schema];

    }

    private function parsePrimitiveResponse($matches) {

        switch($matches['var_type']){
            case 'bool':
                $type = 'boolean';
                break;
            case 'int':
            case 'float':
                $type = 'integer';
                break;
            case 'string':
            default:
                $type = 'string';
                break;
        }

        return ['type' => $type];
    }

    private function parseModelResponse($annotation, $matches){

        $fq_class = $matches['fq_class'];
        $class = $matches['class'];

        if(!class_exists($fq_class)){
            throw new \RuntimeException("{$annotation}, is not a valid response class");
        }

        $properties = [];

        if(method_exists($fq_class, '_getFields')){

            foreach($fq_class::_getFields(true) as $field_name => $field_data){

                switch($field_data['data_type']){
                    case Column::TYPE_BOOL:
                        $type = 'boolean';
                        break;
                    case Column::TYPE_INT:
                    case Column::TYPE_FLOAT:
                        $type = 'integer';
                        break;
                    case Column::TYPE_STRING:
                    case Column::TYPE_DATE:
                    case Column::TYPE_TIMESTAMP:
                        $type = 'string';
                        break;
                    default:
                        //Means that it won't be valid anyway
                        continue 2;
                }

                $properties[$field_name] = [
                    'type' => $type
                ];
            }

        } else {
            $rc = new \ReflectionClass($fq_class);
            foreach($rc->getProperties(\ReflectionProperty::IS_PUBLIC) as $property){

                if(preg_match('/@var\s(?<type>[\w]+)(?<is_array>\[\])?/', $property->getDocComment(), $matches)){

                    switch($matches['type']){
                        case 'bool':
                            $type = 'boolean';
                            break;
                        case 'int':
                        case 'float':
                            $type = 'integer';
                            break;
                        case 'string':
                            $type = 'string';
                            break;
                        default:
                            continue 2;
                    }

                } else {
                    $type = 'string';
                }

                $prop = ['type' => $type];

                if(!empty($matches['is_array'])){
                    $prop = ['type' => 'array', 'items' => $prop];
                }

                $properties[$property->getName()] = $prop;
            }
        }




        $this->definitions[$class] = [
            'type' => 'object',
            'properties' => $properties
        ];

        return ['$ref' => sprintf('#/definitions/%s', $class)];


    }


    /**
     * @param $schema
     * @param string $parameter_in_hint
     * @return array[]
     */
    private function resolveSchema($schema, $parameter_in_hint){
        $schema_file = sprintf('%s%s.php', $this->schema_dir, $schema);
        if(!file_exists($schema_file))
            throw new \RuntimeException("Could not resolve validation schema {$schema}, looked in {$schema_file}");

        $schema = require $schema_file;
        $parameters = [];

        foreach ($schema['fields'] as $key => $val) {
            $parameter = [
                'name' => $key,
                'in' => Parameter::IN_GUESS,
                '_in' => $parameter_in_hint,
            ];

            $parameter = array_replace($parameter, $this->parseSchema($val));

            if (isset($schema['aliases'][$key])) {
                $parameter['alias'] = $parameter['name'];
                if(is_array($schema['aliases'][$key]))
                    $parameter['name'] = $schema['aliases'][$key][0];
                else
                    $parameter['name'] = $schema['aliases'][$key];
            }

            $parameters[] = new Parameter($parameter);
        }

        return $parameters;
    }

    private function parseSchema($schema){

        $output = [
            'required' => isset($schema['required']) && is_bool($schema['required']) ? $schema['required'] : false
        ];

        $this->convertType(isset($schema['type']) ? $schema['type'] : 'string', $output);

        if(isset($schema['map'])){
            $output['items'] = $this->parseSchema($schema['map']);
        }

        if(isset($schema['member_of'])){
            $output['enum'] = $schema['member_of'];
        }

        if(isset($schema['default']))
            $output['default'] = $schema['default'];

        return $output;
    }

    private function parseParameter($annotation, $parameter_in_hint){

        $data = array(
            'type' => 'string',
            'required' => true
        );

        $parts = explode(' ', $annotation);
        // detect if the type was specified
        if($parts[0][0] !== '$') {
            $this->convertType(array_shift($parts), $data);
        }

        $data['name'] = substr(array_shift($parts), 1);

        if($parts[0] === '[optional]'){
            $data['required'] = false;
            array_shift($parts);
        }

        $description = trim(implode(' ', $parts));
        if(!empty($description))
            $data['description'] = $description;

        return new Parameter($data);

    }


    private function getParameterInHint($method){
        switch($method){
            case 'head':
            case 'options':
            case 'delete':
            case 'get':
                return Parameter::IN_QUERY;
            case 'post':
            case 'put':
            case 'patch':
            default:
                return Parameter::IN_BODY;
        }
    }

    private function convertType($type, array &$parameter){
        switch($type){
            case 'int':
                $parameter['type'] = 'integer';
                return;
            case 'float':
                $parameter['type'] = 'number';
                $parameter['format'] = 'float';
                return;
            case 'bool':
            case 'boolean':
                $parameter['type'] = 'boolean';
                return;
            case 'date':
                $parameter['type'] = 'string';
                $parameter['format'] = 'date-time';
                break;
            case 'string':
            case 'email':
                $parameter['type'] = 'string';
                return;
            case 'array':
                $parameter['type'] = 'array';
                return;
            default:
                // regex patterns
                if($type[0] == '/'){
                    $parameter['type'] = 'string';
                    $parameter['pattern'] = substr($type, 1, -1);
                }
                else {
                    trigger_error("Unknown type [{$type}]", E_USER_NOTICE);
                    $parameter['type'] = $type;
                }

                return;
        }
    }


    public function getDefinitions() {
        return $this->definitions;
    }
}
