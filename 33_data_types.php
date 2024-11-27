<?php

// String
$name = 'Dug';
$name = "Dug";

echo $name;
echo '<br>';
var_dump($name);
echo '<br>';
echo gettype($name);
echo '<br>';

// Integer
$age = 30;
var_dump($age);
echo '<br>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br>';


// Array
$names = ['john', 'jack', 'duuuug'];
var_dump($names);
echo '<br>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br>';

// Null
$null = null;
var_dump($null);
echo '<br>';

// Resource
// $file = fopen('test.txt', 'r');
// var_dump($file);