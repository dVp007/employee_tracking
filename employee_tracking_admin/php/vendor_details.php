<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	function getVendorDetails(){
		$sql = "SELECT * from `et_vendor`";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
?>