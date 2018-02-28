<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_POST);
		

$query="INSERT INTO vendor (company_name,email,fname,lname,currency) VALUES ('$company_name','$email','$fname','$lname', '$currency')";		
$sql=mysql_query($query);
@$customerid=mysql_insert_id();
if($sql)
{
$errmsg_arr[] = 'Vendor Account Successfully Made';
$errflag = true;
}
elseif(!$sql)
{
$errmsg_arr[] = 'Vendor Create Failed Try Again';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../addnewvendor.php?id=".$customerid."&cn=".$company_name);
exit();
	}
	








?>