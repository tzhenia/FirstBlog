<?php

include_once "block_header.php";

// Якщо в URL є ID - тоді пускаєм на сторінку і робим запит до БД
if (isset($_GET['id'])) {

	$result = getValue("mail", $_GET['id']);

	while($row = mysqli_fetch_assoc($result)) {
		$id =  $row['id'];
		$userId = $row['userId'];
		$mailTitle = $row['mailTitle'];
		$mailText = $row['mailText'];
		$status = $row['status'];
		$date = $row['date'];
	}


	// Взнаєм імя і почту по $userId
	$result2 = getValue("user", $userId);

	while($row = mysqli_fetch_assoc($result2)) {
		$userName = $row['name'];
		$userEmail = $row['email'];
	}


}


// Якщо в URL немає ID - тоді перенаправляєм на список юзерів
else{
	header('Location: /admin/mail-list.php');
}


// Якщо в URL є action == unBlock - тоді робим запит до БД і обновляєм статус статті на "1"
if ( $_GET['action'] == "unBlock" ) {
	updateStatus("mail", 1, $_GET['id']);
}


// Якщо в URL є action == block - тоді робим запит до БД і обновляєм статус статті на "0"
if ( $_GET['action'] == "block" ) {
	updateStatus("mail", 0, $_GET['id']);
}


?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5><?php echo $mailTitle ?></h5>
								 
								<div class="ibox-tools">
									<?php echo $date ?>
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-wrench text-danger"></i>
									</a>
									<ul class="dropdown-menu dropdown-user">
										<li><a href="mail.php?id=<?php echo $id ?>&action=unBlock">Готово</a></li>
										<li><a href="mail.php?id=<?php echo $id ?>&action=block">в обработке</a></li>
										</li>
									</ul>

								</div>

							</div>
							<div class="ibox-content">

								<table class="table table-bordered text-center">
									<thead>
									<tr>
										<th class="text-center">ID</th>
										<th class="text-center">Пользователь</th>
										<th class="text-center" style="width:375px;">e-mail</th>
										<th class="text-center" style="width:130px;">Статус
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><?php echo $id ?></td>
										<td><?php echo $userName ?></td>
										<td><?php echo $userEmail ?></td>

										<?php

										if ($status == 1){
											echo ("<td class='text-center'><span class='label label-primary'> Готово </span></td>") ;
										}

										else{
											echo ("<td class='text-center'><span class='label label-warning'> в обработке </span></td>") ;
										}


										?>

									</tr>
									</tbody>
								</table>

								<p><?php echo $mailText ?></p>

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