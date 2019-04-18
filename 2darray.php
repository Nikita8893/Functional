<?php

include 'Utility.php';
echo " Enter how many row :: ";
$row = Utility::row_input();

echo " Enter how many col :: ";
$col = Utility::col_input();

echo " Enter the value :: \n";

$arr = Utility::array_value($row, $col);
?>