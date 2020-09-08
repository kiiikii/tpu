<?php
	
	defined('env') OR exit('akses langsung script diblokir');

	#set database
	$setdb['db_host'] = '127.0.0.1';
	$setdb['db_name'] = 'etpu';
	$setdb['db_user'] = 'root';
	$setdb['db_password'] = '';

	#template
	$template = 'templates/findstate/';

	#URI
	$seturi['base'] = 'http://localhost/tpu/';
	$seturi['assets'] = 'assets/';