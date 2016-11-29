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
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = [];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['name' => [], 'namespace' => [], 'prefix' => [], 'attribute' => [], 'wrapped' => []];
    
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
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->set('namespace', $namespace);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->get('namespace');
    }
    
    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->set('prefix', $prefix);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->get('prefix');
    }
    
    /**
     * @param bool $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->set('attribute', $attribute);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getAttribute()
    {
        return $this->get('attribute');
    }
    
    /**
     * @param bool $wrapped
     * @return $this
     */
    public function setWrapped($wrapped)
    {
        $this->set('wrapped', $wrapped);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getWrapped()
    {
        return $this->get('wrapped');
    }

}