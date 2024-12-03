<?php
// Function to check if a number is prime
function isPrime($num) {
 if ($num < 2) return false;
 for ($i = 2; $i <= sqrt($num); $i++) {
 if ($num % $i == 0) return false;
 }
 return true;
}
// Function to print the first n prime numbers
function printNPrimes($n) {
 $count = 0;
 $num = 2;
 while ($count < $n) {
 if (isPrime($num)) {
 echo $num . " ";
 $count++;
 }
 $num++;
 }
}
$n = 10; 
printNPrimes($n);
?>