<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

/**
 * Response objects names can either be any valid HTTP status code or 'default'.
 */
class Responses extends BaseSchema
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
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^([0-9]{3})$|^(default)$' => ['Definitions\\Response', 'Definitions\\JsonReference'], '^x-' => []];
}