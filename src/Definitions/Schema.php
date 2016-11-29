<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions\Schema\Properties\Properties;
/**
 * A deterministic version of a JSON Schema object.
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
    protected static $properties = ['$ref' => [], 'format' => [], 'title' => [], 'description' => [], 'default' => [], 'multipleOf' => [], 'maximum' => [], 'exclusiveMaximum' => [], 'minimum' => [], 'exclusiveMinimum' => [], 'maxLength' => [], 'minLength' => [], 'pattern' => [], 'maxItems' => [], 'minItems' => [], 'uniqueItems' => [], 'maxProperties' => [], 'minProperties' => [], 'required' => [], 'enum' => [], 'additionalProperties' => ['Definitions\\Schema'], 'type' => [], 'items' => ['Definitions\\Schema'], 'allOf' => ['Definitions\\Schema'], 'properties' => ['Definitions\\Schema\\Properties\\Properties'], 'discriminator' => [], 'readOnly' => [], 'xml' => ['Definitions\\Xml'], 'externalDocs' => ['Definitions\\ExternalDocs'], 'example' => []];
    
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
    
    /**
     * @param string $format
     * @return $this
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
    
    /**
     * @param string $title
     * @return $this
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
    
    /**
     * @param mixed $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->set('default', $default);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->get('default');
    }
    
    /**
     * @param int $multipleOf
     * @return $this
     */
    public function setMultipleOf($multipleOf)
    {
        $this->set('multipleOf', $multipleOf);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMultipleOf()
    {
        return $this->get('multipleOf');
    }
    
    /**
     * @param int $maximum
     * @return $this
     */
    public function setMaximum($maximum)
    {
        $this->set('maximum', $maximum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->get('maximum');
    }
    
    /**
     * @param bool $exclusiveMaximum
     * @return $this
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->set('exclusiveMaximum', $exclusiveMaximum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMaximum()
    {
        return $this->get('exclusiveMaximum');
    }
    
    /**
     * @param int $minimum
     * @return $this
     */
    public function setMinimum($minimum)
    {
        $this->set('minimum', $minimum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->get('minimum');
    }
    
    /**
     * @param bool $exclusiveMinimum
     * @return $this
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->set('exclusiveMinimum', $exclusiveMinimum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMinimum()
    {
        return $this->get('exclusiveMinimum');
    }
    
    /**
     * @param int $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->set('maxLength', $maxLength);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->get('maxLength');
    }
    
    /**
     * @param mixed $minLength
     * @return $this
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
     * @param int $maxItems
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->set('maxItems', $maxItems);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->get('maxItems');
    }
    
    /**
     * @param mixed $minItems
     * @return $this
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
     * @param bool $uniqueItems
     * @return $this
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->set('uniqueItems', $uniqueItems);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getUniqueItems()
    {
        return $this->get('uniqueItems');
    }
    
    /**
     * @param int $maxProperties
     * @return $this
     */
    public function setMaxProperties($maxProperties)
    {
        $this->set('maxProperties', $maxProperties);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxProperties()
    {
        return $this->get('maxProperties');
    }
    
    /**
     * @param mixed $minProperties
     * @return $this
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
     * @param mixed $enum
     * @return $this
     */
    public function addEnum($enum)
    {
        $this->add('enum', $enum);
        return $this;
    }
    
    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->get('enum');
    }
    
    /**
     * @param Schema|bool $additionalProperties
     * @return $this
     */
    public function setAdditionalProperties($additionalProperties)
    {
        $this->set('additionalProperties', $additionalProperties);
        return $this;
    }
    
    /**
     * @return Schema|bool
     */
    public function getAdditionalProperties()
    {
        return $this->get('additionalProperties');
    }
    
    /**
     * @param mixed $type
     * @return $this
     */
    public function setType($type)
    {
        $this->set('type', $type);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->get('type');
    }
    
    /**
     * @param Schema $items
     * @return $this
     */
    public function setItems(Schema $items)
    {
        $this->set('items', $items);
        return $this;
    }
    
    /**
     * @return Schema
     */
    public function getItems()
    {
        return $this->get('items');
    }
    
    /**
     * @param Schema $allOf
     * @return $this
     */
    public function addAllOf(Schema $allOf)
    {
        $this->add('allOf', $allOf);
        return $this;
    }
    
    /**
     * @return Schema[]
     */
    public function getAllOf()
    {
        return $this->get('allOf');
    }
    
    /**
     * @param Properties $properties
     * @return $this
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
     * @param string $discriminator
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        $this->set('discriminator', $discriminator);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->get('discriminator');
    }
    
    /**
     * @param bool $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->set('readOnly', $readOnly);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->get('readOnly');
    }
    
    /**
     * @param Xml $xml
     * @return $this
     */
    public function setXml(Xml $xml)
    {
        $this->set('xml', $xml);
        return $this;
    }
    
    /**
     * @return Xml
     */
    public function getXml()
    {
        return $this->get('xml');
    }
    
    /**
     * information about external documentation
     * @param ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * information about external documentation
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
    }
    
    /**
     * @param mixed $example
     * @return $this
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

}