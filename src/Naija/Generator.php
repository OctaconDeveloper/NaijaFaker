<?php

namespace NaijaFaker;

use NaijaFaker\Generator\PhoneNumber as phone;
use NaijaFaker\Generator\State as state;

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

}