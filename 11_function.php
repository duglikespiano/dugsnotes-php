<?php

// if (true) {
//   function getStatus()
//   {
//     $paymentStatus = 2;
//     $message = match ($paymentStatus) {
//       1 => 'Success',
//       2 => 'Denied',
//       default => 'Unknown'
//     };
//     var_dump($message);
//   }
// }

function getStatus($paymentStatus, $showMessage = true)
{
  $message = match ($paymentStatus) {
    1 => 'Success',
    2 => 'Denied',
    default => 'Unknown'
  };
  if ($showMessage) {
    var_dump($message);
  }
  return $message;
}

$statusMessage = getStatus(1);
var_dump($statusMessage);
