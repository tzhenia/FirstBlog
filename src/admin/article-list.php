<?php

include_once "block_header.php";


$result = getAllValue("article");


?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Статьи</h5>
								<div class="ibox-tools text-primary">
									<a href="article-new.php" class="text-primary"><i class="fa fa-plus-square"></i> Добавить новую</a></li>
								</div>
							</div>
							<div class="ibox-content">

								<table class="table table-bordered text-center">
									<thead>
									<tr>
										<th class='text-center' style="width:55px;">ID</th>
										<th class='text-center'>Название</th>
										<th class='text-center' style="width:130px;">Статус</th>
										<th class='text-center' colspan="3">Дата</th>
									</tr>
									</thead>
									<tbody>



									<?php




									while($row = mysqli_fetch_assoc($result)) {
										echo "<tr>";
										echo ("<td>" . $row['id'] . "</td>") ;
										echo ("<td  class='text-left' >" . $row['title'] . "</td>") ;



										if ($row['status'] == 1){
											echo ("<td style='width:125px;' class='text-center'><span class='label label-primary'> Опубликовано </span></td>") ;
										}

										else{
											echo ("<td style='width:125px;' class='text-center'><span class='label label-danger'> в редакции </span></td>") ;
										}




										echo ("<td style='width:125px;'>" . $row['date'] . "</td>") ;
										echo ("<td style='width:80px;'><a class='btn-white btn btn-xs' href='../article.php?id=" . $row['id'] . "'>На сайте</a></td>") ;
										echo ("<td style='width:80px;'><a class='btn-white btn btn-xs' href='article-edit.php?id=" . $row['id'] . "'>Посмотреть</a></td>") ;
										echo "</tr>";
									}

									?>



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