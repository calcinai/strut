<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Describes a single request body.
 */

class RequestBody extends BaseSchema
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
    protected static $properties = ['description' => ['string'], 'content' => ['Definitions\\MediaTypes'], 'required' => ['boolean']];
    
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
     * @param MediaTypes $content
     * @return $this
     * @throws \Exception
     */
    public function setContent(MediaTypes $content)
    {
        $this->set('content', $content);
        return $this;
    }
    
    /**
     * @return MediaTypes
     */
    public function getContent()
    {
        return $this->get('content');
    }
    
    /**
     * @param boolean $required
     * @return $this
     * @throws \Exception
     */
    public function setRequired($required)
    {
        $this->set('required', $required);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getRequired()
    {
        return $this->get('required');
    }

}