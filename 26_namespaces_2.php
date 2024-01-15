<?php

declare(strict_types=1);

// usually name of folder and namespace are same
// namespace App\Bank;
namespace App;

class Account
{
  public function __construct(
    public string $name,
    public float $balance
  ) {
  }
  public function deposit(float $amount)
  {
    $this->balance += $amount;
    return $this;
  }
}