<?php
$database=[
		'servername'=>'localhost',
		'username'=>'root',
		'password'=>'',
		'dbname'=>'employeetrack'
		];
// connecting to Database
$con = new mysqli($database['servername'],$database['username'],$database['password'],$database['dbname']);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>