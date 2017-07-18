<?php

namespace Zan\Framework\Utilities\Types;

use InvalidArgumentException;

class Json
{
    /**
     * @param mixed $value
     * @param int $options
     * @param int $depth
     * @return string
     * @throws InvalidArgumentException
     */
    public static function encode($value, $options = 0, $depth = 512)
    {

    }

    /**
     * @param string $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     * @throws InvalidArgumentException
     */
    public static function decode($json, $assoc = true, $depth = 512, $options = JSON_BIGINT_AS_STRING)
    {

    }
}