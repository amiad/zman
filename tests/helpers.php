<?php

class helpers extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_converts_a_jewish_date_to_a_secular_date()
    {
        $secular = toSecular(7, 14, 5777);

        $this->assertEquals(3, $secular->month);
        $this->assertEquals(12, $secular->day);
        $this->assertEquals(2017, $secular->year);
    }

    /** @test */
    public function it_converts_a_secular_date_to_a_jewish_date()
    {
        $jewish = explode('/', toJewish(3, 12, 2017));

        $this->assertEquals(7, $jewish[0]);
        $this->assertEquals(14, $jewish[1]);
        $this->assertEquals(5777, $jewish[2]);
    }

    /** @test */
    public function it_checks_if_a_year_is_meubar()
    {
        $this->assertTrue(isLeapYear(5779));
        $this->assertFalse(isLeapYear(5777));
    }
}