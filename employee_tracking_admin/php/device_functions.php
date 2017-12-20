<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	include_once("definations.php");	
	$details = $_POST['details'];
	
	callFunction($details);
	

	function addDevice($imei,$name,$info){
		$sql = "INSERT INTO `et_device`(`device_imei`, `device_name`, `device_info`) VALUES ($imei,$name,$info)";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function deleteDevice($imei){
		if(!do_exist($device_imei)) return "device does not exist";

		$sql = "DELETE FROM `et_device` WHERE `device_imei` = $imei";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function do_exist($imei){
		$sql = "SELECT 1 FROM `et_device` WHERE `device_imei` = $imei";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}	
	function callFunction($details){
		switch ($details['function']) {
			case 'add':
				# code...
				$result = addDevice($details['imei'],$details['name'],$details['info'])? true : false;
				break;
			case 'delete':
				# code...
				$result = deleteDevice($details['imei'])? true : false;
				break;
			case 'check':
				# code...
				$result = do_exist($details['imei'])?true : false; 
				break;
			default:
				# code...
				$result = false;
				break;
		}
		return $result;
	}
?>