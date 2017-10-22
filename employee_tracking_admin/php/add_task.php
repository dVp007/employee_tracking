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
		return $result;
	}
	function get
	var_dump(deleteTask(1));
?>