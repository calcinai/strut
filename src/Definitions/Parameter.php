<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Describes a single operation parameter.  A unique parameter is defined by a combination of a name and location.
 */

class Parameter extends BaseSchema
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
    protected static $properties = ['name' => ['string'], 'in' => ['string'], 'description' => ['string'], 'required' => ['boolean'], 'deprecated' => ['boolean'], 'allowEmptyValue' => ['boolean'], 'style' => ['string'], 'explode' => ['boolean'], 'allowReserved' => ['boolean'], 'schema' => ['Definitions\\Schema', 'Definitions\\Reference'], 'example' => ['mixed'], 'examples' => ['Definitions\\ExamplesOrReferences'], 'content' => ['Definitions\\MediaTypes']];
    
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
     * @param string $name
     * @return $this
     * @throws \Exception
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * @param string $in
     * @return $this
     * @throws \Exception
     */
    public function setIn($in)
    {
        $this->set('in', $in);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getIn()
    {
        return $this->get('in');
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