<?include_once "../db_manager.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация | Blog</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
	<div>
		<div>
			<h1 class="logo-name" style="font-size: 55px; letter-spacing: 0;">Регистрация</h1>
		</div>
		<form class="m-t" role="form" method="post" action="register_send.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Имя" name="name" required="">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" placeholder="email" name="email" required="">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Пароль (6 символов)" name="password" required="">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" placeholder="Подтвердите пароль" name="password2" required="">
			</div>

			<button type="submit" class="btn btn-primary block full-width m-b">Регистрация</button>
			<a href="/" class="btn btn-success block full-width m-b">Вернуться на сайт</a>
		</form>
	</div>
</div>

<!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
