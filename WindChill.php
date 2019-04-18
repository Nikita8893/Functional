<?php 

include 'Utility.php';

echo "Enter the temperature: \n";
$temp=Utility::Temperature_input();

echo "Enter the speed of wind: \n";
$speed=Utility::speed_input();

$res=Utility::windchill($temp,$speed);
echo "The result is :: ".$res."\n";
?>