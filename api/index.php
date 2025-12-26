<?php 
	
	include __DIR__ '/_loader.php';
	if (isset($_GET['halaman'])) {
		$halaman = $_GET['halaman'];
	} else {
		$halaman = 'beranda';
	}
	ob_start();
	$file = __DIR__ '../_page/'.$halaman.'.php';
	if (!file_exists($file)) {
		include __DIR__  '/_page/404.php';
	} else {
		include $file;
	}
	$halaman = ob_get_contents();
	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
	<?php include __DIR__ '/_layout/head.php' ?>
	<body>
		<?php include __DIR__ '/_layout/nav.php' ?>
		<?php 
			echo $halaman;
			include __DIR__ '/_layout/footer.php'
		?>
		<?php include __DIR__ '/_layout/loader.php' ?>
		<?php include __DIR__ '/_layout/javascript.php' ?>
	</body>
</html>

<?php 
	if (isset($jsfile)) {
		include __DIR__ '/_page/js/'.$jsfile.'.php';
	}
?>
