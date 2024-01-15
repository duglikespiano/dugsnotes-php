<?php
// Class name should be same with the file's name

declare(strict_types=1);

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

  // public string $name;
  // public float $balance = 5.5;
  // public function __construct(string $newName, float $newBalance)
  // {
  //   $this->name = $newName;
  //   $this->balance = $newBalance;
  // }
}
