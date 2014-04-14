<?php
namespace Erpk\Common\Tests\Citizen;

use Erpk\Common\Tests\TestCase;
use Erpk\Common\Citizen\Rank;

class RankTest extends TestCase
{
    public function testLevels()
    {
        $rank = new Rank(0);
        $this->assertEquals(1, $rank->getLevel());

        $rank = new Rank(328020752);
        $this->assertEquals(64, $rank->getLevel());
        $this->assertEquals('God of War**', $rank->getName());
        $this->assertEquals(
            'http://s1.www.erepublik.net/images/modules/ranks/god_of_war_2.png',
            $rank->getImage()
        );

        $rank = new Rank(10000000001);
        $this->assertEquals(69, $rank->getLevel());
        $this->assertEquals('Titan***', $rank->getName());

        $rank = new Rank(null, 64);
        $this->assertEquals(64, $rank->getLevel());
        $this->assertEquals('God of War**', $rank->getName());
        $this->assertEquals(
            'http://s1.www.erepublik.net/images/modules/ranks/god_of_war_2.png',
            $rank->getImage()
        );

        $rank = new Rank(null, 1);
        $this->assertEquals(1, $rank->getLevel());
        $this->assertEquals('Recruit', $rank->getName());
    }
}
