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
        $this->setInternalData('title', $title);
        return $this;
    }
    
    /**
     * A unique and precise title of the API.
     * @return string
     */
    public function getTitle()
    {
        return $this->data['title'];
    }
    
    /**
     * A semantic version number of the API.
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->setInternalData('version', $version);
        return $this;
    }
    
    /**
     * A semantic version number of the API.
     * @return string
     */
    public function getVersion()
    {
        return $this->data['version'];
    }
    
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
        return $this;
    }
    
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * The terms of service for the API.
     * @param string $termsOfService
     * @return $this
     */
    public function setTermsOfService($termsOfService)
    {
        $this->setInternalData('termsOfService', $termsOfService);
        return $this;
    }
    
    /**
     * The terms of service for the API.
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->data['termsOfService'];
    }
    
    /**
     * Contact information for the owners of the API.
     * @param Definitions\Contact $contact
     * @return $this
     */
    public function setContact(\Calcinai\Strut\Definitions\Contact $contact)
    {
        $this->setInternalData('contact', $contact);
        return $this;
    }
    
    /**
     * Contact information for the owners of the API.
     * @return Definitions\Contact
     */
    public function getContact()
    {
        return $this->data['contact'];
    }
    
    /**
     * @param Definitions\License $license
     * @return $this
     */
    public function setLicense(\Calcinai\Strut\Definitions\License $license)
    {
        $this->setInternalData('license', $license);
        return $this;
    }
    
    /**
     * @return Definitions\License
     */
    public function getLicense()
    {
        return $this->data['license'];
    }

}