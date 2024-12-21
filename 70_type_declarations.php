<?php

declare(strict_types=1);

function getSum(int $a, int $b): int
{
  return $a + $b;
}

function sayHello(string $name): string
{
  return "Hello, $name";
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
  <?= getSum(1, 3) ?>
  <?= '<br>' ?>
  <?= sayHello('dug') ?>
</body>

</html>