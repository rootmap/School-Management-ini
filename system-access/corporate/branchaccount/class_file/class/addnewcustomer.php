<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_POST);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];		

//$query="INSERT INTO  (,,,,) VALUES ('','',','', '')";		

if($obj->insert("account_module_customer",array("company_name"=>$company_name,"email"=>$email,"fname"=>$fname,"lname"=>$lname,"currency"=>$currency,"phone"=>$phone,"address"=>$address,"ac"=>$ac,"bankname"=>$bankname,"branch_id"=>$branch_id))==1)
{
	$obj->Success("Customer Account Successfully Made","../../customer.php");
}
elseif(!$sql)
{
	$obj->Success("Customer Create Failed Try Again","../../addnewcustomer.php");
}
	








?>