<?php

include_once "function.php";

$type = strip_tags($_POST['request_type']);
$text = strip_tags($_POST['comment']);
$idArticle = strip_tags($_POST['idArticle']);
$userId = $_SESSION['id'];


addArticleComment($userId, $idArticle, $text);
?>