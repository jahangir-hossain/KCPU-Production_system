<?php
	session_start();

	if(!isset($_SESSION['userSession'])) {
		header('location: index.php');
	} else if(isset($_SESSION['userSession']) != "") {
		header('location: home.php');
	}

	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userSession']);
		header('location: index.php');
	}
?>
