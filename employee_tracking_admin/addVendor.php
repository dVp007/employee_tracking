<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION))  die("SESSION IS NOT SET");
	include_once("php/vendor_details.php");
	$vendor_obj = getVendorDetails();
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

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
			<div id = "vendor-list">
				<div class="row">
					<div class="col s12">
						<input class="search" placeholder="Search Vendor">
						<table>
							<thead>
								<th>Vendor ID</th>
								<th>Vendor Name</th>
								<th>Product Name</th>
								<th>Contact</th>
							</thead>
							<tbody class="list">
								<?php while($row = $vendor_obj->fetch_assoc()):?>
								<tr>
									<td ><?=$row['ven_id'];?></td>
									<td class="list-name"><?=$row['ven_name'];?></td>
									<td >Soil</td>
									<td ><?=$row['ven_contact_no'];?></td>
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
				          <input id="name" type="text" class="validate">
				          <label for="name">Name</label>
			        	</div>
			      	</div>
			      	<div class="row">
				      	<div class="input-field col s6">
	          				<i class="material-icons prefix">phone</i>
	          				<input id="contact" type="tel" class="validate" >
	          				<label for="contact">Telephone</label>
	        			</div>
        			</div>
        			
		    	</form>
		    </div>
		    <div class="modal-footer">
		      	<button id="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Submit</button>
		    </div>
		</div>
	</main>
	<script type="text/javascript" src="js/vendor.js"></script>
	<script type="text/javascript" src="js/vendorList.js"></script>
	</body>
</html>