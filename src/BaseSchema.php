<?php

/**
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Calcinai\Strut;


abstract class BaseSchema implements \JsonSerializable
{
    protected $parent_schema;
    
    protected $data;
    
    protected static $pattern_properties = [];
    
    /**
     * This needs to be an array in the case that thse schema has more than one
     * subschema in a oneof, there's no point having to have an intermediary object.
     *
     * @var bool|array
     */
    protected static $additional_properties = [];
    
    /**
     * Pattern property setter.  Could do with a clean up - too many return points
     *
     * @param $property_name
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function set($property_name, $value)
    {
        $this->validateProperty($property_name, $value);
        $this->setInternalData($property_name, $value);
        return $this;
    }
    
    /**
     * @param $property_name
     * @param $value
     * @return bool
     */
    private function validateProperty($property_name, $value)
    {
        if (is_bool(static::$additional_properties) && static::$additional_properties) {
            return true;
        } elseif (is_array(static::$additional_properties)) {
            foreach (static::$additional_properties as $allowed_class) {
                $fq_class = self::getFQCN($allowed_class);
                if ($value instanceof $fq_class) {
                    return true;
                }
            }
        }
        foreach (static::$pattern_properties as $pattern => $types) {
            //Find an unused delimiter
            foreach (['/', '#', '+', '~', '%'] as $delimiter) {
                if (strpos($pattern, $delimiter) === false) {
                    break;
                }
            }
            /** @noinspection PhpUndefinedVariableInspection ...well, it is */
            if (preg_match("{$delimiter}{$pattern}{$delimiter}", $property_name)) {
                //If there's no rule, success anyway
                if (!isset($types[0])) {
                    return true;
                }
                foreach ($types as $allowed_class) {
                    $fq_class = self::getFQCN($allowed_class);
                    if ($value instanceof $fq_class) {
                        return true;
                    }
                }
            }
        }
        throw new \InvalidArgumentException(sprintf('[%s] does not accept property [%s]', get_class($this), $property_name));
    }
    
    /**
     * @param $property_name
     * @param $value
     */
    protected function setInternalData($property_name, $value)
    {
        $this->data[$property_name] = $value;
        //This is so the generated code is a bit cleaner.
        if ($value instanceof BaseSchema) {
            $value->setParentSchema($this);
        }
    }
    
    /**
     * @param $property_name
     * @param $value
     */
    protected function addInternalData($property_name, $value)
    {
        $this->data[$property_name][] =& $value;
        //This is so the generated code is a bit cleaner.
        if ($value instanceof BaseSchema) {
            $value->setParentSchema($this);
        }
    }
    
    /**
     * @param mixed $parent_schema
     * @return BaseSchema
     */
    protected function setParentSchema($parent_schema)
    {
        $this->parent_schema = $parent_schema;
        return $this;
    }
    
    /**
     * This should be overloaded if there's actually a id
     *
     * It's probably not the best implementation, but it's used rarely.
     *
     * @return $this
     */
    public function getId()
    {
        if ($this->parent_schema instanceof BaseSchema) {
            return sprintf('/%s', array_search($this, $this->parent_schema->data));
        } else {
            return '#';
        }
    }
    
    /**
     * @param $relative_class
     * @return string
     */
    protected static function getFQCN($relative_class)
    {
        return sprintf('\\%s\\%s', __NAMESPACE__, $relative_class);
    }
    
    /**
     * @param null $data
     * @return static
     */
    public static function create($data = null)
    {
        return new static($data);
    }
    
    /**
     * @return mixed
     */
    function jsonSerialize()
    {
        return $this->data;
    }

}