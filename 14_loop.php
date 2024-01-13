<?php

// $a = 1;

// check first execute later
// while ($a <= 15) {
//   echo $a . '<br>';
//   $a++;
// }

// execute first check later
// do {
//   echo $a . '<br>';
//   $a++;
// } while ($a <= 0);

// for ($i = 1; $i <= 50; $i++) {
//   if ($i === 6) {
//     continue;
//   } else if ($i === 10) {
//     break;
//   }
//   echo $i . '<br>';
// };

$names = ['John', 'Kim', 'Bob'];
foreach ($names as $key => $name) {
  var_dump($key);
  var_dump($name);
}
