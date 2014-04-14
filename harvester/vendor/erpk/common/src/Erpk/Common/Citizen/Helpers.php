<?php
namespace Erpk\Common\Citizen;

use DateTime;

class Helpers
{
    const AVATAR_SMALL = 50;
    const AVATAR_MEDIUM = 100;
    const AVATAR_PROFILE = 142;
    const AVATAR_ORIGINAL = null;

    /**
     * Returns citizen's avatar URL
     * @param  int        $id         Citizen ID
     * @param  DateTime   $createdAt  Date when citizen was created
     * @param  int|null   $size       Size of avatar image
     * @return string                 Citizen's avatar URL
     */
    public static function getAvatar($id, DateTime $createdAt, $size = null)
    {
        return
            'http://static.erepublik.net/uploads/avatars/Citizens/'.
            $createdAt->format('Y/m/d').'/'.
            md5($id).($size ? '_'.$size.'x'.$size : '').'.jpg';
    }
    
    /**
     * Returns influence made with single hit
     * @param  int  $strength        Citizen's strength
     * @param  int  $rankLevel       Citizen's rank level
     * @param  integer $firePower    Weapon fire power
     * @param  boolean $eliteCitizen Boolean if citizen is "elite"
     * @return int                   Influence made with single hit
     */
    public static function getHit($strength, $rankLevel, $firePower = 0, $eliteCitizen = false)
    {
        $mod = $eliteCitizen ? 1.1 : 1;
        return floor($mod*(10 * (1 + $strength/400) * (1 + $rankLevel/5) * (1 + $firePower/100)));
    }
    
    /**
     * Returns citizen's division
     * @param  int $level Citizen's level
     * @return int        Citizen's division
     */
    public static function getDivision($level)
    {
        if ($level < 35) {
            return 1;
        } elseif ($level < 50) {
            return 2;
        } elseif ($level < 70) {
            return 3;
        } else {
            return 4;
        }
    }
}
