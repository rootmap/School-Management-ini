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
		#calendar3 {
			
			font-family: Tahoma;
			font-size: 12px;
		}
	</style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>

    </head>

    <body onload="doOnLoad();">
    <form action="total_send_sms.php" method="get">
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
                        <div class="topbar_small_div_text2 left height-30"><h2>SEND SMS DETAILS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                            <?php include('includes/back.php'); ?>

                        </ul>
                        <?php include_once('class/esm.php'); ?>

                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    
                        <div class="total_send_sms_div_top shadow_inner color_1 auto-position">
                         <ul>
                                
                               <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="text-align:center; margin-left:10px;">Start Date:</li>
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10 left " style="margin-right:30px; margin-left:15px;">
                                    <input placeholder="Start Date" <?php if(isset($_GET['start'])){ ?> value="<?php echo $_GET['start']; ?>" <?php } ?> id="calendar" name="start" class="select_option_1"/>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="text-align:center; margin-left:15px;">End Date :</li>
                                <li class="admission_form_div_label height-30 width-label-175 margin-top-10 left " style="margin-right:30px; margin-left:15px;">
                                    <input placeholder="End Date" <?php if(isset($_GET['start'])){ ?> value="<?php echo $_GET['end']; ?>" <?php } ?> id="calendar2" name="end" class="select_option_1"/>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-130  left" style="text-align:center; margin-left:15px;">Total Send SMS:</li> 
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10  left" style="margin-right:15px;">
                                <?php 
								if(isset($_GET['start'])){
									$array=array("eiin_number"=>$school);
									$c=$obj->exists_multiple_date("sms", $array,$_GET['start'],$_GET['end']);	
								}
								else
								{
                                       $array=array("eiin_number"=>$school);
                                       $c=$obj->exists_multiple("sms",$array);
								}
                                        
                                        ?>
                                    <input placeholder="&nbsp" readonly="readonly" name="name" value="<?php  echo $c ;  ?>" class="select_option_1"/>
                                </li>
                                
                                
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="login" class="height-35 div_btn">View Details</button>
                                </li>
                            </ul>
                    </div>
                            
                       
                        
                   
                                           
                    <div class="attendance_reg_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                        <div class="attendance_reg_heading left">
                            <center><h2 class="">
                                     SMS LIST
                                </h2></center>
                            </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-col5 auto-position shadow_inner color_1" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Messages</th>
                                            <th>Sending Number</th>
                                            <th>Sending Time</th>
                                            <th>Sending Date</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
										if(isset($_GET['start'])){
										$data=$obj->SelectAllByID_Multiple_date("sms",array("eiin_number"=>$school),$_GET['start'],$_GET['end']);
										}
										else
										{
                                        $data=$obj->SelectAllByID_Order("sms",array("eiin_number"=>$school),"desc");
										}
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
										$apistatus=$row->api_status;
										$check=substr($apistatus,2,4);
										if($check)
										{
												$arrays= explode('|88',$row->phone1);
												$arrays2= str_replace("S|",",",$row->api_status);
												$arraystwo= explode(',',$arrays2);
												$rq=0;
												$a=0;
												$sendquantity=0;
												foreach($arraystwo as $two):
													if(substr($two,0,4)==1701)
													{
														$sendquantity+=1;
													}
													else
													{
														$sendquantity+=0;	
													}
												endforeach;
												
												foreach($arrays as $ww):
													$rq+=1;
												endforeach;
												$quantity=$rq;
												if($quantity>1)
												{
													$number=substr(str_replace("|88",",",$row->phone1),0,24)."...";	
												}
												else
												{
													$number=$row->phone1;
												}
												$status="<a href='history_resend.php?id=".$row->id."' class='btn btn success'>Send ".$sendquantity."</a>";
										}
										else
										{
					$status="<a href='history_resend.php?id=".$row->id."' class='btn btn-danger'>Re-Send</a>";
												
											$arrays= explode('|88',$row->phone1);
												$rq=0;
												foreach($arrays as $ww):
													$rq+=1;
												endforeach;
												$quantity=$rq;
												if($quantity>1)
												{
													$number=substr(str_replace("|88",",",$row->phone1),0,24)."...";	
												}
												else
												{
													$number=$row->phone1;
												}
										}
                                        ?>
                                        <tr class="">
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row->sms; ?></td>
                                                <td><a href="history_resend.php?id=<?php echo $row->id; ?>" title="<?php echo $row->phone1; ?>"><?php echo $number; ?></a></td>
                                                <td class="center"><?php echo $row->time; ?></td>
                                                <td class="center"><?php echo $row->date; ?></td>
                                                <td class="center"><?php echo $quantity; ?></td>
                                                <td class="center"><?php echo $status; ?></td>
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
                          <div class="clear"></div>  
                         </div>
                        

                    </div>



                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>

</form>

    </body>
</html>