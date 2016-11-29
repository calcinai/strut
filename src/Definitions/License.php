<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class License extends BaseSchema
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
    protected static $properties = ['name' => [], 'url' => []];
    
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
     * The name of the license type. It's encouraged to use an OSI compatible license.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * The URL pointing to the license.
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->set('url', $url);
        return $this;
    }
    
    /**
     * The URL pointing to the license.
     * @return string
     */
    public function getUrl()
    {
        return $this->get('url');
    }

}