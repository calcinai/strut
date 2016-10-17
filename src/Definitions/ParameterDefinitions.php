<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * One or more JSON representations for parameters
 */

class ParameterDefinitions extends BaseSchema
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
    protected static $additional_properties = ['Definitions\\BodyParameter', 'Definitions\\HeaderParameterSubSchema', 'Definitions\\FormDataParameterSubSchema', 'Definitions\\QueryParameterSubSchema', 'Definitions\\PathParameterSubSchema', 'Definitions\\BodyParameter', 'Definitions\\HeaderParameterSubSchema', 'Definitions\\FormDataParameterSubSchema', 'Definitions\\QueryParameterSubSchema', 'Definitions\\PathParameterSubSchema'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];

}