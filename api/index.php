<?php 
	
	include '/../_loader.php';
	if (isset($_GET['halaman'])) {
		$halaman = $_GET['halaman'];
	} else {
		$halaman = 'beranda';
	}
	ob_start();
	$file = '/../_page/'.$halaman.'.php';
	if (!file_exists($file)) {
		include '/../_page/404.php';
	} else {
		include $file;
	}
	$halaman = ob_get_contents();
	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
	<?php include '/../_layout/head.php' ?>
	<body>
		<?php include '/../_layout/nav.php' ?>
		<?php 
			echo $halaman;
			include '/../_layout/footer.php'
		?>
		<?php include '/../_layout/loader.php' ?>
		<?php include '/../_layout/javascript.php' ?>
	</body>
</html>

<?php 
	if (isset($jsfile)) {
		include '/../_page/js/'.$jsfile.'.php';
	}
?>
