<?php 
/*
User Input and Replace String Template “Hello <<UserName>>, How are you?”
a. I/P​ -> Take User Name as Input. ​ Ensure UserName has min 3 char
b. Logic​ -> Replace <<UserName>> with the proper name
c. O/P​ -> Print the String with User Name
*/

include 'Utility.php';
$str1=" hello username,How are you?";
$str2="username";
echo "enter string";
$str3=Utility::user_string_input();

echo "string after replacement is as follows:";

echo Utility::string_replace($str2,$str3,$str1);

?>