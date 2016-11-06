<?php
	include_once('includes/functions.php');
	// include_once('includes/dbconnect.php');
	// configuring manual database connection
	$server = 'mysql3.gear.host';
	$username = 'kcpu';
	$password = 'kcpupass1234-';
	$dbname = 'kcpu';

	$dbconnect = new mysqli($server, $username, $password, $dbname);

	if($dbconnect->connect_errno) {
		die('<p class="error">Connection Error! '.$dbconnect->connect_error.'</p>');
	}

	// function data_input_check($data) {
	// 	if(!empty($data)) {
	// 		$data = validate_data($data);
	// 		$data = $dbconnect->real_escape_string($data);
	// 	} else {
	// 		$data = "";
	// 	}
	// 	return $data;
	// }

	$error = false;
	if(isset($_POST['btn-submit'])) {
		// naming & filtering the data
		$manager_name = filter_var($_POST['manager_name'], FILTER_SANITIZE_STRING);
		$order_no = filter_var($_POST['order_no'], FILTER_SANITIZE_STRING);
		$style_name = filter_var($_POST['style_name'], FILTER_SANITIZE_STRING);
		$body_color = filter_var($_POST['body_color'], FILTER_SANITIZE_STRING);
		$print_qua = filter_var($_POST['print_qua'], FILTER_SANITIZE_STRING);
		$parts_name = filter_var($_POST['parts_name'], FILTER_SANITIZE_STRING);
		$color_qun = filter_var($_POST['color_qun'], FILTER_SANITIZE_STRING);
		$target_pday = filter_var($_POST['target_pday'], FILTER_SANITIZE_STRING);
		$pd_start = filter_var($_POST['pd_start'], FILTER_SANITIZE_STRING);
		$pd_finish = filter_var($_POST['pd_finish'], FILTER_SANITIZE_STRING);
		$shipment = filter_var($_POST['shipment'], FILTER_SANITIZE_STRING);

		$manager_name = $dbconnect->real_escape_string($manager_name);
		$order_no = $dbconnect->real_escape_string($order_no);
		$style_name = $dbconnect->real_escape_string($style_name);
		$body_color = $dbconnect->real_escape_string($body_color);
		$print_qua = $dbconnect->real_escape_string($print_qua);
		$parts_name = $dbconnect->real_escape_string($parts_name);
		$color_qun = $dbconnect->real_escape_string($color_qun);
		$target_pday = $dbconnect->real_escape_string($target_pday);
		$pd_start = $dbconnect->real_escape_string($pd_start);
		$pd_finish = $dbconnect->real_escape_string($pd_finish);
		$shipment = $dbconnect->real_escape_string($shipment);

		if($stmt = $dbconnect->prepare("INSERT INTO pd_plan(manager_name, style_name, order_no, body_color, print_quality, parts_name, color_qty, t_perday, p_start, p_finish, shipment) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
			$stmt->bind_param('sssssssssss', $manager_name, $style_name, $order_no, $body_color, $print_qua, $parts_name, $color_qun, $target_pday, $pd_start, $pd_finish, $shipment);

			if(empty($manager_name) && empty($order_no) && empty($style_name) && empty($body_color) && empty($print_qua) && empty($parts_name) && empty($color_qun) && empty($target_pday) && empty($pd_start) && empty($pd_finish) && empty($shipment)) {
				$error = true;
			} else {
				$error = false;
				$result = $stmt->execute();
				if(!$result) {
					$error = true;
				}
			}
		}

		if(!$error) {
			$msg = "
				<div class='alert alert-success'>
					<span class='glyphicon glyphicon-info-sign'></span> All Data Inserted Successfully.
				</div>
			";
		} else {
			$msg = "
				<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> Error Occured!
				</div>
			";
		}

		$dbconnect->close();
	}
?>
