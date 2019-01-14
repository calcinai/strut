<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Defines a security scheme that can be used by the operations. Supported schemes are HTTP authentication, an API key (either as a header or as a query parameter), OAuth2's common flows (implicit, password, application and access code) as defined in RFC6749, and OpenID Connect Discovery.
 */

class SecurityScheme extends BaseSchema
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
    protected static $properties = ['type' => ['string'], 'description' => ['string'], 'name' => ['string'], 'in' => ['string'], 'scheme' => ['string'], 'bearerFormat' => ['string'], 'flows' => ['Definitions\\OauthFlows'], 'openIdConnectUrl' => ['string']];
    
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
     * @param string $type
     * @return $this
     * @throws \Exception
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
     * @param string $name
     * @return $this
     * @throws \Exception
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * @param string $in
     * @return $this
     * @throws \Exception
     */
    public function setIn($in)
    {
        $this->set('in', $in);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getIn()
    {
        return $this->get('in');
    }
    
    /**
     * @param string $scheme
     * @return $this
     * @throws \Exception
     */
    public function setScheme($scheme)
    {
        $this->set('scheme', $scheme);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->get('scheme');
    }
    
    /**
     * @param string $bearerFormat
     * @return $this
     * @throws \Exception
     */
    public function setBearerFormat($bearerFormat)
    {
        $this->set('bearerFormat', $bearerFormat);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getBearerFormat()
    {
        return $this->get('bearerFormat');
    }
    
    /**
     * Allows configuration of the supported OAuth Flows.
     * @param OauthFlows $flows
     * @return $this
     * @throws \Exception
     */
    public function setFlows(OauthFlows $flows)
    {
        $this->set('flows', $flows);
        return $this;
    }
    
    /**
     * Allows configuration of the supported OAuth Flows.
     * @return OauthFlows
     */
    public function getFlows()
    {
        return $this->get('flows');
    }
    
    /**
     * @param string $openIdConnectUrl
     * @return $this
     * @throws \Exception
     */
    public function setOpenIdConnectUrl($openIdConnectUrl)
    {
        $this->set('openIdConnectUrl', $openIdConnectUrl);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getOpenIdConnectUrl()
    {
        return $this->get('openIdConnectUrl');
    }

}