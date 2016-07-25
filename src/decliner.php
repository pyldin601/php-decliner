<?php

namespace RG\Libs\Decliner;

/**
 * Returns declined numeral.
 *
 * @param $number
 * @param array $titles
 * @return string
 */
function decline($number, array $titles)
{
    $cases = array (2, 0, 1, 1, 1, 2);
    return $number . " " . $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
}

/**
 * Makes configured decliner.
 *
 * @param array $titles
 * @return \Closure
 */
function make(array $titles)
{
    /**
     * @param int $number
     * @return string
     */
    return function ($number) use ($titles) {
        return decline($number, $titles);
    };
}
