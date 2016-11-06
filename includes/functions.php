<?php
	include_once('dbconnect.php');

	// function sec_session_start() secure session start
	function sec_session_start() {
		$session_name = 'sec_session_id';

		session_name($session_name);

		$secure = true;
		$httponly = true;

		if(ini_set('session.use_only_cookies', 1) === FALSE) {
			header("Location: ../error.php?err=Could not initiate a Safe Session (ini_set)");
			exit();
		}

		// getting current cookie param
		$cookieParams = session_get_cookie_params();
		session_set_cookie_params(
			$cookieParams['lifetime'],
			$cookieParams['path'],
			$cookieParams['domain'],
			$secure,
			$httponly
		);

		session_start();
		session_regenerate_id(true);
	}

	// function validate_data input data checking
	function validate_data($data) {
		$data = trim($data);
		$data = strip_tags($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	}

	// function data_input_check for making ready the data for database store
	// function data_input_check($data) {
	// 	if(!empty($data)) {
	// 		$data = validate_data($data);
	// 		$data = $dbconnect->real_escape_string($data);
	// 	} else {
	// 		$data = "";
	// 	}
	// 	return $data;
	// }
?>
