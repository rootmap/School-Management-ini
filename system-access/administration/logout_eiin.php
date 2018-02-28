<?php 
session_start();
$id=$_SESSION['SESS_AMSIT_EIIN_KEY'];
if($id==!"")
{
unset($_SESSION['SESS_AMSIT_EIIN_KEY']);
		
		$errmsg_arr[] ="<div class='error_msg'>Account Has Been logged Out</div>";
		$errflag = true;
		
		if($errflag) 
                {
                    $_SESSION['SMSG_ARR'] = $errmsg_arr;
                    session_write_close();
                    header("location:eiin_number_setting.php");
                    exit();
                }
}
else
{
unset($_SESSION['SESS_AMSIT_EIIN_KEY']);
		$errmsg_arr[] ="<div class='error_msg'>Account Has Been logged Out</div>";
		$errflag = true;
		
		if($errflag) 
                {
                    $_SESSION['SMSG_ARR'] = $errmsg_arr;
                    session_write_close();
                    header("location:eiin_number_setting.php");
                    exit();
                }

}
?>