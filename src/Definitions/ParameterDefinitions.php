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
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];
}