<?php

if(isset($_GET['id'])) $id = $_GET['id'];
if(isset($_GET['heading'])) $heading = $_GET['heading'];
if(isset($_GET['author'])) $author = $_GET['author'];
if(isset($_GET['preview'])) $preview = $_GET['preview'];
if(isset($_GET['text'])) $text = $_GET['text'];


?>
<h4>Редактировать комментарий</h4>
<form method="post" action="save.php">
    <input hidden type="text" name="action" value="update">
    <input hidden type="text" name="id" value="<?= $id ?>">
    <p><input type="text" name="heading" value="<?= $heading ?>" required> заголовок</p>
    <p><input type="text" name="author" value="<?= $author ?>" required> автор</p>
    <p><input type="text" name="preview" value="<?= $preview ?>" required> краткое содержание</p>
    <p><input type="text" name="text" value="<?= $text ?>" required> полное содержание</p>
    <input type="submit">
</form>
