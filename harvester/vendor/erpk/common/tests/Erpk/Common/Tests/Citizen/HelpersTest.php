<?php
namespace Erpk\Common\Tests\Citizen;

use Erpk\Common\Tests\TestCase;
use Erpk\Common\Citizen\Helpers;
use Erpk\Common\DateTime;

class HelpersTest extends TestCase
{
    public function testGetAvatar()
    {
        $platoAvatar =
            'http://static.erepublik.net/uploads/avatars/'.
            'Citizens/2007/06/04/c81e728d9d4c2f636f067f89cc14862c';

        $this->assertEquals(
            $platoAvatar.'_142x142.jpg',
            Helpers::getAvatar(
                2,
                new DateTime('2007-06-04'),
                Helpers::AVATAR_PROFILE
            )
        );

        $this->assertEquals(
            $platoAvatar.'.jpg',
            Helpers::getAvatar(
                2,
                new DateTime('2007-06-04'),
                Helpers::AVATAR_ORIGINAL
            )
        );
    }

    public function testGetHit()
    {
        $this->assertEquals(10590, Helpers::getHit(31212, 62));
    }
}
