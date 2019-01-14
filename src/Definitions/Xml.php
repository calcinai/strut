<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * A metadata object that allows for more fine-tuned XML model definitions.  When using arrays, XML element names are *not* inferred (for singular/plural forms) and the `name` property SHOULD be used to add that information. See examples for expected behavior.
 */

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
    protected static $properties = ['name' => ['string'], 'namespace' => ['string'], 'prefix' => ['string'], 'attribute' => ['boolean'], 'wrapped' => ['boolean']];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => ['null', 'integer', 'boolean', 'string', 'object', 'array']];
    
    /**
     * @param string $name
     * @return $this
     * @throws \Exception
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
     * @throws \Exception
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
     * @throws \Exception
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
     * @param boolean $attribute
     * @return $this
     * @throws \Exception
     */
    public function setAttribute($attribute)
    {
        $this->set('attribute', $attribute);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getAttribute()
    {
        return $this->get('attribute');
    }
    
    /**
     * @param boolean $wrapped
     * @return $this
     * @throws \Exception
     */
    public function setWrapped($wrapped)
    {
        $this->set('wrapped', $wrapped);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getWrapped()
    {
        return $this->get('wrapped');
    }

}