<?php
include_once "block_header.php";

$lastIdFromUser = getLastId("user");
$lastIdFromArticle = getLastId("article");
$lastIdFromMail = getLastId("mail");
$lastIdFromArticleComment = getLastId("article_comment");

?>


            <div class="wrapper wrapper-content animated fadeIn">

                <div class="p-w-md m-t-sm">
                    <div class="row">


						<div class="col-lg-3">
							<div class="widget style1 bg-primary">
								<div class="row">
									<div class="col-xs-4">
										<i class="fa fa-newspaper-o fa-5x"></i>
									</div>
									<div class="col-xs-8 text-right">
										<span> Статьи </span>

										<h2 class="font-bold"><?php echo $lastIdFromArticle ?></h2>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="widget style1 bg-success">
								<div class="row">
									<div class="col-xs-4">
										<i class="fa fa-user-o fa-5x"></i>
									</div>
									<div class="col-xs-8 text-right">
										<span> Пользователей </span>

										<h2 class="font-bold"><?php echo $lastIdFromUser ?></h2>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="widget style1 bg-warning">
								<div class="row">
									<div class="col-xs-4">
										<i class="fa fa-comments-o fa-5x"></i>
									</div>
									<div class="col-xs-8 text-right">
										<span> Комментарии </span>

										<h2 class="font-bold"><?php echo $lastIdFromArticleComment ?></h2>
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-3">
							<div class="widget style1 lazur-bg">
								<div class="row">
									<div class="col-xs-4">
										<i class="fa fa-envelope-o fa-5x"></i>
									</div>
									<div class="col-xs-8 text-right">
										<span> Писем </span>

										<h2 class="font-bold"><?php echo $lastIdFromMail ?></h2>
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