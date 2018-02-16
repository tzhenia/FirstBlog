<?php

include_once "function.php";

$type = strip_tags($_POST['request_type']);
$userId = $_SESSION['id'];
$mailTitle = strip_tags($_POST['mailTitle']);
$mailText = strip_tags($_POST['mailText']);



addMail($userId, $mailTitle, $mailText);


?>