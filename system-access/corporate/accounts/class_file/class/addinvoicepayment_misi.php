<?php
session_start();
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$errmsg_arr = array();
$errflag = false;

extract($_GET);
if($pa=='')
{
	$errmsg_arr[] = 'Select Payment Account';
	$errflag = true;
}
$pdate=date('Y-m-d');

if($amount=='')
{
	$errmsg_arr[] = 'Amount Should Not Be Empty';
	$errflag = true;
}

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../../addpayment.php?&id=".$invoice_id."&due=".$due);
exit();
		}
		

$sql=mysql_query("INSERT INTO reserve_serplus_payment VALUES ('','$invoice_id','$pdate','$pa','$amount','$memo')");

if($sql)
{
		$ladgername="Accounts Receivables"; //dr
	
	$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
		$sqlledfet=mysql_fetch_array($sqlled);
		$accreciveableladger=$sqlledfet['id'];
		
		
		$invoice="N".$invoice_id;
		
mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$pa','$invoice','$pdate','$amount', '0')");
mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$accreciveableladger','$invoice','$pdate','0', '$amount')");
	
	$errmsg_arr[] = 'Payment Successfully Made';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../addpayment_misi.php?&id=".$invoice_id."&due=".$due);
	exit();
			}
}
else
{
	$errmsg_arr[] = 'Payment Failed';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../addpayment_misi.php?&id=".$invoice_id."&due=".$due);
	exit();
			}
}





?>