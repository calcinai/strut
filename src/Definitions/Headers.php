<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Headers extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['collectionFormat' => 'csv'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];
    
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
     * @param Definitions\PrimitivesItems $items
     * @return $this
     */
    public function setItems(Definitions\PrimitivesItems $items)
    {
        $this->data['items'] = $items;
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
        $this->data['collectionFormat'] = $collectionFormat;
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
        $this->data['default'] = $default;
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
     * @param mixed $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->data['minLength'] = $minLength;
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
     * @param mixed $minItems
     * @return $this
     */
    public function setMinItems($minItems)
    {
        $this->data['minItems'] = $minItems;
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
     * @param mixed $enum
     * @return $this
     */
    public function addEnum($enum)
    {
        $this->data['enum'][] =& $enum;
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