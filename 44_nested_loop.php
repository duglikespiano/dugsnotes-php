<?php

// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++) {
//     echo $i . ' - ' . $j . '<br>';
//   }
// }

// $k = 0;
// while ($k < 5) {
//   $l = 0;
//   while ($l < 5) {
//     echo $k . ' - ' . $l . '<br>';
//     $l++;
//   }
//   $k++;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php for ($i = 0; $i < 5; $i++) : ?>
    <?php for ($j = 0; $j < 5; $j++) : ?>
      <?= $i . ' - ' . $j; ?>
    <?php endfor ?>
  <?php endfor ?>
</body>

</html>