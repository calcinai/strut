<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
/**
 * A single encoding definition applied to a single schema property.
 */

class Encoding extends BaseSchema
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
    protected static $properties = ['contentType' => ['string'], 'headers' => ['Definitions\\HeadersOrReferences'], 'style' => ['string'], 'explode' => ['boolean'], 'allowReserved' => ['boolean']];
    
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
     * @param string $contentType
     * @return $this
     * @throws \Exception
     */
    public function setContentType($contentType)
    {
        $this->set('contentType', $contentType);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->get('contentType');
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
     * @param string $style
     * @return $this
     * @throws \Exception
     */
    public function setStyle($style)
    {
        $this->set('style', $style);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->get('style');
    }
    
    /**
     * @param boolean $explode
     * @return $this
     * @throws \Exception
     */
    public function setExplode($explode)
    {
        $this->set('explode', $explode);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getExplode()
    {
        return $this->get('explode');
    }
    
    /**
     * @param boolean $allowReserved
     * @return $this
     * @throws \Exception
     */
    public function setAllowReserved($allowReserved)
    {
        $this->set('allowReserved', $allowReserved);
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getAllowReserved()
    {
        return $this->get('allowReserved');
    }

}