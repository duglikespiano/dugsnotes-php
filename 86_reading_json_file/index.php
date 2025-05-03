<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $scriptFilename = explode('/', $_SERVER['SCRIPT_FILENAME']);
  $json = file_get_contents(__DIR__ . '/data.json');
  $data = json_decode($json, true);
  ?>

  <title><?= $scriptFilename[count($scriptFilename) - 2] ?></title>
</head>

<body>

  <?php foreach ($data['comments'] as $comment):
    $user = $comment['user'];
  ?>
    <div class="user-card">
      <p><strong>User ID:</strong> <?= $user['id'] ?></p>
      <p><strong>Username:</strong> <?= $user['username'] ?></p>
      <p><strong>Full Name:</strong> <?= $user['fullName'] ?></p>
      <hr>
    </div>
  <?php endforeach; ?>

</body>

</html>