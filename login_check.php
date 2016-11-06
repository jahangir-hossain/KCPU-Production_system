<?php
	session_start();

	include_once('includes/dbconnect.php');

	if(!isset($_SESSION['userSession'])) {
		header('location: index.php');
	}

	$query = $dbconnect->query("SELECT * FROM user WHERE id=".$_SESSION['userSession']);
	$userRow = $query->fetch_array();
	$dbconnect->close();
?>
