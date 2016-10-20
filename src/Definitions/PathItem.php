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
        $this->setInternalData('$ref', $ref);
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
        $this->setInternalData('get', $get);
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
        $this->setInternalData('put', $put);
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
        $this->setInternalData('post', $post);
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
        $this->setInternalData('delete', $delete);
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
        $this->setInternalData('options', $options);
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
        $this->setInternalData('head', $head);
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
        $this->setInternalData('patch', $patch);
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
        $this->addInternalData('parameters', $parameters);
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