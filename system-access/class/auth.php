<?php 
ob_start();
session_start();
$error_data[]='';
$error_flag=false;
ini_set('date.timezone', 'America/Los_Angeles');
if(!isset($_SESSION['SESS_AMSIT_USERLOGIN_KEY']) || (trim($_SESSION['SESS_AMSIT_USERLOGIN_KEY']) == '')) 
{
		$error_data[] = 'Login Session Expired Please Login';
		$error_flag = true;
		if($error_flag) {
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			session_write_close();
			header("location: index.php");
			exit();
					}
}
$school=$_SESSION['SESS_USERNAME'];
$input_by=$_SESSION['SESS_AMSIT_USERLOGIN_KEY'];
$input_datetime=date('Y-m-d');
include('db_Class.php');	
$obj = new db_class();
include('gateway.php'); 
$ops=new sms_gateway();
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

$dat=$obj->SelectAllByVal("ams_admin_sms_stteing","school_id",$school,"cline_quantity"); 

$getexpense=$obj->SelectAllByID_Multiple("ams_management_sms",array("school_id"=>$school,"status"=>1));
	$exp=0;
if(!empty($getexpense))
foreach($getexpense as $expense):
	$exp+=1;
endforeach;


$balanceuser=$dat-$exp;

$brand=$obj->SelectAllByVal("ams_singup","eiin_number",$school,"sms_sander_id");
?>