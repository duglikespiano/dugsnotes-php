<?php
//like typeof of Javascript
var_dump(29);

$data = null;
var_dump($data);

$isLoggedIn = true;
var_dump($isLoggedIn);

$hasBlogPosts;
//an error occurrs
// var_dump($hasBlogPosts);

$number_int = -240_000_000;
var_dump($number_int);

$number_float = -1.435;
var_dump($number_float);

// string interpolation is the process of replacing a placeholder with a value
// like ${} in Javascript, only avaliable in double quotes

$string_1 = 'John';
var_dump($string_1);

$string_2 = "$string_1 Smith";
var_dump($string_2);

$string_3 = "{$string_1}tail";
var_dump($string_3);

// like Javascript's string[index]
var_dump($string_3[4]);