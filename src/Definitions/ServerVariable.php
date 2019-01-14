<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * An object representing a Server Variable for server URL template substitution.
 */

class ServerVariable extends BaseSchema
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
    protected static $properties = ['enum' => ['string'], 'default' => ['string'], 'description' => ['string']];
    
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
     * @param string $enum
     * @return $this
     * @throws \Exception
     */
    public function addEnum($enum)
    {
        $this->add('enum', $enum);
        return $this;
    }
    
    /**
     * @return string[]
     */
    public function getEnum()
    {
        return $this->get('enum');
    }
    
    /**
     * @param string $default
     * @return $this
     * @throws \Exception
     */
    public function setDefault($default)
    {
        $this->set('default', $default);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->get('default');
    }
    
    /**
     * @param string $description
     * @return $this
     * @throws \Exception
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