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
    header('Location: /');
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
            <form method="post" action="update.php">
                <input hidden type="text" name="id" value="<?= $message['id'] ?>">
                <input hidden type="text" name="heading" value="<?= $message['heading'] ?>">
                <input hidden type="text" name="author" value="<?= $message['author'] ?>">
                <input hidden type="text" name="preview" value="<?= $message['preview'] ?>">
                <input hidden type="text" name="text" value="<?= $message['text'] ?>">
                <input type="submit" value="Редактировать">
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<h4>Добавить сообщение</h4>
<form method="post">
    <input hidden type="text" name="action" value="add">
    <p><input type="text" name="heading" required> заголовок</p>
    <p><input type="text" name="author" required> автор</p>
    <p><input type="text" name="preview" required> краткое содержание</p>
    <p><input type="text" name="text" required> полное содержание</p>
    <input type="submit">
</form>
</body>
</html>
