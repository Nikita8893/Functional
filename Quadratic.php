<?php
include 'Utility.php';

echo "Enter the value for a :\n ";
$a=Utility::integer_input();

echo "Enter the value for b :\n";
$b=Utility::integer_input();

echo "Enter the value for c :\n";
$c=Utility::integer_input();

Utility::Qud_roots($a,$b,$c);
?>