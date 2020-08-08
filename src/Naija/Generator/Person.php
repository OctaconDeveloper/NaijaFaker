<?php
namespace NaijaFaker\Generator;

class Person extends \NaijaFaker\Factory\Person
{ 
    
     public function firstName($tribe = null)
     {
        if(in_array($tribe, static::$allowedTribe) && $tribe != null){
            $selectedTribe = self::refactor($tribe).self::getRandom(static::$firstName);
        }else{
            $selectedTribe = self::refactor(self::getRandom(static::$allowedTribe)).self::getRandom(static::$firstName);      
        }
        return self::getRandom(static::${$selectedTribe});
     }

     public function lastName($tribe = null)
     {
       if(in_array($tribe, static::$allowedTribe) && $tribe != null){
            $selectedTribe = self::refactor($tribe).'LastName';
        }else{
            $selectedTribe = self::refactor(self::getRandom(static::$allowedTribe)).'LastName';      
        }
        return self::getRandom(static::${$selectedTribe});  
     }

     public function maleName($tribe = null)
     {
        if(in_array($tribe, static::$allowedTribe) && $tribe != null){
            $selectedTribe = self::refactor($tribe).'MaleName';
        }else{
            $selectedTribe = self::refactor(self::getRandom(static::$allowedTribe)).'MaleName';      
        }
        return self::getRandom(static::${$selectedTribe});    
     }

     public function femaleName($tribe = null)
     {
        if(in_array($tribe, static::$allowedTribe) && $tribe != null){
            $selectedTribe = self::refactor($tribe).'FemaleName';
        }else{
            $selectedTribe = self::refactor(self::getRandom(static::$allowedTribe)).'FemaleName';      
        }
        return self::getRandom(static::${$selectedTribe});   
     }

     public function fullName($tribe = null)
     {
        if(!in_array($tribe, static::$allowedTribe) && $tribe == null){
            $tribe = self::getRandom(static::$allowedTribe);
        }
        return self::lastName($tribe).' '.self::firstName($tribe);
     }

    public function nameAbbr($tribe = null)
    {
       if(!in_array($tribe, static::$allowedTribe) && $tribe == null){
           $tribe = self::getRandom(static::$allowedTribe);
       }
       return self::trimpos(self::firstName($tribe)).' '.self::lastName($tribe);
    }
   
}