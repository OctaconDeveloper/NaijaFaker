<?php
namespace NaijaFaker\Generator;

class LocalGovernment extends \NaijaFaker\Factory\LocalGovernment
{ 
    
    public function lgas($state = null)
    {
        if(in_array($state, static::$States) && $state != null){
            $selectedState = self::transform($state).'State';
        }else{
            $selectedState = self::transform(self::getRandom(static::$States)).'State';         
        }
        return json_encode(static::${$selectedState});
    } 

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