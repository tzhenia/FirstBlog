<?php

session_start();


// перезагрузка сторінки
function reloadPage($get){
	header('Location: ' . $_SERVER[PHP_SELF] . $get);
}


function mysqliquery($query){
	// Підключення до бази
	$host = '000'; // адрес сервера
	$database = '000'; // имя базы данных
	$user = '000'; // имя пользователя
	$password = '000'; // пароль

	// форуєм link підключення
	$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));

	// отримуєм результат
	mysqli_query($link, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	mysqli_query($link, "SET CHARACTER SET 'utf8'");
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	return $result;
}



// Взаєм кількість записів в таблиці (юзерів / статьї / листів)
function getLastId($table){
	$query = "SELECT  COUNT(*) `id` FROM " . $table;
	$lastIdFromTable = mysqliquery($query);
	while($row = mysqli_fetch_assoc($lastIdFromTable)) {
		$result =  $row['id'];
	}

	return $result;
}


// Взаєм кількість записів в таблиці (юзерів / статьї / листів)
function getSize($table, $idArticle){
	$query = "SELECT  COUNT(*) `id` FROM " . $table . " WHERE idArticle = " . $idArticle;
	$lastIdFromTable = mysqliquery($query);
	while($row = mysqli_fetch_assoc($lastIdFromTable)) {
		$result =  $row['id'];
	}

	return $result;
}



// Витягуєм всі дані з вказаної таблиці
function getAllValue($table){
	$query = "SELECT *  FROM `" . $table . "`";
	$result = mysqliquery($query);
	return $result;
}

// Витягуєм дані з вказаної бази та ID
function getValue($table, $id){
	$query = "SELECT *  FROM `" . $table . "`  WHERE `id` = " . $id;
	$result = mysqliquery($query);
	return $result;
}

// Витягуєм дані з вказаної бази та ID
function getValueComment($table, $id){
	$query = "SELECT *  FROM `" . $table . "`  WHERE `idArticle` = " . $id;
	$result = mysqliquery($query);
	return $result;
}

// Витягуєм дані з вказаної бази та ID
function getAllArticle($table){
	$query = "SELECT *  FROM `" . $table . "`  WHERE `status` = 1 ";
	$result = mysqliquery($query);
	return $result;
}


// Витягуєм дані по емейл з вказаної бази та ID
function checkEmail($email, $password){
	$query = "SELECT * FROM user WHERE `email` = '". $email . "' AND `pass` = '" . $password . "'";
	$result = mysqliquery($query);

		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$name = $row['name'];
			$userGroup = $row['userGroup'];
			$status = $row['status'];
		}

		if ($id == NULL){
			header('Location: https://php.tzhenia.com/login.php?error=1');
		}

		else{
			setSession($id, $name, $userGroup, $status);
		}
}



function setSession($id, $name, $userGroup, $status){
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	$_SESSION['userGroup'] = $userGroup;
	$_SESSION['status'] = $status;
	header('Location: https://php.tzhenia.com');
}




// Змінюєм значення статусу в вказаної ID та таблиці
function updateStatus($table, $value, $id){
	$query = "UPDATE `" . $table . "` SET `status` = '" . $value . "' WHERE `" . $table . "`.`id` =" . $id;
	mysqliquery($query);
	reloadPage("?id=" . $id . "&success=ok");
}



// Змінюєм статью в вказаної ID та таблиці
function updateArticle($text, $title, $idArticle){
	$query = "UPDATE `article` SET `text` = '" . $text . "' WHERE `article`.`id` =" . $idArticle;
	mysqliquery($query);
	$query = "UPDATE `article` SET `title` = '" . $title . "' WHERE `article`.`id` =" . $idArticle;
	mysqliquery($query);
	header('Location: https://php.tzhenia.com/admin/article-edit.php?id=' . $idArticle . "&success=ok");
}




// Змінюєм значення статусу в вказаної ID та таблиці
function updateStatusUser($id){
	$query = "SELECT status FROM `user` WHERE `id` = " . $id;
	$result = mysqliquery($query);

	while($row = mysqli_fetch_assoc($result)) {
		$_SESSION['status'] = $row['status'];
	}
}





// добавляєм значення в таблицю mail
function addMail($userId, $mailTitle, $mailText){


	$query = "INSERT INTO mail (`userId`,`mailTitle`,`mailText`,`status`,`date`) VALUES ('$userId','$mailTitle','$mailText', '0', NOW())";
	mysqliquery($query);

	header('Location: https://php.tzhenia.com/contact.php?success=ok');
}


// добавляєм значення в таблицю Article
function addArticle($userId, $title, $text){


	$query = "INSERT INTO article (`author`,`title`,`text`,`status`,`date`) VALUES ('$userId','$title','$text', '0', NOW())";
	mysqliquery($query);

	header('Location: https://php.tzhenia.com/admin/article-list.php?success=ok');
}


// добавляєм значення в таблицю mail
function addArticleComment($userId, $idArticle, $text){
	$query = "INSERT INTO article_comment (`idUser`,`idArticle`,`text`,`date`) VALUES ('$userId','$idArticle','$text', NOW())";
	mysqliquery($query);

	header('Location: https://php.tzhenia.com/article.php?id=' . $idArticle);
}


// добавляєм нового юзера в таблицю юзер
function addNewUser($userId, $userEmail, $pass){
	$query = "INSERT INTO user (`name`,`email`,`pass`,`userGroup`,`status`,`regDate`) VALUES ('$userId', '$userEmail', '$pass', 1, 1, NOW())";
	mysqliquery($query);

	header('Location: https://php.tzhenia.com/login.php?reg=ok');
}






// якщо авторизований - обнови статус користувача
if ($_SESSION['id']){
	updateStatusUser($_SESSION['id']);
}







