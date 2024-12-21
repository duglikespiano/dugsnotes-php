<?php

$favoriteColor = 'red';
$secondFavoriteColor = 'green';

// $color = isset($favoriteColor) ? $favoriteColor : 'blue';
// $color = $favoriteColor ?? 'blue';

// $color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue'


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $color ?>
</body>

</html>