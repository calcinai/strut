<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
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
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['type' => ['file']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['format' => [], 'title' => [], 'description' => [], 'default' => [], 'required' => [], 'type' => [], 'readOnly' => [], 'externalDocs' => ['Definitions\\ExternalDocs'], 'example' => []];
    
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
     * @param string $type
     * @return $this
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