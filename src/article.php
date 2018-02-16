<?php

include_once "block_header.php";

$result = getValue("article", $_GET['id']);
$result2 = getValueComment("article_comment", $_GET['id']);
$count = getSize("article_comment", $_GET['id']);
?>

	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">

			<?php

				while($row = mysqli_fetch_assoc($result)) {

							// Якщо статья не опублікована - редірект на головну
							if ($row['status']==0) {
								header('Location: https://php.tzhenia.com');
							}

							// Взнаєм імя по $author
							$result4 = getValue("user", $row['author']);
							while($row4 = mysqli_fetch_assoc($result4)) {
								$authorName = $row4['name'];
							}



						echo '<div class="row">
								<div class="col-lg-12 animated fadeInRight">
									<div class="mail-box-header">
										<div class="pull-right tooltip-demo">
											<span>' . $row['date'] . '</span>
										</div>
										<h2>' . $row['title'] . '<small> автор: ' . $authorName . '</small></h2>
									</div>
									<div class="mail-box">
										<div class="mail-body">' . $row['text'] . '</div>
										<div class="mail-body text-right tooltip-demo">
										';

					if($_SESSION['status']==1){echo '<button class="btn btn-primary"  id="myBtn">Комментировать</button>';}

					echo '					</div>
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>';

				}



			?>


		</div>

		<div class="p-w-md m-t-sm">
			<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">

					<div class="ibox-content">

						<div>
							<div class="chat-activity-list">




								<?php

								if ($count == 0){
									echo "Нет комментариев";
								}




								while($row = mysqli_fetch_assoc($result2)) {






									// Взнаєм імя по $author
									$result3 = getValue("user", $row['idUser']);

									while($row3 = mysqli_fetch_assoc($result3)) {
										$userName = $row3['name'];
									}


									echo '
								 
								 	<div class="chat-element">
									<a href="" class="pull-left">
										<img alt="image" class="img-circle" src="img/a1.jpg">
									</a>

									<div class="media-body ">
										<small class="pull-right text-muted">' . $row['date'] . '</small>
										<strong>' . $userName . '</strong>

										<p class="m-b-xs">' . $row['text'] . '</p>

									</div>
								</div>
								 
								 
								 
								 ';
								}

								?>

 

							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		</div>

	</div>



	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>


				<div class="row">
					<div class="col-lg-12"><h2 class="text-center">Оставьте коментарий</h2></div>
				</div>


			<div class="row">
				<div class="col-lg-12">
					<form method="post" action="article_send_comment.php">
						<div class="input-group"><input type="text" class="form-control" name="comment"> <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Отправить!</button>
						</span>
							<input type="hidden" class="form-control" name="idArticle" value="<?php echo $_GET['id'] ?>">
						</div>
					</form>


				</div>
			</div>





		</div>

	</div>


	<script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
	</script>


<?php
include_once "block_footer.php"
?>