<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * A container for the expected responses of an operation. The container maps a HTTP response code to the expected response.  The documentation is not necessarily expected to cover all possible HTTP response codes because they may not be known in advance. However, documentation is expected to cover a successful operation response and any known errors.  The `default` MAY be used as a default response object for all HTTP codes  that are not covered individually by the specification.  The `Responses Object` MUST contain at least one response code, and it  SHOULD be the response for a successful operation call.
 */

class Responses extends BaseSchema
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
    protected static $properties = ['default' => ['Definitions\\Response', 'Definitions\\Reference']];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^([0-9X]{3})$' => ['Definitions\\Response', 'Definitions\\Reference'], '^x-' => ['null', 'integer', 'boolean', 'string', 'object', 'array']];
    
    /**
     * @param Response|Reference $default
     * @return $this
     * @throws \Exception
     */
    public function setDefault($default)
    {
        $this->set('default', $default);
        return $this;
    }
    
    /**
     * @return Response|Reference
     */
    public function getDefault()
    {
        return $this->get('default');
    }

}