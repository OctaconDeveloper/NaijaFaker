<?php

namespace NaijaFaker;

use NaijaFaker\Generator\PhoneNumber as phone;
use NaijaFaker\Generator\State as state;
use NaijaFaker\Generator\LocalGovernment as lga;
use NaijaFaker\Generator\Person as person;

class Generator {

    public function phoneNumber($args = null)
    {
        return phone::randomPhoneNumber($args);
    }

    public function landLine($args = null)
    {
        return phone::randomLandLine($args);
    }
    
    public function state($args = null)
    {
        return state::randomState($args);
    }

    public function stateFull($args = null)
    {
        return state::abbreviatedState($args);
    }

    public function lgas($args = null){
        return lga::lgas($args);
    }

    public function randomLga($args = null){
        return lga::randomLga($args);
    }

    public function randomZoneLga($args = null){
       return  lga::randomLga(state::randomState($args));
    }

    public function firstName($args = null){
        return  person::firstName($args);
     }

     public function lastName($args = null){
        return  person::lastName($args);
     }

     public function maleName($args = null){
        return  person::maleName($args);
     }

     public function femaleName($args = null){
        return  person::femaleName($args);
     }

     public function fullName($args = null){
        return  person::fullName($args);
     }

     public function nameAbbr($args = null){
        return  person::nameAbbr($args);
     }

     
}