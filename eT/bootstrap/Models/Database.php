<?php
namespace EmployeeTrack;
/**
* this is a class for DATABASE
*/
class Database extends \mysqli
{
	private $database = [
	'developer'=>[
		'servername'=>'localhost',
		'username'=>'root',
		'password'=>'',
		'dbname'=>''
		]
	];
	$con;
	/*
	* function returns the connection object of the Database
	*/
	function connect($data_key,$dbname){
		$this->database[$data_key]['dbname'] = $dbname;
		$database = explode(',',implode(',',$this->database[$data_key]));
		$this->con = new \mysqli($database[0],$database[1],$database[2],$database[3]);
	}
}