<?php
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	include_once("definations.php");
	function getEmployees($active=-1){
		if($active==1){
			/*
			*	for employees who are assigned a task
			*/
			$sql = "SELECT e.*,t.device_id FROM `et_task` t LEFT JOIN `et_employee` e ON t.emp_id = e.emp_id";	
		}
		elseif($active==0){
			/*
			*	for employees who are not assigned a task
			*/
			$sql = "SELECT * FROM `et_employee` WHERE emp_id NOT IN(SELECT emp_id FROM `et_task`) AND `dept_id` = 1";	
		}
		else{
			/*
			*	To select all the Employees
			*/
			$sql = "SELECT * from `et_employee`";
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