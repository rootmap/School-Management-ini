<?php
session_start();
$error_data[]='';
$error_flag=false;
if(!isset($_SESSION['SESS_AMSIT_ADMIN_KEY']) || (trim($_SESSION['SESS_AMSIT_ADMIN_KEY']) == '')) 
{
		$error_data[] = 'Login Session Expired Please Login';
		$error_flag = true;
		if($error_flag) {
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			session_write_close();
			header("location: ../../index.php");
			exit();
					}
}
@$school=$_SESSION['SESS_SESSION_SCHOOL_ID'];
$company=$_SESSION['SESS_AMSIT_COMPANY_KEY'];
$input_by=$_SESSION['SESS_AMSIT_ADMIN_KEY'];
$input_datetime=date('Y-m-d');
include('../../class/db_Class.php');	
$obj = new db_class();
include('../../class/gateway.php'); 
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



$dat=$obj->SelectAllByVal("ams_admin_sms_send","company_id","2","quantity"); 

$getexpense=$obj->SelectAllByID_Multiple("ams_admin_sms_stteing",array("company_id"=>2,"status"=>1));
	$exp=0;
if(!empty($getexpense))
foreach($getexpense as $expense):
	$exp+=$expense->cline_quantity;
endforeach;


$balance=$dat-$exp;



extract($_GET);
if($q!=='')
{
?>
<form action="" method="post" name="sms">
  <?php 
    $array=array("eiin_number"=>$number);
	$data=$obj->SelectAllByID("ams_singup",$array);
	if(!empty($data))
	foreach ($data as $row ):
  ?>
  <input type="hidden" name="eiin_number" value="<?php echo $row->eiin_number; ?>"  />
  <input type="hidden" name="school" value="<?php echo $row->eiin_number; ?> "  />
  <?php endforeach; ?>
  <li class="height-30 font_2 left margin_left10">
 <input class="borber2 padding_5" readonly="readonly" value="<?php echo $t_quantity ?>" type="text" placeholder="Text Quantity" id="t_quantity" name="t_quantity" /> 
         </li>
               
               <li class="height-30 font_2 left margin_left10">
               <button class="borber2 padding_5 font_1 color_w backgroung_4" type="submit" name="confarm" />Conform </button>
               </li>
 </form>
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
