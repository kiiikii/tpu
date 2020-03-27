<?php

	$_dir = __DIR__;
	define('env', $_dir);
	include(env. '/admin/env.php');

	# Helper
	include 'admin/vendor/autoload.php';
	include 'admin/_helpers/helper.php';
	include 'admin/_helpers/nfw_form.php';
	include 'admin/_helpers/nfw_db.php';
	include 'admin/_helpers/nfw_upload.php';
	include 'admin/_helpers/nfw_session.php';