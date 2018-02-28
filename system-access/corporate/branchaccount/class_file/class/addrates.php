<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_POST);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
$chk=mysql_num_rows(mysql_query("SELECT * FROM account_module_fixassetrates WHERE achid='$achid'"));
if($chk!=0)
{
	$query="UPDATE account_module_fixassetrates SET rates='$rates' WHERE achid='$achid'";
}
else
{
	$query="INSERT INTO account_module_fixassetrates (achid,rates,branch_id) VALUES ('$achid','$rates','$branch_id')";
}
$sql=mysql_query($query);
if($sql)
{
$errmsg_arr[] = 'Successfully Made';
$errflag = true;
}
elseif(!$sql)
{
$errmsg_arr[] = 'Failed Try Again';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../fixedasset.php");
exit();
	}
	








?>