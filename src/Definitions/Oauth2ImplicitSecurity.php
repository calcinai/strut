<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Oauth2ImplicitSecurity extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'oauth2', 'flow' => 'implicit'];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['type' => [], 'flow' => [], 'scopes' => ['Definitions\\Oauth2Scopes'], 'authorizationUrl' => [], 'description' => []];
    
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->data['type'] = $type;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->data['type'];
    }
    
    /**
     * @param string $flow
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->data['flow'] = $flow;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->data['flow'];
    }
    
    /**
     * @param Oauth2Scopes $scopes
     * @return $this
     */
    public function setScopes(Oauth2Scopes $scopes)
    {
        $this->data['scopes'] = $scopes;
        return $this;
    }
    
    /**
     * @return Oauth2Scopes
     */
    public function getScopes()
    {
        return $this->data['scopes'];
    }
    
    /**
     * @param string $authorizationUrl
     * @return $this
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->data['authorizationUrl'] = $authorizationUrl;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->data['authorizationUrl'];
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

}