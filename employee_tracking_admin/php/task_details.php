<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	include_once('definations.php');
	function getTaskDetails(){
		$sql = "select t.*,prod.prod_name,em.emp_name,ps.pickup_name,dev.device_name from et_task as t,et_product as prod,et_employee as em,et_pickup_spot as ps,et_device as dev WHERE em.emp_id = t.emp_id and ps.pickup_id = t.pick_id and dev.device_imei = t.device_id and t.prod_id = prod.prod_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
?>