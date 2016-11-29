<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

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
    protected static $properties = ['name' => [], 'description' => [], 'externalDocs' => ['Definitions\\ExternalDocs']];
    
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
     * @param string $name
     * @return $this
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
     * information about external documentation
     * @param ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * information about external documentation
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
    }

}