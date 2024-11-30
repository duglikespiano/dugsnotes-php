<?php

function inspect($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

$output = null;
$ids = [10, 1, 5, 30, 27, 54, 100];
$users = ['user3', 'user1', 'user2'];
inspect($ids);

// count
$output = count($users);
inspect($users);

// sort
sort($ids);
sort($users);
inspect($ids);
inspect($users);

// r_sort
rsort($ids);
rsort($users);
inspect($ids);
inspect($users);

// array_push
array_push($ids, 245);
array_push($users, 'user0');
inspect($ids);
inspect($users);

// array_pop
array_pop($ids);
array_pop($users);
inspect($ids);
inspect($users);

// array_shift
array_shift($ids);
array_shift($users);
inspect($ids);
inspect($users);

// array_unshift
array_unshift($ids, 96);
array_unshift($users, 'user-1');
inspect($ids);
inspect($users);

// array_slice
$ids2 = array_slice($ids, 2, 1);
$users2 = array_slice($users, 2, 1);
inspect($ids2);
inspect($users2);

// array_slice
array_splice($ids, 1, 1, 0);
array_splice($users, 1, 1, 'A new user');
inspect($ids);
inspect($users);

// array_sum
$output  = 'Sum of IDs: ' . array_sum($ids);
inspect($output);

// array_search
$output  = 'user 2 is at index: ' . array_search('user2', $users);
inspect($output);

// in_array(similar with includes in Javascript)
$output  = 'user 3 exists: ' . in_array('user5', $users);
inspect($output);
array_push($users, 'user5');
$output  = 'user 3 exists: ' . in_array('user5', $users);
inspect($output);

// explode(similar with split in Javascript)
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);
inspect($tags);
inspect($tagsArray);

// implode(similar with join in Javascript)
$tagsString = implode(',', $tagsArray);
inspect($tagsString);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
</body>

</html>