<?php

if(isset($_POST['id'])) $id = $_POST['id'];
if(isset($_POST['heading'])) $heading = $_POST['heading'];
if(isset($_POST['author'])) $author = $_POST['author'];
if(isset($_POST['preview'])) $preview = $_POST['preview'];
if(isset($_POST['text'])) $text = $_POST['text'];

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
