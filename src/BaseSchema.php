<?php

/**
 * @author     Michael Calcinai <michael@calcin.ai>
 */
namespace Calcinai\Strut;

abstract class BaseSchema implements \JsonSerializable
{
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
        $this->data[$property_name] = $value;
        return $this;
    }
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
    public static function getFQCN($relative_class)
    {
        return sprintf('\\%s\\%s', __NAMESPACE__, $relative_class);
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