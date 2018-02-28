<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$errmsg_arr = array();
$errflag = false;
extract($_GET);
if($obj->delete("account_module_ladger_list_properties",array("id"=>$id))==1)
{
	$obj->Success("Ledger Successfully Deleted","../../accounts.php");
}
else
{
	$obj->Error("Ledger Not Deleted,Failed Please Try Again.","../../accounts.php");
}
?>