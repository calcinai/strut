<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

/**
 * information about external documentation
 */
class ExternalDocs extends BaseSchema
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
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->data['url'] = $url;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->data['url'];
    }
}