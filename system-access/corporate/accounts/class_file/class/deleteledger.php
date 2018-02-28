<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;
extract($_GET);
mysql_query("DELETE FROM ladger_list_properties WHERE id='$id'");

$errmsg_arr[] = 'Ledger Successfully Deleted';
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../accounts.php");
exit();
	}
	








?>