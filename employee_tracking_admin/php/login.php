<?php
	session_start();
	define('__ROOT__', dirname(dirname(__FILE__)));
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	if($val=validate($uname,$pass))
	{
		die("".$val);
	}
	if((empty($_POST['uname'])&&empty($_POST['pass'])) || !$uid = login($uname,$pass)){
		die("User not found");
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
		require_once(__ROOT__.'/php/config.php');
		
		$sql = "Select `emp_id` from `et_admin` where `admin_uname` = '".$username."' and `admin_password` = '".$password."'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['emp_id'];
		}
		$con->close();
		return 0;
	}
	
	function validate($username,$password)
	{
		$uname=trim($username);
		$pass=trim($password);
		if(empty($uname) && empty($pass))
		{
			if(empty($uname))
			{
			return 3;
			}
			else if(empty($pass))
			{
				return 5;
			}
			else
			{
				return 8;
			}
		}
		if(!preg_match("/^[a-zA-z]*$/",$uname))
		{
			return 10;
		}
		return 0;
	}
?>