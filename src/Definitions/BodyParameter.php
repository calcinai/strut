<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class BodyParameter extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['in' => 'body'];
    
    /**
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['in' => ['body']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['description' => [], 'name' => [], 'in' => [], 'required' => [], 'schema' => ['Definitions\\Schema']];
    
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
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description');
    }
    
    /**
     * The name of the parameter.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * The name of the parameter.
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * Determines the location of the parameter.
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->set('in', $in);
        return $this;
    }
    
    /**
     * Determines the location of the parameter.
     * @return string
     */
    public function getIn()
    {
        return $this->get('in');
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->set('required', $required);
        return $this;
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @return bool
     */
    public function getRequired()
    {
        return $this->get('required');
    }
    
    /**
     * A deterministic version of a JSON Schema object.
     * @param Schema $schema
     * @return $this
     */
    public function setSchema(Schema $schema)
    {
        $this->set('schema', $schema);
        return $this;
    }
    
    /**
     * A deterministic version of a JSON Schema object.
     * @return Schema
     */
    public function getSchema()
    {
        return $this->get('schema');
    }

}