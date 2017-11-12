<?php
	session_start();
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	define('__ROOT__', dirname(dirname(__FILE__)));
	
	$details = $_POST['details'];
	callFunction($details);


	
	function addTask($prod_id,$pick_id,$emp_id){
		$sql = "INSERT INTO `et_task`(`prod_id`, `pick_id`, `emp_id`) VALUES ($prod_id,$pick_id,$emp_id)";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function updateTask($task_id,$task_status){
		$sql = "UPDATE `et_task` SET `task_status`= $task_status WHERE `task_id` = $task_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function deleteTask($task_id){
		$sql = "DELETE FROM `et_task` WHERE `task_id` = $task_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return 1;
	}
	function do_exist($task_id){
		$sql = "SELECT 1 FROM `et_task` WHERE `task_id` = $task_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
	function getDeviceId($emp_id){
		$sql = "SELECT `device_id` from `et_task` where `emp_id` = $emp_id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}
	
	function callFunction($details){
		switch ($details['function']) {
			case 'add':
				# code...
				$result = addTask($details['prod_id'],$details['pick_id'],$details['emp_id'],$details['device_id'])? true : false;
				break;
			case 'update':
				# code...
				$result = updateTask($details['task_id'],$details['task_status'])? true : false;
				break;
			case 'delete':
				# code...
				$result = deleteTask($details['task_id'])? true : false;
				break;
			case 'check':
				# code...
				$result = do_exist($details['task_id'])?true : false; 
				break;
			case 'getDeviceId':
				$result = getDeviceId($details['emp_id']);
				break;
			default:
				# code...
				$result = false;
				break;
		}
		return $result;
	}
?>