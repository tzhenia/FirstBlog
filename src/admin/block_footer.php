<div class="footer">
	<div>
		<strong>Copyright</strong> Blog &copy; 2017
	</div>
</div>
</div>

</div>


<!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Flot -->
<script src="../js/plugins/flot/jquery.flot.js"></script>
<script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="../js/plugins/flot/jquery.flot.spline.js"></script>
<script src="../js/plugins/flot/jquery.flot.resize.js"></script>
<script src="../js/plugins/flot/jquery.flot.pie.js"></script>
<script src="../js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="../js/plugins/flot/jquery.flot.time.js"></script>

<!-- Custom and plugin javascript -->
<script src="../js/inspinia.js"></script>
<script src="../js/plugins/pace/pace.min.js"></script>

<!-- Sparkline -->
<script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>


 


<?php
// Якщо в URL є success == OK - відкриється сповіщення.
if ( $_GET['success'] == "ok" ) {
	echo '<script>swal("Готово!", "данные успешно обновлены", "success");</script>';
}
?>

</body>
</html>
