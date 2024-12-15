<?php
// Create a cookie
setcookie('username', 'dug', time() + 3600, '/');
$username = $_COOKIE['username'] ?? 'guest';

// Remove a ciikie
setcookie('username', 'dug', time() + 3600, '/');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= "Hi! $username" ?>
</body>

</html>