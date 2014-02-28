<?php
require_once('adminDAO.php');
require_once('adminHandler.php');

$config = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'online_exam'
);

$db = new mysqli(
	$config['host'],
	$config['username'],
	$config['password'],
	$config['database']
);

if (mysqli_connect_errno()){
	echo 'An occured Error';
	exit;
}
 ?>