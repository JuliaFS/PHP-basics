<?php
$firstNumber = 2;
$secondNumber = 5;
$result = '$firstNumber + $secondNumber = ' . " $firstNumber + $secondNumber  = " . ($firstNumber + $secondNumber) . "<br>\n";
echo $result;

$firstNumber = 1.567808;
$secondNumber = 0.356;
$result = '$firstNumber + $secondNumber = ' . " $firstNumber + $secondNumber  = " . (round(($firstNumber + $secondNumber),2));
echo $result . "<br>\n";

$firstNumber = 1234.5678;
$secondNumber = 333;
$result = '$firstNumber + $secondNumber = ' . " $firstNumber + $secondNumber  = " . (round(($firstNumber + $secondNumber),2));
echo $result;
?>