<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/device_details.php");
	$device_obj = getdevice();
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.bottom{
        		margin-top: 200px;
        		margin-right: 20px;
 			 }
		</style>
		<title>Admin||Employees</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/html" href="https://cdn.materialdesignicons.com/1.1.34/">
		<!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content=".width=device{
		vertical-align: bottom;
		}-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- jquery  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
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
</div>							<thead>
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
					<ul id="buttonID" class="pagination" style = "display:inline-block;padding:5px;"></ul>
			</div>

		</div>
		<div class="bottom">
			<a class="right btn-floating btn-large waves-effect waves-light teal modal-trigger" 
			href="#modal1" ><i class="material-icons">add</i></a>
		</div>
		<!-- Modal Structure -->
		<div id="modal1" class="modal bottom-sheet">
		    <div class="modal-content">
		      <form class="col s12" id="et_device_form">
			      	<div class="row">
			        	<div class="input-field col s6">
			          		<i class="material-icons prefix">account_circle</i>
			          		<input id="imei" type="number" class="validate">
			          		<label for="imei">Imei</label>
			        	</div>
			        	<div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="name" type="text" class="validate">
				          <label for="name">Name</label>
			        	</div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
          					<textarea id="info" class="materialize-textarea"></textarea>
          					<label for="info">Textarea</label>
        				</div>
      				</div>

		    	</form>
		    </div>
		    <div class="modal-footer">
		      <button id="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</button>
		    </div>
		</div>
	</main>
	<script type="text/javascript" src="js/deviceList.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/loader.js"></script>
</body>
</html>