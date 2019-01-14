<?php

namespace Calcinai\Strut;

use Calcinai\Strut\Definitions\Info;
use Calcinai\Strut\Definitions\Server;
use Calcinai\Strut\Definitions\Paths;
use Calcinai\Strut\Definitions\Components;
use Calcinai\Strut\Definitions\SecurityRequirement;
use Calcinai\Strut\Definitions\Tag;
use Calcinai\Strut\Definitions\ExternalDocs;
/**
 * This is the root document object of the OpenAPI document.
 */

class OpenAPI extends BaseSchema
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
    protected static $properties = ['openapi' => ['string'], 'info' => ['Definitions\\Info'], 'servers' => ['Definitions\\Server'], 'paths' => ['Definitions\\Paths'], 'components' => ['Definitions\\Components'], 'security' => ['Definitions\\SecurityRequirement'], 'tags' => ['Definitions\\Tag'], 'externalDocs' => ['Definitions\\ExternalDocs']];
    
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
     * @param string $openapi
     * @return $this
     * @throws \Exception
     */
    public function setOpenapi($openapi)
    {
        $this->set('openapi', $openapi);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getOpenapi()
    {
        return $this->get('openapi');
    }
    
    /**
     * The object provides metadata about the API. The metadata MAY be used by the clients if needed, and MAY be presented in editing or documentation generation tools for convenience.
     * @param Info $info
     * @return $this
     * @throws \Exception
     */
    public function setInfo(Info $info)
    {
        $this->set('info', $info);
        return $this;
    }
    
    /**
     * The object provides metadata about the API. The metadata MAY be used by the clients if needed, and MAY be presented in editing or documentation generation tools for convenience.
     * @return Info
     */
    public function getInfo()
    {
        return $this->get('info');
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
    
    /**
     * Holds the relative paths to the individual endpoints and their operations. The path is appended to the URL from the `Server Object` in order to construct the full URL.  The Paths MAY be empty, due to ACL constraints.
     * @param Paths $paths
     * @return $this
     * @throws \Exception
     */
    public function setPaths(Paths $paths)
    {
        $this->set('paths', $paths);
        return $this;
    }
    
    /**
     * Holds the relative paths to the individual endpoints and their operations. The path is appended to the URL from the `Server Object` in order to construct the full URL.  The Paths MAY be empty, due to ACL constraints.
     * @return Paths
     */
    public function getPaths()
    {
        return $this->get('paths');
    }
    
    /**
     * Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.
     * @param Components $components
     * @return $this
     * @throws \Exception
     */
    public function setComponents(Components $components)
    {
        $this->set('components', $components);
        return $this;
    }
    
    /**
     * Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.
     * @return Components
     */
    public function getComponents()
    {
        return $this->get('components');
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
     * @param Tag $tags
     * @return $this
     * @throws \Exception
     */
    public function addTag(Tag $tags)
    {
        $this->add('tags', $tags);
        return $this;
    }
    
    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->get('tags');
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

}