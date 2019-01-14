<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Describes the operations available on a single path. A Path Item MAY be empty, due to ACL constraints. The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.
 */

class PathItem extends BaseSchema
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
    protected static $properties = ['$ref' => ['string'], 'summary' => ['string'], 'description' => ['string'], 'get' => ['Definitions\\Operation'], 'put' => ['Definitions\\Operation'], 'post' => ['Definitions\\Operation'], 'delete' => ['Definitions\\Operation'], 'options' => ['Definitions\\Operation'], 'head' => ['Definitions\\Operation'], 'patch' => ['Definitions\\Operation'], 'trace' => ['Definitions\\Operation'], 'servers' => ['Definitions\\Server'], 'parameters' => ['Definitions\\Parameter', 'Definitions\\Reference']];
    
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
     * @param string $ref
     * @return $this
     * @throws \Exception
     */
    public function setRef($ref)
    {
        $this->set('$ref', $ref);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->get('$ref');
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
     * Describes a single API operation on a path.
     * @param Operation $get
     * @return $this
     * @throws \Exception
     */
    public function setGet(Operation $get)
    {
        $this->set('get', $get);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getGet()
    {
        return $this->get('get');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $put
     * @return $this
     * @throws \Exception
     */
    public function setPut(Operation $put)
    {
        $this->set('put', $put);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getPut()
    {
        return $this->get('put');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $post
     * @return $this
     * @throws \Exception
     */
    public function setPost(Operation $post)
    {
        $this->set('post', $post);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getPost()
    {
        return $this->get('post');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $delete
     * @return $this
     * @throws \Exception
     */
    public function setDelete(Operation $delete)
    {
        $this->set('delete', $delete);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getDelete()
    {
        return $this->get('delete');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $options
     * @return $this
     * @throws \Exception
     */
    public function setOptions(Operation $options)
    {
        $this->set('options', $options);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getOptions()
    {
        return $this->get('options');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $head
     * @return $this
     * @throws \Exception
     */
    public function setHead(Operation $head)
    {
        $this->set('head', $head);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getHead()
    {
        return $this->get('head');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $patch
     * @return $this
     * @throws \Exception
     */
    public function setPatch(Operation $patch)
    {
        $this->set('patch', $patch);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getPatch()
    {
        return $this->get('patch');
    }
    
    /**
     * Describes a single API operation on a path.
     * @param Operation $trace
     * @return $this
     * @throws \Exception
     */
    public function setTrace(Operation $trace)
    {
        $this->set('trace', $trace);
        return $this;
    }
    
    /**
     * Describes a single API operation on a path.
     * @return Operation
     */
    public function getTrace()
    {
        return $this->get('trace');
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

}