<?php

namespace NaijaFaker;

use NaijaFaker\Generator\PhoneNumber as phone;
use NaijaFaker\Generator\State as state;
use NaijaFaker\Generator\LocalGovernment as lga;

class Generator {

    // protected static $service = array(
    //     'PhoneNumber', 
    // );
 
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
}