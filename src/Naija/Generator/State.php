<?php
namespace NaijaFaker\Generator;

class State extends \NaijaFaker\Factory\State
{ 

    // Get States by zone or null
    // zones include ['SW','SS','SE','NE','NC', 'NW']

    public function randomState($zone = null)
    {
        if(in_array($zone, static::$Zones) && $zone != null){
            $selectedZone = $zone.'Zone';
        }else{
            $selectedZone = 'AllZones';           
        }
        return self::getRandom(static::${$selectedZone});
        // return $selectedZone;
    }

    public function abbreviatedState($zone = null)
    {
        if(in_array($zone, static::$Zones) && $zone != null){
            $selectedZone = $zone.'Zone';
        }else{
            $selectedZone = 'AllZones';           
        }
        return self::getRandomWithKey(static::${$selectedZone});
        // return $selectedZone;
    }
    

}