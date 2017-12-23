<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}	
	include_once('definations.php');
	function getDevice($active=-1){
		if($active==1){
			/*
			*	for devices which are assigned a task
			*/
			$sql = "SELECT * FROM `et_device` WHERE device_imei IN(SELECT device_id FROM `et_task`)";	
		}
		elseif($active==0){
			/*
			*	for devices which are not assigned a task
			*/
			$sql = "SELECT * FROM `et_device` WHERE device_imei NOT IN(SELECT device_id FROM `et_task`)";	
		}
		else{
			/*
			*	To select all the Devices
			*/
			$sql = "SELECT * from `et_device`";
		}
		/*
		*	Querying the Database
		*/
		include(__ROOT__.'/php/config.php');
			$result = $con->query($sql);
			$con->close();
			return $result;
	}
?>