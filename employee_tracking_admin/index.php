<?php
session_start();
if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");


	include_once("php/employee_details.php");
	$employee_obj = getEmployees(0);
	include_once("php/device_details.php");
	$device_obj = getDevice(0);
	include_once("php/vendor_details.php");
	$vendor_obj = getVendorDetails();
	include_once("php/task_details.php");
	$task_obj = getTaskDetails();
	while($row = $employee_obj->fetch_assoc()){
		if ($row['emp_id'] == $_SESSION['uid']) {
			$_SESSION['name'] = $row['emp_name'];
		}
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
			<?php include "nav.html";?>	
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
							<h5 class="center-align"><?=$employee_obj->num_rows;?></h5>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
					</div>
				</div>
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
							<h5 class="center-align">Number of devices</h5>
							<h5 class="center-align"><?=$device_obj->num_rows;?></h5>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
					</div>
				</div>
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
							<h5 class="center-align">Number of Vendors</h5>
							<h5 class="center-align"><?=$vendor_obj->num_rows;?></h5>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
					</div>
				</div>
			</div>
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
							<h5 class="center-align">Number of Tasks</h5>
							<h5 class="center-align"><?=$task_obj->num_rows;?></h5>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
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