<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/device_details.php");
	$device_obj = getdevice();
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
			<div id = "device-list">
				<div class="row">
					<div class="col s12">
						<input class="search" placeholder="Search...">
						<table>
							<thead>
								<th>Imei</th>
								<th>Name</th>
								<th>Info</th>
							</thead>
							<tbody class="list">
								<?php while($row = $device_obj->fetch_assoc()):?>
								<tr>
									<td ><?=$row['device_imei'];?></td>
									<td class="list-name"><?=$row['device_name'];?></td>
									<td ><?=$row['device_info'];?></td>
								</tr>
								<?php endwhile?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
				<ul class="pagination" style = "display:inline-block;padding:5px;"></ul>
			</div>
		</div>
	</main>
	<footer>
		<a class="btn-floating btn-large waves-effect waves-light teal"
		href="#modal1"><i class="material-icons">add</i></a>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Modal Header</h4>
				<p>A bunch of text</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="js/deviceList.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
</body>
</html>