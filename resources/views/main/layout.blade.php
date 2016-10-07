<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/main.style.css">
	</head>
	<!--HEADER-->
		<body>
			<nav id="header_main" class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header pull-left">
						<h2 id="welcome" class="navbar-brand">Welcome,</h2>
					</div>

			<ul class="nav navbar-nav pull-right">
				<li id="menu_main_box" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<div id="menu_icon"></div>
						<div id="menu_icon"></div>
						<div id="menu_icon"></div>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"> Home </a></li>
						<li><a href="#"> Groups </a></li>
						<li><a href="#"> Entrys</a></li>
					</ul>
				</li>
				</ul>
			</div>
		</nav>
		<!-- BODY -->

		@yield('content')

	</body>
</html>