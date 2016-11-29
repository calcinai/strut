<?php

namespace Calcinai\Strut;

use Calcinai\Strut\Definitions\Info;
use Calcinai\Strut\Definitions\Paths;
use Calcinai\Strut\Definitions\Definitions;
use Calcinai\Strut\Definitions\ParameterDefinitions;
use Calcinai\Strut\Definitions\ResponseDefinitions;
use Calcinai\Strut\Definitions\SecurityRequirement;
use Calcinai\Strut\Definitions\SecurityDefinitions;
use Calcinai\Strut\Definitions\Tag;
use Calcinai\Strut\Definitions\ExternalDocs;

class Swagger extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['swagger' => '2.0'];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['swagger' => [], 'info' => ['Definitions\\Info'], 'host' => [], 'basePath' => [], 'schemes' => [], 'consumes' => [], 'produces' => [], 'paths' => ['Definitions\\Paths'], 'definitions' => ['Definitions\\Definitions'], 'parameters' => ['Definitions\\ParameterDefinitions'], 'responses' => ['Definitions\\ResponseDefinitions'], 'security' => ['Definitions\\SecurityRequirement'], 'securityDefinitions' => ['Definitions\\SecurityDefinitions'], 'tags' => ['Definitions\\Tag'], 'externalDocs' => ['Definitions\\ExternalDocs']];
    
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
     * The Swagger version of this document.
     * @param string $swagger
     * @return $this
     */
    public function setSwagger($swagger)
    {
        $this->data['swagger'] = $swagger;
        return $this;
    }
    
    /**
     * The Swagger version of this document.
     * @return string
     */
    public function getSwagger()
    {
        return $this->data['swagger'];
    }
    
    /**
     * General information about the API.
     * @param Info $info
     * @return $this
     */
    public function setInfo(Info $info)
    {
        $this->data['info'] = $info;
        return $this;
    }
    
    /**
     * General information about the API.
     * @return Info
     */
    public function getInfo()
    {
        return $this->data['info'];
    }
    
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->data['host'] = $host;
        return $this;
    }
    
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'
     * @return string
     */
    public function getHost()
    {
        return $this->data['host'];
    }
    
    /**
     * The base path to the API. Example: '/api'.
     * @param string $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->data['basePath'] = $basePath;
        return $this;
    }
    
    /**
     * The base path to the API. Example: '/api'.
     * @return string
     */
    public function getBasePath()
    {
        return $this->data['basePath'];
    }
    
    /**
     * The transfer protocol of the API.
     * @param string $schemes
     * @return $this
     */
    public function addScheme($schemes)
    {
        $this->data['schemes'][] =& $schemes;
        return $this;
    }
    
    /**
     * The transfer protocol of the API.
     * @return string[]
     */
    public function getSchemes()
    {
        return $this->data['schemes'];
    }
    
    /**
     * A list of MIME types accepted by the API.
     * @param mixed $consumes
     * @return $this
     */
    public function setConsumes($consumes)
    {
        $this->data['consumes'] = $consumes;
        return $this;
    }
    
    /**
     * A list of MIME types accepted by the API.
     * @return mixed
     */
    public function getConsumes()
    {
        return $this->data['consumes'];
    }
    
    /**
     * A list of MIME types the API can produce.
     * @param mixed $produces
     * @return $this
     */
    public function setProduces($produces)
    {
        $this->data['produces'] = $produces;
        return $this;
    }
    
    /**
     * A list of MIME types the API can produce.
     * @return mixed
     */
    public function getProduces()
    {
        return $this->data['produces'];
    }
    
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     * @param Paths $paths
     * @return $this
     */
    public function setPaths(Paths $paths)
    {
        $this->data['paths'] = $paths;
        return $this;
    }
    
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     * @return Paths
     */
    public function getPaths()
    {
        return $this->data['paths'];
    }
    
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     * @param Definitions $definitions
     * @return $this
     */
    public function setDefinitions(Definitions $definitions)
    {
        $this->data['definitions'] = $definitions;
        return $this;
    }
    
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     * @return Definitions
     */
    public function getDefinitions()
    {
        return $this->data['definitions'];
    }
    
    /**
     * One or more JSON representations for parameters
     * @param ParameterDefinitions $parameters
     * @return $this
     */
    public function setParameters(ParameterDefinitions $parameters)
    {
        $this->data['parameters'] = $parameters;
        return $this;
    }
    
    /**
     * One or more JSON representations for parameters
     * @return ParameterDefinitions
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }
    
    /**
     * One or more JSON representations for parameters
     * @param ResponseDefinitions $responses
     * @return $this
     */
    public function setResponses(ResponseDefinitions $responses)
    {
        $this->data['responses'] = $responses;
        return $this;
    }
    
    /**
     * One or more JSON representations for parameters
     * @return ResponseDefinitions
     */
    public function getResponses()
    {
        return $this->data['responses'];
    }
    
    /**
     * @param SecurityRequirement $security
     * @return $this
     */
    public function addSecurity(SecurityRequirement $security)
    {
        $this->data['security'][] =& $security;
        return $this;
    }
    
    /**
     * @return SecurityRequirement[]
     */
    public function getSecurity()
    {
        return $this->data['security'];
    }
    
    /**
     * @param SecurityDefinitions $securityDefinitions
     * @return $this
     */
    public function setSecurityDefinitions(SecurityDefinitions $securityDefinitions)
    {
        $this->data['securityDefinitions'] = $securityDefinitions;
        return $this;
    }
    
    /**
     * @return SecurityDefinitions
     */
    public function getSecurityDefinitions()
    {
        return $this->data['securityDefinitions'];
    }
    
    /**
     * @param Tag $tags
     * @return $this
     */
    public function addTag(Tag $tags)
    {
        $this->data['tags'][] =& $tags;
        return $this;
    }
    
    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->data['tags'];
    }
    
    /**
     * information about external documentation
     * @param ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->data['externalDocs'] = $externalDocs;
        return $this;
    }
    
    /**
     * information about external documentation
     * @return ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->data['externalDocs'];
    }

}