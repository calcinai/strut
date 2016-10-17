<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
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
        $this->setInternalData('$ref', $ref);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->data['$ref'];
    }
    
    /**
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->setInternalData('format', $format);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->data['format'];
    }
    
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->setInternalData('title', $title);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->data['title'];
    }
    
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * @param mixed $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->setInternalData('default', $default);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->data['default'];
    }
    
    /**
     * @param int $multipleOf
     * @return $this
     */
    public function setMultipleOf($multipleOf)
    {
        $this->setInternalData('multipleOf', $multipleOf);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMultipleOf()
    {
        return $this->data['multipleOf'];
    }
    
    /**
     * @param int $maximum
     * @return $this
     */
    public function setMaximum($maximum)
    {
        $this->setInternalData('maximum', $maximum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->data['maximum'];
    }
    
    /**
     * @param bool $exclusiveMaximum
     * @return $this
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->setInternalData('exclusiveMaximum', $exclusiveMaximum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMaximum()
    {
        return $this->data['exclusiveMaximum'];
    }
    
    /**
     * @param int $minimum
     * @return $this
     */
    public function setMinimum($minimum)
    {
        $this->setInternalData('minimum', $minimum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->data['minimum'];
    }
    
    /**
     * @param bool $exclusiveMinimum
     * @return $this
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->setInternalData('exclusiveMinimum', $exclusiveMinimum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMinimum()
    {
        return $this->data['exclusiveMinimum'];
    }
    
    /**
     * @param int $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->setInternalData('maxLength', $maxLength);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->data['maxLength'];
    }
    
    /**
     * @param mixed $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->setInternalData('minLength', $minLength);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinLength()
    {
        return $this->data['minLength'];
    }
    
    /**
     * @param string $pattern
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->setInternalData('pattern', $pattern);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->data['pattern'];
    }
    
    /**
     * @param int $maxItems
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->setInternalData('maxItems', $maxItems);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->data['maxItems'];
    }
    
    /**
     * @param mixed $minItems
     * @return $this
     */
    public function setMinItems($minItems)
    {
        $this->setInternalData('minItems', $minItems);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinItems()
    {
        return $this->data['minItems'];
    }
    
    /**
     * @param bool $uniqueItems
     * @return $this
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->setInternalData('uniqueItems', $uniqueItems);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getUniqueItems()
    {
        return $this->data['uniqueItems'];
    }
    
    /**
     * @param int $maxProperties
     * @return $this
     */
    public function setMaxProperties($maxProperties)
    {
        $this->setInternalData('maxProperties', $maxProperties);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxProperties()
    {
        return $this->data['maxProperties'];
    }
    
    /**
     * @param mixed $minProperties
     * @return $this
     */
    public function setMinProperties($minProperties)
    {
        $this->setInternalData('minProperties', $minProperties);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinProperties()
    {
        return $this->data['minProperties'];
    }
    
    /**
     * @param string $required
     * @return $this
     */
    public function addRequired($required)
    {
        $this->addInternalData('required', $required);
        return $this;
    }
    
    /**
     * @return string[]
     */
    public function getRequired()
    {
        return $this->data['required'];
    }
    
    /**
     * @param mixed $enum
     * @return $this
     */
    public function addEnum($enum)
    {
        $this->addInternalData('enum', $enum);
        return $this;
    }
    
    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->data['enum'];
    }
    
    /**
     * @param Definitions\Schema|
     *        bool $additionalProperties
     * @return $this
     */
    public function setAdditionalProperties(\Calcinai\Strut\Definitions\Schema $additionalProperties)
    {
        $this->setInternalData('additionalProperties', $additionalProperties);
        return $this;
    }
    
    /**
     * @return Definitions\Schema|
     *         bool
     */
    public function getAdditionalProperties()
    {
        return $this->data['additionalProperties'];
    }
    
    /**
     * @param mixed|
     *        mixed $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setInternalData('type', $type);
        return $this;
    }
    
    /**
     * @return mixed|
     *         mixed
     */
    public function getType()
    {
        return $this->data['type'];
    }
    
    /**
     * @param Definitions\Schema|
     *        Definitions\Schema $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->setInternalData('items', $items);
        return $this;
    }
    
    /**
     * @return Definitions\Schema|
     *         Definitions\Schema
     */
    public function getItems()
    {
        return $this->data['items'];
    }
    
    /**
     * @param Definitions\Schema $allOf
     * @return $this
     */
    public function addAllOf(\Calcinai\Strut\Definitions\Schema $allOf)
    {
        $this->addInternalData('allOf', $allOf);
        return $this;
    }
    
    /**
     * @return Definitions\Schema[]
     */
    public function getAllOf()
    {
        return $this->data['allOf'];
    }
    
    /**
     * @param Definitions\Schema\Properties\Properties $properties
     * @return $this
     */
    public function setProperties(\Calcinai\Strut\Definitions\Schema\Properties\Properties $properties)
    {
        $this->setInternalData('properties', $properties);
        return $this;
    }
    
    /**
     * @return Definitions\Schema\Properties\Properties
     */
    public function getProperties()
    {
        return $this->data['properties'];
    }
    
    /**
     * @param string $discriminator
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        $this->setInternalData('discriminator', $discriminator);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->data['discriminator'];
    }
    
    /**
     * @param bool $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->setInternalData('readOnly', $readOnly);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->data['readOnly'];
    }
    
    /**
     * @param Definitions\Xml $xml
     * @return $this
     */
    public function setXml(\Calcinai\Strut\Definitions\Xml $xml)
    {
        $this->setInternalData('xml', $xml);
        return $this;
    }
    
    /**
     * @return Definitions\Xml
     */
    public function getXml()
    {
        return $this->data['xml'];
    }
    
    /**
     * information about external documentation
     * @param \Definitions\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(\Calcinai\Strut\Definitions\ExternalDocs $externalDocs)
    {
        $this->setInternalData('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * information about external documentation
     * @return Definitions\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->data['externalDocs'];
    }
    
    /**
     * @param mixed $example
     * @return $this
     */
    public function setExample($example)
    {
        $this->setInternalData('example', $example);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->data['example'];
    }

}