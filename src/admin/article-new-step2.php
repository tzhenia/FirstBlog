<?php

include_once "../function.php";

$userId = $_SESSION['id'];
$title = strip_tags($_POST['title']);
$text = strip_tags($_POST['text']);

addArticle($userId, $title, $text);


?>