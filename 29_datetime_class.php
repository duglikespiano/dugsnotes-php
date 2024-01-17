<?php

// $date = new DateTime();
$timezone = new DateTimeZone('Asia/Seoul');
$date = new DateTime("12/22/78", $timezone);
// $date->setTimezone(new DateTimeZone("Europe/Paris"))
//   ->setDate(2023, 5, 15)
//   ->setTime(9, 30);
$date = new DateTime('04.10.2022', $timezone);

echo "<pre>";
// var_dump($date);
var_dump($date->format('F j Y'));
echo "</pre>";
