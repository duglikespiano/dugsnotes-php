<?php

// Anonymous function
$text = function () {
  return 'hahaha';
};

// Closures
function createCounter()
{
  $count = 0;
  $counter = function () use (&$count) {
    return ++$count;
  };
  return $counter;
}

$counter = createCounter();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $text() ?>
  <?= '<br>' ?>
  <?= $counter() . "<br>" ?>
  <?= $counter() . "<br>" ?>
  <?= $counter() . "<br>" ?>
  <?= $counter() . "<br>" ?>
  <?= $counter() . "<br>" ?>
</body>

</html>