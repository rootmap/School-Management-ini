<?php 
ob_start();
session_start();
include('db_Class.php');	
$obj=new db_class();
$error_data[]='';
$error_flag=false;
ini_set('date.timezone', 'America/Los_Angeles');
if(!isset($_SESSION['SESS_AMSIT_APPS_ID']) || (trim($_SESSION['SESS_AMSIT_APPS_ID']) == '')) 
{
		$obj->Error("Please Login Again","../index.php");			
}
$school=$_SESSION['SESS_USERNAME'];
$_SESSION['SESS_AMSIT_BRANCH_ID']=$school;
$branch_id=$_SESSION['SESS_AMSIT_BRANCH_ID'];
$uid=$_SESSION['SESS_AMSIT_APPS_ID'];
$userstatus=$_SESSION['SESS_AMSIT_EMP_STATUS'];
/*$uid=1;
$user_status=1;*/
/*if($userstatus!==1)
{
	$obj->Warning("Bad Url 404, Page Not Found","../index.php");	
}*/
$input_datetime=date('Y-m-d');


if(!isset($_SESSION['timezone']))
{
    if(!isset($_REQUEST['offset']))
    {
    ?>
    <script>
    var d = new Date()
    var offset= -d.getTimezoneOffset()/60;
    location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?offset="+offset;
    </script>
    <?php   
    }
    else
    {
        $zonelist =$obj->zone();
        $index = array_keys($zonelist, $_REQUEST['offset']);
        $_SESSION['timezone'] = $index[0];
    }
}

date_default_timezone_set($_SESSION['timezone']);

?>