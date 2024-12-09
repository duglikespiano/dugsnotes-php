<?php

$numberArray = [1, 6, 50, 30, 20, 40];
$sum = 0;
foreach ($numberArray as $number) {
  $sum += $number;
};


$studentsArray = [
  [
    'name' => 'John',
    'grades' => [85, 90, 92, 88]
  ],
  [
    'name' => 'Jane',
    'grades' => [95, 88, 91, 87]
  ],
  [
    'name' => 'Joe',
    'grades' => [75, 82, 79, 88]
  ]
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

</body>
<?php
for ($i = 0; $i <= 10; $i++) {
  for ($j = 0; $j <= 10; $j++) {
    echo "<p>$i x $j = " . ($i * $j) . "</p>";
  }
}
?>

<p>
  <?php
  foreach ($studentsArray as $student) {
    $name = $student['name'];
    $grades = $student['grades'];
    $average = array_sum($grades) / count($grades);
    echo "$name: Average Grade = $average <br>";
  }
  ?>
</p>

</html>