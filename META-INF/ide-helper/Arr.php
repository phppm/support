<?php

namespace Zan\Framework\Utilities\Types;

class Arr
{
    public static function join(array $before, array $after)
    {

    }

    public static function sortByArray(array $arr, array $sort, $withNotExists=false)
    {

    }

    public static function merge()
    {

    }

    public static function mapKey(array $array, $col)
    {

    }

    /**
     * ======================================
     *  input:
     * --------------------------------------
     *  $arr = array(
     *      [ key1 => 1 , key2 => 2],
     *      [ key1 => 3 , key2 => 4],
     *      [ key1 => 5 , key2 => 6],
     *  );
     *  $col = key1;
     * ======================================
     * output
     * --------------------------------------
     * array( 1,3,5 );
     *
     */
    public static function array_cols($arr,$col,$default=false,$is_unique = false)
    {

    }

    /**
     * @param array $list
     * @param $value
     * @return array
     *
     * @example Arr::createTreeByList(['a','b','c'],1);
     * @output  ['a' => [ 'b' => [ 'c' => 1 ] ] ]
     */
    public static function createTreeByList(array $list, $value)
    {

    }

    /**
     * Determine whether the given value is array accessible.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function accessible($value)
    {

    }

    /**
     * Flatten a multi-dimensional associative array with dots.
     *
     * @param  array   $array
     * @param  string  $prepend
     * @return array
     */
    public static function dot($array, $prepend = '')
    {

    }

    /**
     * Determine if the given key exists in the provided array.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function exists($array, $key)
    {

    }

    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public static function get($array, $key, $default = null)
    {

    }

    /**
     * Check if an item exists in an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string  $key
     * @return bool
     */
    public static function has($array, $key)
    {

    }

    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    public static function set(&$array, $key, $value)
    {

    }

    /**
     * Filter the array using the given callback.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    public static function where($array, callable $callback)
    {

    }

    /**
     * Get all of the given array except for a specified array of items.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    public static function except($array, $keys)
    {

    }

    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return void
     */
    public static function forget(&$array, $keys)
    {

    }

    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array  $keys
     * @return array
     */
    public static function only(array $array, array $keys)
    {

    }

    /**
     * Return the values from a single column in the input array
     *
     * @link http://www.php.net/manual/en/function.array-column.php
     *
     * @param array $input
     * @param mixed $columnKey
     * @param mixed $indexKey
     *
     * @return array Returns an array of values representing a single column from the input array.
     */
    public static function column(array $input, $columnKey, $indexKey = null)
    {

    }
    
    /**
     * Return the values from a columns in the input array
     *
     * @param array $input
     * @param array $columnKeys
     * @param mixed $indexKey
     *
     * @return array Returns an array of values representing a columns from the input array.
     */
    public static function columns(array $input, $columnKeys, $indexKey = null)
    {

    }

    public static function arraySort($arr, $col, $sort = 'desc', $default = false)
    {

    }
}
