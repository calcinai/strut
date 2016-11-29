<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Contact information for the owners of the API.
 */

class Contact extends BaseSchema
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
    protected static $properties = ['name' => [], 'url' => [], 'email' => []];
    
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
     * The identifying name of the contact person/organization.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * The identifying name of the contact person/organization.
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * The URL pointing to the contact information.
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->set('url', $url);
        return $this;
    }
    
    /**
     * The URL pointing to the contact information.
     * @return string
     */
    public function getUrl()
    {
        return $this->get('url');
    }
    
    /**
     * The email address of the contact person/organization.
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->set('email', $email);
        return $this;
    }
    
    /**
     * The email address of the contact person/organization.
     * @return string
     */
    public function getEmail()
    {
        return $this->get('email');
    }

}