
<div class="footer">
	<div>
		<strong>Copyright</strong> Blog &copy; 2017
	</div>
</div>
</div>

</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/inspinia.js"></script>

 
<?php
// Якщо в URL є success == OK - відкриється сповіщення.
if ( $_GET['success'] == "ok" ) {
	echo '<script>swal("Готово!", "Изменения прийняты", "success");</script>';
}
?>
</body>
</html>
