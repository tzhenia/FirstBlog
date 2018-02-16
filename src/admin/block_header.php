<?php

include_once "../function.php";

if ($_SESSION['userGroup'] != 10){
	header('Location: https://php.tzhenia.com');
}

?>

<!DOCTYPE html>
<html>

<head>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Админка | Blog</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body class="md-skin">
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu">
				<li class="nav-header">
					<div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../img/profile_small.jpg" />
                             </span>

                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold text-white"><?php echo $_SESSION['name'] ?></strong>
                             </span> <span class="text-muted text-xs block">Администратор</span> </span>

					</div>
					<div class="logo-element">OK</div>
				</li>
				<li class="active"><a href="/admin/"><i class="fa fa-th-large"></i> <span class="nav-label">Главная</span></a></li>
				<li><a href="article-list.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Статьи</span></a></li>
				<li><a href="user-list.php"><i class="fa fa-user-o"></i> <span class="nav-label">Пользователи</span></a></li>
				<li><a href="mail-list.php"><i class="fa fa-envelope-o"></i> <span class="nav-label">Почта</span></a></li>
				<?php
				//	<li><a href="settings.php"><i class="fa fa-cogs"></i> <span class="nav-label">Настройки</span></a></li>
				?>


			</ul>

		</div>
	</nav>

	<div id="page-wrapper" class="gray-bg">
		<div class="row border-bottom">
			<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
				</div>
				<ul class="nav navbar-top-links navbar-right">

					<li>
						<a href="/">
							<i class="fa fa-reply"></i> Вернуться на сайт
						</a>
					</li>


					<li>
						<a href="../logout.php">
							<i class="fa fa-sign-out"></i> Выход
						</a>
					</li>
				</ul>

			</nav>
		</div>
