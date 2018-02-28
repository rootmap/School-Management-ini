<?php if($status==1) {?>  
<?php
/*echo $d." - ";
echo $admission." - ";
echo $status;*/
$data=$obj->SelectAllByID_Multiple("ams_admission",array("admition"=>$admission,"school_id"=>$school));
$s=1;
if(!empty($data))
foreach($data as $ting)
{
?>
                  
                 
                     
                      
                     <div class="width-auto height-auto" style="padding:10px;">
                         <div class="width-label-620 height-auto center auto-position">
                           <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?><br />
                           Examination Held  <?php echo $ting->date; ?><br />
                           <?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name"); ?>
                         </div>
                          <?php
						  $data=$obj->SelectAllByID_Multiple("ams_exam_category",array("school_id"=>$school,"id"=>$d));
						  if(!empty($data))
						  foreach($data as $rwo):
						  ?>
                         <div class="width-auto height-auto center margin-top-10 auto-position" style="font-size:13px; overflow:auto;">            <?php echo $rwo->name; ?>
                           <table cellpadding="0" border="0" style="width:100%" cellspacing="1" class="display">
                            <!---------------table head start-------------->
                            
                             <tr class=" font_1 shadow_inner" style="background:#b40909; color:#FFF;">
                               <td><ul>
                                   <li style="border-bottom:#CC0 1px solid;padding:4px;">Roll No</li>
                                   <li style="border-bottom:#CC0 1px solid;padding:4px;">Reg. No</li>
                                   <li style="padding:4px;">Session</li>
                                 </ul>
                                 </td>
                                 
                               <td>Name</td>
                             
							 <?php 
                             $array=array("admission_id"=>$admission,"exam_cateory_id"=>$d);
                             $data=$obj->SelectAllByID_Multiple($table,$array);
                             if(!empty($data))
                             foreach($data as $row3):
                             ?>
                             
                               <td style="width:400px; height:100px;">
                             <h4 style="padding:4px;border-bottom:#CC0 1px solid;"> 
							   <?php echo $obj->SelectAllByVal("ams_subject","id",$row3->subject_id,"name"); ?>
                             </h4>
                             
                             <div style="width:330px; height:100px;">
                                     <ul class="left" style="width:270px;">
                                     <?php 
                                     $array=array("school_id"=>$school);
                                     $data=$obj->SelectAllByID("ams_report2",$array);
                                     if(!empty($data))
                                     foreach($data as $row1):
                                     ?>
                                     <li style="border:#CC0 1px solid; float:left; height:50px; padding:5px; width:120px;">
                                     <?php echo $obj->SelectAllByVal("ams_report","id",$row1->report_id,"name"); ?>
                                     </li> 
                                     <?php endforeach; ?>
                                          
                                     </ul>
                                 
                                     <ul class="right" style="width:60px;">
                                       <li style="border-bottom:#CC0 1px solid; height:50px; width:50px;">TOTAL</li>
                                       <li style="border-bottom:#CC0 1px solid; height:50px; width:50px;">L.G</li>
                                       <li>G.P</li>
                                     </ul>
                                 </div>

                               </td>
                              <?php endforeach; ?>
                                
                               <td >GPA</td>
                                <td>Remarks</td>
                             </tr>
                             
                             <!---------------table head end-------------->
                             <tr class="bg2">
                                <td>
                                     <ul>
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"roll"); ?></li>
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"admition");
									    ?></li>
                                       <li style="padding:4px;"><?php echo $obj->SelectAllByVal("ams_session","id",$ting->session_id,"name"); ?></li>
                                     </ul>
                                 </td>
                                 <td><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"name"); ?></td>
                             
                             
								 <?php 
                                   $array=array("admission_id"=>$admission,"exam_cateory_id"=>$d);
                                   $data=$obj->SelectAllByID_Multiple($table,$array);
                                   $t=0;
                                   if(!empty($data))
                                   foreach($data as $row1):
								   $s=1;
                                   ?>
                                   <td style="width:400px;">
                                   
                                        <ul class="left" style="width:230px;">
                                           <li style="border:#CC0 1px solid; padding:5px; float:left; width:100px;"> <?php  $t1=$row1->marks; echo $t1; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left; padding:5px; width:100px;"> <?php $t2=$row1->marks; echo $t2; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"> <?php $t3=$row1->marks; echo $t3; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"><?php $t4=$row1->marks; echo $t4; ?> </li>
                                         </ul>
                                     
                                         <ul class="left" style="width:100px;">
                                               <li style="border-bottom:#CC0 1px solid;"> <?php $t5=$t1+$t2+$t3+$t4; echo $t5; ?> </li>
                                               <li style="border-bottom:#CC0 1px solid;"><?php echo $obj->checkGPA($t5); ?></li>
                                               <li> <?php echo $obj->checkgrade($t5); ?></li>
                                         </ul>
    
                                   </td>
                                  <?php 
								  endforeach; 
								  ?>
                                
                               <td ><?php echo $obj->totalgpa($s,$t);?></td>
                                <td><?php echo $obj->totalgpa($s,$t);?></td>
                             </tr>
                           </table>
                         </div>
                          <?php  
						  endforeach; 
						  ?> 
                         <div class="clear"></div>
                    </div>
<?php 
$s++;
}
?>
<!-----------------------------------------tabulation end----------------------------------------->    
          
