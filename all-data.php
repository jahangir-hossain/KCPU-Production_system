<?php include_once('login_check.php'); ?>
<?php include_once('includes/header.php'); ?>
<section id="main-body">
	<div class="container">
		<div class="page_header white_bg">
			<h1>All Production Data</h1>
			<h4>All Production Data shown uncategory wished</h4>
		</div> <!--/ page-header -->

		<div class="data_table">
			<table class="table table-responsive table-bordered white_bg">
				<tr>
					<th>Style Name</th>
					<th>Order No</th>
					<th>Body Color</th>
					<th>Print Quality</th>
					<th>Parts Name</th>
					<th>Color Qty</th>
					<th>Order Qty</th>
					<th>Extra 5%</th>
					<th>Total Qty</th>
					<th>T-Perday</th>
					<th>T-day</th>
					<th>P-Start</th>
					<th>P-Finish</th>
					<th>Shipment</th>
					<th>1-Time-De.</th>
				</tr>
				<?php
					// require_once('includes/dbconnect.php');

					// configuring manual database connection
					$server = 'mysql3.gear.host';
					$username = 'kcpu';
					$password = 'kcpupass1234-';
					$dbname = 'kcpu';

					$dbconnect = new mysqli($server, $username, $password, $dbname);

					if($dbconnect->connect_errno) {
						die('<p class="error">Connection Error! '.$dbconnect->connect_error.'</p>');
					}

					$query = $dbconnect->query("SELECT * FROM pd_plan");
					$result = $query->num_rows;

					if($result > 0) {
						while($row = $query->fetch_assoc()) {
							$mn = $row['manager_name'];
		                    $sn = $row['style_name'];
		                    $on = $row['order_no'];
		                    $bc = $row['body_color'];
		                    $pqua = $row['print_quality'];
		                    $pn = $row['parts_name'];
		                    $cqty = $row['color_qty'];
		                    $odqty = $cqty;
		                    $ext = ($odqty / 20); // calculating the extra fabric
		                    $toqty = ($cqty + $ext); // calculating total quantity
		                    $tpd = $row['t_perday'];
		                    $tod = round(($toqty / $tpd), 3); // calculating total day
		                    $pst = $row['p_start'];
		                    $pfn = $row['p_finish'];
		                    $sh = $row['shipment'];
		                    $onetide = round($tpd / 3);

		                    $output = "
								<tr class='data_row'>
									<td>$sn</td>
									<td>$on</td>
									<td>$bc</td>
									<td>$pqua</td>
									<td>$pn</td>
									<td>$cqty</td>
									<td>$odqty</td>
									<td>$ext</td>
									<td>$toqty</td>
									<td>$tpd</td>
									<td>$tod</td>
									<td>$pst</td>
									<td>$pfn</td>
									<td>$sh</td>
									<td>$onetide</td>
								</tr>
		                    ";
		                    echo $output;
						}
					} else {
						echo "0 Result Found!";
					}
				?>
			</table>
		</div> <!--/ data_table -->
	</div> <!--/ .container -->
</section> <!--/ main-body -->
<?php include_once('includes/footer.php'); ?>
