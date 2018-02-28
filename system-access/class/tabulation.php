  
                     <div class="width-auto height-auto" style="padding:10px;">
                        
                          <?php
						  $data=$obj->SelectAllByID_Multiple("ams_exam_category",array("school_id"=>$school,"id"=>$exam));
						  if(!empty($data))
						  foreach($data as $rwo):
						  ?>
                         <div class="width-auto height-auto center margin-top-10 auto-position" style="font-size:13px; overflow:auto;">            
                         
                         <?php  
					   $data=$obj->SelectAllByID_Multiple("ams_admission",array("group_id"=>$id,"school_id"=>$school));
						$s=1;
						if(!empty($data))
						foreach($data as $ting)
						{
						?>
                  
                 
                     
                      
                           <table cellpadding="0" border="0" style="width:100%;margin-top:10px;" cellspacing="1" class="display">
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
                             $array=array("group_id"=>$id,"exam_cateory_id"=>$exam,"admission_id"=>$ting->admition);
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
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $ting->roll; ?></li>
                                       <li style="border-bottom:#CC0 1px solid;padding:4px;"><?php echo $ting->admition;
									    ?></li>
                                       <li style="padding:4px;"><?php echo $obj->SelectAllByVal("ams_session","id",$ting->session_id,"name"); ?></li>
                                     </ul>
                                 </td>
                                 <td><?php echo $ting->name; ?></td>
                             
                             
								 <?php 
                                   $array=array("admission_id"=>$ting->admition,"exam_cateory_id"=>$exam,"school_id"=>$school);
                                   $data=$obj->SelectAllByID_Multiple($table,$array);
                                   $t=0;
								   $te=0;
								   $tee=0;
                                   if(!empty($data))
                                   foreach($data as $row1):
								   $s=1;
                                   ?>
                                   <td style="width:400px;">
                                   
                                        <ul class="left" style="width:230px;">
                                           <li style="border:#CC0 1px solid; padding:5px; float:left; width:100px;"> <?php  $t1=$row1->marks; echo $t1; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left; padding:5px; width:100px;"> <?php $t2=$row1->marks2; echo $t2; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"> <?php $t3=$row1->marks3; echo $t3; ?> </li>
                                           <li style="border:#CC0 1px solid; float:left;padding:5px; width:100px;"><?php $t4=$row1->marks4; echo $t4; ?> </li>
                                         </ul>
                                     
                                         <ul class="left" style="width:100px;">
                                               <li style="border-bottom:#CC0 1px solid;"><?php $t5=$t1+$t2+$t3+$t4; echo $t5; ?> </li>
                                               <li style="border-bottom:#CC0 1px solid;">
                                                 <?php  $ttt=$obj->SelectAllByVal("ams_grading_system_dateils","school_id",$school,"category_id");
												 
												 $point=$obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$t5,"category_id",$ttt,"school_id",$school,"point");
						    echo $point;
							?>
                                               </li>
                                               <li> <?php  echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$t5,"category_id",$ttt,"school_id",$school,"letter");
					$te+=$point; $tee+=$t5;	?></li>
                                         </ul>
    
                                   </td>
                                  <?php 
								  endforeach; 
								  ?>
                                <?php $tabb=$obj->exists_multiple("ams_exam_subject",array("school_id"=>$school,"group_id"=>$id,"exam_id"=>$exam));
							if($tabb!=0){ $col=$tabb; }else{ $col="0"; }
							 ?>
                               <td ><?php $vab=$te/$tabb; $number=number_format ($vab,2); echo $number; ?></td>
                                <td><?php $vaab=$tee/$tabb; $numbe=number_format ($vaab);
                                  echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$numbe,"category_id",$ttt,"school_id",$school,"letter");
					?> 
                                </td>
                             </tr>
                           </table>
                           <?php $s++; } ?>
                         </div>
                          <?php  
						  endforeach; 
						  ?> 
                         <div class="clear"></div>
                         </div>

                           </div>