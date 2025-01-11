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

    // Get id params from URL
    $name = $_GET['name'] ?? null;

    // Replace user input into a placeholder to prevent query injection
    $sql = 'SELECT * FROM names WHERE name = :name';

    // Input user input into a variable
    $params = ['name' => $name];

    $data = $pdo->prepare($sql);

    // Deliever the variable to replace the placeholder
    $data->execute($params);

    $result = $data->fetch();

    echo '<pre>';
    var_dump($result);
    echo '</pre>';
  } catch (PDOException $error) {

    // If an error occurs, catch it
    echo 'Connection failed: ' . $error->getMessage();
  }
  ?>
</body>

</html>