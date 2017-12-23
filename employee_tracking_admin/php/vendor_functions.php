<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	include_once("definations.php");	
	$details = $_POST['details'];
	echo "".callFunction($details);
	function addVendor($name,$contact,$prod){
		$sql = "INSERT INTO `et_vendor`(`ven_name`,`prod_id`,`ven_contact_no`) VALUES ('$name',$prod,'$contact')";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function deleteVendor($ven_id){
		$sql = "DELETE FROM `et_vendor` WHERE `vendor_id` = $ven_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function do_exist($ven_id){
		$sql = "SELECT 1 FROM `et_vendor` WHERE `vendor_id` = $ven_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
		function callFunction($details){
		switch ($details['function']) {
			case 'add':
				# code...
				$result = addVendor($details['name'],$details['contact'],$details['prod_id'])? true : false;
				break;
			case 'delete':
				# code...
				$result = deleteVendor($details['ven_id'])? true : false;
				break;
			case 'check':
				# code...
				$result = do_exist($details['ven_id'])?true : false; 
				break;
			default:
				# code...
				$result = false;
				break;
		}
		return $result;
	}
?>