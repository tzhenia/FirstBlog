<?php  include_once "block_header.php" ?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">

				<div class="col-lg-6">
					<div class="contact-box">
						<div class="col-sm-4">
								<div class="text-center">
									<img alt="image" class="img-circle m-t-xs img-responsive" src="img/a1.jpg">

									<div class="m-t-xs font-bold">CEO</div>
								</div>
							</div>
							<div class="col-sm-8">
								<h3><strong>Alex Johnatan</strong></h3>

								<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
								<address>
									<strong>Twitter, Inc.</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
							</div>
							<div class="clearfix"></div>
						</div>
				</div>


				<div class="col-lg-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Форма обратной связи</h5>

						</div>

					  <?php

					  if ($_SESSION['id']){echo '
							<div class="ibox-content">
							<form class="form-horizontal ng-pristine ng-valid" method="post" action="contact_send.php">

								<div class="form-group"><label class="col-lg-2 control-label">Тема</label>

									<div class="col-lg-10"><input name="mailTitle"  type="text" placeholder="Тема" class="form-control">
									</div>
								</div>

								<div class="form-group"><label class="col-lg-2 control-label">Текст</label>

									<div class="col-lg-10">
										<textarea name="mailText" class="form-control"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10 text-right">
										<button class="btn btn-sm btn-white" type="submit">Отправить</button>
									</div>
								</div>
							</form>
						</div>
						';

					  }

					  else{

					  	echo '
					  	
					  	<div class="ibox-content">
					  		<p>Что бы отправить запрос - авторизируйтесь!</p>
					  	</div>
					  	
					  	';

					  }

						  ?>
						</div>
				</div>



			</div>

		</div>


	</div>


<?php
include_once "block_footer.php"
?>