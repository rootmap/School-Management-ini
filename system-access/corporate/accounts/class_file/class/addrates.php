<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_POST);
		
$chk=mysql_num_rows(mysql_query("SELECT * FROM fixassetrates WHERE achid='$achid'"));
if($chk!=0)
{
	$query="UPDATE fixassetrates SET rates='$rates' WHERE achid='$achid'";
}
else
{
	$query="INSERT INTO fixassetrates (achid,rates) VALUES ('$achid','$rates')";
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