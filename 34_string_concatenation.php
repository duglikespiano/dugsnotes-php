<?php
$firstName = 'Dug';
$lastName = 'Park';

$fullName = $firstName . ' ' . $lastName;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= 'Hi, my name is ' . $fullName . '<br>' ?>
  <?= 'Hi, my name is $fullName' ?><br>
  <?= 'Hi, my name is \'Dug\'' ?><br>
  <?= "Hi, my name is \"Dug\"" ?><br>
  <?= "Hi, my name is $fullName" ?><br>
</body>

</html>