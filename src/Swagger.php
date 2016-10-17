<?php

namespace Calcinai\Strut;


class Swagger extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['swagger' => '2.0'];
    
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
        $this->setInternalData('swagger', $swagger);
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
    public function setInfo(\Calcinai\Strut\Definitions\Info $info)
    {
        $this->setInternalData('info', $info);
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
        $this->setInternalData('host', $host);
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
        $this->setInternalData('basePath', $basePath);
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
        $this->addInternalData('schemes', $schemes);
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
        $this->setInternalData('consumes', $consumes);
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
        $this->setInternalData('produces', $produces);
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
     * @param Definitions\Paths $paths
     * @return $this
     */
    public function setPaths(\Calcinai\Strut\Definitions\Paths $paths)
    {
        $this->setInternalData('paths', $paths);
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
    public function setDefinitions(\Calcinai\Strut\Definitions\Definitions $definitions)
    {
        $this->setInternalData('definitions', $definitions);
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
    public function setParameters(\Calcinai\Strut\Definitions\ParameterDefinitions $parameters)
    {
        $this->setInternalData('parameters', $parameters);
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
    public function setResponses(\Calcinai\Strut\Definitions\ResponseDefinitions $responses)
    {
        $this->setInternalData('responses', $responses);
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
     * @param Definitions\SecurityRequirement $security
     * @return $this
     */
    public function addSecurity(\Calcinai\Strut\Definitions\SecurityRequirement $security)
    {
        $this->addInternalData('security', $security);
        return $this;
    }
    
    /**
     * @return Definitions\SecurityRequirement[]
     */
    public function getSecurity()
    {
        return $this->data['security'];
    }
    
    /**
     * @param Definitions\SecurityDefinitions $securityDefinitions
     * @return $this
     */
    public function setSecurityDefinitions(\Calcinai\Strut\Definitions\SecurityDefinitions $securityDefinitions)
    {
        $this->setInternalData('securityDefinitions', $securityDefinitions);
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
     * @param Definitions\Tag $tags
     * @return $this
     */
    public function addTag(\Calcinai\Strut\Definitions\Tag $tags)
    {
        $this->addInternalData('tags', $tags);
        return $this;
    }
    
    /**
     * @return Definitions\Tag[]
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
    public function setExternalDocs(\Calcinai\Strut\Definitions\ExternalDocs $externalDocs)
    {
        $this->setInternalData('externalDocs', $externalDocs);
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