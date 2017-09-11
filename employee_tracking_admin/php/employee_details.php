<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	define('__ROOT__', dirname(dirname(__FILE__)));
	function getEmployeeDetails(){
		$sql = "SELECT * from `et_employee`";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
?>