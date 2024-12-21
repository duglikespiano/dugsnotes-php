<?php

$score = 50;

if ($score) {
  echo 'high score';
} else {
  echo 'low score';
}

echo $score > 40 ? 'hiiigh score' : 'loooow score';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?= $score > 40 ? 'hiiigh score' : 'loooow score' ?>

</body>

</html>