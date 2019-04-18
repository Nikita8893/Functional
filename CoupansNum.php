<?php

/*Coupon Numbers
a. Desc -> Given N distinct Coupon Numbers, how many random numbers do you
need to generate distinct coupon number? This program simulates this random
process.
b. I/P -> N Distinct Coupon Number
c. Logic -> repeatedly choose a random number and check whether it's a new one.
d. O/P -> total random number needed to have all distinct numbers.
e. Functions => Write Class Static Functions to generate random number and to
process distinct coupons.

 */

include 'Utility.php';
echo "Enter the n distinct coupan number ";
$num = Utility::coupan_input();

echo Utility::coupan_Numbers($num);
?>