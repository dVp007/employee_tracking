<?php
session_start();
if(empty($_SESSION) || !isset($_SESSION))
	{
		die("SESSION IS NOT SET");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin||home</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/html" href="https://cdn.materialdesignicons.com/1.1.34/">
		<!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	</head>
	<body>
		<header>
			<nav class="teal">
				<ul id="slide-out" class="side-nav fixed">
					<li><div class="user-view no-padding">
						<div class="background">
							<img src="assets/office.jpg">
						</div>
						<div class="row" style="padding-top:20px;">
							<div class="col s4">
								<img class="circle" src="assets/yuna.jpg">
							</div>
							<div class="col s8">
								<h5 class="no-padding"><?=$_SESSION['uname']?></h5>
							</div>
						</div>
						<div class="row">
							<div class="col 6">
								<h6 class="white-text email">xyz@gmail.com</h6>
							</div>
						</div>
						
					</div></li>
					<li><a class="waves-effect" href="index.html">Dashboard</a></li>
					<li><a class="waves-effect" href="#!">Register</a></li>
					<li><a class="waves-effect" href="#!">Track</a></li>
					<li><a class="waves-effect" href="#!">History</a></li>
				</ul>
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			</nav>
		</header>
		<main>
			<div class="row">
				<div class="col s4">
					<div class="card">
						<div class="teal lighten-3" style="height: 140px">
							<div class="row">
								<div class="col s4 offset-s4">
									<div class="box circle blue-grey lighten-5"></div>
								</div>
							</div>
						</div>
						<div class="card-content" style="padding-top: 50px;">
							<h5 class="center-align">Number of Employees</h5>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/initialize-home.js"></script>
	</body>
</html>