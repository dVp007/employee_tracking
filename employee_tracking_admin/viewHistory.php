<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/history_details.php");
	$task_obj = getHistoryDetails();
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
				<div id = "history-list" >
						<input class="search col s12" placeholder="Search Name/Device/Pick-up Location/Start Date" />
						<table>
							
							<thead>
								<th class="center-align">Employee Name</th>
								<th class="center-align">Device Name</th>
								<th class="center-align">Pickup Location</th>
								<th class="center-align">Product Name</th>
								<th class="center-align">Start Date</th>
								<th class="center-align">Start Time</th>
								<th class="center-align">Completed Date</th>
								<th class="center-align">Completed Time</th>
							</thead>
							<tbody class ="list">
							<?php  while($row = $task_obj->fetch_assoc()){ ?>
								
								<tr >
									<td class="center-align list-name" id="<?= $row["emp_id"] ?>">
										<?= $row["emp_name"] ?>
      								</td>
      								<td class="center-align list-device" id="<?= $row["device_id"] ?>"> 
										<?= $row["device_name"] ?>
      								</td>
      								<td class="center-align list-pickup" id="<?= $row["pickup_id"] ?>">
										<?= $row["pickup_name"] ?>
      								</td>
      								<td class="center-align" id="<?= $row["prod_id"] ?>">
      									<?= $row["prod_name"] ?>
      								</td>
      								<td class="center-align list-date" id="<?= $row["prod_id"] ?>">
      									<?php
      									$str_date = strtotime($row["task_start_time"]) ;
      									echo date('d/m/Y',$str_date);
      									 ?>
      								</td>
      								<td class="center-align" id="<?= $row["prod_id"] ?>">
      									<?php
      									$str_time = strtotime($row["task_start_time"]) ;
      									echo date('H:i:s',$str_time);
      									 ?>
      								</td>
      								<td class="center-align" id="<?= $row["prod_id"] ?>">
      									<?php
      									$str_comp_date = strtotime($row["task_complete_time"]) ;
      									echo date('d/m/Y',$str_comp_date);
      									 ?>
      								</td>
      								<td class="center-align" id="<?= $row["prod_id"] ?>">
      									<?php
      									$str_comp_time = strtotime($row["task_complete_time"]) ;
      									echo date('H:i:s',$str_comp_time);
      									 ?>
      								</td>
								</tr>
							<?php }
							?>
							
							</tbody>
						</table>

						<div class="left">
								<ul class="pagination"></ul>
						</div>
					</div>
			</div>
				
		</div>
	</main>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
	<!-- <script type="text/javascript" src="js/employeeList.js"></script> -->
	<script type="text/javascript" src="js/historyList.js"></script>
</html>
					
