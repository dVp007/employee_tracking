<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
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
	function callFunction($details){
		switch ($details['function']) {
			case 'add':
				# code...
				$result = addTask($prod_id,$pick_id,$emp_id)? true : false;
				break;
			case 'update':
				# code...
				$result = updateTask($task_id,$task_status)? true : false;
				break;
			case 'delete':
				# code...
				$result = deleteTask($task_id)? true : false;
				break;
			case 'check':
				# code...
				$result = do_exist($task_id)?true : false; 
				break;
			default:
				# code...
				$result = false;
				break;
		}
		return $result;
?>