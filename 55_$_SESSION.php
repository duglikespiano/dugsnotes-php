<?php

session_start();

$_SESSION['name'] = 'dug';
if (isset($_SESSION['name'])) {
  echo $_SESSION['name'];
} else {
  echo 'name is not set';
}

// unset($_SESSION['name']);
// session_destroy()

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