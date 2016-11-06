<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Knit Concern Printing Unit">
		<meta name="description" content="KCPU Production, Receive and Delivery Data Management System with PHP and MySQL">
		<title>KCPU :: Knit Concern Printing Unit</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div id="wrapper">
			<header id="site-header">
				<nav class="navbar navbar-navigation navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="home.php" class="navbar-brand site-logo">KCPU</a>
						</div> <!--/ navbar-header -->

						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php">Home</a></li>
								<li><a href="basic-info.php">Basic-Info</a></li>
								<li><a href="production.php">Production</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<span class="glyphicon glyphicon-user"></span> USER <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a class="logout" href="logout.php?logout">Log Out</a></li>
									</ul>
								</li> <!--/ li.dropdown -->
							</ul> <!--/ end of navbar-nav -->
						</div> <!--/ navbar-collapse -->
					</div> <!--/ container -->
				</nav> <!--/ navbar -->
			</header> <!--/ #site-header -->