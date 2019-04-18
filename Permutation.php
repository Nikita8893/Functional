<?php

include 'Utility.php';
echo " Enter the String \n";
$str=Utility::get_string();

echo " Permutation of ".$str." is as follows \n";
echo Utility::permute($str,0,strlen($str));

?>
