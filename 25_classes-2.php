<?php

declare(strict_types=1);
require_once './25_classes-1.php';

$var1 = new Account('tom', 44);
$var2 = new Account('park', 100);

$var1->balance = 20;
$var1 = null;
// $var1->deposit(33);
// $var1->deposit(83);
$var1?->deposit(33)->deposit(83);

var_dump($var1);
echo '<br>';
var_dump($var2);
