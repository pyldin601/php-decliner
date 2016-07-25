<?php

namespace RG\Libs\Decliner\Tests;

use function RG\Libs\Decliner\decline;
use function RG\Libs\Decliner\make;

class DeclinerTest extends \PHPUnit_Framework_TestCase
{
    private $cases = ['попугай', 'попугая', 'попугаев'];

    /**
     * @dataProvider parrotsDataProvider
     *
     * @param $expected
     * @param $number
     */
    public function testParrots($number, $expected)
    {
        $this->assertEquals($expected, decline($number, $this->cases));
    }

    public function testMakeDecliner()
    {
        $decline = make($this->cases);

        $this->assertEquals('0 попугаев', $decline(0));
        $this->assertEquals('1 попугай', $decline(1));
    }

    public function parrotsDataProvider()
    {
        return [
            [0, '0 попугаев'],
            [1, '1 попугай'],
            [5, '5 попугаев'],
            [15, '15 попугаев'],
            [22, '22 попугая'],
            [34, '34 попугая'],
            [31, '31 попугай'],
            [52, '52 попугая'],
            [100, '100 попугаев']
        ];
    }
}
