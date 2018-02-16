<?php

include_once "block_header.php";

// Якщо в URL є ID - тоді пускаєм на сторінку і робим запит до БД
if (isset($_GET['id'])) {

	$result = getValue("user", $_GET['id']);

	while($row = mysqli_fetch_assoc($result)) {
		$userID =  $row['id'];
		$userName = $row['name'];
		$userEmail = $row['email'];
		$userPass = $row['pass'];
		$userGroup = $row['userGroup'];
		$userStatus = $row['status'];
		$userRegDate = $row['regDate'];
	}

}
// Якщо в URL немає ID - тоді перенаправляєм на список юзерів
else{
	header('Location: /admin/user-list.php');
}


// Якщо в URL є action == unBlock - тоді робим запит до БД і обновляєм статус статті на "1"
if ( $_GET['action'] == "unBlock" ) {
	updateStatus("user", 1, $_GET['id']);
}


// Якщо в URL є action == block - тоді робим запит до БД і обновляєм статус статті на "0"
if ( $_GET['action'] == "block" ) {
	updateStatus("user", 0, $_GET['id']);
}





?>



	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5><?php echo $userName ?></h5>
							 
								<div class="ibox-tools">
									<?php echo $userRegDate ?>
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-wrench text-danger"></i>
									</a>
									<ul class="dropdown-menu dropdown-user">
										<li><a href="user.php?id=<?php echo $userID ?>&action=unBlock">Есть доступ</a></li>
										<li><a href="user.php?id=<?php echo $userID ?>&action=block">Заблокировать</a></li>
									</ul>

								</div>

							</div>
							<div class="ibox-content">

								<table class="table table-bordered">
									<thead>
									<tr>
										<th class="text-center" style="width:70px;">ID</th>
										<th class="text-center" style="width:300px;">e-mail</th>
										<th class="text-center">пароль</th>
										<th class="text-center" style="width:130px;">Группа</th>
										<th class="text-center" style="width:100px;">Статус</th>
									</tr>
									</thead>
									<tbody>

									<tr>
										<td class='text-center'><?php  echo $userID ?></td>
										<td class='text-center'><?php  echo $userEmail ?></td>
										<td class='text-center'><?php  echo $userPass ?></td>


										<?php

										if ($userGroup == 10){
											echo ("<td class='text-center'> Админ </td>") ;
										}

										else{
											echo ("<td class='text-center'> Пользователь </td>") ;
										}




										if ($userStatus == 1){
											echo ("<td class='text-center'><span class='label label-primary'> Есть доступ </span></td>") ;
										}

										else{
											echo ("<td class='text-center'><span class='label label-danger'> Заблокирован </span></td>") ;
										}


										?>


									</tr>
						 
									</tbody>
								</table>

							</div>
						</div>


					</div>
				</div>
			</div>





		</div>


	</div>


<?php
include_once "block_footer.php"
?>