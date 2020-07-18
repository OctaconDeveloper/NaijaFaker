<?php
// namespace NaijaFaker;


require_once 'vendor/autoload.php';

use NaijaFaker\Generator;

// include 'src/Naija/Generator/PhoneNumber.php';

$faker = new Generator();

var_dump($faker);
echo "<br/>";
echo "Hello";
echo "<br/>";
echo "Random Phone ::->  ";
// ($format = "normalFormat"  or $network = MTN || GLO || AIRTEL  || Lagos etc )
print_r($faker->phoneNumber($network = 'GLO')); 
echo "<br/>";
echo "Random Landline ::-> ";
// ($format = "normalFormat"  or $areaCode = Aba || Lagos etc)
print_r($faker->landLine($areaCode = 'Lagos'));  
echo "<br/>";
echo "States ::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->state($zone = '')); 
echo "<br/>";
echo "States Abbreviated::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->stateFull($zone = '')); 
echo "<br/>";
echo "LGA list::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->lgas($state = 'Akwa Ibom')); 
echo "<br/>";
echo "Random LGA::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->randomLga()); 
echo "<br/>";
echo "Random LGA by Zone::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->randomZoneLga($zone = 'SE')); 