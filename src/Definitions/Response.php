<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Response extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
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
     * @param Schema|FileSchema $schema
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->data['schema'] = $schema;
        return $this;
    }
    
    /**
     * @return Schema|FileSchema
     */
    public function getSchema()
    {
        return $this->data['schema'];
    }
    
    /**
     * @param Headers $headers
     * @return $this
     */
    public function setHeaders(Headers $headers)
    {
        $this->data['headers'] = $headers;
        return $this;
    }
    
    /**
     * @return Headers
     */
    public function getHeaders()
    {
        return $this->data['headers'];
    }
    
    /**
     * @param Examples $examples
     * @return $this
     */
    public function setExamples(Examples $examples)
    {
        $this->data['examples'] = $examples;
        return $this;
    }
    
    /**
     * @return Examples
     */
    public function getExamples()
    {
        return $this->data['examples'];
    }

}