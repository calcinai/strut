<?php

/**
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Calcinai\Strut;


abstract class BaseSchema implements \IteratorAggregate, \Countable, \JsonSerializable
{
    protected $data;
    
    protected static $enums = [];
    
    protected static $properties = [];
    
    protected static $pattern_properties = [];
    
    /**
     * This needs to be an array in the case that thse schema has more than one
     * subschema in a oneof, there's no point having to have an intermediary object.
     *
     * @var bool|array
     */
    protected static $additional_properties = [];
    
    public function __construct($data = [])
    {
        $this->parseData($data);
    }
    
    /**
     * Pattern property setter
     *
     * @param $property_name
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function set($property_name, $value)
    {
        $this->validateProperty($property_name, $value);
        $this->data[$property_name] = $value;
        return $this;
    }
    
    /**
     * Pattern property array setter
     *
     * @param $property_name
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function add($property_name, $value)
    {
        $this->validateProperty($property_name, $value);
        $this->data[$property_name][] =& $value;
        return $this;
    }
    
    /**
     * Property getter
     *
     * @param $property_name
     * @return mixed
     */
    public function get($property_name)
    {
        return $this->data[$property_name];
    }
    
    /**
     * Property isset
     *
     * @param $property_name
     * @return bool
     */
    public function has($property_name)
    {
        return isset($this->data[$property_name]);
    }
	
	/**
	 * Property unset
	 *
	 * @param $property_name
	 * @return $this
	 */
	public function remove($property_name)
	{
		unset($this->data[$property_name]);
		return $this;
	}
    
    /**
     * @param $property_name
     * @param $value
     * @return bool
     */
    private function validateProperty($property_name, $value)
    {
        //First check enums
        if (isset(static::$enums[$property_name]) && !in_array($value, static::$enums[$property_name])) {
            throw new \InvalidArgumentException(sprintf('Value for %s is not specified in the enum', $property_name));
        }
        //Test regular properties
        if (isset(static::$properties[$property_name])) {
            //There's no way to constrain it at this point
            if (empty(static::$properties[$property_name])) {
                return true;
            }
            foreach (static::$properties[$property_name] as $allowed_class) {
                $fq_class = self::getFQCN($allowed_class);
                if ($value instanceof $fq_class) {
                    return true;
                }
            }
        }
        //Then test additional
        if (is_bool(static::$additional_properties) && static::$additional_properties) {
            return true;
        } elseif (is_array(static::$additional_properties)) {
            if (empty(static::$additional_properties)) {
                return true;
            }
            foreach (static::$additional_properties as $allowed_class) {
                $fq_class = self::getFQCN($allowed_class);
                if ($value instanceof $fq_class) {
                    return true;
                }
            }
        }
        //Then test pattern
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
     * Parse a schema object into the correct objects
     *
     * @param $data
     */
    private function parseData($data)
    {
        foreach ($data as $property_name => $property) {
            //I think the best way to handle this, will at least always be consistent
            //without writing the same code twice.
            $types_to_try = [];
            //Collect regular props
            if (isset(static::$properties[$property_name])) {
                $types_to_try = array_merge($types_to_try, static::$properties[$property_name]);
            }
            //Collect pattern props
            foreach (static::$pattern_properties as $pattern_property) {
                $types_to_try = array_merge($types_to_try, $pattern_property);
            }
            //Collect additional props
            if (is_array(static::$additional_properties)) {
                $types_to_try = array_merge($types_to_try, static::$additional_properties);
            }
            if (is_array($property)) {
                foreach ($property as $property_element) {
                    $this->add($property_name, self::tryToCast($types_to_try, $property_element));
                }
            } else {
                $this->set($property_name, self::tryToCast($types_to_try, $property));
            }
        }
    }
    
    /**
     * @param $types_to_try
     * @param $object
     * @return BaseSchema
     */
    private static function tryToCast($types_to_try, $object)
    {
        //If there are no types, return as-is.
        if (empty($types_to_try)) {
            return $object;
        }
        foreach ($types_to_try as $type) {
            /** @var self $class */
            $class = self::getFQCN($type);
            try {
                return $class::create($object);
            } catch (\InvalidArgumentException $e) {
                //let it continue to the next type
            }
        }
        //If it can't go into any of the possible types, throw.
        throw new \InvalidArgumentException();
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
     * @param array $data
     * @return static
     */
    public static function create($data = [])
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
    
    /**
     * Retrieve an external iterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }
    
    /**
     * Count elements of an object
     */
    public function count()
    {
        return count($this->data);
    }

}