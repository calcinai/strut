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
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->data['name'] = $name;
        return $this;
    }
    
    /**
     * The name of the license type. It's encouraged to use an OSI compatible license.
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * The URL pointing to the license.
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->data['url'] = $url;
        return $this;
    }
    
    /**
     * The URL pointing to the license.
     * @return string
     */
    public function getUrl()
    {
        return $this->data['url'];
    }
}