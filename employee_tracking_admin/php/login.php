<?php
	session_start();
	define('__ROOT__', dirname(dirname(__FILE__)));
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	if((empty($_POST['uname'])&&empty($_POST['pass'])) || !$uid = login($uname,$pass)){
		die("Error");
	}
	else{
		$_SESSION['uname'] = $uname;
		$_SESSION['uid'] = $uid;
		die("1");
	}
	/*
	* Functions
	*/
	function login($username,$password){
		$password = md5($password."et_adminloves_string");
		$sql = "Select `emp_id` from `et_admin` where `admin_uname` = '".$username."' and `admin_password` = '".$password."'";
		require_once(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['emp_id'];
		}
		$con->close();
		return 0;
	}
?>