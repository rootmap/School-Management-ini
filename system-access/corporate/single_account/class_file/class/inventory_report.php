<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_GET);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if($bgin=='')
{
	$obj->Error('Beginning Inventory Should not be empty','../../inventory.php');
}
$pdate=date('Y');

if($endin=='')
{
	$obj->Error('End Inventory Should not be empty','../../inventory.php');
}


		

$sql=$obj->insert("account_module_inventory",array("begging_value"=>$bgin,"end_value"=>$endin,"year"=>$pdate,"branch_id"=>$branch_id));

if($sql)
{
	$obj->Success('Successfully Made','../../inventory.php');
}
else
{
	$obj->Error('Failed','../../inventory.php');
}





?>