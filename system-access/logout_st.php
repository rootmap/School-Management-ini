<?php 
session_start();
$id=$_SESSION['SESS_AMSIT_STLOGIN_KEY'];
if($id==!"")
{
unset($_SESSION['SESS_AMSIT_STLOGIN_KEY']);
unset($_SESSION['SESS_STSTATUS']);
unset($_SESSION['SESS_SESSION_STSCHOOL_ID']);
		
		$errmsg_arr[] ='Account Has Been logged Out';
		$errflag = true;
		
		if($errflag) 
                {
                    $_SESSION['SMSG_ARR'] = $errmsg_arr;
                    session_write_close();
                    header("location:index.php");
                    exit();
                }
}
else
{
unset($_SESSION['SESS_AMSIT_STLOGIN_KEY']);
		$errmsg_arr[] ='Account Has Been logged Out';
		$errflag = true;
		
		if($errflag) 
                {
                    $_SESSION['SMSG_ARR'] = $errmsg_arr;
                    session_write_close();
                    header("location:index.php");
                    exit();
                }

}
?>