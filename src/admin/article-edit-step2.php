<?php
include_once "../function.php";

$type = strip_tags($_POST['request_type']);
$text = strip_tags($_POST['text']);
$title = strip_tags($_POST['title']);
$idArticle = strip_tags($_POST['idArticle']);

// якщо форма не пуста - обновляєм
if (!empty($_POST['text'])) {
	updateArticle($text, $title, $idArticle);
}
?>