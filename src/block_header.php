<?
include_once "function.php";
?>
<!DOCTYPE html>
<html>

<head>
	<style>
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
		}

		/* The Close Button */
		.close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Главная | Blog</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">
	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu">


				<?php

				if ($_SESSION['id']){

				echo '<li class="nav-header">';
				echo '<div class="dropdown profile-element"> <span>';
				echo '           <img alt="image" class="img-circle" src="img/profile_small.jpg" />';
                echo '             </span>';
				echo '		<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
                echo '            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold text-white">' . $_SESSION['name'] . '</strong>';

                echo '</span> <span class="text-muted text-xs block">меню <b class="caret"></b></span> </span> </a>';

				echo '		<ul class="dropdown-menu animated fadeInRight m-t-xs">';

					if ($_SESSION['userGroup'] == 10){
					 
						echo '			
							<li><a href="/admin/">Админка</a></li>
							<li class="divider"></li>
							
							';

					}
				echo '			<li><a href="logout.php">Выход</a></li>';
				echo '		</ul>';
				echo '	</div>';
				echo '	<div class="logo-element">OK</div>';
				echo ' </li>';


				}


				else{

					echo '<li class="nav-header">';
					echo '<div class="dropdown profile-element">';
					echo '		<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
					echo '            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold text-white">Привет гость!</strong>';

					echo '</span> <span class="text-muted text-xs block">Войти / регистрация  <b class="caret"></b></span> </span> </a>';

					echo '		<ul class="dropdown-menu animated fadeInRight m-t-xs">';
					echo '			<li><a href="login.php">Вход</a></li>';
					echo '			<li><a href="register.php">Регистрация</a></li>';
					echo '		</ul>';
					echo '	</div>';
					echo '	<div class="logo-element">OK</div>';
					echo ' </li>';


				}

				?>



				<li class="active">
					<a href="/"><i class="fa fa-home"></i> <span class="nav-label">Главная</span></a>
				</li>

				<li>
					<a href="about.php"><i class="fa fa-info-circle"></i> <span class="nav-label">О нас</span></a>
				</li>

				<li>
					<a href="contact.php"><i class="fa fa-map-marker"></i> <span class="nav-label">Контакты</span></a>
				</li>

			</ul>

		</div>
	</nav>

	<div id="page-wrapper" class="gray-bg">
		 
