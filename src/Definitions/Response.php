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
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = [];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['description' => [], 'schema' => ['Definitions\\Schema', 'Definitions\\FileSchema'], 'headers' => ['Definitions\\Headers'], 'examples' => ['Definitions\\Examples']];
    
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
     * @param Schema|FileSchema $schema
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->set('schema', $schema);
        return $this;
    }
    
    /**
     * @return Schema|FileSchema
     */
    public function getSchema()
    {
        return $this->get('schema');
    }
    
    /**
     * @param Headers $headers
     * @return $this
     */
    public function setHeaders(Headers $headers)
    {
        $this->set('headers', $headers);
        return $this;
    }
    
    /**
     * @return Headers
     */
    public function getHeaders()
    {
        return $this->get('headers');
    }
    
    /**
     * @param Examples $examples
     * @return $this
     */
    public function setExamples(Examples $examples)
    {
        $this->set('examples', $examples);
        return $this;
    }
    
    /**
     * @return Examples
     */
    public function getExamples()
    {
        return $this->get('examples');
    }

}