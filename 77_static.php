<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // Making different object to call a same constant value is unnecessary like below
  // class MathUtility
  // {
  //   public $pi = 3.14;
  // }
  // $mathUtility1 = new MathUtility();
  // $mathUtility2 = new MathUtility();

  // echo $mathUtility1->pi;
  // echo '<br>';
  // echo $mathUtility2->pi;

  // The keyword 'static' will help to handle it
  // It should be called in different way like below
  class MathUtility
  {
    public static $pi = 3.14;
    public static function add(...$numbers)
    {
      return array_sum($numbers);
    }
  }

  echo MathUtility::$pi;
  echo '<br>';
  echo MathUtility::add(1, 6, 100, 156, 4, 8, 3);
  ?>
</body>

</html>