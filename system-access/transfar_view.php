<?php
include_once('class/auth.php');
$table="ams_admission";
$table2="ams_exam_result";
extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
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
                            <img src="images/Admin icon.jpeg"/>
                            <div class="topbar_small_div_text left height-30">TRANSFER</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TRANSFER CERTIFICAT</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                
                                           
                    <div class="exam_result_div_page" style="margin-top: 20px; ">
                        
                       
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->
                           <div id="dynamic"  style="font-size:14px; padding:10px;">
                           <!--------------form start---------------->
                               <div id="printableArea" class="height-auto width-auto bg shadow_inner" style="color:#333;">
                               
                                     <div class="center width-auto" style="border-bottom:#666 solid 2px; padding-bottom:10px;">
                                       <div class="left width-label-120 height-100 margin-top-26 margin_left25 bg2">
                                          <img width="100%" height="100%" src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo"); ?>" />
                                       </div>
                                       
                                       <ul class="left margin-top-10" style="width:700px; height:120px;">
                                       <li style="font-size:32px; text-decoration:underline; padding-top:30px; color:#069;"> <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name");?>
                                       </li>
                                        <li style="color:#333;"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"address");?></li></ul>
                                        <div class="clear"></div>   
                                     </div> 
                                     
                                     <div style="font-size:19px;" class="center height-60">TRANSFER CERTIFICAT</div>
                                     
                                     <div class="left margin_left25 width-label-400">Roll No : <?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"roll");?></div> 
                                     <div class="center right width-label-400">Reg No : <?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"admition");?></div>
                                     
                                     <div class="center left margin_left25 margin-top-20 width-label-620">
                                     <?php
                                  $array=array("admition"=>$id,"group_id"=>$group_id,"school_id"=>$school);
                                  $data=$obj->SelectAllByID_Multiple($table,$array);
                                  $r=1;
                                  if(!empty($data))
                                  foreach($data as $row):
                        
                                  ?>
                                        <table style="width:100%" class="a-left">
                                           <tr>
                                               <td width="" style="padding:10px;">1.</td>
                                              <td width="60%" style="padding:10px;">Name of The Student <span class="right">:</span></td>
                                              <td width="40%" style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"name");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">2.</td>
                                              <td style="padding:10px;">Name of The Father/Guardian <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"guardian_name");?></td>
                                           </tr>
                                           <tr>
                                           <td style="padding:10px;">3.</td>
                                              <td style="padding:10px;">Nationality and Religion <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"nationality");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">4.</td>
                                              <td style="padding:10px;">Class / Course <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php
											   echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">5.</td>
                                              <td style="padding:10px;">Gender <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"gender");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">6.</td>
                                              <td style="padding:10px;">Date of birth (in woadr) registered in the admission register <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"dob");?></td>
                                           </tr>
                                           <tr>
                                           <td style="padding:10px;">7.</td>
                                              <td style="padding:10px;">Date of admission <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"date");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">8.</td>
                                              <td style="padding:10px;">Group/Program <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php
											   echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">9.</td>
                                              <td style="padding:10px;">semester in which the student was studying at the time of liveing <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php
											   echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">10.</td>
                                              <td style="padding:10px;">Date on which the student actuaily left the School/college <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php $date=date('D,d-m-Y'); echo $date; ?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">11.</td>
                                              <td style="padding:10px;">Reasoen of the student left the college</td>
                                              <td style="padding:10px;">..</td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">12.</td>
                                              <td style="padding:10px;">whether qualified for promotin to a higher class ? <span class="right">:</span></td>
                                              <td style="padding:10px;"></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">13.</td>
                                              <td style="padding:10px;">whether the student was in receipt of any scholership or fee concession? <span class="right">:</span></td>
                                              <td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"admition");?></td>
                                           </tr>
                                           <tr>
                                              <td style="padding:10px;">14.</td>
                                              <td style="padding:10px;">conduct and character <span class="right">:</span></td>
                                              <td style="padding:10px;">..</td>
                                           </tr>
                                           
                                        </table>
                                        <?php endforeach; ?>
                                     </div>
                                     <div class="center left  height-100 width-label-100 margin-top-20 margin_left50">
                                      <img height="100%" width="100%" src="photo/<?php echo $obj->SelectAllByVal("ams_admission","admition",$id,"photo");?>" />
                                     </div>
                                     
                                     <div style="width:98%" class="left height-100 margin-top-20">
                                       <ul>
                                         <li class="margin_left25 left"><span style="font-size:16px;">notic :</span> no separate Conduct Certificat is issued. </li>
                                         <li style="width:48%;" class="margin_left25 center right"><span style="font-size:16px;">PRINCIPAL</span> </li>
                                       </ul>
                                     </div>
                                     
                                     <div class="clear"></div>                      
                               </div>
                               <!--------------form end---------------->
                               <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                 
                                <button type="button" onClick="printDiv('printableArea')" name="save" class=" height-35 div_btn" onclick="CreateResult(2)">PRINT</button>
                            </li>
                        </ul>
                           </div>
                             
                            
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
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