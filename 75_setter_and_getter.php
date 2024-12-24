<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php
  class User
  {
    // Properties
    public $name;
    public $email;
    private $status = 'active';

    public function __construct($name, $email)
    {
      $this->name = $name;
      $this->email = $email;
    }

    // Methods
    public function login()
    {
      echo $this->name . ' logged in <br>';
    }

    // Getter
    public function getStatus()
    {
      return $this->status;
    }

    // Setter
    public function setStatus($status)
    {
      $this->status = $status;
    }
  }

  // Instantiate a new object
  $user1 = new User('dug', 'dug@gmail.com');
  $user1->login();
  print_r($user1);

  echo '<br>';
  echo $user1->getStatus();

  $user1->setStatus('inactive');
  echo '<br>';
  echo $user1->getStatus();

  ?>
</body>

</html>