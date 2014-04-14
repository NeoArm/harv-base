<?php
namespace Erpk\Common\Tests\Citizen;

use Erpk\Common\Tests\TestCase;
use Erpk\Common\DateTime;
use DateTimeZone;

class DateTimeTest extends TestCase
{
    public function testConstruct()
    {
        $dT1 = new DateTime('2012-12-12');
        $dT2 = DateTime::createFromDay(1849);
        
        $this->assertEquals(1849, $dT1->getDay());
        $this->assertEquals(1849, $dT2->getDay());
        $this->assertEquals('2012-12-12', $dT2->format('Y-m-d'));
    }
}
