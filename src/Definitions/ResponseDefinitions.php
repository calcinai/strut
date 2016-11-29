<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * One or more JSON representations for parameters
 */

class ResponseDefinitions extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = [];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = ['Definitions\\Response'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];

}