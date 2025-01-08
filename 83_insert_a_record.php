<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

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

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name'] ?? '');

        // INSERT statement with placeholders for title and body
        $sql = 'INSERT INTO names (name) VALUES (:name)';

        // Prepare the statement
        $data = $pdo->prepare($sql);

        // Params for prepared statement
        $params = [
          'name' => $name,
        ];

        echo $name;
        // Execute the statement
        $data->execute($params);
      }
    } catch (PDOException $error) {

      // If an error occurs, catch it
      echo 'Connection failed: ' . $error->getMessage();
    }
    ?>

    <form method="post">
      <label for="name">
        <input type="text" name="name">
        <button type="submit" name="submit">submit!</button>
      </label>
    </form>
  </body>
</body>

</html>