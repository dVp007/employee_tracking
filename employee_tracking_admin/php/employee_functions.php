<?php
session_start();
	if(empty($_SESSION) || !isset($_SESSION)){
		die("SESSION IS NOT SET");
	}
	include_once("definations.php");	
	$details = $_POST['details'];/*[
		"function"=>'add',
		"name"=>'parool1',
		"address"=>'this is test address 2',
		"age"=>45,
		"contact"=>9321269188,
		"gender"=>'female',
		"dept_id"=>2,
		"date"=>'2018-05-10'
				];*/
	callFunction($details);
	

	function addEmployee($name,$address,$age,$contact,$gender,$dept_id,$date){
		$sql = "INSERT INTO `et_employee` (`emp_name`, `emp_address`, `emp_age`, `emp_contact`, `emp_gender`, `dept_id`, `date_of_join`) VALUES ('$name','$address',$age,'$contact','$gender',$dept_id,CURRENT_DATE)";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return true;
	}
	function deleteEmployee($id){
		if(!do_exist($id)) return "Employee does not exist";

		$sql = "DELETE FROM `et_employee` WHERE `emp_id` = $id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return true;
	}
	function do_exist($id){
		$sql = "SELECT 1 FROM `et_employee` WHERE `emp_id` = $id";
		include(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		$con->close();
		return $result;
	}	
	function callFunction($details){
		switch ($details['function']) {
			case 'add':
				$result = false;
				# code...
				$result = addEmployee($details['name'],$details['address'],$details['age'],$details['contact'],$details['gender'],$details['dept_id']);
				break;
			case 'delete':
				# code...
				//$result = deleteEmployee($details['id'])?;
				break;
			case 'check':
				# code...
				//$result = do_exist($details['id'])?; 
				break;
			default:
				# code...
				$result = false;
				break;
		}
		var_dump($result);
		die("");
		return $result;
	}
?>