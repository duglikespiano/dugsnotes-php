<?php

function test($num1, $num2)
{
  if ($num1 < 0 || $num2 < 0) {
    throw new Exception('INVALID ARGUMENT');
  }
  return $num1 / $num2;
}

echo test(1, -1);
