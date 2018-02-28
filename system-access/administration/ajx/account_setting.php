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
			header("location: index.php");
			exit();
					}
}
@$school=$_SESSION['SESS_SESSION_SCHOOL_ID'];
$company=$_SESSION['SESS_AMSIT_COMPANY_KEY'];
$input_by=$_SESSION['SESS_AMSIT_ADMIN_KEY'];
$input_datetime=date('Y-m-d');
include('../class/db_Class.php');	
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
$table="ams_singup";
extract($_GET);
if($r!=='')
{
?>
   <?php 
   $array=array("eiin_number"=>$r);
    $date=$obj->SelectAllByID($table, $array);
	 if(!empty($date))
	  foreach ($date as $row):
   ?>
   <div class="backgroung_3 width_100 padding_bottom10 padding_top10 text_aling_center font_2 color_w" style="font-weight:bolder; font-size:22px;">
     <a class="color_w" id="eiin_number" onclick="information('<?php echo $row->eiin_number; ?>')" title="SMS Information Details" href="#"><i class="fa fa-cogs margin_left10 left font_20"></i></a> 
       EIMS Software User Account Details & Settings 
       
       <!--submenu start-->
       
                <div id='cssmenu' style="position:absolute; margin-left:785px; margin-top:-25px;">
            <ul>
                 <li class='has-sub last'><a href='#'><span>More</span></a>
                  <ul>
                     <li><a href='eiin_number_setting2.php?editschool=<?php echo $row->eiin_number; ?>'><span>Edit Info</span></a></li>
                     <li class="last"><a href='eiin_number_setting2.php?eiin=<?php echo $row->eiin_number; ?>&amp;actionschool=deleteall' title="Delete"><span>Delete</span></a></li>
                  </ul>
               </li>
            </ul>
        </div>
       
       <!--ssubmenu end-->
     <a class="right color_w" onclick="setting('<?php echo $row->eiin_number; ?>')" title="SMS Settings" href="#"><i class="fa fa-cogs margin_right10 font_20"></i></a>  
                 </div>
                 <div class="width_100">
                  <style type="text/css">
                   #dd tr td{ padding-left:30px; }
                  </style>
                   <table id="dd" class="width_100 font_2 color_b" cellpadding="0" cellspacing="1" border="0">
                     <tr class="backgroung_2">
                       <td class="padding_5" width="30%">EIIN Number</td>
                       <td class="padding_5"><?php echo $row->eiin_number; ?></td>
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Type</td>
                       <td class="padding_5"><?php echo $row->acount_type; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Service Type</td>
                       <td class="padding_5"><?php echo $row->servic_type; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Package Type</td>
                       <td class="padding_5"><?php echo $obj->SelectAllByVal("ams_package_type","id",$row->packs_type,"name"); ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Sender ID </td>
                       <td class="padding_5"><?php echo $row->sms_sander_id; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Name </td>
                       <td class="padding_5"><?php echo $row->acount_name; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Holder Name </td>
                       <td class="padding_5"><?php echo $row->name; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Holder Contact Number </td>
                       <td class="padding_5"><?php echo $row->number; ?></td>
                       
                     </tr>
                     
                    
                     <tr class="backgroung_2">
                       <td class="padding_5">Your Email </td>
                       <td class="padding_5"><?php echo $row->email; ?></td>
                      
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Password </td>
                       <td class="padding_5"><?php echo $row->password; ?></td>
                      
                     </tr>
                     
                     
                   </table>
                 </div>
       
   <?php endforeach; ?>
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
