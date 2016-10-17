<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class HeaderParameterSubSchema extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['in' => 'header', 'collectionFormat' => 'csv'];
    
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
     * Determines whether or not this parameter is required or optional.
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->setInternalData('required', $required);
        return $this;
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @return bool
     */
    public function getRequired()
    {
        return $this->data['required'];
    }
    
    /**
     * Determines the location of the parameter.
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->setInternalData('in', $in);
        return $this;
    }
    
    /**
     * Determines the location of the parameter.
     * @return string
     */
    public function getIn()
    {
        return $this->data['in'];
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
        return $this;
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * The name of the parameter.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setInternalData('name', $name);
        return $this;
    }
    
    /**
     * The name of the parameter.
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setInternalData('type', $type);
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
     * @param Definitions\PrimitivesItems $items
     * @return $this
     */
    public function setItems(\Calcinai\Strut\Definitions\PrimitivesItems $items)
    {
        $this->setInternalData('items', $items);
        return $this;
    }
    
    /**
     * @return Definitions\PrimitivesItems
     */
    public function getItems()
    {
        return $this->data['items'];
    }
    
    /**
     * @param string $collectionFormat
     * @return $this
     */
    public function setCollectionFormat($collectionFormat)
    {
        $this->setInternalData('collectionFormat', $collectionFormat);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCollectionFormat()
    {
        return $this->data['collectionFormat'];
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

}