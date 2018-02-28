<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	
	
	$emplist=$_POST['emplist'];
	
	$total=$_POST['total'];
	$paid=$_POST['paid'];
	
	$due=$total-$paid;
	$currentdate=date('Y-m-d');
	$sdate=date('d/m/Y');
	$etype=$_POST['etype'];
	
	$sql=mysql_query("INSERT INTO salary_voucher (empid,total,paid,due,etype,sdate) VALUES ('$emplist', '$total', '$paid', '$due','$etype','$sdate')");
	
	$salleryid=mysql_insert_id();
	
	$voucherid="S".$salleryid;
	
	//Pay & Allowance of Officers
	//Checking Account
	
	$cr=$_POST['paidaccount'];
	
	$sqlleddr=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_id='$etype' LIMIT 1");
	$sqlledfetdr=mysql_fetch_array($sqlleddr);
	$dr=$sqlledfetdr['id'];
	
	
	
	$ladgername="Accounts Payable"; //cr
	$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
	$sqlledfet=mysql_fetch_array($sqlled);
	$ledgerid=$sqlledfet['id'];

	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$dr','$voucherid','$currentdate', '$total', '0')");
										//dr value account Paytanble
										
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$cr','$voucherid','$currentdate', '0', '$paid')");
	
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES 
									 ('', '$ledgerid','$voucherid','$currentdate', '0', '$due')");
										//dr value account Paytanble
	$earning=$_POST['earning'];
	$actual=$_POST['actual'];
	$earned=$_POST['earned'];
	
	$limit=count($earning);
	
	for($i=0;$i<=$limit-1;$i++) 
	{
		
    $earning[$i] = mysql_real_escape_string($earning[$i]);
	$actual[$i]=mysql_real_escape_string($actual[$i]);
	$earned[$i]=mysql_real_escape_string($earned[$i]);
	
	mysql_query("INSERT INTO salary_earing (sid,earning,actual,earned) VALUES ('".$salleryid."','".$earning[$i]."','".$actual[$i]."', '".$earned[$i]."')");

		if(mysql_query($query))
		{
			echo "<input type='hidden' value='Success'>";
		}
		else
		{
			echo "<input type='hidden' value='Success'>";
		}
		
	}  

//end of earning code

	$deduction=$_POST['deduction'];
	$amount=$_POST['amount'];
	
	$limits=count($deduction);
	
	for($j=0;$j<=$limits-1;$j++) 
	{
		
    $deduction[$j] = mysql_real_escape_string($deduction[$j]);
	$amount[$j]=mysql_real_escape_string($amount[$j]);
	
	mysql_query("INSERT INTO  salary_deduction (sid,deduction,amount) VALUES ('".$salleryid."','".$deduction[$j]."','".$amount[$j]."')");

		if(mysql_query($query))
		{
			echo "<input type='hidden' value='Success'>";
		}
		else
		{
			echo "<input type='hidden' value='Success'>";
		}
		
	} 





	
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
