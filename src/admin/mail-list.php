<?php

include_once "block_header.php";


$result = getAllValue("mail");



?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Почта</h5>
							</div>
							<div class="ibox-content">

								<table class="table table-bordered text-center">
									<thead>
									<tr>
										<th class="text-center" style="width:70px;">ID</th>
										<th class="text-center">Пользователь</th>
										<th class="text-center" style="width:130px;">Статус</th>
										<th class="text-center" colspan="2">Дата</th>
									</tr>
									</thead>
									<tbody>


									<?php

									while($row = mysqli_fetch_assoc($result)) {


										// Взнаєм імя по $author
										$result2 = getValue("user", $row['userId']);

										while($row2 = mysqli_fetch_assoc($result2)) {
											$userName = $row2['name'];
										}



										echo "<tr>";
										echo ("<td class='text-center'>" . $row['id'] . "</td>") ;
										echo ("<td>" . $userName . "</td>") ;

										if ($row['status'] == 1){
											echo ("<td style='width:125px;'><span class='label label-primary'> Готово </span></td>") ;
										}

										else{
											echo ("<td style='width:125px;'><span class='label label-warning'> в обработке </span></td>") ;
										}

										echo ("<td style='width:125px;'>" . $row['date'] . "</td>") ;
										echo ("<td style='width:80px;'><a class='btn-white btn btn-xs' href='mail.php?id=" . $row['id'] . "'>Посмотреть</a></td>") ;
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