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
		$obj->Error("Please Login Again, System Auto Logged Out.","../index.php");		
}

$userstatus=$_SESSION['SESS_AMSIT_EMP_STATUS'];

if($userstatus==1)
{
	if(!isset($branch_id))
	{
		$obj->Error("Invalid url Path.","../index.php");	
	}
}
$branch_id=$_SESSION['SESS_AMSIT_BRANCH_ID'];
$uid=$_SESSION['SESS_AMSIT_APPS_ID'];

/*$uid=1;
$user_status=1;*/
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