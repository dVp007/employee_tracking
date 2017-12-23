<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/task_details.php");
	$task_obj = getTaskDetails();
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
					<div id = "employee-list" class="col s12">
						<input class="search" placeholder="Search Employee Name">
						<table>
							
							<thead>
								<th class="center-align">Employee Name</th>
								<th class="center-align">Device Name</th>
								<th class="center-align">Pickup Location</th>
								<th class="center-align">Product Name</th>
								<th class="center-align">Active</th>
							</thead>
							<tbody class ="list">
							<?php while($row = $task_obj->fetch_assoc()){ ?>
								
								<tr >
									<td class="center-align" id="<?= $row["emp_id"] ?>">
										<?= $row["emp_name"] ?>
      								</td>
      								<td class="center-align" id="<?= $row["device_id"] ?>"> 
										<?= $row["device_name"] ?>
      								</td>
      								<td class="center-align" id="<?= $row["pickup_id"] ?>">
										<?= $row["pickup_name"] ?>
      								</td>
      								<td class="center-align" id="<?= $row["prod_id"] ?>">
      									<?= $row["prod_name"] ?>
      								</td>
      								<td class="center-align">
										<div class="switch">
										    <label>
										      Off
										      <input type="checkbox">
										      <span class="lever"></span>
										      On
										    </label>
										  </div>
      								</td>
								</tr>
							<?php }
							?>
							
							</tbody>
						</table>

						<div class="right">
								<ul class="pagination"></ul>
						</div>
				</div>
			</div>
				
		</div>
	</main>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
</html>
					
