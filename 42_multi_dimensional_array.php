<?php
function inspect($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

$fruits = [
  ['apple', 'red'],
  ['orange', 'orange'],
  ['banana', 'yellow'],
  ['pear', 'brown'],
];

$users = [
  ['name' => 'dug', 'email' => 'dug@dug.com', 'age' => '20'],
  ['name' => 'cat', 'email' => 'cat@cat.com', 'age' => '10'],
  ['name' => 'hoho', 'email' => 'hoho@hoho.com', 'age' => '30'],
  ['name' => 'kang', 'email' => 'kang@kang.com', 'age' => '40'],
];
$users[] = ['name' => 'baaaam', 'email' => 'baaaam@baaaam.com', 'age' => '401'];
array_push($users, ['name' => 'woooooow', 'email' => 'woooooow@woooooow.com', 'age' => '1101']);

array_pop($users);
array_shift($users);

unset($users[0]);

$output = count($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?= $fruits[0][0] ?>
  <?php inspect($users) ?>
  <?php inspect($users) ?>
  <?php inspect($users[1]['email']) ?>
  <?= $output ?>
</body>

</html>