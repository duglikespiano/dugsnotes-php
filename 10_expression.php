<?php

// $score = 95;
// if ($score > 90) {
//   var_dump('A');
// } else if ($score > 80) {
//   var_dump('B');
// } else {
//   var_dump('C');
// }

$paymentStatus = '2';
$paymentStatus = 2;

// switch ($paymentStatus) {
//   case 1:
//     var_dump('Success');
//     break;
//   case 2:
//   case 3:
//     echo "It's case3 ";
//     var_dump('Pending');
//     break;
//   default:
//     var_dump('Unknown');
// };

$message = match ($paymentStatus) {
  1 => 'Success',
  2 => 'Denied',
  default => 'Unknown'
};

var_dump($message);
