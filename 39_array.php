<?php

$name1  = ['dug', 'dog', 'do'];
$name2 = array('duggg', 'dogg', 'dooo');
$numbers = [1, 2, 3, 4, 5, 6];


function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  // die()
  echo '</pre>';
}


// Add element to an array
$name1[5] = 'king';
$name2[] = 'kong';

// Remove an element with the index from an array
unset($name1[1]);
inspect($name1);

// Re-indexing an element in an array
$name1 = array_values($name1);

inspect($name1);
inspect($name2);
inspect($numbers);

print_r($name1);

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