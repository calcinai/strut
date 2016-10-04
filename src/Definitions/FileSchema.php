<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;

/**
 * A deterministic version of a JSON Schema object.
 */
class FileSchema extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'file'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
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