<?php 
 @session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {

			$errmsg_arr[] = 'Login Session Expired Please Login';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../index.php");
				exit();
						}


	}
?>