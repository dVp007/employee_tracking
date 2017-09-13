<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/employee_details.php");
	$employee_obj = getEmployeeDetails();
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
	</head>
	<?php include "nav.html";?>
	<body>
		<main>
			<div id = "employee-list">
			<input type="text" class="search" />
				<ul class="list">
					<?php while($row = $employee_obj->fetch_assoc()):?>
					<li><p class = "list-name"><?=$row['emp_name'];?></p></li>
					<?php endwhile?>
				</ul>
			<ul class="pagination" style = "display:inline-block;padding:5px;"></ul>
		</div>
	</main>
	<script type="text/javascript" src="js/employeeList.js"></script>
</body>
</html>