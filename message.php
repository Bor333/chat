<?php
include 'db.php';
$mysqli = getMysqli();
$id = $_GET['id'];
$sql = "SELECT * FROM `messages` WHERE id = {$id}";
$message = $mysqli->query($sql)->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сообщение</title>
</head>
<body>
<h3> <?= $message['heading'] ?></h3>
<p>Автор: <?= $message['author'] ?></p>
<p><?= $message['text'] ?></p>
</body>
</html>
