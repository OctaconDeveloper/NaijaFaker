<?php
namespace NaijaFaker;

require_once 'vendor/autoload.php';
// include 'src/Naija/Generator/PhoneNumber.php';
use NaijaFaker\Generator\PhoneNumber;

$phone = new PhoneNumber();

var_dump($phone);
echo "<br/>"; 
echo "Hello"; 
echo "<br/>";
print_r($phone->randomPhoneNumber());