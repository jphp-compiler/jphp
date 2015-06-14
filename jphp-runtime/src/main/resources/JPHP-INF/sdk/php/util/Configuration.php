<?php
namespace php\util;

use php\io\Stream;
use Traversable;

/**
 * Class Configuration
 * @package php\util
 */
class Configuration
{
    /**
     * @param string|Stream $source
     */
    public function __construct($source = null)
    {
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
    }

    /**
     * @param string $key
     * @param null|string $def
     * @return string
     */
    public function get($key, $def = null)
    {
    }

    /**
     * @param string $key
     * @param array $def
     * @return string[]
     */
    public function getArray($key, array $def = [])
    {
    }

    /**
     * @param string $key
     * @param bool $def
     * @return bool
     */
    public function getBoolean($key, $def = false)
    {
    }

    /**
     * @param string $key
     * @param int|float $def
     * @return int|float
     */
    public function getNumber($key, $def = 0)
    {
    }

    /**
     * @param string $key
     * @param int $def
     * @return int
     */
    public function getInteger($key, $def = 0)
    {
    }

    /**
     * @param string $key
     * @param string|array $value
     * @return string old value
     */
    public function set($key, $value)
    {
    }

    /**
     * @param array|Traversable $values
     */
    public function put($values)
    {
    }

    /**
     * Remove all values.
     */
    public function clear()
    {
    }

    /**
     * @param string|Stream $in
     */
    public function load($in)
    {
    }

    /**
     * @param string|Stream $out
     */
    public function save($out)
    {
    }

    /**
     * @return array
     */
    public function toArray()
    {
    }
}