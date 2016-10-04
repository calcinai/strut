<?php

/**
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Calcinai\Strut;

abstract class BaseSchema implements \JsonSerializable
{
    protected $data;
    protected static $pattern_properties = [];
    protected static $allow_additional_properties = false;
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
                    //Success
                    $this->data[$property_name] = $value;
                    return $this;
                }
                foreach ($types as $type) {
                    $fqcn = sprintf('%s\\%s', __NAMESPACE__, $type);
                    if ($value instanceof $fqcn) {
                        //Success
                        $this->data[$property_name] = $value;
                        return $this;
                    }
                }
                //Otherwise it fails
                throw new \InvalidArgumentException(sprintf('[%s] does not accept [%s], accepts [%s]', $property_name, is_object($value) ? get_class($value) : gettype($value), implode('|', $types)));
            }
        }
        //TODO - This handling needs to be extended in case there's an object for unnamed additional props
        if (static::$allow_additional_properties) {
            $this->data[$property_name] = $value;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf('[%s] does not accept property [%s]', get_class($this), $property_name));
    }
    public static function create($data = null)
    {
        return new static($data);
    }
    function jsonSerialize()
    {
        return $this->data;
    }
}