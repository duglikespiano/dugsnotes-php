<?php

$string = 'Hello World!';

// strlen
$stringLength = strlen($string);

// str_word_count
$howManyWords = str_word_count($string);

// strpos
$stringPosition =  strpos($string, 'World');

// get specific character by index
$characterByIndex = $string[4];

// substring
$substring = substr($string, 6, 5);

// str_replace
$replacedString = str_replace('World', 'Universe', $string);

// strtolower
$loweredString = strtolower($string);

// strtoupper
$upperString = strtoupper($string);

// ucwords
$capitalizedString = ucwords($string);

// trim
$trimmedString = trim('     Hello World!         ');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $stringLength ?><br>
  <?= $howManyWords ?><br>
  <?= $stringPosition ?><br>
  <?= $characterByIndex ?><br>
  <?= $substring ?><br>
  <?= $replacedString ?><br>
  <?= $loweredString ?><br>
  <?= $upperString ?><br>
  <?= $capitalizedString ?><br>
  <?= $trimmedString ?><br>
</body>

</html>