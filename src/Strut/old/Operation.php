<?php


namespace Wave\SDK\SchemaGenerator;


class Operation extends Definition {

    const METHOD_HEAD = 'head';
    const METHOD_GET  = 'get';
    const METHOD_POST = 'post';
    const METHOD_PUT = 'put';
    const METHOD_PATCH = 'patch';
    const METHOD_DELETE = 'delete';

    public $path;
    public $method = self::METHOD_GET;
    public $description;
    public $params = array();
    public $response;

    public function __construct($data = null){

        if(is_array($data) || is_object($data)){
            foreach($data as $key => $value){
                if($key === 'params' && is_array($value)){
                    $this->mergeParameters($value);
                }
                else
                    $this->$key = $value;
            }
        }

    }

    public function addParameter(Parameter $param){

        if(!isset($this->params[$param->in]))
            $this->params[$param->in] = [];

        if($param->in === Parameter::IN_PATH){
            /** @var Parameter[] $params */
            foreach($this->params as $in => $params){
                if(isset($params[$param->name])){
                    $param = $params[$param->name]->merge($param);
                    unset($this->params[$in][$param->name]);
                }
                if(empty($this->params[$in]))
                    unset($this->params[$in]);
            }
        }

        $this->params[$param->in][$param->name] = $param;
    }

    public function mergeParameters(array $parameters){
        foreach($parameters as $parameter){
            $this->addParameter($parameter);
        }
    }

    public function resolveParameterPlacement(){

        if(isset($this->params[Parameter::IN_GUESS])){
            foreach($this->params[Parameter::IN_GUESS] as $i => $param){
                $in = $this->method;
                if(isset($param->_in) && $param->_in !== Parameter::IN_GUESS){
                    $in = $param->_in;
                    unset($param->_in);
                }

                $param->in = $in;
                $this->addParameter($param);
                unset($this->params[Parameter::IN_GUESS][$i]);
            }

            if(empty($this->params[Parameter::IN_GUESS]))
                unset($this->params[Parameter::IN_GUESS]);
        }

    }

    public function addResponse($response) {
        if(!isset($this->response)){
            $this->response = $response;
        } else {
            $this->response = array_replace_recursive($this->response, $response);
        }

    }

}