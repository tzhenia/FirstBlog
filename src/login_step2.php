<?
include_once "function.php";

$type = strip_tags($_POST['request_type']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
//$password = md5($password);

// якщо форма не пуста - провіряєм логин / пароль в БД
if (!empty($_POST['email']) and !empty($_POST['password'])) {
	checkEmail($email, $password);
}

else {
	header('Location: https://php.tzhenia.com/login.php');
}
?>



