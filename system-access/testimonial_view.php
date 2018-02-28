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
        <style>
        @import url(http://fonts.googleapis.com/css?family=Lobster);
        </style>
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
                            <img src="images/student-testimonial-icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">Testimonial</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Testimonial</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                
                                           
                    <div  class="exam_result_div_page" style="margin-top: 20px; ">
                        
                       
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->
                           <div id="dynamic"  style="font-size:14px; padding:10px;">
                           <ul>
                             <li id="df" style="width: 100%; padding: 10px;">
                                
                                <button type="submit" name="update" class=" height-35 div_btn">Edit</button>
                            </li>
                        </ul>
                           <!--------------form start---------------->
                               <div id="printableArea" class="height-auto width-auto bg shadow_inner" style="color:#333;">
                               
                                     <div class="center width-auto" style="padding-bottom:10px;">
                                       <div class="left width-label-120 height-100 margin-top-26 margin_left25 bg2">
                                          <img width="100%" height="100%" src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo"); ?>" />
                                       </div>
                                       
                                       <ul class="left margin-top-10" style="width:700px; height:120px;">
                                       <li style="font-size:32px; text-decoration:underline; padding-top:30px; color:#069;"> <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name");?>
                                       </li>
                                        <li style="color:#333;"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"address");?>,Tel:-<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"number");?></li></ul>
                                        <div class="clear"></div>   
                                     </div> 
                                     
                                     <div style="font-size:19px;" class="center height-60">Testimonial</div>
                                     
                                     
                                     <div class="left margin_left25 margin-top-20" style="width:94%;">
                                     <?php
										  $array=array("admition"=>$id,"group_id"=>$group_id,"school_id"=>$school);
										  $data=$obj->SelectAllByID_Multiple($table,$array);
										  $r=1;
										  if(!empty($data))
										  foreach($data as $row):
								
									?>
                                    
                                    <ul style="font-family: 'Lobster', cursive; font-weight:100; font-size:16px; letter-spacing:1px;">
                                      <li class="left" style="width:15%;">Certified the</li> 
                                      <li class="left" style="padding-left:10px;width:83%; border-bottom:rgba(51,51,51,.3) 2px dotted;">
									  <?php echo $row->name; ?></li>
                                      
                                      <li class="left" style="width:20%; margin-top:5px;">son/daughter of Mr.</li> 
                                      <li class="left" style="padding-left:10px;width:77%;margin-top:5px; border-bottom:rgba(51,51,51,.3) 2px dotted;">
									  <?php echo $row->father_name; ?></li>
                                      
                                      <li class="left" style="width:20%;margin-top:5px;">and Mrs.</li>
                                      <li class="left" style="padding-left:10px;width:77%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">
									  <?php echo $row->mother_name; ?></li>
                                      
                                      <li class="left" style="width:auto;margin-top:5px;">of <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name");?> bearing Roll No </li> 
                                      <li class="left" style="padding-left:10px;width:60%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">
									  <?php echo $row->roll; ?></li>
                                      
                                        <li class="left" style="width:20%;margin-top:5px;">Registration No</li> 
                                      <li class="left" style="padding-left:10px;width:30%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">
									  <?php echo $row->admition; ?></li>
                                      <li class="left" style="width:10%;margin-top:5px;">Session No</li> 
                                      <li class="left" style="padding-left:10px;width:25%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">
									  <?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name");?></li>
                                      
                                      <li class="left" style="width:20%;margin-top:5px;">Group/Subject</li> 
                                      <li class="left" style="padding-left:10px;width:30%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">
									  <?php echo $obj->SelectAllByVal("ams_student_group","id",$group_id,"name");?></li>
                                      <li class="left" style="width:18%;margin-top:5px;">Passed his/her</li> 
                                      <li class="left" style="padding-left:10px;width:15%;margin-top:5px; border-bottom:rgba(51,51,51,.5) 2px dotted;">S.S.H
									  </li>
                                      
                                      <li class="left" style="width:100%;margin-top:5px;">
                                 <p>Examination as a Regular/Irregular student under the Board of secondery and Higher Secondery Education,Dhaka/National University,Gazipur held in<span style="color:rgba(51,51,51,.5);">.........</span>He/she obtained<span style="color:rgba(51,51,51,.5);">.......................</span>.G.P.A/Division/Class / Course.</p>
									  </li>
                                      
                                      
                                      <li class="left" style="width:100%; margin-top:40px;">
                                      To the best of my knowldge,he/she possesses a good moral character. We are further glad to acknowledge that he/she did not take part in any activities subversive of the state or the college discipline during the period of his/her studies in this institution.
									  </li>
                                      
                                      <li class="left" style="width:100%; margin-top:40px;">
                                      I wish him/her every succcess in life.
									  </li>

                                      <li class="left center" style="width:30%; border-top:rgba(51,51,51,.5) dotted 2px; margin-top:40px;">
                                      Head Assistant/Office Assistant
									  </li>
                                      
                                      <li class="right center" style="width:30%; border-top:rgba(51,51,51,.5) dotted 2px; margin-top:40px;">
                                      Principal <br />
                                  <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name");?>
									  </li>
                                                                         
                                      
                                    </ul>    
                                    <?php endforeach; ?>
                                     </div>
                                     
                                     
                                     <div style="width:98%" class="left height-100 margin-top-20">
                                      
                                     </div>
                                     
                                     <div class="clear"></div>                      
                               </div>
                               <!--------------form end---------------->
                               <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                                <button type="button" onClick="printDiv('printableArea')" class=" height-35 div_btn" onclick="CreateResult(2)">PRINT</button>
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