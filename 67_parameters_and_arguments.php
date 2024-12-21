<?php


function add($a = 1, $b = 2)
{
  return $a + $b;
}

function addAll(...$numbers)
{
  $total = 0;

  foreach ($numbers as $number) {
    $total += $number;
  }

  return $total;
}

function sayHello($name = 'kim')
{
  return "Hello, $name!";
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
  echo add(123, 626);
  echo '<br>';
  echo add(300, 1045);
  echo '<br>';
  echo add();
  echo '<br>';
  echo sayHello('Dug');
  echo '<br>';
  echo addAll(1, 26, 1456, 134134, 67223);
  ?>
</body>

</html>