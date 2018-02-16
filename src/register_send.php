<?
include_once "function.php";

$type = strip_tags($_POST['request_type']);
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$password2 = strip_tags($_POST['password2']);


// якщо форма не пуста - провіряєм логин / пароль в БД
if (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['email'])) {

	// перевірка чи пароль1 == пароль2
	if ($password == $password2){

		// конвертуєм в мд5 і пишем в базу
		// $password = md5($password);
		 addNewUser($name, $email, $password);
	}

}

else {
	header('Location: https://php.tzhenia.com/register.php');
}
?>



