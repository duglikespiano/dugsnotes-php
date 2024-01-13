<?php

$numbers = ['example' => 5, 3, 9, 11];
// list($a, $b) = $numbers;
['example' => $a, 0 => $b] = $numbers;

echo $a . '<br>';
echo $b . '<br>';



// $users = ['John', 'Jane', 'Bob', null];
// $users = array_merge(
//   $users,
//   ['Sam', 'Jessica']
// );

// // sort($users);
// asort($users);

// echo '<pre>';
// print_r($users);
// echo '</pre>';

// isset
// if (array_key_exists(3, $users)) {
//   echo "User Found!";
// }

// $users = array_filter(
//   $users,
//   fn ($user) => $user !== 'Bob'
// );

// $users = array_map(
//   fn ($user) => strtoupper($user),
//   $users
// );

// $users = array_merge(
//   $users,
//   ['Sam', 'Jessica']
// );