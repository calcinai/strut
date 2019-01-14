<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * The `Link object` represents a possible design-time link for a response. The presence of a link does not guarantee the caller's ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between responses and other operations.  Unlike _dynamic_ links (i.e. links provided **in** the response payload), the OAS linking mechanism does not require link information in the runtime response.  For computing links, and providing instructions to execute them, a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.
 */

class Link extends BaseSchema
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
    protected static $properties = ['operationRef' => ['string'], 'operationId' => ['string'], 'parameters' => ['Definitions\\AnysOrExpressions'], 'requestBody' => ['mixed', 'Definitions\\Expression'], 'description' => ['string'], 'server' => ['Definitions\\Server']];
    
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
     * @param string $operationRef
     * @return $this
     * @throws \Exception
     */
    public function setOperationRef($operationRef)
    {
        $this->set('operationRef', $operationRef);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getOperationRef()
    {
        return $this->get('operationRef');
    }
    
    /**
     * @param string $operationId
     * @return $this
     * @throws \Exception
     */
    public function setOperationId($operationId)
    {
        $this->set('operationId', $operationId);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getOperationId()
    {
        return $this->get('operationId');
    }
    
    /**
     * @param AnysOrExpressions $parameters
     * @return $this
     * @throws \Exception
     */
    public function setParameters(AnysOrExpressions $parameters)
    {
        $this->set('parameters', $parameters);
        return $this;
    }
    
    /**
     * @return AnysOrExpressions
     */
    public function getParameters()
    {
        return $this->get('parameters');
    }
    
    /**
     * @param mixed|Expression $requestBody
     * @return $this
     * @throws \Exception
     */
    public function setRequestBody($requestBody)
    {
        $this->set('requestBody', $requestBody);
        return $this;
    }
    
    /**
     * @return mixed|Expression
     */
    public function getRequestBody()
    {
        return $this->get('requestBody');
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
     * An object representing a Server.
     * @param Server $server
     * @return $this
     * @throws \Exception
     */
    public function setServer(Server $server)
    {
        $this->set('server', $server);
        return $this;
    }
    
    /**
     * An object representing a Server.
     * @return Server
     */
    public function getServer()
    {
        return $this->get('server');
    }

}