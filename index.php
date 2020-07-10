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
print_r($faker->phoneNumber($network = 'MTN')); 
echo "<br/>";
echo "Random Landline ::-> ";
// ($format = "normalFormat"  or $areaCode = Aba || Lagos etc)
print_r($faker->landLine($areaCode = 'Lagos')); 