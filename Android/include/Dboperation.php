<?php
  
class Dboperation{
  private $con;


  function __construct(){
  	require_once  dirname(__FILE__).'/Dbconnect.php';
  	$db=new Dbconnect();
  	$this->con=$db->connect();
  }
  function createUser($username,$password,$email)
  {
   
   $stmt=$this->con->prepare("INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES (NULL,?,?,?);");
   $stmt->bind_param("sss",$username,$password,$email);
   if($stmt->execute())
   {
   	return true;
   }
   else {
   	return false; 

  }
  }
}
