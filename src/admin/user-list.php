<?php

include_once "block_header.php";

$result = getAllValue("user");

?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Пользователи блога</h5>
							</div>
							<div class="ibox-content">

								<table class="table table-bordered text-center">
									<thead>
									<tr>
										<th class="text-center" style="width:70px;">ID</th>
										<th class="text-center">Имя</th>
										<th class="text-center" style="width:300px;">e-mail</th>
										<th class="text-center" style="width:130px;">Группа</th>
										<th class="text-center" style="width:100px;">Статус</th>
										<th class="text-center" colspan="2">Дата</th>
									</tr>
									</thead>
									<tbody>

									<?php




									while($row = mysqli_fetch_assoc($result)) {
										echo "<tr>";
										echo ("<td class='text-center'>" . $row['id'] . "</td>") ;
										echo ("<td>" . $row['name'] . "</td>") ;
										echo ("<td>" . $row['email'] . "</td>") ;


										if ($row['userGroup'] == 10){
											echo ("<td class='text-center'> Админ </td>") ;
										}

										else{
											echo ("<td class='text-center'> Пользователь </td>") ;
										}


										if ($row['status'] == 1){
											echo ("<td style='width:125px;' class='text-center'><span class='label label-primary'> Есть доступ </span></td>") ;
										}

										else{
											echo ("<td style='width:125px;' class='text-center'><span class='label label-danger'> Заблокирован </span></td>") ;
										}



										echo ("<td style='width:125px;'>" . $row['regDate'] . "</td>") ;
										echo ("<td><a class='btn-white btn btn-xs' href='user.php?id=" . $row['id'] . "'>Посмотреть</a></td>") ;
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