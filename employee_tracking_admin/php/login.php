<?php
	session_start();
	define('__ROOT__', dirname(dirname(__FILE__)));
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	if((empty($_POST['uname'])&&empty($_POST['pass'])) || !login($uname,$pass)){
		die("Error");
	}
	else{
		$_SESSION['uname'] = $uname;
		die("1");
	}
	/*
	* Functions
	*/
	function login($username,$password){
		$password = md5($password."et_adminloves_string");
		$sql = "Select 1 from `et_admin` where `admin_uname` = '".$username."' and `admin_password` = '".$password."'";
		require_once(__ROOT__.'/php/config.php');
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			return 1;
		}
		$con->close();
		return 0;
	}
?>