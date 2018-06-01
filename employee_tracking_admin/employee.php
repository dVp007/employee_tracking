<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/employee_details.php");
	$employee_obj = getEmployees(1);
	$employee1_obj = getEmployees(0);
	
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
							<td class="list-name" id = "<?=$row['emp_id']?>"><?=$row['emp_name'];?></td>
							<td><?=$row['emp_address'];?></td>
							<td><?=$row['emp_age'];?></td>
							<td class="list-contact"><?=$row['emp_contact'];?></td>
							<td><?=$row['emp_gender'];?></td>
							<td><a class="waves-effect waves-light btn" href="maps/fire.php?imei=<?=$row['device_id'];?>">Track</a></td>
						</tr>
						<?php endwhile?>
						<?php while($row = $employee1_obj->fetch_assoc()):?>
						<tr>
							<td class="list-name"><?=$row['emp_name'];?></td>
							<td><?=$row['emp_address'];?></td>
							<td><?=$row['emp_age'];?></td>
							<td class="list-contact"><?=$row['emp_contact'];?></td>
							<td><?=$row['emp_gender'];?></td>
							<td><a class="waves-effect waves-light btn disabled">Track</a></td>
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
<div class="row">
	<div class="col s2 offset-s10 center-align">
		<a class="btn-floating btn-large waves-effect waves-light teal modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
	</div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
	<div class="modal-content" style="padding-bottom: 0px">
		<h5 style="padding-bottom: 5px">Employee information</h5>
		<div class="row">
			<div class="col s12">
				<form>
					<div class="row">
						<div class="input-field col s4">
							<input placeholder="Name" id="first_name" type="text" class="validate">
							<label for="first_name">Name</label>
						</div>
						<div class="input-field col s3">
							<input type="radio" id = "male" name="gender"/>
							<label for="male">Male</label>
							<input type="radio" id = "female" name="gender"/>
							<label for="female">Female</label>
						</div>
						<div class="input-feild col s1">
							<label for="age">Age</label>
							<input type="number" name="age" id="age">
						</div>
						<div class="input-feild col s4" >
							<label for="contact">Contact</label>
							<input type="text" id="contact" placeholder="9123312***" name="con">
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<label for="textarea1">Address</label>
							<textarea id="textarea1" class="materialize-textarea"></textarea>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- <form>
								<input type="text" name="emp-name">
								<input type="text" name="emp-address">
								<input type="text" name="emp-age">
								<input type="text" name="emp-contact">
		</form>-->
	</div>
	<div class="modal-footer">
		<a href="#!" id="emp-add" class="modal-close waves-effect waves-green btn-flat">submit</a>
	</div>
</div>
</main>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript" src="js/employeeList.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
</body>
</html>