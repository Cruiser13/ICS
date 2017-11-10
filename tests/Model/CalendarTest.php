<?php

namespace Jsvrcek\ICS\Tests\Model;

use Jsvrcek\ICS\Model\Calendar;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-10-20 at 15:24:14.
 */
class CalendarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Jsvrcek\ICS\Model\Calendar::__construct
     */
    public function testConstruct()
    {
        $c = new Calendar();
        
        //test defaults
        $this->assertEquals('America/New_York', $c->getTimezone()->getName());
    }
}
