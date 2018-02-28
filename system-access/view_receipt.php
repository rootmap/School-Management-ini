<?php
include_once('class/auth.php');
$table="ams_payment";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        

        <script>
            function showview(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("dynamic").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/student_account_view.php?r=" + str, true);
                xmlhttp.send();
            }
        </script>


    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->

        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Finance_icon.png"/>
                            <div class="topbar_small_div_text left height-30">FINANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>STUDENTS' ACCOUNTS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="finance_setting.php" style="text-decoration:none;">
                                    <button type="submit" name="login" class="css_btn_class1 height-35 " 
                                            style="background: url('images/signin_new02.png') no-repeat center left #C8C8C8;
                                            margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px;
                                            padding-left: 35px; border:none;">Back</button>
                                </a>
                            </li>

                        </ul>
                        <?php include_once('class/esm.php'); ?>

                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">




                    <div class="st_fin_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                                <div class="attendance_reg_heading left width-label-250 auto-padding">
                                    <center><h4>
                                            Students' Accounts
                                        </h4></center>
                                </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div></center>
                        </div>
                        
                        <div class="st_fin_small_form_div width-col5 auto-position" >
                        
                        	<div class="st_fin_small_div left margin_left5">
                           
                        
                        <div id="dynamic1"  style="margin-left:-10px;">
                             
<table class="Fees_table" align="center" >
 <?php 
								$array=array("id"=>$receipt);
							    $info=$obj->SelectAllByID($table,$array);
								 if(!empty($info))
								  foreach($info as $row):
							  ?>

                                      <tr>
                                            <td colspan="4" class="center height-40" style="font-family:Arial; font-size:20px;">Institute Name &amp; Address (mobile number)</td>
                                        </tr>
                                        
                                        <tr>
                                            <td width="112" class=" a-left" style="border:none">Date :</td>
                                            <td width="110" class=" a-left" style="border:none">
											<?php echo $row->date;?>
                                            </td>
                                            
                                            <td width="97" class=" a-left" style="border:none">Receipt No:</td>
                                            <td width="112" class=" a-left" style="border:none">
                                            <input type="hidden" name="receipt" value="<?php echo $obj->RandNumber(3);?>"/>
                                            <?php echo $obj->RandNumber(3);?>
                                            </td>
                                            
                                        </tr>
                                            <tr>
                                            <td class=" a-left " style="border:none">Class / Course:</td>
                                            <td class=" a-left" style="border:none">
											<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>
											
                                            </td>
                                            
                                            <td class=" a-left " style="border:none">Session:</td>
                                            <td class=" a-left" style="border:none">
											<?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name");?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" a-left " style="border:none">Section:</td>
                                            <td class=" a-left" style="border:none">
                                            <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?>
                                            </td>
                                            <td class=" a-left " style="border:none">Shift:</td>
                                            <td class=" a-left" style="border:none">
                                            <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" a-left " style="border:none">Group:</td>
                                            <td class=" a-left" style="border:none">
											<?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?>
                                            </td>
                                            
                                            <td class=" a-left " style="border:none">Department:</td>
                                            <td class=" a-left" style="border:none"><?php echo $row->section_id;?></td>
                                        </tr>
                                        <tr>
                                            <td class=" a-left " style="border:none">Adm No:</td>
                                            <td class=" a-left" style="border:none">
											<input type="hidden" name="admission" value="<?php echo $row->admition;?>"/>
											<?php echo $row->admition;?>
                                            </td>
                                            
                                            <td class=" a-left " style="border:none">Class / Course Roll:</td>
                                            <td class=" a-left" style="border:none">
											
											<?php echo $row->roll;?>
                                            <input type="hidden" name="roll" value="<?php echo $row->roll;?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" a-left " style="border:none">Student Name :</td>
                                            <td colspan="3" class=" a-left" style="border:none"><?php echo $row->name;?></td>
                                        </tr>
                                          
                                            <tr>
                                                <td width="42" class="center ">S/L.</td>
                                                <td width="208" class=" a-left">Admission/Re Admission Fee </td>
                                                <td width="185" class="center"></td>
                                                <td width="185" class="center">Amount</td>

                                            </tr>
									 
                                     <?php $s++; endforeach; ?>
                                     <?php 
									    $array=array("roll"=>$r);
										$data=$obj->SelectAllByID('ams_payment_details',$array);
										$s=1;
										$sum=0;
										if(!empty($data))
										 foreach($data as $rww):
										 $sum+=$rww->amount;
												
									 ?>
                                     
                                             <tr>
                                             

                                                <td width="50" class="center "><?php echo $s;?></td>
                                                <td width="700" class=" a-left">
                                                <?php echo $obj->SelectAllByVal("ams_student_account","id",$rww->account_name_id,"name");?>
                                                </td>
                                                
                                                 <td width="185" class="center">
                                                 
                                                 </td>
                                                 
                                                 <td width="185" class="center">
                                                 <?php echo $rww->amount;?>
                                                 </td>
                                         
                                               
                                            </tr>
                                            
                                            <?php $s++; endforeach ; ?>
                                            <tr>
                                            <td>S/L.</td>
                                            <td></td>
                                            <td>Total</td>
                                            <td>= <?php echo $sum; ?> Tk</td>
                                            </tr>


</table>
<ul style="margin-left:30px;">
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="save" class=" height-35 div_btn">Print</button>
                                    </a>
                                </li>
                                </ul>
                                
                            </div>
                            
                            </div>
                            

                            
<div class="clear"></div>
                        </div>

                    </div>





                            </div>
                            <!----------------------select menu ends--------------------------------------------------------------------------------------->

                            


                    <div class="spacer"></div>
                    </div>
                    <!--tables code end here-->
            </div>
                    <div class="footer_div_full">
                        <div class="footer_div">
                            <?php include ('./class/footer.php'); ?>
                        </div>
                    </div>   
                


                    
                </body>
                </html>
                