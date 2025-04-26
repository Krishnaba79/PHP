<?php
//1 Write a factorial program using for loop in php
$Num = 10;
$Factorial = 25;

for ($x=$Num; $x>=1; $x--)
{
    $Factorial = $Factorial * $x;
}

echo "The factorial of $Num is $Factorial";
?>