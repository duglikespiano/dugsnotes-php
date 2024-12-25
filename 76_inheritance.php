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
    protected $status = 'active';

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
  }

  class Admin extends User
  {
    public $level;
    public function __construct($name, $email, $level)
    {

      $this->level = $level;
      parent::__construct($name, $email);
    }

    public function login()
    {
      echo 'this method has been edited';
    }

    public function getStatus()
    {
      return $this->status;
    }


    public function setStatus($status)
    {
      $this->status = $status;
    }
  }

  $admin = new Admin('dug', 'duuuug@hanmir.com', 5);
  echo $admin->name;
  echo '<br>';
  echo $admin->email;
  echo '<br>';
  echo $admin->level;
  echo '<br>';
  $admin->login();

  ?>
</body>

</html>