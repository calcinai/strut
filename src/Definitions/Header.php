<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * The Header Object follows the structure of the Parameter Object with the following changes:  1. `name` MUST NOT be specified, it is given in the corresponding `headers` map. 1. `in` MUST NOT be specified, it is implicitly in `header`. 1. All traits that are affected by the location MUST be applicable to a location of `header` (for example, `style`).
 */

class Header extends BaseSchema
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
    protected static $properties = ['description' => ['string'], 'required' => ['boolean'], 'deprecated' => ['boolean'], 'allowEmptyValue' => ['boolean'], 'style' => ['string'], 'explode' => ['boolean'], 'allowReserved' => ['boolean'], 'schema' => ['Definitions\\Schema', 'Definitions\\Reference'], 'example' => ['mixed'], 'examples' => ['Definitions\\ExamplesOrReferences'], 'content' => ['Definitions\\MediaTypes']];
    
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
     * @param boolean $allowEmptyValue
     * @return $this
     * @throws \Exception
     */
    public function setAllowEmptyValue($allowEmptyValue)
    {
        $this->set('allowEmptyValue', $allowEmptyValue);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getAllowEmptyValue()
    {
        return $this->get('allowEmptyValue');
    }
    
    /**
     * @param string $style
     * @return $this
     * @throws \Exception
     */
    public function setStyle($style)
    {
        $this->set('style', $style);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->get('style');
    }
    
    /**
     * @param boolean $explode
     * @return $this
     * @throws \Exception
     */
    public function setExplode($explode)
    {
        $this->set('explode', $explode);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getExplode()
    {
        return $this->get('explode');
    }
    
    /**
     * @param boolean $allowReserved
     * @return $this
     * @throws \Exception
     */
    public function setAllowReserved($allowReserved)
    {
        $this->set('allowReserved', $allowReserved);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getAllowReserved()
    {
        return $this->get('allowReserved');
    }
    
    /**
     * @param Schema|Reference $schema
     * @return $this
     * @throws \Exception
     */
    public function setSchema($schema)
    {
        $this->set('schema', $schema);
        return $this;
    }
    
    /**
     * @return Schema|Reference
     */
    public function getSchema()
    {
        return $this->get('schema');
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
     * @param ExamplesOrReferences $examples
     * @return $this
     * @throws \Exception
     */
    public function setExamples(ExamplesOrReferences $examples)
    {
        $this->set('examples', $examples);
        return $this;
    }
    
    /**
     * @return ExamplesOrReferences
     */
    public function getExamples()
    {
        return $this->get('examples');
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

}