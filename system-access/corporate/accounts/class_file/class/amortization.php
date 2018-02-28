<?php
session_start();
include('../db_Class.php');
//include('header_footer_file/header.php');
$obj = new db_class();
$obj->MySQL();
extract($_GET);
$curdatedate=date('Y-m-d');
	$curyear=date('Y');
	$chk=mysql_num_rows(mysql_query("SELECT * FROM schedule_depriciation WHERE dyear='$curyear' AND status='1'"));
	if($chk==0)
	{
	mysql_query("INSERT INTO schedule_depriciation (dyear,status) VALUES ('$curyear','1')");	
//Accumulated Amortization
//id: ledger : 116
//Depriciation
	$ffd=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='Amortization'");
	$fetffd=mysql_fetch_array($ffd);
	$ledg=$fetffd['id'];
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$ledg','D','$curdatedate', '$h', '0')");//dr value Income Account
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '116','D','$curdatedate', '0', '$h')");//dr value Income Account
	}
	
			$errmsg_arr[] = 'Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../schedulereport_intangible.php");
				exit();
						}
?>									