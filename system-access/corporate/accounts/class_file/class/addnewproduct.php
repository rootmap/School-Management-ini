<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_POST);
$query="INSERT INTO product VALUES ('','$pname','$in_ac_id','$price','$description',1)";
$sql=mysql_query($query);
if($sql)
{
	$errmsg_arr[] = 'Customer Account Successfully Made';
	$errflag = true;
}
elseif(!$sql)
{
	$errmsg_arr[] = 'Customer Create Failed Try Again';
	$errflag = true;
}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../addnewproduct.php");
		exit();
		}
	








?>