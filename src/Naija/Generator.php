<?php

namespace NaijaFaker;

use NaijaFaker\Generator\PhoneNumber as phone;

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
    

}