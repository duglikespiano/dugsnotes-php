<?php


// Constants are global
define('APP_NAME', 'DUGS NOTE');
define('APP_VERSION', 1.01);

// Const can be declared by keyword 'const'
const DESCRIPTION = 'oh yeah';

function check()
{
  return APP_NAME;
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
  <?php
  echo APP_NAME;
  echo '<br>';
  echo APP_VERSION;
  echo '<br>';
  echo check();
  echo '<br>';
  echo DESCRIPTION
  ?>
</body>

</html>