<?php

namespace ZanPHP\Support;

/**
 * Benchmark Class
 *
 * This class enables you to mark points and calculate the time difference
 * between them. Memory consumption can also be displayed.
 *
 */
class Benchmark
{

    /**
     * List of all benchmark markers
     *
     * @var	array
     */
    public static $marker = array();

    /**
     * Set a benchmark marker
     *
     * Multiple calls to this function can be made so that several
     * execution points can be timed.
     *
     * @param	string	$name	Marker name
     * @return	void
     */
    public static function mark($name)
    {
        $marker[$name] = microtime(TRUE);
    }

    /**
     * Elapsed time
     *
     * Calculates the time difference between two marked points.
     *
     * @param	string	$point1		A particular marked point
     * @param	string	$point2		A particular marked point
     * @param	int	$decimals	Number of decimal places
     *
     * @return	string	Calculated elapsed time on success
     *
     */
    public static function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
    {
        if (!isset($marker[$point1])) {
            return '';
        }

        if (!isset($marker[$point2])) {
            $marker[$point2] = microtime(TRUE);
        }

        return number_format($marker[$point2] - $marker[$point1], $decimals);
    }

}