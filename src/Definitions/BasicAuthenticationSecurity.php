<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class BasicAuthenticationSecurity extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'basic'];
    
    /**
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['type' => ['basic']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['type' => [], 'description' => []];
    
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