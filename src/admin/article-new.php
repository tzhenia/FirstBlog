<?php

include_once "block_header.php";



?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox">

						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Новая статья</h5>

							</div>
							<div class="ibox-content">
								<form class="form-horizontal ng-pristine ng-valid" method="post" action="article-new-step2.php">

									<div class="form-group"><label class="col-lg-2 control-label">Тема</label>

										<div class="col-lg-10"><input name="title"  type="text" placeholder="Тема" class="form-control">
										</div>
									</div>

									<div class="form-group"><label class="col-lg-2 control-label">Текст</label>

										<div class="col-lg-10">
											<textarea name="text" class="form-control"></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10 text-right">
											<button class="btn btn-sm btn-white" type="submit">Отправить</button>
										</div>
									</div>
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