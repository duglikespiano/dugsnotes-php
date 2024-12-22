<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $numbers = [1, 2, 3, 4, 5];

  $squaredNumbers = array_map(function ($number) {
    return $number * $number;
  }, $numbers);

  print_r($squaredNumbers);

  function applyCallback($callback, $value)
  {
    return $callback($value);
  }

  $double = function ($number) {
    return $number * 2;
  };


  $result = applyCallback($double, 5);

  echo '<br>';

  echo $result;
  ?>
</body>

</html>