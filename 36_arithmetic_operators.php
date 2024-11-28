<?php

$output = null;
$num1 = 20;
$num2 = 10;

// Basic math
$sum = "$num1 + $num2 = " . $num1 + $num2;
$subtraction = "$num1 - $num2 = " . $num1 - $num2;
$multiply = "$num1 * $num2 = " . $num1 * $num2;
$division = "$num1 / $num2 = " . $num1 / $num2;
$remainder = "$num1 % $num2 = " . $num1 % $num2;

// Assignment operator
$num3 = 10;
$num3 = $num3 + 20;
$num3 += 20;
$num3 -= 20;
$num3 /= 20;

// Built in php functions
$randomNumber1 = rand();
$randomNumber2 = getrandmax();
$randomNumber3 = rand(1, 10);

// round()
$round = round(4.2);

// ceil()
$ceil = ceil(4.2);

// floor()
$floor = ceil(4.2);

// sqrt()
$sqrt = sqrt(16);

// pi()
$pi = pi();

// abs()
$abs = abs(-16);

// max()
$max = max(1, 2, 3, 50);
$max = max([1, 2, 3, 50]);

// min()
$min = min(1, 2, 3, 50);
$min = min([1, 2, 3, 50]);

// number_format()
$formattedNumber = number_format(2352345.123123, 2, '.', ',')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $sum ?><br>
  <?= $subtraction ?><br>
  <?= $multiply ?><br>
  <?= $division ?><br>
  <?= $remainder ?><br>
  <?= $num3 ?><br>
  <?= $randomNumber1 ?><br>
  <?= $randomNumber2 ?><br>
  <?= $randomNumber3 ?><br>
  <?= $round ?><br>
  <?= $ceil ?><br>
  <?= $floor ?><br>
  <?= $sqrt ?><br>
  <?= $pi ?><br>
  <?= $abs ?><br>
  <?= $max ?><br>
  <?= $min ?><br>
  <?= $formattedNumber ?><br>
</body>

</html>