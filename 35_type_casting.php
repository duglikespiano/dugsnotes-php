<?php

$number0 = 0;
$number1 = 5;
$number2 = 7;
$number3 = '10';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
$result = $number1 + $number2; // int (int and int)
var_dump($result);
echo '<br>';

$result = $number1 + $number3; // int (string to int)
var_dump($result);
echo '<br>';

$result = $number3 + $number3; // int (string to int)
var_dump($result);
echo '<br>';

$result = $number1 . $number1; // string (int to string)
var_dump($result);
echo '<br>';

$result = $number1 . $fruit; // string (int to string)
var_dump($result);
echo '<br>';

// $result = $number1 + $fruit; // string (int to string) <-- this will occur an error
// var_dump($result);
// echo '<br>';

$result = $number1 + $bool1; // true in int is considered as 1
var_dump($result);
echo '<br>';

$result = $number1 + $bool2; // true in int is considered as 0
var_dump($result);
echo '<br>';

$result = $number1 + $null; // null in int is considered as 0
var_dump($result);
echo '<br>';


// Explicit conversion
$result = (string) $number1;
var_dump($result);
echo '<br>';

$result = (int) $fruit;
var_dump($result);
echo '<br>';

$result = (bool) $number0;
var_dump($result);
echo '<br>';

$result = (bool) $number1;
var_dump($result);
echo '<br>';
