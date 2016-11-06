<?php require_once('login_check.php'); ?>
<?php require_once('includes/header.php'); ?>
	<section id="main-body">
		<div class="container">
			<div class="page_header white_bg">
				<h1>Production Data</h1>
				<h4>All Production Data Information are Here</h4>
			</div> <!--/ production-header -->

			<div class="white_bg info_box">
				<h3>See All the data or Search for a Specific Information</h4>
				<div class="section_part">
					<div class="row">
						<div class="col-md-4 section_box">
							<div class="section_box_container">
								<a href="all-data.php" class="btn btn-danger btn-lg custom_link_btn section_margin" role="button">All Data</a>
							</div>
						</div> <!--/ .section_box -->

						<div class="col-md-4 section_box">
							<div class="section_box_container">
								<div class="dropdown section_margin">
									<a class="custom_link_btn btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										Manager Name <span class="caret"></span>
									</a>
									<ul class="dropdown-menu custom_dropdown">
										<li><a href="#">Manager Name 1</a></li>
										<li><a href="#">Manager Name 2</a></li>
										<li><a href="#">Manager Name 3</a></li>
										<li><a href="#">Manager Name 4</a></li>
										<li><a href="#">Manager Name 5</a></li>
									</ul>
								</div>
							</div>
						</div> <!--/ .section_box -->

						<div class="col-md-4 section_box">
							<div class="section_box_container">
								<form action="search-action.php" class="form-inline search-form section_margin" method="post">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
											<input type="text" name="search_form" class="form-control" maxlength="40" placeholder="Search Here ..." required>
										</div>
									</div>

									<div class="form-group">
										<input type="submit" name="btn-search" class="btn btn-primary" value="Search">
									</div>
								</form>
							</div>
						</div> <!--/ .section_box -->
					</div> <!--/ column row -->
				</div> <!--/ section_part -->
			</div> <!--/ info_box -->
		</div> <!--/ .container -->
	</section> <!--/ #main-body -->
<?php require_once('includes/footer.php'); ?>