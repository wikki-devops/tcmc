<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'tatambaram',
	'password' => 'tatambaram',
	'database' => 'tatambaram',
	// 'username' => 'root',
	// 'password' => '',
	// 'database' => 'tatambaram',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
