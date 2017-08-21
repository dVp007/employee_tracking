<?php

namespace EmployeeTrack;
use EmployeeTrack/Database
use EmployeeTrack/Exception/Login
/**
* 
*/
class Login
{
	private $username;
	private $password;
	function __construct($username,$password){
		try{
			if(userExist($username)){
				validatePassword($password);
			}
		}
	}
	function userExist($uname){

	}
	private function validatePassword($pass){

	}
}
?>