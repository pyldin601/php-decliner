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
    $cases = [2, 0, 1, 1, 1, 2];
    $modOf100 = $number % 100;
    $modOfTen = $number % 10;
    
    return $number . " " . $titles[($modOf100 > 4 && $modOf100 < 20) ? 2 : $cases[min($modOfTen, 5)]];
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
