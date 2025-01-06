<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $host = 'localhost';
  $port = 3306;
  $dbName = 'dugsnotes_php';
  $username = 'root';
  $password = '';
  $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

  try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $pdo->prepare('SELECT * FROM names');
    $data->execute();
    $results = $data->fetchAll();

    echo '<pre>';
    var_dump($results);
    echo '</pre>';
  } catch (PDOException $error) {

    // If an error occurs, catch it
    echo 'Connection failed: ' . $error->getMessage();
  }
  ?>
</body>

</html>