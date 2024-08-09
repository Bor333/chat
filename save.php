<?php
include 'db.php';
$mysqli = getMysqli();

if(isset($_POST['id'])) $id = $_POST['id'];
if(isset($_POST['heading'])) $heading = $_POST['heading'];
if(isset($_POST['author'])) $author = $_POST['author'];
if(isset($_POST['preview'])) $preview = $_POST['preview'];
if(isset($_POST['text'])) $text = $_POST['text'];


if (isset($_POST['action']) && ($_POST['action'] == 'update')) {
    $sql = "UPDATE `messages` SET `heading`='{$heading}',`author`='{$author}',`preview`='{$preview}',`text`='{$text}' WHERE `id`='{$id}'";
    $mysqli->query($sql);
    header('Location: index.php');
}

