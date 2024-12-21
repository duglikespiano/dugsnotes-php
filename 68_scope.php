<?php

// Global scope
$name = 'dug';

// Code below will occur an error because of variable's scope
// function sayHello(){
//   // Local scope
//  return "Hello, $name"; 
// }

// Solution1 - pass a global variable as an argument
// function sayHello($name)
// {
//   return "Hello, $name";
// }

// Solution2 - add 'global keyword' inside of the function
function sayHello()
{
  global $name;
  return "Hello, $name";
};


function sayGoodbye()
{
  $names = ['dug', 'lee'];
  return "Hello, $names[0]";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo $name;
  echo '<br>';
  echo sayGoodbye();
  ?>

</body>

</html>