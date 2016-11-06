<?php require_once('login_check.php'); ?>
<?php require_once('includes/header.php'); ?>
	<section id="main-body">
		<div class="container">
			<div class="page_header white_bg">
				<h1>Basic-Info</h1>
				<h4>All Data Information will be entered Here</h4>
			</div> <!--/ production-header -->

			<div class="dataentry_box white_bg">
				<form class="form-horizontal" id="entry_form" method="post">
					<div class="form_container">
						<div class="form-group form_title">
							<h3>Data-Entry Form</h3>
							<hr>
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="manager_name" class="form-control" placeholder="Manager Name">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
								<input type="text" name="order_no" class="form-control" placeholder="Order No">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
								<input type="text" name="style_name" class="form-control" placeholder="Style Name">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
								<input type="text" name="body_color" class="form-control" placeholder="Body Color">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
								<input type="text" name="print_qua" class="form-control" placeholder="Print Quality">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
								<input type="text" name="parts_name" class="form-control" placeholder="Parts Name">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-pushpin"></span></span>
								<input type="text" name="color_qun" class="form-control" placeholder="Color Quantity">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></span>
								<input type="text" name="target_pday" class="form-control" placeholder="Target Per Day">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								<input type="text" name="pd_start" class="form-control" placeholder="Production Start">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								<input type="text" name="pd_finish" class="form-control" placeholder="Production Finish">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								<input type="text" name="shipment" class="form-control" placeholder="Shipment Date">
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block" name="btn-submit" id="btn-submit">Submit</button>
						</div> <!--/ form-group -->
						
						<?php require_once('form-data.php'); ?>
						<?php if(isset($msg)) { echo $msg; } ?>
					</div> <!--/ form-container -->
				</form> <!--/ #entry_form -->
			</div> <!--/ dataentry_box -->
		</div> <!--/ .container -->
	</section> <!--/ #main-body -->
<?php require_once('includes/footer.php'); ?>