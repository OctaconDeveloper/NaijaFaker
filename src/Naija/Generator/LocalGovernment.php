<?php
namespace NaijaFaker\Generator;

class LocalGovernment extends \NaijaFaker\Factory\LocalGovernment
{ 
    //  1. Load all Local governments by state
    public function lgas($state = null)
    {
        if(in_array($state, static::$States) && $state != null){
            $selectedState = self::transform($state).'State';
        }else{
            $selectedState = self::transform(self::getRandom(static::$States)).'State';         
        }
        return json_encode(static::${$selectedState});
    } 
    // 2. Get random lga from a given state
    public function randomLga($state = null)
    {
        if(in_array($state, static::$States) && $state != null){
            $selectedState = self::transform($state).'State';
        }else{
            $selectedState = self::transform(self::getRandom(static::$States)).'State';         
        }
        return self::getRandom(static::${$selectedState});
    } 
}