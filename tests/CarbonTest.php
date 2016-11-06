<?php

use Zmanim\Zman;

class CarbonTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_inherits_methods_from_Carbon()
    {
        $zman = new Zman('first day of November 2016');
        $zman->addWeeks(2);

        $this->assertEquals(2, $zman->dayOfWeek);
        $this->assertEquals(15, $zman->day);
    }
}
