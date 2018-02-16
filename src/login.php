<?
include_once "function.php";

session_destroy();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>вход | Blog</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css" />
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name" style="font-size: 55px; letter-spacing: 0;">Blog</h1>
            </div>
            <form class="m-t" method="post" action="login_step2.php">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="пароль"  required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Вход</button>
				<a href="/" class="btn btn-success block full-width m-b">Вернуться на сайт</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

	<?php
	// Якщо в URL є success == OK - відкриється сповіщення.
	if ( $_GET['error'] == "1" ) {
		echo '<script>swal("Уппсс..!", "Данные не коректные", "error");</script>';
	}


	// Якщо в URL є success == OK - відкриється сповіщення.
	if ( $_GET['reg'] == "ok" ) {
		echo '<script>swal("Готово!", "Регистрация прошла успешно! <br> Пожалуйста авторизируйтесь", "success");</script>';
	}
	?>
 

</body>

</html>
