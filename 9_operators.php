<?php
$data = 10;
$data += 4;
$data *= 4;
$data /= 4;
$data **= 4;
$data++;
$data--;
++$data;
--$data;
var_dump($data);
var_dump(1 === 1, 1 === '1', 1 !== 1, 1 !== '1', 2 < 3, 3 >= 2);
@var_dump((string)[1]);

$age = 15;
$data = $age > 18 && $age < 65;
$data = $age > 18 || $age < 65;
$data = !$data;
$data = true && false;
var_dump($data);

const FULL_NAME = 'Dug';
$message = 'Hello, My name is ';
$message .= FULL_NAME;
var_dump(FULL_NAME);
var_dump($message);
// var_dump(MESSAGE . ' ' . FULL_NAME);