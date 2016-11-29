<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class JsonReference extends BaseSchema
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
    protected static $properties = ['$ref' => []];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];
    
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

}