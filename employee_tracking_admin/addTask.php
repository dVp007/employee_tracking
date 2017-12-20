<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/employee_details.php");
	$employee_obj = getEmployees(0);
	include_once("php/device_details.php");
	$device_obj = getDevice(0);
	include_once("php/pickupDetails.php");
	$pickup_obj = getPickupDetails();
?>
<html>
	<head>
		<title>Admin||Employees</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/html" href="https://cdn.materialdesignicons.com/1.1.34/">
		<!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- jquery  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<!-- list.js -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<style type="text/css">
			.pagination li.active{
				background-color: teal!important;
			}
		</style>
	</head>
	<?php include "nav.html";?>
	<body>
		<main>
			<div>
				<div class="row">
					<div id = "employee-list" class="col s4">
						<input class="search" placeholder="Search...">
						<table>
							<caption>Employee List</caption>
							<thead>
								<th>Name</th>
							</thead>
							<tbody class="list">
								<?php while($row = $employee_obj->fetch_assoc()):?>
								<tr>
									<td class="employee-list-name">
										<input name="employee" type="radio" id = '<?=$row['emp_id']?>'/>
	      								<label for="<?=$row['emp_id']?>"><?=$row['emp_name'];?></label>
      								</td>
								</tr>
								<?php endwhile?>
							</tbody>
						</table>
					<div class="row">
						<ul class="pagination" style = "display:inline-block;padding:5px;"></ul>
					</div>
				</div>
				<div id="device-list" class="col s4">
						<input class="search" placeholder="Search...">
						<table>
							<caption>Device List</caption>
							<thead>
								<th>Name</th>
							</thead>
							<tbody class="list">
								<?php while($row = $device_obj->fetch_assoc()):?>
								<tr>
									<td class="device-list-name">
									<input name="device" type="radio" id = '<?=$row['device_imei']?>' />
	      							<label for="<?=$row['device_imei']?>"><?=$row['device_name'];?></label>
	      							</td>
								</tr>
								<?php endwhile?>
							</tbody>
						</table>
					<div class="row">
						<ul class="pagination" style = "display:inline-block;padding:5px;"></ul>
					</div>
				</div>
				<div id="pickup-list" class="col s4">
						<input class="search" placeholder="Search...">
						<table>
							<caption>Pick-up List</caption>
							<thead>
								<th>Name</th>
								<th>Product</th>
							</thead>
							<tbody class="list">
								<?php while($row = $pickup_obj->fetch_assoc()):?>
								<tr>
									<td class="pickup-list-name">
									<input name="pickup" type="radio" id = '<?="p".$row['pickup_id']?>' />
	      							<label for="<?="p".$row['pickup_id']?>"><?=$row['pickup_name'];?></label>
	      							</td>
	      							<td class="product" id="<?=$row['prod_id']?>"><?=$row['prod_id']?></td>
								</tr>
								<?php endwhile?>
							</tbody>
						</table>
					<div class="row">
						<ul class="pagination" style = "display:inline-block;padding:5px;"></ul>
					</div>
				</div>
			</div>
				<a class="waves-effect waves-light btn" id="add"><i class="material-icons right">send</i>ADD</a>
		</div>
	</main>
	<script type="text/javascript" src="js/task.js"></script>
</body>
</html>