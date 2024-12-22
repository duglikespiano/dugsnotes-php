<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // in php, only a line of code can be written in an arrow function
  $add =  fn($a, $b) => $a + $b;

  $numbers = [1, 2, 3, 4, 5];
  $squaredNumbers = array_map(function ($number) {
    return $number * $number;
  }, $numbers);

  print_r($squaredNumbers);
  ?>
</body>

</html>