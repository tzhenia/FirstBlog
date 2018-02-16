<?php

include_once "block_header.php";
$result = getValue("page", 1);
?>


	<div class="wrapper wrapper-content animated fadeIn">

		<div class="p-w-md m-t-sm">


	 	<?php

	 		while($row = mysqli_fetch_assoc($result)) {


				echo'			<div class="row" >
							<div class="col-lg-12 animated fadeInRight" >
								<div class="mail-box-header" >
									<h2 >' . $row['title'] . '</h2 >
								</div >
								<div class="mail-box" >
									<div class="mail-body" >
										<p>' . $row['text'] . '</p >
									</div >
								<div class="clearfix" ></div >
			
			
								</div >
							</div >

					';
			}
			?>

			</div>

		</div>


	</div>


<?php
include_once "block_footer.php"
?>