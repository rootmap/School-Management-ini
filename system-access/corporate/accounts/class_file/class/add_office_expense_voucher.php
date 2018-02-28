<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	extract($_POST);
	$currentdate=date('Y-m-d');
	
$sql=mysql_query("INSERT INTO  office_expense_voucher (vdate,dr,cr,description,taka,currentdate) VALUES ('$vdate','$dr','$cr','$des','$taka','$currentdate')");
$jdid=mysql_insert_id();

 $voucherid="O".$jdid;

	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$dr','$voucherid','$currentdate', '$taka', '0')");
										//dr value account Paytanble
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$cr','$voucherid','$currentdate', '0', '$taka')");
										//dr value account Paytanble
	
	




			$errmsg_arr[] = 'Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../officeexpense.php");
				exit();
						}
			

	
	
?>