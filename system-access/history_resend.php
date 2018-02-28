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
                        <div class="topbar_small_div_text2 left height-30"><h2>SEND SMS HISTORY</h2></div>
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
                    
                    <div class="attendance_reg_div_page" style="margin-top: 20px;">
                        <div class="admission_form_div width-col5 auto-position shadow_inner color_1" style="padding:10px;">
                        <!--tables code start from here-->
                        <form action="resendsms.php" method="post">
							   <?php 
							$smsid=$_GET['id'];
							$sms=$obj->SelectAllByVal("sms","id",$smsid,"sms");
							$number=$obj->SelectAllByVal("sms","id",$smsid,"phone1");
							$status=$obj->SelectAllByVal("sms","id",$smsid,"api_status");
							$date=$obj->SelectAllByVal("sms","id",$smsid,"date");
							$time=$obj->SelectAllByVal("sms","id",$smsid,"time");
							$array= explode('|88',$number);
							$arrays2= str_replace("S|",",",$status);
							$arraystwo= explode(',',$arrays2);
							?>
                            <input type="hidden" name="sms" value="<?php echo $sms; ?>" />
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
										$i=1;
										$a=1;
										$notsend=0;
										foreach($array as $row):
										if(substr($arraystwo[$a],0,4)==1701)
										{
											$st="<span>Success</span>";
											$notsend+=0;
											$smsphonenumber=$row;											
										}
										else
										{
											$st="<span>Not-Send</span>";
											$notsend+=1;
											$smsphonenumber="<input type='text' name='phone_number[]' value='".$row."' />";											
										}
                                        ?>
                                        <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $sms; ?></td>
                                                <td><?php echo $smsphonenumber; ?></td>
                                                <td><?php echo $time; ?></td>
                                                <td><?php echo $date; ?></td>
                                                <td><?php echo 1; ?></td>
                                                <td><?php echo $st; ?></td>
                                        </tr>
                                        <?php 
                                        $a+=2; 
										$i++;
										endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            </div>
                            	<?php 
								if($notsend!=0){
								?>
                                <button type="submit" name="save" class="height-35 div_btn"> Re - Send ( <?php echo $notsend; ?> ) </button>
                                <?php } ?>
                            </form>
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


    </body>
</html>