<?php

declare(strict_types=1);

function getStatus(int|float $paymentStatus, bool $showMessage = true): ?string
//'mixed' for type of parameter
{
  $message = match ($paymentStatus) {
    1 => 'Success',
    2 => 'Denied',
    default => 'Unknown'
  };

  if ($showMessage) {
    var_dump($message);
    return null;
  }

  return ($message);
}

getStatus(1);
