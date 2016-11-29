<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class ApiKeySecurity extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'apiKey'];
    
    /**
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['type' => ['apiKey'], 'in' => ['header', 'query']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['type' => [], 'name' => [], 'in' => [], 'description' => []];
    
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->set('type', $type);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->get('type');
    }
    
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
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->set('in', $in);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getIn()
    {
        return $this->get('in');
    }
    
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description');
    }

}