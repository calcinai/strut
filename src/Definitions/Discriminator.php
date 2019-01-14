<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * When request bodies or response payloads may be one of a number of different schemas, a `discriminator` object can be used to aid in serialization, deserialization, and validation.  The discriminator is a specific object in a schema which is used to inform the consumer of the specification of an alternative schema based on the value associated with it.  When using the discriminator, _inline_ schemas will not be considered.
 */

class Discriminator extends BaseSchema
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
    protected static $properties = ['propertyName' => ['string'], 'mapping' => ['Definitions\\Strings']];
    
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
     * @param string $propertyName
     * @return $this
     * @throws \Exception
     */
    public function setPropertyName($propertyName)
    {
        $this->set('propertyName', $propertyName);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->get('propertyName');
    }
    
    /**
     * @param Strings $mapping
     * @return $this
     * @throws \Exception
     */
    public function setMapping(Strings $mapping)
    {
        $this->set('mapping', $mapping);
        return $this;
    }
    
    /**
     * @return Strings
     */
    public function getMapping()
    {
        return $this->get('mapping');
    }

}