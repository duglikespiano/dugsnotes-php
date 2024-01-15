<?php

declare(strict_types=1);
require_once './26_namespaces_2.php';

use App\Account;

$var1 = new Account('tom', 44);
$var2 = new Account('park', 100);

var_dump($var1);
echo '<br>';
var_dump($var2);
