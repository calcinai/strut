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
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => ['mixed']];
    
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->data['type'] = $type;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->data['type'];
    }
    
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->data['description'] = $description;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
}