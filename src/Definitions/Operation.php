<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Operation extends BaseSchema
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
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
    /**
     * @param  $tags
     * @return $this
     */
    public function addTag($tags)
    {
        $this->data['tags'][] =& $tags;
        return $this;
    }
    
    /**
     * @return []
     */
    public function getTags()
    {
        return $this->data['tags'];
    }
    
    /**
     * A brief summary of the operation.
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->data['summary'] = $summary;
        return $this;
    }
    
    /**
     * A brief summary of the operation.
     * @return string
     */
    public function getSummary()
    {
        return $this->data['summary'];
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->data['description'] = $description;
        return $this;
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * information about external documentation
     * @param Definitions\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(Definitions\ExternalDocs $externalDocs)
    {
        $this->data['externalDocs'] = $externalDocs;
        return $this;
    }
    
    /**
     * information about external documentation
     * @return Definitions\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->data['externalDocs'];
    }
    
    /**
     * A unique identifier of the operation.
     * @param string $operationId
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->data['operationId'] = $operationId;
        return $this;
    }
    
    /**
     * A unique identifier of the operation.
     * @return string
     */
    public function getOperationId()
    {
        return $this->data['operationId'];
    }
    
    /**
     * A list of MIME types the API can produce.
     * @param  $produces
     * @return $this
     */
    public function setProduces($produces)
    {
        $this->data['produces'] = $produces;
        return $this;
    }
    
    /**
     * A list of MIME types the API can produce.
     * @return 
     */
    public function getProduces()
    {
        return $this->data['produces'];
    }
    
    /**
     * A list of MIME types the API can consume.
     * @param  $consumes
     * @return $this
     */
    public function setConsumes($consumes)
    {
        $this->data['consumes'] = $consumes;
        return $this;
    }
    
    /**
     * A list of MIME types the API can consume.
     * @return 
     */
    public function getConsumes()
    {
        return $this->data['consumes'];
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param  $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->data['parameters'][] =& $parameters;
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return []
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @param Definitions\Responses $responses
     * @return $this
     */
    public function setResponses(Definitions\Responses $responses)
    {
        $this->data['responses'] = $responses;
        return $this;
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @return Definitions\Responses
     */
    public function getResponses()
    {
        return $this->data['responses'];
    }
    
    /**
     * The transfer protocol of the API.
     * @param  $schemes
     * @return $this
     */
    public function addScheme($schemes)
    {
        $this->data['schemes'][] =& $schemes;
        return $this;
    }
    
    /**
     * The transfer protocol of the API.
     * @return []
     */
    public function getSchemes()
    {
        return $this->data['schemes'];
    }
    
    /**
     * @param bool $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->data['deprecated'] = $deprecated;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->data['deprecated'];
    }
    
    /**
     * @param  $security
     * @return $this
     */
    public function addSecurity($security)
    {
        $this->data['security'][] =& $security;
        return $this;
    }
    
    /**
     * @return []
     */
    public function getSecurity()
    {
        return $this->data['security'];
    }
}