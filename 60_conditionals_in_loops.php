<?php

$number = 1;
while ($number <= 10) {
  if ($number % 2 === 0) {
    echo "$number is even <br>";
  } else {
    echo "$number is odd <br>";
  }
  $number++;
}

for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) {
    break;
  }
  echo "This is i $i <br>";
}

for ($j = 0; $j <= 10; $j++) {
  if ($j === 5) {
    continue;
  }
  echo "This is j $j <br>";
}

$grades = [
  'john' => 10,
  'dug' => 20,
  'kim' => 30,
  'lee' => 5,
];

foreach ($grades as $name => $grade) {
  if ($grade >= 20) {
    echo "$name has an excellent grade<br>";
  }
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

</body>

</html>