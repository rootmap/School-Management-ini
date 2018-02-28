<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_GET);
if($main=='')
{
	$errmsg_arr[] = 'Select Account Catagory';
	$errflag = true;
}
if($account=='')
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
		
if(($main!=0) && ($submain==0) && ($hd==0))
{	
	$maintab=mysql_query("SELECT * FROM list_of_head_accounts WHERE id='$main'");
	$tabrow=mysql_fetch_array($maintab);
	$tab=$tabrow['tab_name'];
	$tabn=$tabrow['head_title'];
	$status=$tabrow['status'];
	
	
	$chkmain=mysql_num_rows(mysql_query("SELECT * FROM $tab WHERE head_title='$account'"));
	if($chkmain==0)
	{
		$sql=mysql_query("INSERT INTO `$tab` VALUES ('','$main','$account','$status')");
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
		$errmsg_arr[] = 'Account Already Exist in $tabn';
		$errflag = true;
	}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
}
elseif(($main!=0) && ($submain!=0) && ($hd==0))
{	
	$maintab=mysql_query("SELECT * FROM list_of_head_accounts WHERE id='$main'");
	$tabrow=mysql_fetch_array($maintab);
	$tab=$tabrow['tab_name'];
	$tabn=$tabrow['head_title'];
	$status=$tabrow['status'];
	
	$realsubmainid=substr($submain,1,100);
	
	$chkmain=mysql_num_rows(mysql_query("SELECT * FROM `head_list` WHERE head_title='$account'"));
	if($chkmain==0)
	{
		$sql=mysql_query("INSERT INTO `head_list` VALUES ('','$main','$realsubmainid','$account','$status')");
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
		$errmsg_arr[] = 'Account Already Exist in $tabn';
		$errflag = true;
	}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
}
elseif(($main!=0) && ($submain!=0) && ($hd!=0))
{	
	$maintab=mysql_query("SELECT * FROM list_of_head_accounts WHERE id='$main'");
	$tabrow=mysql_fetch_array($maintab);
	$tab=$tabrow['tab_name'];
	$tabn=$tabrow['head_title'];
	$status=$tabrow['status'];
	
	$realsubmainid=substr($submain,1,100);
	
	$chkmain=mysql_num_rows(mysql_query("SELECT * FROM  head_sub_list WHERE head_title='$account'"));
	if($chkmain==0)
	{
		$sql=mysql_query("INSERT INTO head_sub_list VALUES ('','$main','$realsubmainid','$hd','$account','$status')");
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
		$errmsg_arr[] = 'Account Already Exist in $tabn';
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
		$errmsg_arr[] = 'Process Failed to create an Empty Account';
		$errflag = true;
	
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
			}
}









?>