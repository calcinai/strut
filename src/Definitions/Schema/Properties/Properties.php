<?php

namespace Calcinai\Strut\Definitions\Schema\Properties;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Properties extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
    /**
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->data['$ref'] = $ref;
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
        $this->data['format'] = $format;
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
        $this->data['title'] = $title;
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
    
    /**
     * @param  $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->data['default'] = $default;
        return $this;
    }
    
    /**
     * @return 
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
        $this->data['multipleOf'] = $multipleOf;
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
        $this->data['maximum'] = $maximum;
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
        $this->data['exclusiveMaximum'] = $exclusiveMaximum;
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
        $this->data['minimum'] = $minimum;
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
        $this->data['exclusiveMinimum'] = $exclusiveMinimum;
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
        $this->data['maxLength'] = $maxLength;
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
     * @param int $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->data['minLength'] = $minLength;
        return $this;
    }
    
    /**
     * @return int
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
        $this->data['pattern'] = $pattern;
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
        $this->data['maxItems'] = $maxItems;
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
     * @param int $minItems
     * @return $this
     */
    public function setMinItems($minItems)
    {
        $this->data['minItems'] = $minItems;
        return $this;
    }
    
    /**
     * @return int
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
        $this->data['uniqueItems'] = $uniqueItems;
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
        $this->data['maxProperties'] = $maxProperties;
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
     * @param int $minProperties
     * @return $this
     */
    public function setMinProperties($minProperties)
    {
        $this->data['minProperties'] = $minProperties;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMinProperties()
    {
        return $this->data['minProperties'];
    }
    
    /**
     * @param  $required
     * @return $this
     */
    public function addRequired($required)
    {
        $this->data['required'][] =& $required;
        return $this;
    }
    
    /**
     * @return []
     */
    public function getRequired()
    {
        return $this->data['required'];
    }
    
    /**
     * @param  $enum
     * @return $this
     */
    public function addEnum($enum)
    {
        $this->data['enum'][] =& $enum;
        return $this;
    }
    
    /**
     * @return []
     */
    public function getEnum()
    {
        return $this->data['enum'];
    }
    
    /**
     * @param Definitions\Schema $additionalProperties
     * @return $this
     */
    public function setAdditionalProperties(Definitions\Schema $additionalProperties)
    {
        $this->data['additionalProperties'] = $additionalProperties;
        return $this;
    }
    
    /**
     * @return Definitions\Schema
     */
    public function getAdditionalProperties()
    {
        return $this->data['additionalProperties'];
    }
    
    /**
     * @param  $type
     * @return $this
     */
    public function setType($type)
    {
        $this->data['type'] = $type;
        return $this;
    }
    
    /**
     * @return 
     */
    public function getType()
    {
        return $this->data['type'];
    }
    
    /**
     * @param Definitions\Schema $items
     * @return $this
     */
    public function setItems(Definitions\Schema $items)
    {
        $this->data['items'] = $items;
        return $this;
    }
    
    /**
     * @return Definitions\Schema
     */
    public function getItems()
    {
        return $this->data['items'];
    }
    
    /**
     * @param  $allOf
     * @return $this
     */
    public function addAllOf($allOf)
    {
        $this->data['allOf'][] =& $allOf;
        return $this;
    }
    
    /**
     * @return []
     */
    public function getAllOf()
    {
        return $this->data['allOf'];
    }
    
    /**
     * @param Definitions\Schema\Properties\Properties $properties
     * @return $this
     */
    public function setProperties(Definitions\Schema\Properties\Properties $properties)
    {
        $this->data['properties'] = $properties;
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
        $this->data['discriminator'] = $discriminator;
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
        $this->data['readOnly'] = $readOnly;
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
    public function setXml(Definitions\Xml $xml)
    {
        $this->data['xml'] = $xml;
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
     * @param Definitions\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(Definitions\ExternalDocs $externalDocs)
    {
        $this->data['externalDocs'] = $externalDocs;
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
     * @param  $example
     * @return $this
     */
    public function setExample($example)
    {
        $this->data['example'] = $example;
        return $this;
    }
    
    /**
     * @return 
     */
    public function getExample()
    {
        return $this->data['example'];
    }
}