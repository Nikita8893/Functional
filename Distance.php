<?php 

include 'Utility.php';

echo "Enter the value for X \n";
$x=Utility::integer_input();
echo "Enter the value for Y \n";
$y=Utility::integer_input();

echo "Distance is ".Utility::distance($x,$y);

?>