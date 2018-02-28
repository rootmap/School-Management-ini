<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	extract($_POST);
	
	$sql=mysql_query("UPDATE salary_voucher SET paid+='$paid',due='$due' WHERE id='$id'");
		
	//Checking Account 
	$cr=$_POST['paidaccount'];
	
	
	
	$ladgername="Accounts Payable"; //cr
	$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
	$sqlledfet=mysql_fetch_array($sqlled);
	$ledgerid=$sqlledfet['id'];

	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$ledgerid','$voucherid','$currentdate', '$paid', '0')");
										//dr value account Paytanble
										
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$cr','$voucherid','$currentdate', '0', '$paid')");
	
/*	$earning=$_POST['earning'];
	$actual=$_POST['actual'];
	$earned=$_POST['earned'];*/
	
			$errmsg_arr[] = 'Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../add_transaction_salary.php");
				exit();
						}
	
	
	
?>
