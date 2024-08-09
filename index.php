<?php
include 'db.php';
$mysqli = getMysqli();

$result = $mysqli->query("SELECT * FROM `messages`");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>
</head>
<body>
<ul>
   <?php foreach ($result as $message): ?>
   <li style="list-style-type: none">
      <h3> <?= $message['heading'] ?></h3>
      <p>Автор: <?= $message['author'] ?></p>
      <p><?= $message['preview'] ?></p>
   </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
