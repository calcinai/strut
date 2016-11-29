<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

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
    protected static $properties = ['tags' => [], 'summary' => [], 'description' => [], 'externalDocs' => ['Definitions\\ExternalDocs'], 'operationId' => [], 'produces' => [], 'consumes' => [], 'parameters' => ['Definitions\\BodyParameter', 'Definitions\\HeaderParameterSubSchema', 'Definitions\\FormDataParameterSubSchema', 'Definitions\\QueryParameterSubSchema', 'Definitions\\PathParameterSubSchema', 'Definitions\\JsonReference'], 'responses' => ['Definitions\\Responses'], 'schemes' => [], 'deprecated' => [], 'security' => ['Definitions\\SecurityRequirement']];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * @param string $tags
     * @return $this
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
     * A brief summary of the operation.
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->set('summary', $summary);
        return $this;
    }
    
    /**
     * A brief summary of the operation.
     * @return string
     */
    public function getSummary()
    {
        return $this->get('summary');
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description');
    }
    
    /**
     * information about external documentation
     * @param ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->set('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * information about external documentation
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->get('externalDocs');
    }
    
    /**
     * A unique identifier of the operation.
     * @param string $operationId
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->set('operationId', $operationId);
        return $this;
    }
    
    /**
     * A unique identifier of the operation.
     * @return string
     */
    public function getOperationId()
    {
        return $this->get('operationId');
    }
    
    /**
     * A list of MIME types the API can produce.
     * @param mixed $produces
     * @return $this
     */
    public function setProduces($produces)
    {
        $this->set('produces', $produces);
        return $this;
    }
    
    /**
     * A list of MIME types the API can produce.
     * @return mixed
     */
    public function getProduces()
    {
        return $this->get('produces');
    }
    
    /**
     * A list of MIME types the API can consume.
     * @param mixed $consumes
     * @return $this
     */
    public function setConsumes($consumes)
    {
        $this->set('consumes', $consumes);
        return $this;
    }
    
    /**
     * A list of MIME types the API can consume.
     * @return mixed
     */
    public function getConsumes()
    {
        return $this->get('consumes');
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->add('parameters', $parameters);
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema|JsonReference[]
     */
    public function getParameters()
    {
        return $this->get('parameters');
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @param Responses $responses
     * @return $this
     */
    public function setResponses(Responses $responses)
    {
        $this->set('responses', $responses);
        return $this;
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @return Responses
     */
    public function getResponses()
    {
        return $this->get('responses');
    }
    
    /**
     * The transfer protocol of the API.
     * @param string $schemes
     * @return $this
     */
    public function addScheme($schemes)
    {
        $this->add('schemes', $schemes);
        return $this;
    }
    
    /**
     * The transfer protocol of the API.
     * @return string[]
     */
    public function getSchemes()
    {
        return $this->get('schemes');
    }
    
    /**
     * @param bool $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->set('deprecated', $deprecated);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->get('deprecated');
    }
    
    /**
     * @param SecurityRequirement $security
     * @return $this
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

}