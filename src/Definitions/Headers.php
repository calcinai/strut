<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Headers extends BaseSchema
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
    protected static $additional_properties = ['Definitions\\Header'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];

}