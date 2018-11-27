<?php 
session_start();

$_GLOBALS['config'] = array(
	'mysql' => array(
		'mysql' => array(
			'host' => '127.0.0.1',
			'username' => 'root',
			'password' => '',
			'db' => 'ooplr'
		)
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800 //one month time of expiry
	),
	'session' => array(
		'session_name' => 'user'
	)
);

spl_autoload_register(function($class) {
	require_once 'classes/'.$class.'.php';
});