<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Configuration details for a supported OAuth Flow
 */

class OauthFlow extends BaseSchema
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
    protected static $properties = ['authorizationUrl' => ['string'], 'tokenUrl' => ['string'], 'refreshUrl' => ['string'], 'scopes' => ['Definitions\\Strings']];
    
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
     * @param string $authorizationUrl
     * @return $this
     * @throws \Exception
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->set('authorizationUrl', $authorizationUrl);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->get('authorizationUrl');
    }
    
    /**
     * @param string $tokenUrl
     * @return $this
     * @throws \Exception
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->set('tokenUrl', $tokenUrl);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->get('tokenUrl');
    }
    
    /**
     * @param string $refreshUrl
     * @return $this
     * @throws \Exception
     */
    public function setRefreshUrl($refreshUrl)
    {
        $this->set('refreshUrl', $refreshUrl);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRefreshUrl()
    {
        return $this->get('refreshUrl');
    }
    
    /**
     * @param Strings $scopes
     * @return $this
     * @throws \Exception
     */
    public function setScopes(Strings $scopes)
    {
        $this->set('scopes', $scopes);
        return $this;
    }
    
    /**
     * @return Strings
     */
    public function getScopes()
    {
        return $this->get('scopes');
    }

}