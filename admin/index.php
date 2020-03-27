<?php  
	
	include '_loader.php';

	if (isset($_GET['halaman'])) {

		$halaman = $_GET['halaman'];
	} else {

		$halaman = 'home';
	}

	ob_start();

	$file = 'admin/_pages/' .$halaman. '.php';

	if (!file_exists($file)) {

		include 'admin/_pages/error.php';
	} else {
		
		inlcude $file;
	}

	$halaman = ob_get_contents();

	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">

	<?= include 'admin/_layouts/head.php' ?>

	<body>
		
		<?= 

			echo $halaman;
			include 'admin/_layouts/footer.php';
			include 'admin/_layouts/js.php';
		?>
	</body>
</html>