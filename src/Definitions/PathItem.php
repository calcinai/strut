<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class PathItem extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['$ref' => [], 'get' => ['Definitions\\Operation'], 'put' => ['Definitions\\Operation'], 'post' => ['Definitions\\Operation'], 'delete' => ['Definitions\\Operation'], 'options' => ['Definitions\\Operation'], 'head' => ['Definitions\\Operation'], 'patch' => ['Definitions\\Operation'], 'parameters' => ['Definitions\\BodyParameter', 'Definitions\\HeaderParameterSubSchema', 'Definitions\\FormDataParameterSubSchema', 'Definitions\\QueryParameterSubSchema', 'Definitions\\PathParameterSubSchema', 'Definitions\\JsonReference']];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->data['$ref'] = $ref;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->data['$ref'];
    }
    
    /**
     * @param Operation $get
     * @return $this
     */
    public function setGet(Operation $get)
    {
        $this->data['get'] = $get;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getGet()
    {
        return $this->data['get'];
    }
    
    /**
     * @param Operation $put
     * @return $this
     */
    public function setPut(Operation $put)
    {
        $this->data['put'] = $put;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPut()
    {
        return $this->data['put'];
    }
    
    /**
     * @param Operation $post
     * @return $this
     */
    public function setPost(Operation $post)
    {
        $this->data['post'] = $post;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPost()
    {
        return $this->data['post'];
    }
    
    /**
     * @param Operation $delete
     * @return $this
     */
    public function setDelete(Operation $delete)
    {
        $this->data['delete'] = $delete;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getDelete()
    {
        return $this->data['delete'];
    }
    
    /**
     * @param Operation $options
     * @return $this
     */
    public function setOptions(Operation $options)
    {
        $this->data['options'] = $options;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getOptions()
    {
        return $this->data['options'];
    }
    
    /**
     * @param Operation $head
     * @return $this
     */
    public function setHead(Operation $head)
    {
        $this->data['head'] = $head;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getHead()
    {
        return $this->data['head'];
    }
    
    /**
     * @param Operation $patch
     * @return $this
     */
    public function setPatch(Operation $patch)
    {
        $this->data['patch'] = $patch;
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPatch()
    {
        return $this->data['patch'];
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->data['parameters'][] =& $parameters;
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference[]
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }

}