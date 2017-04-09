<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @dataProvider additionProviderNamedDataSets
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [0, 1, 1],
            [0, 0, 0],
            [1, 1, 2],
            [3, 4, 7]
        ];
    }

    public function additionProviderNamedDataSets()
    {
        return [
            'adding zeros' => [0, 1, 1],
            'zeros plus one' => [9, 0, 9],
            'one plus zero' => [5, 5, 10],
            'one plus one' => [2, 1, 3]
        ];
    }
}