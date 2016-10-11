<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Oauth2PasswordSecurity extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'oauth2', 'flow' => 'password'];
    
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
     * @param Definitions\Oauth2Scopes $scopes
     * @return $this
     */
    public function setScopes(Definitions\Oauth2Scopes $scopes)
    {
        $this->data['scopes'] = $scopes;
        return $this;
    }
    
    /**
     * @return Definitions\Oauth2Scopes
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
        $this->data['tokenUrl'] = $tokenUrl;
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