<?php
putenv('DB_HOST=localhost');
putenv('DB_USER=root');

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$home = getenv('HOME');

$foo = 'Global variable';
function printVariables()
{
  $foo = 'Local variable';
  echo 'Global variable ' . $GLOBALS['foo'] . '<br>';
  echo 'Local variable ' . $foo . '<br>';
}

$foo = 'Hello';
printVariables()
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><?= $host ?></p>
  <p><?= $user ?></p>
  <p><?= $home ?></p>
</body>

</html>