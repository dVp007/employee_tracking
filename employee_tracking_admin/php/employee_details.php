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
	function getEmployees($active){
		if($active){
			/*
			*	for employees who are assigned a task
			*/
			$sql = "SELECT * FROM `et_employee` WHERE emp_id IN(SELECT emp_id FROM `et_task`) AND `dept_id` = 1";	
		}
		else{
			/*
			*	for employees who are not assigned a task
			*/
			$sql = "SELECT * FROM `et_employee` WHERE emp_id NOT IN(SELECT emp_id FROM `et_task`) AND `dept_id` = 1";	
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