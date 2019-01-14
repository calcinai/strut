<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Describes a single API operation on a path.
 */

class Operation extends BaseSchema
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
    protected static $properties = ['tags' => ['string'], 'summary' => ['string'], 'description' => ['string'], 'externalDocs' => ['Definitions\\ExternalDocs'], 'operationId' => ['string'], 'parameters' => ['Definitions\\Parameter', 'Definitions\\Reference'], 'requestBody' => ['Definitions\\RequestBody', 'Definitions\\Reference'], 'responses' => ['Definitions\\Responses'], 'callbacks' => ['Definitions\\CallbacksOrReferences'], 'deprecated' => ['boolean'], 'security' => ['Definitions\\SecurityRequirement'], 'servers' => ['Definitions\\Server']];
    
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
     * @param string $tags
     * @return $this
     * @throws \Exception
     */
    public function addTag($tags)
    {
        $this->add('tags', $tags);
        return $this;
    }
    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->get('tags');
    }
    
    /**
     * @param string $summary
     * @return $this
     * @throws \Exception
     */
    public function setSummary($summary)
    {
        $this->set('summary', $summary);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->get('summary');
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
     * Allows referencing an external resource for extended documentation.
     * @param ExternalDocs $externalDocs
     * @return $this
     * @throws \Exception
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * Allows referencing an external resource for extended documentation.
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
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
     * @param Parameter|Reference $parameters
     * @return $this
     * @throws \Exception
     */
    public function addParameter($parameters)
    {
        $this->add('parameters', $parameters);
        return $this;
    }
    
    /**
     * @return Parameter|Reference[]
     */
    public function getParameters()
    {
        return $this->get('parameters');
    }
    
    /**
     * @param RequestBody|Reference $requestBody
     * @return $this
     * @throws \Exception
     */
    public function setRequestBody($requestBody)
    {
        $this->set('requestBody', $requestBody);
        return $this;
    }
    
    /**
     * @return RequestBody|Reference
     */
    public function getRequestBody()
    {
        return $this->get('requestBody');
    }
    
    /**
     * A container for the expected responses of an operation. The container maps a HTTP response code to the expected response.  The documentation is not necessarily expected to cover all possible HTTP response codes because they may not be known in advance. However, documentation is expected to cover a successful operation response and any known errors.  The `default` MAY be used as a default response object for all HTTP codes  that are not covered individually by the specification.  The `Responses Object` MUST contain at least one response code, and it  SHOULD be the response for a successful operation call.
     * @param Responses $responses
     * @return $this
     * @throws \Exception
     */
    public function setResponses(Responses $responses)
    {
        $this->set('responses', $responses);
        return $this;
    }
    
    /**
     * A container for the expected responses of an operation. The container maps a HTTP response code to the expected response.  The documentation is not necessarily expected to cover all possible HTTP response codes because they may not be known in advance. However, documentation is expected to cover a successful operation response and any known errors.  The `default` MAY be used as a default response object for all HTTP codes  that are not covered individually by the specification.  The `Responses Object` MUST contain at least one response code, and it  SHOULD be the response for a successful operation call.
     * @return Responses
     */
    public function getResponses()
    {
        return $this->get('responses');
    }
    
    /**
     * @param CallbacksOrReferences $callbacks
     * @return $this
     * @throws \Exception
     */
    public function setCallbacks(CallbacksOrReferences $callbacks)
    {
        $this->set('callbacks', $callbacks);
        return $this;
    }
    
    /**
     * @return CallbacksOrReferences
     */
    public function getCallbacks()
    {
        return $this->get('callbacks');
    }
    
    /**
     * @param boolean $deprecated
     * @return $this
     * @throws \Exception
     */
    public function setDeprecated($deprecated)
    {
        $this->set('deprecated', $deprecated);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getDeprecated()
    {
        return $this->get('deprecated');
    }
    
    /**
     * @param SecurityRequirement $security
     * @return $this
     * @throws \Exception
     */
    public function addSecurity(SecurityRequirement $security)
    {
        $this->add('security', $security);
        return $this;
    }
    
    /**
     * @return SecurityRequirement[]
     */
    public function getSecurity()
    {
        return $this->get('security');
    }
    
    /**
     * @param Server $servers
     * @return $this
     * @throws \Exception
     */
    public function addServer(Server $servers)
    {
        $this->add('servers', $servers);
        return $this;
    }
    
    /**
     * @return Server[]
     */
    public function getServers()
    {
        return $this->get('servers');
    }

}