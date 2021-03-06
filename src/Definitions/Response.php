<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * Describes a single response from an API Operation, including design-time, static  `links` to operations based on the response.
 */

class Response extends BaseSchema
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
    protected static $properties = ['description' => ['string'], 'headers' => ['Definitions\\HeadersOrReferences'], 'content' => ['Definitions\\MediaTypes'], 'links' => ['Definitions\\LinksOrReferences']];
    
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
     * @param MediaTypes $content
     * @return $this
     * @throws \Exception
     */
    public function setContent(MediaTypes $content)
    {
        $this->set('content', $content);
        return $this;
    }
    
    /**
     * @return MediaTypes
     */
    public function getContent()
    {
        return $this->get('content');
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

}