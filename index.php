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
print_r($faker->stateFull($zone = null)); 
echo "<br/>";
echo "LGA list::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->lgas($state = null)); 
echo "<br/>";
echo "Random LGA by state::-> ";
// ($zone = "SW||SE etc" )
print_r($faker->randomLga()); 
echo "<br/>";
echo "Random LGA by Zone::-> ";
// ($zone = "SW||SE||NE||NW etc" )
print_r($faker->randomZoneLga()); 
echo "<br/>";
echo "Get FirstName::-> "; 
print_r($faker->firstName()); 

echo "<br/>";
echo "Get LastName::-> "; 
print_r($faker->lastName()); 

echo "<br/>";
echo "Get MaleName::-> "; 
print_r($faker->maleName()); 

echo "<br/>";
echo "Get FemaleName::-> "; 
print_r($faker->femaleName($tribe='Igbo')); 


echo "<br/>";
echo "Get FullName::-> "; 
print_r($faker->fullName()); 


echo "<br/>";
echo "Get FullName Abbreviated::-> "; 
print_r($faker->nameAbbr()); 



