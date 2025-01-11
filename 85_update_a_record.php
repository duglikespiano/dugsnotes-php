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

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'put')) {
        $name = htmlspecialchars($_POST['name'] ?? '');
        $value = htmlspecialchars($_POST['value'] ?? '');

        // INSERT statement with placeholders for title and body
        $sql = 'UPDATE names SET name = :name WHERE name = :value';

        // Prepare the statement
        $data = $pdo->prepare($sql);

        // Params for prepared statement
        $params = [
          'name' => $name,
          'value' => $value,
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
      <input type="hidden" name="_method" value="put">
      <input name="value">
      <input name="name">
      <button type="submit" name="submit">EDIT!!</button>
    </form>
  </body>
</body>

</html>