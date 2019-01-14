<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * The object provides metadata about the API. The metadata MAY be used by the clients if needed, and MAY be presented in editing or documentation generation tools for convenience.
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
    protected static $properties = ['title' => ['string'], 'description' => ['string'], 'termsOfService' => ['string'], 'contact' => ['Definitions\\Contact'], 'license' => ['Definitions\\License'], 'version' => ['string']];
    
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
     * @param string $title
     * @return $this
     * @throws \Exception
     */
    public function setTitle($title)
    {
        $this->set('title', $title);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
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
     * @param string $termsOfService
     * @return $this
     * @throws \Exception
     */
    public function setTermsOfService($termsOfService)
    {
        $this->set('termsOfService', $termsOfService);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->get('termsOfService');
    }
    
    /**
     * Contact information for the exposed API.
     * @param Contact $contact
     * @return $this
     * @throws \Exception
     */
    public function setContact(Contact $contact)
    {
        $this->set('contact', $contact);
        return $this;
    }
    
    /**
     * Contact information for the exposed API.
     * @return Contact
     */
    public function getContact()
    {
        return $this->get('contact');
    }
    
    /**
     * License information for the exposed API.
     * @param License $license
     * @return $this
     * @throws \Exception
     */
    public function setLicense(License $license)
    {
        $this->set('license', $license);
        return $this;
    }
    
    /**
     * License information for the exposed API.
     * @return License
     */
    public function getLicense()
    {
        return $this->get('license');
    }
    
    /**
     * @param string $version
     * @return $this
     * @throws \Exception
     */
    public function setVersion($version)
    {
        $this->set('version', $version);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->get('version');
    }

}