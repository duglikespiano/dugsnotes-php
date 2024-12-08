<?php
$question1_array = [6, 5, 1, 3, 10];
$question1_array_sum = 0;
$question1_array_length = count($question1_array);
for ($i = 0; $i < $question1_array_length; $i++) {
  $question1_array_sum += $question1_array[$i];
}

$question2_array = ['red', 'blue', 'green', 'yellow'];
$question2_array = array_reverse($question2_array);
$question2_array = array_merge($question2_array, ['purple', 'orange']);
array_splice($question2_array, 1, 0, 'pink');

$question3_array = [
  [
    'id' => 1,
    'job_title' => 'PHP Developer',
    'company' => 'ABC Company',
    'contact_email' => 'john@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => 2,
    'job_title' => 'Web Designer',
    'company' => 'XYZ Company',
    'contact_email' => 'steph@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Photoshop', 'Illustrator', 'HTML', 'CSS']
  ],
  [
    'id' => 3,
    'job_title' => 'Web Developer',
    'company' => '123 Company',
    'contact_email' => 'peter@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Python', 'PostgreSQL', 'JavaScript', 'HTML', 'CSS']
  ]
];
$question3_additional_array = [
  'id' => 4,
  'job_title' => 'C# Developer',
  'company' => '123 Company',
  'contact_email' => 'kristen@email.com',
  'contact_phone' => '123-456-7890',
  'skills' => ['C#', 'Angular', 'JavaScript', 'HTML', 'CSS']
];

array_push($question3_array, $question3_additional_array);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><?php echo "Array1's length is $question1_array_length and sum is $question1_array_sum" ?></p>
  <ul>
    <?php foreach ($question2_array as $array) : ?>
      <li><?php echo $array ?></li>
    <?php endforeach ?>
  </ul>
  <p><?php echo $question3_array[1]['job_title'] ?></p>
  <p>
    <?php foreach ($question3_array[2]['skills'] as $skill) : ?>
      <li><?php echo $skill ?></li>
    <?php endforeach ?>
  </p>
</body>

</html>