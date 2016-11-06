<?php include_once('login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KCPU :: Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div id="wrapper">
		<header>
			<div class="container">
				<div class="site-heading">
					<h1>KCPU</h1>
					<h3>Knit Concern Printing Unit</h3>
				</div> <!--/ .site-heading -->
			</div> <!--/ .container -->
		</header> <!--/ end of header -->

		<section id="user_login">
			<div class="container">
				<div id="login_box">
					<h2>Log In</h2>
					<hr>

					<form method="post" class="login-form" id="login-form">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
								<span id="check-e"></span>
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
								<span id="check-e"></span>
							</div> <!--/ input-group -->
						</div> <!--/ form-group -->

						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block" name="btn-login" id="btn-login">Sign In</button>
						</div> <!--/ form-group -->
					</form> <!--/ .login-form -->
					<?php if(isset($msg)) { echo $msg; } ?>
				</div> <!--/ #login_box -->
			</div> <!--/ container -->
		</section> <!--/ #user_login -->
	</div> <!--/ #wrapper -->

</body>
</html>
