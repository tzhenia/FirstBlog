<?php

include_once "block_header.php";
$result = getAllArticle("article");
?>


            <div class="wrapper wrapper-content animated fadeIn">

                <div class="p-w-md m-t-sm">

					<?php




					while($row = mysqli_fetch_assoc($result)) {




						// Взнаєм імя по $author
						$result2 = getValue("user", $row['author']);

						while($row2 = mysqli_fetch_assoc($result2)) {
							$userName = $row2['name'];
						}


                    echo '<div class="row">
						<div class="col-lg-12 animated fadeInRight">
							<div class="mail-box-header">
								<div class="pull-right tooltip-demo">
									<span>' . $row['date'] . '</span>
								</div>
								<h2>' . $row['title'] . '<small> автор: ' . $userName . '</small></h2>
							</div>
							<div class="mail-box">
								<div class="mail-body">';

                    		echo mb_strimwidth($row['text'], 0, 500, " ...");

							echo '</div>
								<div class="mail-body text-right tooltip-demo">';


							if ($_SESSION['userGroup'] == 10) {
								echo '
									<a class="btn btn-sm btn-white" ui-sref="email_compose" href="/admin/article-edit.php?id=' . $row['id'] . '"><i class="fa fa-reply"></i> Редактировать</a>
							';
							}

							echo ' <a class="btn btn-sm btn-white" ui-sref="email_compose" href="article.php?id=' . $row['id'] . '"><i class="fa fa-arrow-right"></i> Читать далее</a>
									</div>
								<div class="clearfix"></div> 
							</div>
						</div>
                    </div>';

						}

					?>

                </div>


            </div>


<?php
include_once "block_footer.php"
?>