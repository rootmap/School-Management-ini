<?php 
session_start();
$id=$_SESSION['SESS_ID'];

if($id==!"")
{
unset($_SESSION['SESS_ID']);
		$errmsg_arr[] ='Account Has Been logged Out';
		$errflag = true;
		
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();      }


}
else{
unset($_SESSION['SESS_ID']);
		$errmsg_arr[] ='Account Has Been logged Out';
		$errflag = true;
		
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../../index.php");
		exit();      }

}



?>