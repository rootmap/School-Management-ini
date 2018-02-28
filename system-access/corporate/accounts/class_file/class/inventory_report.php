<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_GET);
if($bgin=='')
{
	$errmsg_arr[] = 'Beginning Inventory Should not be empty';
	$errflag = true;
}
$pdate=date('Y');

if($endin=='')
{
	$errmsg_arr[] = 'End Inventory Should not be empty';
	$errflag = true;
}

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../inventory.php");
exit();
		}
		

$sql=mysql_query("INSERT INTO inventory VALUES ('','$bgin','$endin','$pdate')");

if($sql)
{
	$errmsg_arr[] = 'Successfully Made';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../inventory.php");
	exit();
			}
}
else
{
	$errmsg_arr[] = 'Failed';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../inventory.php");
	exit();
			}
}





?>