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
     * @param Definitions\Operation $get
     * @return $this
     */
    public function setGet(\Calcinai\Strut\Definitions\Operation $get)
    {
        $this->setInternalData('get', $get);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getGet()
    {
        return $this->data['get'];
    }
    
    /**
     * @param Definitions\Operation $put
     * @return $this
     */
    public function setPut(\Calcinai\Strut\Definitions\Operation $put)
    {
        $this->setInternalData('put', $put);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getPut()
    {
        return $this->data['put'];
    }
    
    /**
     * @param Definitions\Operation $post
     * @return $this
     */
    public function setPost(\Calcinai\Strut\Definitions\Operation $post)
    {
        $this->setInternalData('post', $post);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getPost()
    {
        return $this->data['post'];
    }
    
    /**
     * @param Definitions\Operation $delete
     * @return $this
     */
    public function setDelete(\Calcinai\Strut\Definitions\Operation $delete)
    {
        $this->setInternalData('delete', $delete);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getDelete()
    {
        return $this->data['delete'];
    }
    
    /**
     * @param Definitions\Operation $options
     * @return $this
     */
    public function setOptions(\Calcinai\Strut\Definitions\Operation $options)
    {
        $this->setInternalData('options', $options);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getOptions()
    {
        return $this->data['options'];
    }
    
    /**
     * @param Definitions\Operation $head
     * @return $this
     */
    public function setHead(\Calcinai\Strut\Definitions\Operation $head)
    {
        $this->setInternalData('head', $head);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getHead()
    {
        return $this->data['head'];
    }
    
    /**
     * @param Definitions\Operation $patch
     * @return $this
     */
    public function setPatch(\Calcinai\Strut\Definitions\Operation $patch)
    {
        $this->setInternalData('patch', $patch);
        return $this;
    }
    
    /**
     * @return Definitions\Operation
     */
    public function getPatch()
    {
        return $this->data['patch'];
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param Definitions\BodyParameter|
     *        Definitions\HeaderParameterSubSchema|
     *        Definitions\FormDataParameterSubSchema|
     *        Definitions\QueryParameterSubSchema|
     *        Definitions\PathParameterSubSchema|
     *        Definitions\BodyParameter|
     *        Definitions\HeaderParameterSubSchema|
     *        Definitions\FormDataParameterSubSchema|
     *        Definitions\QueryParameterSubSchema|
     *        Definitions\PathParameterSubSchema|
     *        Definitions\JsonReference $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->addInternalData('parameters', $parameters);
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return Definitions\BodyParameter|
     *         Definitions\HeaderParameterSubSchema|
     *         Definitions\FormDataParameterSubSchema|
     *         Definitions\QueryParameterSubSchema|
     *         Definitions\PathParameterSubSchema|
     *         Definitions\BodyParameter|
     *         Definitions\HeaderParameterSubSchema|
     *         Definitions\FormDataParameterSubSchema|
     *         Definitions\QueryParameterSubSchema|
     *         Definitions\PathParameterSubSchema|
     *         Definitions\JsonReference[]
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }

}