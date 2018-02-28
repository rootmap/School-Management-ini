<?php
include_once('class/auth.php');
$table="tsms_group";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <?php include('class/head.php'); ?>
       <style>
		#calendar,
		#calendar2,
		#calendar3 {font-family: Tahoma;font-size: 12px;}
	   </style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>

    </head>

    <body onload="doOnLoad();">
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/SMS_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SMS BOX</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>SMS TRANSACTION HISTORY</h3></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                        </ul>
                        
                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>

                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    
                        <div class="total_send_sms_div_top auto-position shadow_inner color_1">
                         <ul>
                                
                               <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="text-align:center; margin-left:130px;">Start Date:</li>
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10 left " style="margin-right:30px; margin-left:45px;">
                                    <input placeholder="Start Date" id="calendar" name="name" class="select_option_1"/>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="text-align:center; margin-left:45px;">End Date :</li>
                                <li class="admission_form_div_label height-30 width-label-175 margin-top-10 left " style="margin-right:30px; margin-left:45px;">
                                    <input placeholder="End Date" id="calendar2" name="name" class="select_option_1"/>
                                </li>
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="login" class=" height-35 div_btn">View Details</button>
                                    </a>
                                </li>
                            </ul>
                    </div>
                            
                       
                        
                   
                                           
                    <div class="attendance_reg_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                        <div class="attendance_reg_heading left">
                            <center><h2 class="">
                                     SMS HISTORY
                                </h2></center>
                            </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-col5 auto-position shadow_inner color_1" style="padding:10px;">
                        <div class="sms_history_small_div auto-position margin_left5">                       
                                <!--tables code start from here-->

                                <div id="dynamic">
                                   <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                       <tr>
                                        <th>Total</th>
                                        <th>Purchase SMS Type</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID("ams_admin_sms_stteing",$array);
                                        $x=1;
										$c=0;
                                        if(!empty($data))
                                        foreach($data as $row):
										$c+=$row->cline_quantity;
                                        ?>
                                        <tr>
                                        <td><?php echo $x; ?></td>
                                         <td>Purchase Bulk SMS</td>
                                         <td><?php echo $row->cline_quantity; ?></td>
                                         <td><?php echo $row->date; ?></td>
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                         
                                         <tr>
                                         <td><?php echo $x+1; ?></td>
                                         <td>Totol</td>
                                         <td><?php echo $c; ?></td>
                                         <td>Purchased By Customer</td>
                                        </tr>
                                        
                                        <tr>
                                        <td><?php echo $x+2; ?></td>
                                         <td>Expend SMS</td>
                                         <td><a href="total_send_sms.php"><?php 
										 $expend=$c-$ops->sms_available($school);
										 echo $expend; ?></a></td>
                                         <td></td>
                                        </tr>
                                        
                                        <tr>
                                        <td><?php echo $x+3; ?></td>
                                         <td>Current SMS</td>
                                         <td><?php echo $ops->sms_available($school); ?></td>
                                         <td></td>
                                        </tr>
                                        
                                        </tbody>
                                     </table>
                            </div>
                          
                            <!--tables code end here-->
                            <div class="clear"></div>
                         </div>
                        

                    </div>



                </div>


            </div></div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>