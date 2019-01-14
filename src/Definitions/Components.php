<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.
 */

class Components extends BaseSchema
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
    protected static $properties = ['schemas' => ['Definitions\\SchemasOrReferences'], 'responses' => ['Definitions\\ResponsesOrReferences'], 'parameters' => ['Definitions\\ParametersOrReferences'], 'examples' => ['Definitions\\ExamplesOrReferences'], 'requestBodies' => ['Definitions\\RequestBodiesOrReferences'], 'headers' => ['Definitions\\HeadersOrReferences'], 'securitySchemes' => ['Definitions\\SecuritySchemesOrReferences'], 'links' => ['Definitions\\LinksOrReferences'], 'callbacks' => ['Definitions\\CallbacksOrReferences']];
    
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
     * @param SchemasOrReferences $schemas
     * @return $this
     * @throws \Exception
     */
    public function setSchemas(SchemasOrReferences $schemas)
    {
        $this->set('schemas', $schemas);
        return $this;
    }
    
    /**
     * @return SchemasOrReferences
     */
    public function getSchemas()
    {
        return $this->get('schemas');
    }
    
    /**
     * @param ResponsesOrReferences $responses
     * @return $this
     * @throws \Exception
     */
    public function setResponses(ResponsesOrReferences $responses)
    {
        $this->set('responses', $responses);
        return $this;
    }
    
    /**
     * @return ResponsesOrReferences
     */
    public function getResponses()
    {
        return $this->get('responses');
    }
    
    /**
     * @param ParametersOrReferences $parameters
     * @return $this
     * @throws \Exception
     */
    public function setParameters(ParametersOrReferences $parameters)
    {
        $this->set('parameters', $parameters);
        return $this;
    }
    
    /**
     * @return ParametersOrReferences
     */
    public function getParameters()
    {
        return $this->get('parameters');
    }
    
    /**
     * @param ExamplesOrReferences $examples
     * @return $this
     * @throws \Exception
     */
    public function setExamples(ExamplesOrReferences $examples)
    {
        $this->set('examples', $examples);
        return $this;
    }
    
    /**
     * @return ExamplesOrReferences
     */
    public function getExamples()
    {
        return $this->get('examples');
    }
    
    /**
     * @param RequestBodiesOrReferences $requestBodies
     * @return $this
     * @throws \Exception
     */
    public function setRequestBodies(RequestBodiesOrReferences $requestBodies)
    {
        $this->set('requestBodies', $requestBodies);
        return $this;
    }
    
    /**
     * @return RequestBodiesOrReferences
     */
    public function getRequestBodies()
    {
        return $this->get('requestBodies');
    }
    
    /**
     * @param HeadersOrReferences $headers
     * @return $this
     * @throws \Exception
     */
    public function setHeaders(HeadersOrReferences $headers)
    {
        $this->set('headers', $headers);
        return $this;
    }
    
    /**
     * @return HeadersOrReferences
     */
    public function getHeaders()
    {
        return $this->get('headers');
    }
    
    /**
     * @param SecuritySchemesOrReferences $securitySchemes
     * @return $this
     * @throws \Exception
     */
    public function setSecuritySchemes(SecuritySchemesOrReferences $securitySchemes)
    {
        $this->set('securitySchemes', $securitySchemes);
        return $this;
    }
    
    /**
     * @return SecuritySchemesOrReferences
     */
    public function getSecuritySchemes()
    {
        return $this->get('securitySchemes');
    }
    
    /**
     * @param LinksOrReferences $links
     * @return $this
     * @throws \Exception
     */
    public function setLinks(LinksOrReferences $links)
    {
        $this->set('links', $links);
        return $this;
    }
    
    /**
     * @return LinksOrReferences
     */
    public function getLinks()
    {
        return $this->get('links');
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

}