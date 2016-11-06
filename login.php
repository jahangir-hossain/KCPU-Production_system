<?php
	session_start();
	require_once('includes/dbconnect.php');

	if(isset($_SESSION['userSession']) != "") {
		header('location: home.php');
		exit();
	}

	if(isset($_POST['btn-login'])) {
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);

		$username = $dbconnect->real_escape_string($username);
		$password = $dbconnect->real_escape_string($password);

		$query = $dbconnect->query("SELECT id, username, password FROM user WHERE username='$username' LIMIT 1");
		$row = $query->fetch_assoc();
		$count = $query->num_rows;
		$hashed_password = password_hash($row['password'], PASSWORD_BCRYPT);

		if(password_verify($password, $hashed_password) && $count == 1) {
			$_SESSION['userSession'] = $row['id'];
			header('location: home.php');
		} else {
			$msg = "
				<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password!
				</div>
			";
		}

		$dbconnect->close();
	}
?>
