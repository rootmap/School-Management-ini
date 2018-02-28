<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_GET);

if($subhead=='')
{
	$errmsg_arr[] = 'Account sub Should Not Be Empty';
	$errflag = true;
}
if($name=='')
{
	$errmsg_arr[] = 'Account Should Not Be Empty';
	$errflag = true;
}
if($status=='')
{
	$errmsg_arr[] = 'Account Should Not Be Empty';
	$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../index.php");
exit();
		}

if(@$name!='')
{
	$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$name'"));
	if($chkmain==0)
	{
		$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','$subhead','$id','$name','','$status')");
		if($sql)
		{
		$errmsg_arr[] = 'Account Successfully Made';
		$errflag = true;
		}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
	}
	else
	{
		$errmsg_arr[] = 'Account Already Exist';
		$errflag = true;		
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
	}
}
else
{
		$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$name'"));
	if($chkmain==0)
	{
		$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','$subhead','','$name','','$status')");
		if($sql)
		{
		$errmsg_arr[] = 'Account Successfully Made';
		$errflag = true;
		}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
	}
	else
	{
		$errmsg_arr[] = 'Account Already Exist';
		$errflag = true;		
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
	}
}









?>