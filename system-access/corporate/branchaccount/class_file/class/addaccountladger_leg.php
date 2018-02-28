<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_GET);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if($id=='')
{
	$errmsg_arr[] = 'Select An Account';
	$errflag = true;
}

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../accounts.php");
exit();
		}
		
if($id!='')
{
	$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_id='$id'"));
	if($chkmain==0)
	{
	
		$query=mysql_query("SELECT * FROM head_sub_list WHERE id='$id'");
		$fetquery=mysql_fetch_array($query);
		$subhead=$fetquery['list_of_head_accounts_id'];
		$name=$fetquery['head_title'];
		$status=$fetquery['status'];
		
		$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','$subhead','$id','$name','','$status')");
		if($sql)
		{
		$errmsg_arr[] = 'Account Successfully Made';
		$errflag = true;
		}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../accounts.php");
		exit();
			}
	}
	else
	{
		$errmsg_arr[] = 'Account Already Exist';
		$errflag = true;
	}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../accounts.php");
		exit();
			}
}









?>