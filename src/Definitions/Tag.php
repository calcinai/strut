<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Adds metadata to a single tag that is used by the Operation Object. It is not mandatory to have a Tag Object per tag defined in the Operation Object instances.
 */

class Tag extends BaseSchema
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
    protected static $properties = ['name' => ['string'], 'description' => ['string'], 'externalDocs' => ['Definitions\\ExternalDocs']];
    
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
     * Allows referencing an external resource for extended documentation.
     * @param ExternalDocs $externalDocs
     * @return $this
     * @throws \Exception
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * Allows referencing an external resource for extended documentation.
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
    }

}