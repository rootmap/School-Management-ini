<?php
include('class/auth.php');
$table="ams_singup";
 $rrr=365;
if(isset($_GET['update']))
{
	
	$array=array("id"=>$_GET['id'],"eiin_number"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}

if(isset($_GET['update1']))
{
	
	$array=array("id"=>$_GET['id'],"eiin_number"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>ADMINISTRATION</title>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />


</head>

<body>
	<!-- body starts from here-->
     
     <?php include('include/head.php');?>
    
    
        <div class="height-50 width_960 auto-position " >
        
                
                
                
                <?php include('include/manu.php');?>

<div class="admin_logo_top2_div auto-position height-40  center">
				<div id='cssmenu' class="left" style="margin-top:6px;">
<ul>
	 <li class='has-sub last'><a href='#'><span>Sort by</span></a>
      <ul>
         <li><a href='#'><span>Type EIIN</span></a></li>
         <li><a href='#'><span>Name</span></a></li>
         <li><a href='#'><span>Date</span></a></li>
         <li class='last'><a href='#'><span>Total Size</span></a></li>
      </ul>
   </li>
</ul>
</div>
<h2 class=" auto-position width-label-250 white_color">EIMS Software User</h2>
 </div><div class="clear"></div>
     </div>
<div class="min-height_600 height_auto shadow_inset_1 width_960 marging_left_right margin-top-50">
<?php include_once('class/esm.php'); ?>
  <table cellpadding="0" class="width_99 margin_left5 font_3 marging_top_5 text_aling_center" cellspacing="1" border="0">    <tr class=" light_green font_11">
                        <td rowspan="4" class="center height-15">S.L</td>
                        <td rowspan="4" class="center height-15">EIIN</td>
                        <td rowspan="4" class="center height-15">Institute Name</td>
                        <td rowspan="4"  class="center height-15">Number </td>
                        <td rowspan="4" class="center height-15">Thana</td>
                        <td rowspan="4" class="center height-15">District</td>
                        <td rowspan="4" class="center height-15">Package Type</td>
                        <td rowspan="4" class="center height-15">Service Status</td>
                        <td rowspan="4" class="center height-15">SMS Status</td>
                        <td rowspan="4" class="center height-15">SMS Quantity</td>
                        <td rowspan="2" colspan="2" class="center height-15">Service Validity</td>
                        <td rowspan="4" class="center height-15">Active Date</td>
                        <td rowspan="4" class="center height-15">View Details</td>
                        
                        </tr>
                        
                        
                        <tr>
                        </tr>               
                <tr>         
                  <td rowspan="2" class="center height-15 light_yellow">Day-Count</td>
                  <td rowspan="2" class="center height-15 light_yellow">Expiry-Date</td>
                </tr>   
                                                     
                         
                  <tr>        
                        <?php 
						  $data=$obj->SelectAll($table);
						  $s=1;
						 
						  if(!empty($data))
						  foreach ($data as $row):
						?>                    
                     </tr>
                            <tr class="backgroung_2">
                            <td class="center height-15 padding_5"><?php echo $s; ?>11111111</td>
                            <td class="center height-15 padding_5"><?php echo $row->eiin_number; ?></td>
                            <td class="center height-15 padding_5"><?php echo $row->acount_name; ?></td>
                            <td class="center height-15 padding_5"><?php echo $row->number; ?></td>
                            <td class="center height-15 padding_5"><?php echo $row->zip_code; ?></td>
                            <td class="center height-15 padding_5"><?php echo $row->divition; ?></td>
                            <td class="center height-15 padding_5"><?php echo $obj->SelectAllByVal("ams_package_type","id",$row->packs_type,"name"); ?></td>
                            <td class="center height-15 padding_5">
                            <div id="manu2">
                                <ul>
                                  <li>
                                    <?php $ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?>
                 <span class="color_w">Active</span>
				 <?php }else{ ?>
                 <span class="color_gr">Active</span>
				 <?php } ?>
                 </a>
                                    <ul class="backgroung_5">
                                      <li><a name="update" href="home.php?update=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?>
                 <span class="color_w">Active</span>
				 <?php }else{ ?>
                 <span class="color_gr">Active</span>
				 <?php } ?>
                 </a>
                 </li>
                                      <li><a href='#'><span>
                                      <a name="update" href="home.php?update1=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>" >
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?><span class="color_w">Deactive</span><?php }else{ ?><span class="color_red">Deactive</span><?php } ?></a></span></a></li>
                                      <li><a href='#'><span>Pandding</span></a></li>
                                    </ul>
                                  </li>
                                </ul>
                             </div>
                            
                            
                            
                            </td>
                            <td class="center height-15 padding_5">
                             <div id="manu">
                                <ul>
                                  <li><a href='#' class="color_b"><span>Category</span></a>
                                    <ul class="backgroung_5">
                                      <li><a href='#'><span>Active</span></a></li>
                                      <li><a href='#'><span>Deactive</span></a></li>
                                      <li><a href='#'><span>Present & Absent</span></a></li>
                                      <li><a href='#'><span>Only Absent</span></a></li>
                                    </ul>
                                  </li>
                                </ul>
                             </div>
                            </td>
                            <td class="center height-15 padding_5"><?php echo $balanceuser; ?></td>
                            <td class="center height-15 padding_5">
							<?php $rr=$obj->duration($row->date,date('Y-m-d')); echo $rr; ?></td>
                            <td class="center height-15 padding_5">
							<?php $rem=$obj->makedate($row->date,'365'); echo $rem; ?></td>
                            <td class="center height-15 padding_5"><?php echo $row->date; ?></td>
                            <td class="center height-15 padding_5"><a href="#"><img src="../images/contact_new.png" /></a></td>
                            
                            </tr>
                            <?php $s++; endforeach; ?>
                            
                            
        </table>
 </div>          
                
                            
   
 <!----------footer start------------------------------------------------->                

                <?php include ('./class/footer.php'); ?>
            <?php include('include/admin.php');?>
<!----------footer end------------------------------------------------->   
</body>
</html>