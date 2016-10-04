<?php

namespace Calcinai\Strut;

use Calcinai\Strut\BaseSchema;
use Calcinai\Strut\Definitions;
class Swagger extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['swagger' => '2.0'];
    
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
     * @param Definitions\Info $info
     * @return $this
     */
    public function setInfo(Definitions\Info $info)
    {
        $this->data['info'] = $info;
        return $this;
    }
    
    /**
     * General information about the API.
     * @return Definitions\Info
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
     * A list of MIME types accepted by the API.
     * @param  $consumes
     * @return $this
     */
    public function setConsumes($consumes)
    {
        $this->data['consumes'] = $consumes;
        return $this;
    }
    
    /**
     * A list of MIME types accepted by the API.
     * @return 
     */
    public function getConsumes()
    {
        return $this->data['consumes'];
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
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     * @param Definitions\Paths $paths
     * @return $this
     */
    public function setPaths(Definitions\Paths $paths)
    {
        $this->data['paths'] = $paths;
        return $this;
    }
    
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     * @return Definitions\Paths
     */
    public function getPaths()
    {
        return $this->data['paths'];
    }
    
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     * @param Definitions\Definitions $definitions
     * @return $this
     */
    public function setDefinitions(Definitions\Definitions $definitions)
    {
        $this->data['definitions'] = $definitions;
        return $this;
    }
    
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     * @return Definitions\Definitions
     */
    public function getDefinitions()
    {
        return $this->data['definitions'];
    }
    
    /**
     * One or more JSON representations for parameters
     * @param Definitions\ParameterDefinitions $parameters
     * @return $this
     */
    public function setParameters(Definitions\ParameterDefinitions $parameters)
    {
        $this->data['parameters'] = $parameters;
        return $this;
    }
    
    /**
     * One or more JSON representations for parameters
     * @return Definitions\ParameterDefinitions
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }
    
    /**
     * One or more JSON representations for parameters
     * @param Definitions\ResponseDefinitions $responses
     * @return $this
     */
    public function setResponses(Definitions\ResponseDefinitions $responses)
    {
        $this->data['responses'] = $responses;
        return $this;
    }
    
    /**
     * One or more JSON representations for parameters
     * @return Definitions\ResponseDefinitions
     */
    public function getResponses()
    {
        return $this->data['responses'];
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
    
    /**
     * @param Definitions\SecurityDefinitions $securityDefinitions
     * @return $this
     */
    public function setSecurityDefinitions(Definitions\SecurityDefinitions $securityDefinitions)
    {
        $this->data['securityDefinitions'] = $securityDefinitions;
        return $this;
    }
    
    /**
     * @return Definitions\SecurityDefinitions
     */
    public function getSecurityDefinitions()
    {
        return $this->data['securityDefinitions'];
    }
    
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
}