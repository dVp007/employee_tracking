<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/employee_details.php");
	$employee_obj = getEmployees(1);
	
?>
<!DOCTYPE html>
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
			<div id = "employee-list">
				<div class="row">
					<div class="col s12">
						<input class="search" placeholder="Search...">
						<table id='tbl'>
						<div id="loader" style="display: none;">
  <div class="preloader-wrapper big active" style="margin-left: 500px;">
    <div class="spinner-layer spinner-blue-only ">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>
						<thead>
							<th>Name</th>
							<th>Address</th>
							<th>Age</th>
							<th>Contact</th>
							<th>Gender</th>
							<th>Track</th>
						</thead>
						<tbody class="list">
							<?php while($row = $employee_obj->fetch_assoc()):?>
							
							<tr>
								<td class="list-name"><?=$row['emp_name'];?></td>
								<td><?=$row['emp_address'];?></td>
								<td><?=$row['emp_age'];?></td>
								<td class="list-contact"><?=$row['emp_contact'];?></td>
								<td><?=$row['emp_gender'];?></td>
								<td><a class="waves-effect waves-light btn" href="http://localhost/project/employee_tracking_admin/maps/fire.php?imei=<?=$row['device_id'];?>">Track</a></td>
							</tr>
							<?php endwhile?>
						</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<ul id="buttonID" class="pagination" style = "display:inline-block;padding:5px;"></ul>
				</div>
			</div>

 
		</main>
		<script type="text/javascript" src="js/employeeList.js"></script>
		<script type="text/javascript" src="js/loader.js"></script>
  		
	</body>
</html>
