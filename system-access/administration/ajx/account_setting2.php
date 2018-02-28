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





$data=$obj->SelectAllByID($table,array("eiin_number"=>$r));
$s=1;
if(!empty($data))
foreach ($data as $row):
?>   
    <tr id="<?php echo $i; ?>">
    <td class="center height-15"><?php echo $s; ?></td>
        <td class="center height-15"><?php echo $row->eiin_number; ?></td>
        <td class="center height-15"><?php echo $row->acount_name; ?></td>
        <td class="center height-15"><?php echo $row->number; ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("division","id",$row->divition,"name"); ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("thana","id",$row->zip_code,"name"); ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("ams_package_type","id",$row->packs_type,"name"); ?></td>
        <td class="center height-15">
        <div id="manu2">
        <ul>
          <li>
            <?php $ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?>
                 <span class="color_red">Inactive</span>
				 <?php }else{ ?>
                 <span class="color_gr"><font color="#009900">Active</font></span>
				 <?php } ?>
                 </a>
                                    <ul class="backgroung_5">
                                      <li><a name="update" href="eiin_number_setting2.php?update=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>"
		<?php 
			$ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
			if($ex==0){
		 ?>
                 <span class="color_red"><font color="#009900">Active</font></span>
				 <?php }else{ ?>
                 <span class="color_gr">Active</span>
				 <?php } ?>
                 </a>
                 </li>
                                      <li><span>
                                      <a name="update" href="eiin_number_setting2.php?update1=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>" >
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?><span class="color_w">Inactive</span><?php }else{ ?><span class="color_red">Inactive</span><?php } ?></a></span></li>
                                      <li><a href='#'><span>Pandding</span></a></li>
                                    </ul>
                                  </li>
                                </ul>
                             </div>
                            
        
        </td>
        <td class="center height-15"><a href="#">Active</a></td>
        <td class="center height-15">5500</td>
        <td class="center height-15">365</td>
        <td class="center height-15">09/03/2015</td>
        <td class="center height-15"><?php echo $row->date; ?></td>
        <td class="center height-15">
         <a onclick="accountdetails('<?php echo $row->eiin_number; ?>')" class="color_b font_25" href="#"><!--<i class="fa fa-th-list"></i>--><img src="../images/contact_new.png" /></a>
         </td>
                   
    </tr>
    <?php 
	$s++; endforeach;





}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
