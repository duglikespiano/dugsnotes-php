<?php

// function sum(int|float ...$numbers)
// {
//   var_dump($numbers);
//   return array_sum($numbers);
// }
// echo sum(5, 2);
function sum($a, $b)
{
  var_dump($a, $b);
  return $a + $b;
}

echo sum(b: 5, a: 2);
