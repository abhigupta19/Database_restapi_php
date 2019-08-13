<?php


class Dbconnect{

    private $con;
	function __construct(){
		
	}
	function connect()
	{
		include_once  dirname(__FILE__).'/Constant.php';
		
			$this->con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

			if(mysqli_connect_errno())
			{
				echo "connection failed".mysqli_connect_errno();

			}
			return $this->con;
		 	
	}
}