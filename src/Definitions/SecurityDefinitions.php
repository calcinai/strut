<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class SecurityDefinitions extends BaseSchema
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
    protected static $properties = [];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = ['Definitions\\BasicAuthenticationSecurity', 'Definitions\\ApiKeySecurity', 'Definitions\\Oauth2ImplicitSecurity', 'Definitions\\Oauth2PasswordSecurity', 'Definitions\\Oauth2ApplicationSecurity', 'Definitions\\Oauth2AccessCodeSecurity'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];

}