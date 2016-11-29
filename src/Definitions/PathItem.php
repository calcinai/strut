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
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = [];
    
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
        $this->set('$ref', $ref);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->get('$ref');
    }
    
    /**
     * @param Operation $get
     * @return $this
     */
    public function setGet(Operation $get)
    {
        $this->set('get', $get);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getGet()
    {
        return $this->get('get');
    }
    
    /**
     * @param Operation $put
     * @return $this
     */
    public function setPut(Operation $put)
    {
        $this->set('put', $put);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPut()
    {
        return $this->get('put');
    }
    
    /**
     * @param Operation $post
     * @return $this
     */
    public function setPost(Operation $post)
    {
        $this->set('post', $post);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPost()
    {
        return $this->get('post');
    }
    
    /**
     * @param Operation $delete
     * @return $this
     */
    public function setDelete(Operation $delete)
    {
        $this->set('delete', $delete);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getDelete()
    {
        return $this->get('delete');
    }
    
    /**
     * @param Operation $options
     * @return $this
     */
    public function setOptions(Operation $options)
    {
        $this->set('options', $options);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getOptions()
    {
        return $this->get('options');
    }
    
    /**
     * @param Operation $head
     * @return $this
     */
    public function setHead(Operation $head)
    {
        $this->set('head', $head);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getHead()
    {
        return $this->get('head');
    }
    
    /**
     * @param Operation $patch
     * @return $this
     */
    public function setPatch(Operation $patch)
    {
        $this->set('patch', $patch);
        return $this;
    }
    
    /**
     * @return Operation
     */
    public function getPatch()
    {
        return $this->get('patch');
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->add('parameters', $parameters);
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference[]
     */
    public function getParameters()
    {
        return $this->get('parameters');
    }

}