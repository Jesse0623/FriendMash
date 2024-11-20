<?php

Class Database
{

	private $con;

	function __construct()
	{
		$this->con = $this->connect();
	}

	private function connect()
	{	
		$string = "mysql:host=localhost;mashchat_db";
		try
		{
			$connectioin = new PDO($string,DBUSER,DBPASS);
			return $connection;

		}catch(PDOException $e)
		{
			echo $e->getMessage();
			die;
		}
		
		return false;
	}
}


