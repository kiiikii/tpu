<?php  
	
	include '_loader.php';

	if (isset($_GET['halaman'])) {

		$halaman = $_GET['halaman'];
	} else {

		$halaman = 'home';
	}

	ob_start();

	$file = '_pages/' .$halaman. '.php';

	if (!file_exists($file)) {

		include '_pages/error.php';
	} else {
		
		include $file;
	}

	$halaman = ob_get_contents();

	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">

	<?php include '_layouts/head.php' ?>

	<body class="nav-md footer_fixed">

		<div class="container body">

			<div class="main_container">
		
				<?php

					include '_layouts/header.php';
					include '_layouts/sidebar.php';
				?>

				<?php 

					echo $halaman;
					include '_layouts/footer.php';
				?>
			</div>
		</div>
	</body>

	<?php 

		include '_layouts/js.php';
	?>
</html>