<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Encodings extends BaseSchema
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
    protected static $additional_properties = ['Definitions\\Encoding'];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];

}