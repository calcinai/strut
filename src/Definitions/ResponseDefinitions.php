<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;

/**
 * One or more JSON representations for parameters
 */
class ResponseDefinitions extends BaseSchema
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
     * @param Definitions\Schema|
     *        Definitions\FileSchema $schema
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->data['schema'] = $schema;
        return $this;
    }
    
    /**
     * @return Definitions\Schema|
     *         Definitions\FileSchema
     */
    public function getSchema()
    {
        return $this->data['schema'];
    }
    
    /**
     * @param Definitions\Header $headers
     * @return $this
     */
    public function setHeaders(Definitions\Header $headers)
    {
        $this->data['headers'] = $headers;
        return $this;
    }
    
    /**
     * @return Definitions\Header
     */
    public function getHeaders()
    {
        return $this->data['headers'];
    }
    
    /**
     * @param Definitions\Examples $examples
     * @return $this
     */
    public function setExamples(Definitions\Examples $examples)
    {
        $this->data['examples'] = $examples;
        return $this;
    }
    
    /**
     * @return Definitions\Examples
     */
    public function getExamples()
    {
        return $this->data['examples'];
    }
}