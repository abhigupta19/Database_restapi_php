
<?php
require_once '../include/Dboperation.php';
$response=array();
 if ($_SERVER['REQUEST_METHOD']=='POST')
  {
 	if(
 		isset($_POST['username'])and isset($_POST['password']) and isset($_POST['email']))
 	{
 		$db=new Dboperation();
 		if($db->createUser($_POST['username'],$_POST['password'],$_POST['email']))
 		{
 			$response['error']='false';
 			$response['message']='succucs full regiterd';
 		}
 		else
 		{
 			$response['error']='true';
 			$response['message']='succucs full  not regiterd';
 		}
 	}
 	else{
 		$response['error']='true';
 			$response['message']='succucs missing in input';
 		}
 	}
 	else{
 		$response['error']='true';
 			$response['message']='succucs   not regiterd because method not right';
 		}
 	
 
 echo json_encode($response);
