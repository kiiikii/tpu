<?php 
	
	include (__DIR__ . '/../_loader.php');
	if (isset($_GET['halaman'])) {
		$halaman = $_GET['halaman'];
	} else {
		$halaman = 'beranda';
	}
	ob_start();
    // Path corrected here (Added a slash)
	$file = __DIR__ . '/../_page/'.$halaman.'.php';
	if (!file_exists($file)) {
        // Path corrected here (Added the required '../')
		include (__DIR__ . '/../_page/404.php');
	} else {
		include $file;
	}
	$halaman = ob_get_contents();
	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Path corrected here -->
	<?php include (__DIR__ . '/../_layout/head.php') ?>
	<body>
        <!-- Path corrected here -->
		<?php include (__DIR__ . '/../_layout/nav.php') ?>
		<?php 
			echo $halaman;
            // Path corrected here
			include (__DIR__ . '/../_layout/footer.php')
		?>
        <!-- Path corrected here -->
		<?php include (__DIR__ . '/../_layout/loader.php') ?>
        <!-- Path corrected here -->
		<?php include (__DIR__ . '/../_layout/javascript.php') ?>
	</body>
</html>

<?php 
	if (isset($jsfile)) {
        // Path corrected here
		include (__DIR__ . '/../_page/js/'.$jsfile.'.php');
	}
?>
