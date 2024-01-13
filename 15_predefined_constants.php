<?php

echo PHP_VERSION . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_INT_MAX . "<br>";
echo PHP_FLOAT_MIN . "<br>";
echo PHP_FLOAT_MAX . "<br>";
echo __LINE__  . "<br>";
echo __FILE__  . "<br>";
echo __DIR__  . "<br>";

define('FOO', 'Hello world!');
echo FOO . "<br>";

if (!defined('BAR')) {
  // const FOO = 'Hello world!'; <-- this will be an error
  define('BAR', 'Hi world!'); // <-- this will be a global constant
}
echo BAR . "<br>";

$name = 'John';
echo $name . "<br>";
unset($name);
//echo $name;


$foods = ['pizza', 'bread', 'hotdog', 'hamburger'];
print_r($foods);
echo "<br>";
// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
unset($foods[0]);
print_r($foods);
echo "<br>";
$foods = array_values($foods); // <-- reindex array 
print_r($foods);
