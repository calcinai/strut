<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

/**
 * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
 */
class Paths extends BaseSchema
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
    protected static $pattern_properties = ['^x-' => ['mixed'], '^/' => ['Definitions\\PathItem']];
}