<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Xml extends BaseSchema
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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setInternalData('name', $name);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->setInternalData('namespace', $namespace);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->data['namespace'];
    }
    
    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->setInternalData('prefix', $prefix);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->data['prefix'];
    }
    
    /**
     * @param bool $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->setInternalData('attribute', $attribute);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getAttribute()
    {
        return $this->data['attribute'];
    }
    
    /**
     * @param bool $wrapped
     * @return $this
     */
    public function setWrapped($wrapped)
    {
        $this->setInternalData('wrapped', $wrapped);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getWrapped()
    {
        return $this->data['wrapped'];
    }

}