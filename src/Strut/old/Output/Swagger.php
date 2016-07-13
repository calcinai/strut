<?php


namespace Wave\SDK\SchemaGenerator\Output;


use Wave\SDK\SchemaGenerator\Operation;
use Wave\SDK\SchemaGenerator\Parameter;

class Swagger extends Output {

    const SWAGGER_VERSION = '2.0';
    const VENDOR_EXTENSION_PREFIX = 'x-';


    public function generate(array $args = []){
        $args = array_merge(self::$defaults, $args);

        $output = [
            'swagger' => self::SWAGGER_VERSION,
            'info' => $this->buildInfo($args),
            'paths' => []
        ];

        $operations = $this->parser->getOperations();

        foreach($operations as $path => $methods){
            if(!isset($output['paths'][$path]))
                $output['paths'][$path] = [];

            foreach($methods as $method => $operation){
                if(!isset($output['paths'][$path][$method]))
                    $output['paths'][$path][$method] = [];

                $output['paths'][$path][$method] = $this->buildOperation($operation);
            }
        }

        $output['definitions'] = $this->parser->getDefinitions();

        return $output;
    }

    private function buildInfo(array $args){

        static $keys = [
            'title',
            'description',
            'version'
        ];

        $info = [];

        foreach($args as $key => $value){
            if(false !== array_search($key, $keys)){
                $info[$key] = $value;
            } else {
                $info[self::VENDOR_EXTENSION_PREFIX . $key] = $value;
            }
        }

        return $info;
    }

    private function buildOperation(Operation $operation){

        static $allowed_keys = [
            'description'
        ];

        $output = [
            'x-class' => $operation->class,
            'x-function' => $operation->function,
            'responses' => [
                'default' => [
                    'description' => 'The default response'
                ]
            ]
        ];

        if(isset($operation->response)){
            $output['responses']['default'] = $operation->response;
        }

        foreach($operation as $key => $value){
            if(isset($operation->$key) && in_array($key, $allowed_keys))
                $output[$key] = $value;
        }

        foreach($operation->params as $in => $params){

            if(!isset($output['parameters']))
                $output['parameters'] = [];

            if($in === Parameter::IN_BODY){
                $output['parameters'][] = $this->buildBodyParameter($params);
            }
            else {
                foreach($params as $param){
                    $output['parameters'][] = $this->buildNonBodyParameter($param);
                }
            }
        }

        return $output;

    }

    /**
     * @param Parameter[] $parameters
     * @return array
     */
    private function buildBodyParameter(array $parameters){

        $schema = [
            'type' => 'object'
        ];

        foreach($parameters as $parameter){
            $built = $this->buildNonBodyParameter($parameter);
            if(isset($built['required']) && $built['required']) {
                if(!isset($schema['required']))
                    $schema['required'] = [];

                $schema['required'][] = $parameter->name;
            }

            unset($built['name'], $built['in'], $built['required']);

            if(!isset($schema['properties']))
                $schema['properties'] = [];

            $schema['properties'][$parameter->name] = $built;
        }

        return [
            'name' => 'body',
            'in' => 'body',
            'schema' => $schema
        ];

    }

    private function buildNonBodyParameter(Parameter $parameter){

        static $allowed_keys = [
            'name', 'in', 'required', 'type', 'pattern'
        ];

        $output = [];
        foreach($parameter as $key => $value){
            if(in_array($key, $allowed_keys)){
                $output[$key] = $value;
            }
            else if($key[0] !== '_'){
                $output[self::VENDOR_EXTENSION_PREFIX . $key] = $value;
            }
        }

        if($output['type'] === 'array' && !isset($output['items'])){
            $output['items'] = [
                'type' => 'string'
            ];
        }


        return $output;

    }

}