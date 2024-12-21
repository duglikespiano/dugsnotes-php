<?php
$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];
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

  // Solution1
  foreach ($names as $name) {
    if ($name[0] === 'A') {
      continue;
    }
    echo strtolower(strrev($name)) . '<br>';
  }

  echo '<br>';

  // Solution2
  for ($i = 0; $i < count($names); $i++) {
    $name = $names[$i];

    if (substr($name, 0, 1) === 'A') {
      continue;
    }
    echo strtolower(strrev($name)) . '<br>';
  }

  echo '<br>';

  // Solution3
  for ($i = count($names) - 1; $i >= 0; $i--) {
    $name = $names[$i];

    if (substr($name, 0, 1) === 'A') {
      continue;
    }
    echo strtolower(strrev($name)) . '<br>';
  }


  ?>
</body>

</html>