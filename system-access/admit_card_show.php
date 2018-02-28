<?php
include_once('class/auth.php');
$table="ams_exam_result";
$table1="ams_admission";
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
                            <img src="images/class_time_Icon.png"/>
                            <div class="topbar_small_div_text left height-30">ADMIT CARD</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EXAMINATION ADMIT CARD</h2></div>
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
                    
                    
                        
                    </div>
                    
             <!---------------------body start----------------------------------------------------------------->       
                                           
                   <div class="exam_result_div_page" style="margin-top: 20px;">
                   
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                
                                <div class="width-label-325 left" >
                                <img src="images/direction_left.png"/>
                                </div>
                                
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                    ADMIT CARD
                                </h2></center>
                            </div>
                            
                                <div class="width-label-325 right" >
                                <img src="images/direction_right.png"/>
                                </div>
                            </div>
                            
                        </center>
                        
                        
                       <div id="result1" class="result_sheet" style="padding-bottom:20px; padding-top:20px;">
                        <!-----------------sep_1 start---------------------------------->
                        <div class="result_sheet">
     <?php 
						$array=array("id"=>$idnumber,"admition"=>$admission,"school_id"=>$school_id);
                         $data=$obj->SelectAllByID_Multiple($table1,$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
     
                   <div class="result_sheet_1 shadow_inner" style="margin-left:auto;margin-right:auto; height:350px; background:#FFF; padding:10px;">
                   
                              <?php 
						      $array=array("eiin_number"=>$school);
                              $data=$obj->SelectAllByID("ams_singup",$array);
						      if(!empty($data))
                              foreach($data as $trow):
					          ?>
                             <div class="result_sheet_1_img left">
                              <img src="photo/<?php echo $trow->photo; ?>" />
                             </div>
                            <?php endforeach; ?>
                             <div class="result_sheet_name left">
                              <div class="result_sheet_name_1 shadow_inner">
							    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?>
                              </div>
                              <div class="result_sheet_name_2 shadow_inner"></div>
                               <div class="result_sheet_name_3 shadow_inner"><strong>ADMIT CARD</strong></div>
                             </div>
                             
                             <div class="result_sheet_photo left">
                              <div class="result_sheet_photo_id">ID No: <?php echo $ting->admition;?></div>
                              <div class="result_sheet_photo_img">
                               <img src="photo/<?php echo $ting->photo;?>" />
                              </div>
                             </div>
                              
                              <div class="result_sheet_table left">
                                <table>
                                 
                                  <tr>
                                    <td  style="width:300px;">Name of Examinee   :</td>
                                    <td style="width:800px;"><?php echo $ting->name;?></td>
                                    <td>Roll Number   :</td>
                                    <td><?php echo $ting->roll;?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td  style="width:300px;">Father’s Name :</td>
                                    <td style="width:800px;"><?php echo $ting->father_name;?></td>
                                    <td>Section :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td  style="width:300px;">Mother’s Name :</td>
                                    <td style="width:800px;"><?php echo $ting->mother_name;?></td>
                                    <td>Group Name :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name");?></td>
                                  </tr>
                                   
                                </table>
                                
                              </div>
                            <div style="height:40px; width:30%;float:left; color:#06C; padding-left:40px; margin-top:20px;">
                               Signature of Principal : </div>
                                 <div style="height:40px; width:40%;background:#CCC; border:#C30 1px solid; float:left; line-height:40px; margin-top:10px;""></div>   
                            
                          </div>
                          
                           <ul>
                             <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="#" style="text-decoration:none">
   <button type="submit" name="save" class="height-35 div_btn">Print</button>
                                </a>
                            </li>
                        </ul>
                        <?php } ?>
                        <!-----------------sep_1 end----------------------------------> 
                          </div>
                                        
                       <div class="clear"></div>   
                       </div>

                    </div>
                    
<!---------------------body end----------------------------------------------------------------->             



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