<?php 
}
else
{
?>

         <?php
/*echo $d." - ";
echo $admission." - ";
echo $status;*/
$data=$obj->SelectAllByID_Multiple("ams_admission",array("admition"=>$admission,"school_id"=>$school));
$s=1;
if(!empty($data))
foreach($data as $ting)
{
?>
                  
                 
                     
                      
                     <div class="width-auto height-auto" style="padding:10px;">
                         <div class="width-label-620 height-auto center auto-position">
                           <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?><br />
                           Examination Held  <?php echo $ting->date; ?><br />
                           <?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name"); ?>
                         </div>
                         <?php
							$data=$obj->SelectAllByID("ams_exam_category",array("school_id"=>$school));
							if(!empty($data))
							foreach($data as $ro):
							
							$chk=$obj->exists_multiple("ams_exam_result",array("school_id"=>$school,"exam_cateory_id"=>$ro->id,"admission_id"=>$admission));
							if($chk!=0)
							{
						  ?>
                         <div class="width-auto height-auto center margin-top-10 auto-position" style="font-size:13px; overflow:auto;"><?php echo $ro->name; ?>
                           <table cellpadding="0" border="0" style="width:100%" cellspacing="1" class="display">
                            <!---------------table head start-------------->
                            
                             <tr class=" font_1 shadow_inner" style="background:#b40909; color:#FFF;">
                               <td><ul>
                                   <li style="border-bottom:#CC0 1px solid;padding:4px;">Roll No</li>
                                   <li style="border-bottom:#CC0 1px solid;padding:4px;">Reg. No</li>
                                   <li style="padding:4px;">Session</li>
                                 </ul>
                                 </td>
                                 
                               <td>Name</td>
                             
							<?php 
						$array=array("admission_id"=>$admission,"exam_cateory_id"=>$ro->id);
                         $data=$obj->SelectAllByID_Multiple($table,$array);
						 if(!empty($data))
                         foreach($data as $row3):
						
						
					?>
                             
                               <td style="width:400px; height:100px;">
                             <h4 style="padding:4px;border-bottom:#CC0 1px solid;"> 
							   <?php echo $obj->SelectAllByVal("ams_subject","id",$row3->subject_id,"name"); ?>
                             </h4>
                             
                             <div style="width:330px; height:100px;">
                                     <ul class="left" style="width:270px;">
                                     <?php 
                                     $array=array("school_id"=>$school);
                                     $data=$obj->SelectAllByID("ams_report2",$array);
                                     if(!empty($data))
                                     foreach($data as $row1):
                                     ?>
                                     <li style="border:#CC0 1px solid; float:left; height:50px; padding:5px; width:120px;">
                                     <?php echo $obj->SelectAllByVal("ams_report","id",$row1->report_id,"name"); ?>
                                     </li> 
                                     <?php endforeach; ?>
                                          
                                     </ul>
                                 
                                     <ul class="right" style="width:60px;">
                                       <li style="border-bottom:#CC0 1px solid; height:50px; width:50px;">TOTAL</li>
                                       <li style="border-bottom:#CC0 1px solid; height:50px; width:50px;">L.G</li>
                                       <li>G.P</li>
                                     </ul>
                                 </div>

                               </td>
                              <?php endforeach; ?>
                                
                               <td >GPA</td>
                                <td>Remarks</td>
                             </tr>
                             
                             <!---------------table head end-------------->
                             <tr class="bg2">
                                <td>
                                     <ul>
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"roll"); ?></li>
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"admition");
									    ?></li>
                                       <li style="padding:4px;"><?php echo $obj->SelectAllByVal("ams_session","id",$ting->session_id,"name"); ?></li>
                                     </ul>
                                 </td>
                                 <td><?php echo $obj->SelectAllByVal("ams_admission","admition",$admission,"name"); ?></td>
                             
                             
								 <?php 
                                   $array=array("admission_id"=>$admission,"exam_cateory_id"=>$ro->id);
                                   $data=$obj->SelectAllByID_Multiple($table,$array);
                                    $t=0;
									$c=0;
                                   if(!empty($data))
                                   foreach($data as $row1):
								   $s=1;
								   
                                   ?>
                                   <td style="width:400px;">
                                   
                                        <ul class="left" style="width:230px;">
                                           <li style="border:#CC0 1px solid; padding:5px; float:left; width:100px;"> <?php  $t1=$row1->marks; echo $t1; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left; padding:5px; width:100px;"> <?php $t2=$row1->marks; echo $t2; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"> <?php $t3=$row1->marks; echo $t3; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"><?php $t4=$row1->marks; echo $t4; ?> </li>
                                         </ul>
                                     
                                         <ul class="left" style="width:100px;">
                                               <li style="border-bottom:#CC0 1px solid;"> <?php $t5=$t1+$t2+$t3+$t4; echo $t5; ?> </li>
                                               <li style="border-bottom:#CC0 1px solid;"><?php $rr=$c+=$t5; echo $obj->checkGPA($t5); ?></li>
                                               <li><?php echo $obj->checkgrade($t5); ?></li>
                                         </ul>
    
                                   </td>
                                  <?php 
								  endforeach; 
								  ?>
                                
                               <td ><?php $rr=$c+=$t5; echo $obj->checkGPA($rr); ?></td>
                                <td><?php echo $obj->totalgpa($s,$rr);?></td>
                             </tr>
                           </table>
                         </div>
                          <?php   }
						  endforeach; 
						  ?> 
                         <div class="clear"></div>
                    </div>
<?php 
$s++;
}
?>

	
<?php } ?>
								
							