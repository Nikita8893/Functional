<?php

include 'Utility.php';

echo " Enter size of array::\n ";
$num=Utility::integer_input();

echo " Enter the values for the array ";
$arr=Utility::array_input($num);

Utility::triplets($arr);
?>