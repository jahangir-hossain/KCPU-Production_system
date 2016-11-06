<?php
	$server = 'mysql3.gear.host';
	$username = 'kcpu';
	$password = 'kcpupass1234-';
	$dbname = 'kcpu';

	$dbconnect = new mysqli($server, $username, $password, $dbname);

	if($dbconnect->connect_errno) {
		die('<p class="error">Connection Error! '.$dbconnect->connect_error.'</p>');
	}
?>
