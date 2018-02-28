<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_GET);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if($subhead=='')
{
	$obj->Error("Account sub Should Not Be Empty","../../index.php");
}
if($name=='')
{
	$obj->Error("Account Should Not Be Empty","../../index.php");
}
if($status=='')
{
	$obj->Error("Account Should Not Be Empty","../../index.php");	
}

if(@$id!='')
{
	//$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE "));
	$chkmain=$obj->exists_multiple("account_module_ladger_list_properties",array("head_sub_list_id"=>$id));
	if($chkmain==0)
	{
		//$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','','','','','')");
		if($obj->insert("account_module_ladger_list_properties",array("main_head_id"=>$subhead,"head_sub_list_id"=>$id,"head_sub_list_name"=>$name,"status"=>$status,"branch_id"=>$branch_id))==1)
		{
			$obj->Success("Account Successfully Made","../../index.php");
		}
	}
	else
	{
		$obj->Error("Account Already Exist","../../index.php");
	}
}
else
{
	$chkmain=$obj->exists_multiple("account_module_ladger_list_properties",array("head_sub_list_name"=>$name));
	//$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$name'"));
	if($chkmain==0)
	{
		//$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','$subhead','','$name','','$status')");
		if($obj->insert("account_module_ladger_list_properties",array("main_head_id"=>$subhead,"head_sub_list_name"=>$name,"status"=>$status,"branch_id"=>$branch_id))==1)
		{
			$obj->Success("Account Successfully Made","../../index.php");
		}
	}
	else
	{
		$obj->Error("Account Already Exist","../../index.php");
	}
}

?>