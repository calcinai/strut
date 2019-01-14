<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions\Schema\Properties\Properties;
/**
 * The Schema Object allows the definition of input and output data types. These types can be objects, but also primitives and arrays. This object is an extended subset of the JSON Schema Specification Wright Draft 00.  For more information about the properties, see JSON Schema Core and JSON Schema Validation. Unless stated otherwise, the property definitions follow the JSON Schema.
 */

class Schema extends BaseSchema
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
    protected static $properties = ['nullable' => ['boolean'], 'discriminator' => ['Definitions\\Discriminator'], 'readOnly' => ['boolean'], 'writeOnly' => ['boolean'], 'xml' => ['Definitions\\Xml'], 'externalDocs' => ['Definitions\\ExternalDocs'], 'example' => ['mixed'], 'deprecated' => ['boolean'], 'title' => ['string'], 'multipleOf' => ['integer'], 'maximum' => ['integer'], 'exclusiveMaximum' => ['boolean'], 'minimum' => ['integer'], 'exclusiveMinimum' => ['boolean'], 'maxLength' => ['integer'], 'minLength' => ['mixed'], 'pattern' => ['string'], 'maxItems' => ['integer'], 'minItems' => ['mixed'], 'uniqueItems' => ['boolean'], 'maxProperties' => ['integer'], 'minProperties' => ['mixed'], 'required' => ['string'], 'enum' => ['array'], 'type' => ['string'], 'allOf' => ['Definitions\\Schema', 'Definitions\\Reference'], 'oneOf' => ['Definitions\\Schema', 'Definitions\\Reference'], 'anyOf' => ['Definitions\\Schema', 'Definitions\\Reference'], 'not' => ['Definitions\\Schema'], 'items' => ['Definitions\\Schema', 'Definitions\\Reference'], 'properties' => ['Definitions\\Schema\\Properties\\Properties'], 'additionalProperties' => ['Definitions\\Schema', 'Definitions\\Reference', 'boolean'], 'default' => ['null', 'array', 'object', 'integer', 'boolean', 'string'], 'description' => ['string'], 'format' => ['string']];
    
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
     * @param boolean $nullable
     * @return $this
     * @throws \Exception
     */
    public function setNullable($nullable)
    {
        $this->set('nullable', $nullable);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getNullable()
    {
        return $this->get('nullable');
    }
    
    /**
     * When request bodies or response payloads may be one of a number of different schemas, a `discriminator` object can be used to aid in serialization, deserialization, and validation.  The discriminator is a specific object in a schema which is used to inform the consumer of the specification of an alternative schema based on the value associated with it.  When using the discriminator, _inline_ schemas will not be considered.
     * @param Discriminator $discriminator
     * @return $this
     * @throws \Exception
     */
    public function setDiscriminator(Discriminator $discriminator)
    {
        $this->set('discriminator', $discriminator);
        return $this;
    }
    
    /**
     * When request bodies or response payloads may be one of a number of different schemas, a `discriminator` object can be used to aid in serialization, deserialization, and validation.  The discriminator is a specific object in a schema which is used to inform the consumer of the specification of an alternative schema based on the value associated with it.  When using the discriminator, _inline_ schemas will not be considered.
     * @return Discriminator
     */
    public function getDiscriminator()
    {
        return $this->get('discriminator');
    }
    
    /**
     * @param boolean $readOnly
     * @return $this
     * @throws \Exception
     */
    public function setReadOnly($readOnly)
    {
        $this->set('readOnly', $readOnly);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->get('readOnly');
    }
    
    /**
     * @param boolean $writeOnly
     * @return $this
     * @throws \Exception
     */
    public function setWriteOnly($writeOnly)
    {
        $this->set('writeOnly', $writeOnly);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getWriteOnly()
    {
        return $this->get('writeOnly');
    }
    
    /**
     * A metadata object that allows for more fine-tuned XML model definitions.  When using arrays, XML element names are *not* inferred (for singular/plural forms) and the `name` property SHOULD be used to add that information. See examples for expected behavior.
     * @param Xml $xml
     * @return $this
     * @throws \Exception
     */
    public function setXml(Xml $xml)
    {
        $this->set('xml', $xml);
        return $this;
    }
    
    /**
     * A metadata object that allows for more fine-tuned XML model definitions.  When using arrays, XML element names are *not* inferred (for singular/plural forms) and the `name` property SHOULD be used to add that information. See examples for expected behavior.
     * @return Xml
     */
    public function getXml()
    {
        return $this->get('xml');
    }
    
    /**
     * Allows referencing an external resource for extended documentation.
     * @param ExternalDocs $externalDocs
     * @return $this
     * @throws \Exception
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * Allows referencing an external resource for extended documentation.
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
    }
    
    /**
     * @param mixed $example
     * @return $this
     * @throws \Exception
     */
    public function setExample($example)
    {
        $this->set('example', $example);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->get('example');
    }
    
    /**
     * @param boolean $deprecated
     * @return $this
     * @throws \Exception
     */
    public function setDeprecated($deprecated)
    {
        $this->set('deprecated', $deprecated);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getDeprecated()
    {
        return $this->get('deprecated');
    }
    
    /**
     * @param string $title
     * @return $this
     * @throws \Exception
     */
    public function setTitle($title)
    {
        $this->set('title', $title);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
    }
    
    /**
     * @param integer $multipleOf
     * @return $this
     * @throws \Exception
     */
    public function setMultipleOf($multipleOf)
    {
        $this->set('multipleOf', $multipleOf);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMultipleOf()
    {
        return $this->get('multipleOf');
    }
    
    /**
     * @param integer $maximum
     * @return $this
     * @throws \Exception
     */
    public function setMaximum($maximum)
    {
        $this->set('maximum', $maximum);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMaximum()
    {
        return $this->get('maximum');
    }
    
    /**
     * @param boolean $exclusiveMaximum
     * @return $this
     * @throws \Exception
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->set('exclusiveMaximum', $exclusiveMaximum);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getExclusiveMaximum()
    {
        return $this->get('exclusiveMaximum');
    }
    
    /**
     * @param integer $minimum
     * @return $this
     * @throws \Exception
     */
    public function setMinimum($minimum)
    {
        $this->set('minimum', $minimum);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMinimum()
    {
        return $this->get('minimum');
    }
    
    /**
     * @param boolean $exclusiveMinimum
     * @return $this
     * @throws \Exception
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->set('exclusiveMinimum', $exclusiveMinimum);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getExclusiveMinimum()
    {
        return $this->get('exclusiveMinimum');
    }
    
    /**
     * @param integer $maxLength
     * @return $this
     * @throws \Exception
     */
    public function setMaxLength($maxLength)
    {
        $this->set('maxLength', $maxLength);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMaxLength()
    {
        return $this->get('maxLength');
    }
    
    /**
     * @param mixed $minLength
     * @return $this
     * @throws \Exception
     */
    public function setMinLength($minLength)
    {
        $this->set('minLength', $minLength);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinLength()
    {
        return $this->get('minLength');
    }
    
    /**
     * @param string $pattern
     * @return $this
     * @throws \Exception
     */
    public function setPattern($pattern)
    {
        $this->set('pattern', $pattern);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->get('pattern');
    }
    
    /**
     * @param integer $maxItems
     * @return $this
     * @throws \Exception
     */
    public function setMaxItems($maxItems)
    {
        $this->set('maxItems', $maxItems);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMaxItems()
    {
        return $this->get('maxItems');
    }
    
    /**
     * @param mixed $minItems
     * @return $this
     * @throws \Exception
     */
    public function setMinItems($minItems)
    {
        $this->set('minItems', $minItems);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinItems()
    {
        return $this->get('minItems');
    }
    
    /**
     * @param boolean $uniqueItems
     * @return $this
     * @throws \Exception
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->set('uniqueItems', $uniqueItems);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getUniqueItems()
    {
        return $this->get('uniqueItems');
    }
    
    /**
     * @param integer $maxProperties
     * @return $this
     * @throws \Exception
     */
    public function setMaxProperties($maxProperties)
    {
        $this->set('maxProperties', $maxProperties);
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getMaxProperties()
    {
        return $this->get('maxProperties');
    }
    
    /**
     * @param mixed $minProperties
     * @return $this
     * @throws \Exception
     */
    public function setMinProperties($minProperties)
    {
        $this->set('minProperties', $minProperties);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinProperties()
    {
        return $this->get('minProperties');
    }
    
    /**
     * @param string $required
     * @return $this
     * @throws \Exception
     */
    public function addRequired($required)
    {
        $this->add('required', $required);
        return $this;
    }
    
    /**
     * @return string[]
     */
    public function getRequired()
    {
        return $this->get('required');
    }
    
    /**
     * @param array $enum
     * @return $this
     * @throws \Exception
     */
    public function addEnum($enum)
    {
        $this->add('enum', $enum);
        return $this;
    }
    
    /**
     * @return array[]
     */
    public function getEnum()
    {
        return $this->get('enum');
    }
    
    /**
     * @param string $type
     * @return $this
     * @throws \Exception
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
     * @param Schema|Reference $allOf
     * @return $this
     * @throws \Exception
     */
    public function addAllOf($allOf)
    {
        $this->add('allOf', $allOf);
        return $this;
    }
    
    /**
     * @return Schema|Reference[]
     */
    public function getAllOf()
    {
        return $this->get('allOf');
    }
    
    /**
     * @param Schema|Reference $oneOf
     * @return $this
     * @throws \Exception
     */
    public function addOneOf($oneOf)
    {
        $this->add('oneOf', $oneOf);
        return $this;
    }
    
    /**
     * @return Schema|Reference[]
     */
    public function getOneOf()
    {
        return $this->get('oneOf');
    }
    
    /**
     * @param Schema|Reference $anyOf
     * @return $this
     * @throws \Exception
     */
    public function addAnyOf($anyOf)
    {
        $this->add('anyOf', $anyOf);
        return $this;
    }
    
    /**
     * @return Schema|Reference[]
     */
    public function getAnyOf()
    {
        return $this->get('anyOf');
    }
    
    /**
     * The Schema Object allows the definition of input and output data types. These types can be objects, but also primitives and arrays. This object is an extended subset of the JSON Schema Specification Wright Draft 00.  For more information about the properties, see JSON Schema Core and JSON Schema Validation. Unless stated otherwise, the property definitions follow the JSON Schema.
     * @param Schema $not
     * @return $this
     * @throws \Exception
     */
    public function setNot(Schema $not)
    {
        $this->set('not', $not);
        return $this;
    }
    
    /**
     * The Schema Object allows the definition of input and output data types. These types can be objects, but also primitives and arrays. This object is an extended subset of the JSON Schema Specification Wright Draft 00.  For more information about the properties, see JSON Schema Core and JSON Schema Validation. Unless stated otherwise, the property definitions follow the JSON Schema.
     * @return Schema
     */
    public function getNot()
    {
        return $this->get('not');
    }
    
    /**
     * @param Schema|Reference $items
     * @return $this
     * @throws \Exception
     */
    public function setItems($items)
    {
        $this->set('items', $items);
        return $this;
    }
    
    /**
     * @return Schema|Reference
     */
    public function getItems()
    {
        return $this->get('items');
    }
    
    /**
     * @param Properties $properties
     * @return $this
     * @throws \Exception
     */
    public function setProperties(Properties $properties)
    {
        $this->set('properties', $properties);
        return $this;
    }
    
    /**
     * @return Properties
     */
    public function getProperties()
    {
        return $this->get('properties');
    }
    
    /**
     * @param Schema|Reference|boolean $additionalProperties
     * @return $this
     * @throws \Exception
     */
    public function setAdditionalProperties($additionalProperties)
    {
        $this->set('additionalProperties', $additionalProperties);
        return $this;
    }
    
    /**
     * @return Schema|Reference|boolean
     */
    public function getAdditionalProperties()
    {
        return $this->get('additionalProperties');
    }
    
    /**
     * @param null|array|object|integer|boolean|string $default
     * @return $this
     * @throws \Exception
     */
    public function setDefault($default)
    {
        $this->set('default', $default);
        return $this;
    }
    
    /**
     * @return null|array|object|integer|boolean|string
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
    
    /**
     * @param string $format
     * @return $this
     * @throws \Exception
     */
    public function setFormat($format)
    {
        $this->set('format', $format);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->get('format');
    }

}