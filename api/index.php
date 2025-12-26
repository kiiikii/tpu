<?php 
    // Define the root directory path relative to this script
    $rootDir = __DIR__ . '/../';
	
	include ($rootDir . '_loader.php');
	if (isset($_GET['halaman'])) {
		$halaman = $_GET['halaman'];
	} else {
		$halaman = 'beranda';
	}
	ob_start();
    
    // Use the $rootDir variable here
	$file = $rootDir . '_page/'.$halaman.'.php';
	
	if (!file_exists($file)) {
        // Use the $rootDir variable here as well
		include ($rootDir . '_page/404.php');
	} else {
		include $file;
	}
	$halaman = ob_get_contents();
	ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Use the $rootDir variable for all includes -->
	<?php include ($rootDir . '_layout/head.php') ?>
	<body>
		<?php include ($rootDir . '_layout/nav.php') ?>
		<?php 
			echo $halaman;
			include ($rootDir . '_layout/footer.php')
		?>
		<?php include ($rootDir . '_layout/loader.php') ?>
		<?php include ($rootDir . '_layout/javascript.php') ?>
	</body>
</html>

<?php 
	if (isset($jsfile)) {
        // Use the $rootDir variable here too
		include ($rootDir . '_page/js/'.$jsfile.'.php');
	}
?>
