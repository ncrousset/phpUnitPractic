<?php

namespace Tests;

include '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\CsvFileIterator;

class DataTest2 extends TestCase
{

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return new CsvFileIterator('../resources/data.csv');
    }

}