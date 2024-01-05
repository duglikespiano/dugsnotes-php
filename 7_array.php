<?php

$data = [
  'park' => ['salad', 'gogi', 'bob'],
  'sol' => 'burger',
  'haku' => 'pizza'
];
$data['sol'] = 'tomato';
$data[] = 'soup';
$data['babo'] = 'pasta';

var_dump($data['park'][0]);
