<?php
/*
Harmonic Number
Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N
b. I/P -> The Harmonic Value N. ​ Ensure N != 0
c. Logic -> compute 1/1 + 1/2 + 1/3 + ... + 1/N
d. O/P -> Print the Nth Harmonic Value.
 */

include 'Utility.php';

echo "Enter number:: ";
$num = Utility::harmonic_input();

echo "Harmonic series for " . $num . " is as follows ";
echo Utility::harmonicvalue($num);
?>