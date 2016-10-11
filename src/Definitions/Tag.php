<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Tag extends BaseSchema
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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->data['name'] = $name;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
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
     * information about external documentation
     * @param Definitions\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(Definitions\ExternalDocs $externalDocs)
    {
        $this->data['externalDocs'] = $externalDocs;
        return $this;
    }
    
    /**
     * information about external documentation
     * @return Definitions\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->data['externalDocs'];
    }
}