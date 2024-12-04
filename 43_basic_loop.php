<?php
/* Basic for loop
for ($i = 0; $i < 10; $i++) {
  echo $i . '<br>';
  }
*/

/* Basic while loop
$i = 0;
while ($i < 10) {
  echo $i . '<br>';
  $i++;
}
*/

/* Basic do-while loop
$i = 12;
do {
  echo $i;
  $i++;
} while ($i < 10);
*/



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>

    <?php $i = 0;
    while ($i < 10) : ?>
      <li>Number: <?= $i ?></li>
    <?php $i++;
    endwhile ?>

    <?php for ($i = 0; $i <= 10; $i++): ?>
      <li>Number: <?= $i ?></li>
    <?php endfor; ?>

    <?php $i = 0;
    do { ?>
      <li>Number: <?= $i ?></li>
    <?php $i++;
    } while ($i < 10) ?>

  </ul>
</body>

</html>