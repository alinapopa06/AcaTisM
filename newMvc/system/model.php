<?php

class Model {

	private $connection;

	public function __construct()
	{
		global $config;
		
		$this->connection = new mysqli($config['db_host'], $config['db_username'], $config['db_password'],$config['db_name']) or die('MySQL Error: '. mysql_error());
	}

	public function escapeString($string)
	{
		return $this->connection->real_escape_string($string);
	}

	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function query($qry)
	{
		$result = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysql_error());
		$resultObjects = array();

		while($row = mysqli_fetch_array($result)) $resultObjects[] = $row;

		return $resultObjects;
	}

	public function execute($qry)
	{
		$exec = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysql_error());
		return $exec;
	}
    
}
?>
