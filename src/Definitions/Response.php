<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Response extends BaseSchema
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
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
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
     * @param Definitions\Schema $schema
     * @return $this
     */
    public function setSchema(Definitions\Schema $schema)
    {
        $this->data['schema'] = $schema;
        return $this;
    }
    
    /**
     * @return Definitions\Schema
     */
    public function getSchema()
    {
        return $this->data['schema'];
    }
    
    /**
     * @param Definitions\Headers $headers
     * @return $this
     */
    public function setHeaders(Definitions\Headers $headers)
    {
        $this->data['headers'] = $headers;
        return $this;
    }
    
    /**
     * @return Definitions\Headers
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