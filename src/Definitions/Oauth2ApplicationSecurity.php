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
        $this->setInternalData('type', $type);
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
        $this->setInternalData('flow', $flow);
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
        $this->setInternalData('scopes', $scopes);
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
     * @param string $tokenUrl
     * @return $this
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->setInternalData('tokenUrl', $tokenUrl);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->data['tokenUrl'];
    }
    
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
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