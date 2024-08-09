<?php
include 'db.php';
$mysqli = getMysqli();
$result = $mysqli->query("SELECT * FROM `messages`");

if (isset($_GET['action']) && ($_GET['action'] == 'add')) {
    $heading = $_GET['heading'];
    $author = $_GET['author'];
    $preview = $_GET['preview'];
    $text = $_GET['text'];
    $sql = "INSERT INTO `messages`(`heading`, `author`, `preview`, `text`) VALUES ('{$heading}','{$author}','{$preview}','{$text}')";
    $mysqli->query($sql);
}
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
            <a href="/message.php?id=<?= $message['id'] ?>"><?= $message['preview'] ?></a><br>
            <a href="/update.php?id=<?= $message['id'] ?>&heading=<?= $message['heading'] ?>&author=<?= $message['author'] ?>&preview=<?= $message['preview'] ?>&text=<?= $message['text'] ?>">Редактировать</a>
        </li>
    <?php endforeach; ?>
</ul>
<h4>Добавить комментарий</h4>
<form>
    <input hidden type="text" name="action" value="add">
    <p><input type="text" name="heading" required> заголовок</p>
    <p><input type="text" name="author" required> автор</p>
    <p><input type="text" name="preview" required> краткое содержание</p>
    <p><input type="text" name="text" required> полное содержание</p>
    <input type="submit">
</form>
</body>
</html>
