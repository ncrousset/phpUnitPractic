<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{

    public function testSomething()
    {
        $this->assertTrue(true, 'This should already work.');

        $this->markTestIncomplete('This test has not been implemented yet.');

    }

}