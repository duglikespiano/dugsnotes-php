<?php

if (file_exists('example.php')) {
  echo 'File found!' . '<br>';
  file_put_contents('example.php', 'blah blah...');
  clearstatcache();
  echo filesize('example.php') . '<br>';
  echo file_get_contents('example.php');
}

// $directory = scandir(__DIR__);
// print_r($directory);
// mkdir('foo');
// rmdir('foo');
