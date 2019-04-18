<?php 

/*
Factors
Desc -> Computes the prime factorization of N using brute force.
I/P -> Number to find the prime factors
Logic -> Traverse till i*i <= N instead of i <= N for efficiency​ .
O/P -> Print the prime factors of number N.
*/
include 'Utility.php';

echo "Enter number\n";
$num1=Utility::factors_input();

//echo Utility::check_prime($num1);
//echo "\nPrime factors are::";
//echo Utility::primefactors($num1
echo Utility::primenum($num1);

?>