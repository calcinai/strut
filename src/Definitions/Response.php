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
        $this->setInternalData('description', $description);
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
        $this->setInternalData('schema', $schema);
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
     * @param Definitions\Headers $headers
     * @return $this
     */
    public function setHeaders(\Calcinai\Strut\Definitions\Headers $headers)
    {
        $this->setInternalData('headers', $headers);
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
    public function setExamples(\Calcinai\Strut\Definitions\Examples $examples)
    {
        $this->setInternalData('examples', $examples);
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