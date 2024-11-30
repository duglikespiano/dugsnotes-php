<?php

date_default_timezone_set("Japan");

/*

Y - the year
m - the month
d - the day
D - the day of the week short name
l - the full day of the week name
h - the hour
i - the minute
s - the second
a - AM/PM

*/

// Get year
$year = date('Y');

// Get year with timestamp
$timestamp1 = date('Y', 936345600);

// Get timestamp from strtotime
$timestamp2 = date('Y', strtotime('1999-09-01'));

// Get month
$month = date('m');

// Get day
$dayShort = date('D');
$dayLong = date('l');

// Get date with format
$formattedDate = date('Y-m-d');

// Get hour
$hour = date('h');

// Get minute
$minute = date('i');

// Get second
$second = date('s');

// Get am/pm
$ampm = date('a');

// Get all
$timeWithDate = date('Y-m-d h:i:s a');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $year ?><br>
  <?= $timestamp1 ?><br>
  <?= $timestamp2 ?><br>
  <?= $month ?><br>
  <?= $dayShort ?><br>
  <?= $dayLong ?><br>
  <?= $formattedDate ?><br>
  <?= $hour ?><br>
  <?= $minute ?><br>
  <?= $second ?><br>
  <?= $ampm ?><br>
  <?= $timeWithDate ?><br>
</body>

</html>