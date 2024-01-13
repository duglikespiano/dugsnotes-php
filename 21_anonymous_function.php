<?php

$multiplier = 2;
$multiply = fn ($num) => $num * $multiplier;

function anotherMultiply($num)
{
  return $num * 2;
}

function sum(int|float $a, int|float $b, callable $callback)
{
  return $callback($a + $b);
}
echo sum(5, 2, 'anotherMultiply');
echo "<br>" . $multiplier;


// $multiplier = 2;
// $multiply = fn ($num) => $num * $multiplier;
// // arrow function doesn't need 'use' keyword to copy the variable
// // it automatically copy the variable

// function sum($a, $b, $callback)
// {
//   return $callback($a + $b);
// }
// echo sum(5, 2, $multiply);
// echo "<br>" . $multiplier;

// $multiply = function ($num) use ($multiplier) {
//   // using 'use' will copy the variable, not access directly
//   $multiplier = 7;
//   return $num * $multiplier;
// };
// function sum($a, $b, $callback)
// {
//   return $callback($a + $b);
// }
// echo sum(5, 2, $multiply);
// echo "<br>" . $multiplier;

// $multiply = function ($num) {
//   return $num * 2;
// };
// $multiply = function ($num) {
//   return $num * 3;
// };
// echo $multiply(5);

// function ($num) {
//   return $num * 2;
// };

// function multiply($num)
// {
//   return $num * 2;
// }
// echo multiply(5);
