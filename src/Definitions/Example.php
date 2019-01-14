<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Example extends BaseSchema
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
    protected static $properties = ['summary' => ['string'], 'description' => ['string'], 'value' => ['mixed'], 'externalValue' => ['string']];
    
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
     * @param string $summary
     * @return $this
     * @throws \Exception
     */
    public function setSummary($summary)
    {
        $this->set('summary', $summary);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->get('summary');
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
    
    /**
     * @param mixed $value
     * @return $this
     * @throws \Exception
     */
    public function setValue($value)
    {
        $this->set('value', $value);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->get('value');
    }
    
    /**
     * @param string $externalValue
     * @return $this
     * @throws \Exception
     */
    public function setExternalValue($externalValue)
    {
        $this->set('externalValue', $externalValue);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getExternalValue()
    {
        return $this->get('externalValue');
    }

}