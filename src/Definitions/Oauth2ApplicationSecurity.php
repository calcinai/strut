<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Oauth2ApplicationSecurity extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'oauth2', 'flow' => 'application'];
    
    /**
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['type' => ['oauth2'], 'flow' => ['application']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['type' => [], 'flow' => [], 'scopes' => ['Definitions\\Oauth2Scopes'], 'tokenUrl' => [], 'description' => []];
    
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
        $this->set('type', $type);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->get('type');
    }
    
    /**
     * @param string $flow
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->set('flow', $flow);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->get('flow');
    }
    
    /**
     * @param Oauth2Scopes $scopes
     * @return $this
     */
    public function setScopes(Oauth2Scopes $scopes)
    {
        $this->set('scopes', $scopes);
        return $this;
    }
    
    /**
     * @return Oauth2Scopes
     */
    public function getScopes()
    {
        return $this->get('scopes');
    }
    
    /**
     * @param string $tokenUrl
     * @return $this
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
     * @param string $description
     * @return $this
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

}