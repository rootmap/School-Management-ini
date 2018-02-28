<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	
	
	$company_name=$_POST['company_name'];
	$payslipdate=$_POST['payslipdate'];
	$empcode=$_POST['empcode'];
	$ename=$_POST['ename'];
	$department=$_POST['department'];
	$designation=$_POST['designation'];
	$pfac=$_POST['pfac'];
	$esino=$_POST['esino'];
	$f_hname=$_POST['f_hname'];
	$joiningdate=$_POST['joiningdate'];
	$bankac=$_POST['bankac'];
	$mdl=$_POST['mdl'];
	$currentdate=date('Y-m-d');
	
	$etype=$_POST['etype'];
	
	$sql=mysql_query("INSERT INTO emp_info (company_name,payslipdate,empcode,ename,department,designation,pfac,esino,f_hname,joiningdate,bankac,mdl,etype) 
											VALUES
('$company_name', '$payslipdate', '$empcode', '$ename', '$department', '$designation', '$pfac', '$esino', '$f_hname', '$joiningdate', '$bankac', '$mdl','$etype')");





	
			$errmsg_arr[] = 'Employee Info Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../add_employee.php");
				exit();
						}
	
	
	
?>
