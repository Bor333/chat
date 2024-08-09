<?php
include 'db.php';
$mysqli = getMysqli();

$message_id = 'error';
$author = 'error';
$text = 'error';

if(isset($_POST['message_id'])) $message_id = $_POST['message_id'];
if(isset($_POST['author'])) $author = $_POST['author'];
if(isset($_POST['text'])) $text = $_POST['text'];

$sql = "INSERT INTO `comments`(`message_id`, `author`, `text`) VALUES ('{$message_id}','{$author}','{$text}')";
$mysqli->query($sql);

header("Location: /message.php?id={$message_id}");