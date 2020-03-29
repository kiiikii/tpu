<?php

	defined('env') OR exit('Access to this script blocked');

	$setdb['db_host'] = '127.0.0.1';
	$setdb['db_name'] = '';
	$setdb['db_user'] = 'root';
	$setdb['db_password'] = '';

	# template folder
	$template = 'templates/gentelella-master/';

	# session
	$setSession['prefix'] = 'tpu';

	# URI
	$seturi['base'] = 'http://localhost/tpu/';
	$seturi['assets'] = 'assets/';