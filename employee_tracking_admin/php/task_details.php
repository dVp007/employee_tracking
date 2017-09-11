<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	function getTaskDetails(){
		$sql = "SELECT * from `et_task`";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
?>