<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * General information about the API.
 */

class Info extends BaseSchema
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
    protected static $properties = ['title' => [], 'version' => [], 'description' => [], 'termsOfService' => [], 'contact' => ['Definitions\\Contact'], 'license' => ['Definitions\\License']];
    
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
     * A unique and precise title of the API.
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->set('title', $title);
        return $this;
    }
    
    /**
     * A unique and precise title of the API.
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
    }
    
    /**
     * A semantic version number of the API.
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->set('version', $version);
        return $this;
    }
    
    /**
     * A semantic version number of the API.
     * @return string
     */
    public function getVersion()
    {
        return $this->get('version');
    }
    
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description');
    }
    
    /**
     * The terms of service for the API.
     * @param string $termsOfService
     * @return $this
     */
    public function setTermsOfService($termsOfService)
    {
        $this->set('termsOfService', $termsOfService);
        return $this;
    }
    
    /**
     * The terms of service for the API.
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->get('termsOfService');
    }
    
    /**
     * Contact information for the owners of the API.
     * @param Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->set('contact', $contact);
        return $this;
    }
    
    /**
     * Contact information for the owners of the API.
     * @return Contact
     */
    public function getContact()
    {
        return $this->get('contact');
    }
    
    /**
     * @param License $license
     * @return $this
     */
    public function setLicense(License $license)
    {
        $this->set('license', $license);
        return $this;
    }
    
    /**
     * @return License
     */
    public function getLicense()
    {
        return $this->get('license');
    }

}