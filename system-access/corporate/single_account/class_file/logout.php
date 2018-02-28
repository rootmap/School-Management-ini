<?php 
session_start();
include('../../login_exe.php');
$obj=new login();
$id=$_SESSION['SESS_AMSIT_APPS_ID'];

if($id==!"")
{
unset($_SESSION['SESS_AMSIT_APPS_ID']);
unset($_SESSION['SESS_AMSIT_BRANCH_ID']);
unset($_SESSION['SESS_AMSIT_EMP_STATUS']);
unset($_SESSION['SESS_AMSIT_EMP_NAME']);
		$obj->Warning("You are logged out from system, please login again to access everything.","../../index.php");
}
else
{
unset($_SESSION['SESS_AMSIT_APPS_ID']);
unset($_SESSION['SESS_AMSIT_BRANCH_ID']);
unset($_SESSION['SESS_AMSIT_EMP_STATUS']);
unset($_SESSION['SESS_AMSIT_EMP_NAME']);
		$obj->Warning("You are logged out from system, please login again to access everything.","../../index.php");

}
?>