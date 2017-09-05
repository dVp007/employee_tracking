<?php
$database=[
		'servername'=>'localhost',
		'username'=>'root',
		'password'=>'',
		'dbname'=>'employeeTrack'
		];
// connecting to Database
$con = new mysqli($database['servername'],$database['username'],$database['password'],$database['dbname']);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>