<?php
	//Start session
	/*session_start();
	
	//Include database connection details
	require_once('db_Class.php');
	
	$obj = new db_class();
	$obj->MySQL();
		
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	$vvv=$_SERVER['REMOTE_ADDR'];
	$ddd=date('Y-m-d / H:i:s');
	
	//Sanitize the POST values
	
	extract($_GET);
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'username required';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password required';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();
	}
	
	//admin part start
	$qry="SELECT * FROM  company_user WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
	if($result) {
			if(mysql_num_rows($result) == 1) {
					session_regenerate_id();
					$member = mysql_fetch_assoc($result);
					$_SESSION['SESS_AMSIT_USERLOGIN_KEY'] = $member['id'];
					$_SESSION['SESS_USERNAME'] = $member['username'];
																	
					session_write_close();
					header("location: ../dashboard.php");
					exit();
												}
												else 
												{
													$errmsg_arr[] = 'Query Failed required';
													$errflag = true;
														if($errflag) {
															$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
															session_write_close();
															header("location: ../../index.php");
															exit();
														}
												
												}
			}
			else
			{
													$errmsg_arr[] = 'Unauthorized';
													$errflag = true;
														if($errflag) {
															$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
															session_write_close();
															header("location: ../../index.php");
															exit();
														}
			}
	
?>