<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Allows configuration of the supported OAuth Flows.
 */

class OauthFlows extends BaseSchema
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
    protected static $properties = ['implicit' => ['Definitions\\OauthFlow'], 'password' => ['Definitions\\OauthFlow'], 'clientCredentials' => ['Definitions\\OauthFlow'], 'authorizationCode' => ['Definitions\\OauthFlow']];
    
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
     * Configuration details for a supported OAuth Flow
     * @param OauthFlow $implicit
     * @return $this
     * @throws \Exception
     */
    public function setImplicit(OauthFlow $implicit)
    {
        $this->set('implicit', $implicit);
        return $this;
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @return OauthFlow
     */
    public function getImplicit()
    {
        return $this->get('implicit');
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @param OauthFlow $password
     * @return $this
     * @throws \Exception
     */
    public function setPassword(OauthFlow $password)
    {
        $this->set('password', $password);
        return $this;
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @return OauthFlow
     */
    public function getPassword()
    {
        return $this->get('password');
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @param OauthFlow $clientCredentials
     * @return $this
     * @throws \Exception
     */
    public function setClientCredentials(OauthFlow $clientCredentials)
    {
        $this->set('clientCredentials', $clientCredentials);
        return $this;
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @return OauthFlow
     */
    public function getClientCredentials()
    {
        return $this->get('clientCredentials');
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @param OauthFlow $authorizationCode
     * @return $this
     * @throws \Exception
     */
    public function setAuthorizationCode(OauthFlow $authorizationCode)
    {
        $this->set('authorizationCode', $authorizationCode);
        return $this;
    }
    
    /**
     * Configuration details for a supported OAuth Flow
     * @return OauthFlow
     */
    public function getAuthorizationCode()
    {
        return $this->get('authorizationCode');
    }

}