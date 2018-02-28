<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_POST);
$query="INSERT INTO buy_product VALUES ('','$pname','$in_ac_id','$price','$description',1)";
$sql=mysql_query($query);
if($sql)
{
	$errmsg_arr[] = 'Successfully Added';
	$errflag = true;
}
elseif(!$sql)
{
	$errmsg_arr[] = ' Failed Try Again';
	$errflag = true;
}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../addnewproduct_buy.php");
		exit();
		}
	








?>