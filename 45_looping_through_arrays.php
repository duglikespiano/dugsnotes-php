<?php

$names = ['john doe', 'dug', 'haha', 'babo'];
$users = [
  ['name' => 'john', 'email' => 'john@email.com'],
  ['name' => 'king', 'email' => 'king@email.com'],
  ['name' => 'jin', 'email' => 'jin@email.com'],
  ['name' => 'goku', 'email' => 'goku@email.com'],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h3>Looping a for loop</h3>
  <?php for ($i = 0; $i < count($names); $i++) : ?>
    <li><?= $names[$i] ?></li>
  <?php endfor; ?>

  <h3>Looping a foreach loop</h3>
  <?php foreach ($names as $name): ?>
    <li><?= $name ?></li>
  <?php endforeach; ?>

  <h3>Looping a foreach loop with index</h3>
  <?php foreach ($names as $index => $name) : ?>
    <li><?= $index . ': ' . $name ?></li>
  <?php endforeach; ?>

  <h3>Looping a foreach loop with associative array</h3>
  <?php foreach ($users as $user): ?>
    <li><?= $user['name'] . ': ' . $user['email'] ?></li>
  <?php endforeach; ?>

  <h3>Getting key names and values from associative array</h3>
  <?php foreach ($users as $user) : ?>
    <?php foreach ($user as $key => $value) : ?>
      <li><?= $key . ': ' . $value ?></li>
    <?php endforeach ?>
  <?php endforeach ?>
</body>

</html>