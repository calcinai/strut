<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Each Media Type Object provides schema and examples for the media type identified by its key.
 */

class MediaType extends BaseSchema
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
    protected static $properties = ['schema' => ['Definitions\\Schema', 'Definitions\\Reference'], 'example' => ['mixed'], 'examples' => ['Definitions\\ExamplesOrReferences'], 'encoding' => ['Definitions\\Encodings']];
    
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
     * @param Encodings $encoding
     * @return $this
     * @throws \Exception
     */
    public function setEncoding(Encodings $encoding)
    {
        $this->set('encoding', $encoding);
        return $this;
    }
    
    /**
     * @return Encodings
     */
    public function getEncoding()
    {
        return $this->get('encoding');
    }

}