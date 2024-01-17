<?php

function test($num1, $num2)
{
  try {
    if ($num1 < 0 || $num2 < 0) {
      throw new Exception('INVALID ARGUMENT');
    }
  } catch (Exception $error) {
    echo "Error : {$error->getMessage()} has occurred<br>";
  } finally {
    echo 'Finally, I am here';
  }
  return $num1 / $num2;
}

echo test(1, -1);
