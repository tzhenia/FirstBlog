<?php

include_once "block_header.php";

// Якщо в URL є ID - тоді пускаєм на сторінку і робим запит до БД
if (isset($_GET['id'])) {

	$result = getValue("article", $_GET['id']);

	while($row = mysqli_fetch_assoc($result)) {
		$id =  $row['id'];
		$title = $row['title'];
		$text = $row['text'];
		$status = $row['status'];
		$author = $row['author'];
		$date = $row['date'];
	}

	// Взнаєм імя по $author
	$result2 = getValue("user", $author);

	while($row = mysqli_fetch_assoc($result2)) {
		$userName = $row['name'];
	}

}


// Якщо в URL немає ID - тоді перенаправляєм на список юзерів
else{
	header('Location: /admin/article-list.php');
}


// Якщо в URL є action == unBlock - тоді робим запит до БД і обновляєм статус статті на "1"
if ( $_GET['action'] == "unBlock" ) {
	updateStatus("article", 1, $_GET['id']);
}


// Якщо в URL є action == block - тоді робим запит до БД і обновляєм статус статті на "0"
if ( $_GET['action'] == "block" ) {
	updateStatus("article", 0, $_GET['id']);
}

?>



	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5><?php echo $title ?></h5>



								<div class="ibox-tools">
									<?php echo $date ?>
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-wrench text-danger"></i>
									</a>
									<ul class="dropdown-menu dropdown-user">
										<li><a href="article-edit.php?id=<?php echo $id ?>&action=unBlock">Опубликовать</a></li>
										<li><a href="article-edit.php?id=<?php echo $id ?>&action=block">в редакцию</a></li>
									</ul>

								</div>

							</div>
							<div class="ibox-content">

								<table class="table table-bordered">
									<thead>
									<tr>
										<th class="text-center" style="width:70px;">ID</th>
										<th class="text-center" style="width:300px;">Заголовок</th>
										<th class="text-center" style="width:100px;">Автор</th>
										<th class="text-center" style="width:100px;">Статус</th>
									</tr>
									</thead>
									<tbody>

									<tr>
										<td class='text-center'><?php  echo $id ?></td>
										<td class='text-center'><?php  echo $title ?></td>
										<td class='text-center'><?php  echo $userName ?></td>

										<?php

										if ($status == 1){
											echo ("<td style='width:125px;' class='text-center'><span class='label label-primary'> Опубликовано </span></td>") ;
										}

										else{
											echo ("<td style='width:125px;' class='text-center'><span class='label label-danger'> в редакции </span></td>") ;
										}

										?>
										 </tr>


									</tbody>
								</table>


									<form method="post" action="article-edit-step2.php">
										<input name="title" type="text" value="<?php  echo $title ?>" class="form-control">
										<textarea name="text" class="form-control" rows="8"><?php  echo $text ?></textarea>
										<input type="hidden" name="idArticle" value="<?php echo $_GET['id']?>">
										<button type="submit" class="btn btn-primary">Обновить!</button>
									</form>

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