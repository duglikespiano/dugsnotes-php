<?php

$dayOfWeek = date('l');

switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday!';
    $color = 'olive';
    break;
  case 'Tuesday':
    $message = 'Tuesday!';
    $color = 'red';
    break;
  case 'Wednesday':
    $message = 'Wednesday!';
    $color = 'yellow';
    break;
  case 'Thursday':
    $message = 'Thursday!';
    $color = 'gold';
    break;
  case 'Friday':
    $message = 'Friday!';
    $color = 'red';
    break;
  case 'Saturday':
    $message = 'Saturday!';
    $color = 'pink';
    break;
  case 'Sunday':
    $message = 'Sunday!';
    $color = 'brown';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="width: 100%; height: 100vh; background-color : <?= $color ?>; margin: 0;">

</body>

</html>