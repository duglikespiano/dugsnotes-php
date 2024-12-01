<?php

$output = null;

$user = [
  'name' => 'dug',
  'email' => 'dug@dug.com',
  'password' => 1234,
  'hobbies' => ['eating', 'sleeping']
];

function inspect($value)
{

  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

inspect($user);
inspect($user['name']);
inspect($user['hobbies'][0]);

$user['address'] = '123 Main St';
inspect($user);


unset($user['address']);
inspect($user);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>