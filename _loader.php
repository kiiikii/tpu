<?php
	$_dir = __DIR__;
	define('env', $_dir);
	include(env. '/env.php');

	#helper
	include 'vendor/autoload.php';
	include '_help/help.php';
	include '_help/nfw_db.php';
	include '_help/nfw_form.php';