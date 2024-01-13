<?php

function foo()
{
  static $a = 1;
  return $a++;
}

echo foo() . "<br>";
echo foo() . "<br>";
echo foo() . "<br>";

// $x = 5;
// function foo()
// {
//   global $x;
//   echo $x;
//   $x++;
// }
// foo();
// foo();
