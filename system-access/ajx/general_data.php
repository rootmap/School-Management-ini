<?php
if($status==2){
				
		     ?>
            
            
            <div class="result_sheet">
     
                   <div class="left result_sheet_1">
                   <?php 
						$array=array("admition"=>$admission);
                         $data=$obj->SelectAllByID("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                          
                             <div class="result_sheet_1_img left">
                             <?php 
						   $array=array("id"=>$school);
                           $data=$obj->SelectAllByID($table1,$array);
						     if(!empty($data))
                             foreach($data as $rrow):
					
					?>
                            
                              <img src="" />
                              <?php endforeach; ?>
                             </div>
                            
                             <div class="result_sheet_name left">
                              <div class="result_sheet_name_1 shadow_inner">
                               <?php echo $obj->SelectAllByVal("ams_singup","id",$ting->school_id,"acount_name"); ?>
                              </div>
                              <div class="result_sheet_name_2 shadow_inner">Examination-<?php echo $obj->SelectAllByVal("ams_session","id",$ting->session_id,"name"); ?> </div>
                               <div class="result_sheet_name_3 shadow_inner">Progress Report Card</div>
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
                                    <td>Name of Examinee   :</td>
                                    <td><?php echo $ting->name;?></td>
                                    <td>Roll Number   :</td>
                                    <td><?php echo $ting->roll;?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>Father’s Name :</td>
                                    <td><?php echo $ting->father_name;?></td>
                                    <td>Section :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mother’s Name :</td>
                                    <td><?php echo $ting->mother_name;?></td>
                                    <td>Group Name :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name");?></td>
                                  </tr>
                                   
                                </table>
                              </div>
                             <?php } ?>
                          </div>
                          
                          <div class="result_sheet_2 left">
                           <table cellspacing="0">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  
                                  <tr>
                                    <td>80 of avobe</td>
                                    <td class="center">A+</td>
                                    <td class="center">4.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>75-below 80</td>
                                    <td class="center">A</td>
                                    <td class="center">3.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>70-below 75</td>
                                    <td class="center">A-</td>
                                    <td class="center">3.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>65-below 70</td>
                                    <td class="center">B+</td>
                                    <td class="center">3.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>60-below 65</td>
                                    <td class="center">B</td>
                                    <td class="center">3.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>55-below 60</td>
                                    <td class="center">B-</td>
                                    <td class="center">2.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>50-below 55</td>
                                    <td class="center">C+</td>
                                    <td class="center">2.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>45-below 50</td>
                                    <td class="center">C</td>
                                    <td class="center">2.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>40-below 45</td>
                                    <td class="center">D</td>
                                    <td class="center">2.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>below 40</td>
                                    <td class="center">F</td>
                                    <td class="center">0.00</td>
                                    
                                  </tr>
                                </table>
                          </div>
                          
                          
                         
                           <!--section loop Start structure-->
                          <div class="result_sheet_next left">
                          <?php
							$data=$obj->SelectAllByID("ams_exam_category",array("school_id"=>$school));
							if(!empty($data))
							foreach($data as $ro):
							
							$chk=$obj->exists_multiple("ams_exam_result",array("school_id"=>$school,"exam_cateory_id"=>$ro->id,"admission_id"=>$admission));
							if($chk!=0)
							{
						  ?>
                           
                            <div class="result_sheet_next_table left" style="margin-left:2px;">
                            
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" ><?php echo $ro->name; ?></td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <td colspan="2"class="center">Marks Obtained</td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                    </tr>
                    <tr>         
                        <?php 
						$rr=array("school_id"=>$school);
						$dat=$obj->SelectAllByID("ams_report2",$rr);
						 if(!empty($dat))
						 foreach ( $dat as $rot):
						?>
                        <td class="center"><?php echo $obj->SelectAllByVal("ams_report","id",$rot->report_id,"name");?></td>
                        <?php endforeach; ?>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
						$array=array("admission_id"=>$admission,"exam_cateory_id"=>$ro->id);
                         $data=$obj->SelectAllByID_Multiple($table,$array);
						 $x=1;
						 $c=0;
						 $t=0;
						 if(!empty($data))
                         foreach($data as $ting)
						
						 {
					      $s=1;
					?>
                     <tr>
                      
                        <td class="center">
						 <?php echo $obj->SelectAllByVal("ams_subject","id",$ting->subject_id,"name");?>
                        </td>
                         <?php 
						$array=array("subject_id"=>$ting->subject_id);
                         $data=$obj->SelectAllByID("ams_marks_select",$array);
						 if(!empty($data))
                         foreach($data as $roo):
						
					?>
                        <td class="center"><?php echo $roo->full_marks; ?></td>
                       
                        <td class="center"><?php echo $roo->pass_marks; ?></td>
                         <?php endforeach; ?>
                        <td class="center">
						 <?php  $sum=$ting->marks; echo $sum;?>
                        </td>
                        <td class="center">
                          <?php  $sum_s=$ting->marks2; echo $sum_s;?>
                        </td>
                        <td class="center">
                         <?php $total=$sum+$sum_s; echo $total; 
						 $c+=$total;
						 ?>
                        </td>
                        <td class="center">
                        <?php echo $obj->checkgrade($total); $t+=$obj->checkGPA($total); ?>
                        </td>
                        <td class="center">
                         <?php echo $obj->checkGPA($total); ?>
                        </td>
                        
                            
                    </tr>
                    <?php $x++; }  ?>  
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                        <?php echo $c; ?> 
                        </td>
                        <td class="center">
                         <?php echo $obj->totalgpa($s,$t);?>
                        </td>
                        <td class="center">
                         <?php echo $obj->totalgpa($s,$t);?>
                        </td> 
                    </tr>
                    
                 </tbody>
            </table>
            <div class="result_sheet_next_table_next">
              <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             
              <div class="table_next_report_1 left shadow_inner">
                Student’s Personal Report
             </div>
             
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:center;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                      
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <?php 
						$array=array("admition"=>$admission);
                         $data=$obj->SelectAllByID("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">
<?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$ting->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$ting->admition));

echo $total ?> Days</td>
                        <td colspan="2" class="center"><?php $rrs=$total+$totall; $tt=($total/$rrs)*100; echo $tt; ?>%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center"><?php echo $rrs; ?> days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                   <?php } ?> 
                
            </table>
             </div>
            
            
            </div>
           
            
              
            </div>
           <?php
							}
		  endforeach;
		  ?>
           <div>
           
          </div>
          <!--section loop end structure-->
          
         
         </div>
         
         </div>
         
         <div class="clear"></div>
         </div>
    
<?php
	}
	else
	{
		?>
        <div class="result_sheet">
        
                   <div class="left result_sheet_1">
                   <?php 
						$array=array("admition"=>$admission);
                         $data=$obj->SelectAllByID("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                          
                             <div class="result_sheet_1_img left">
                             <?php 
						   $array=array("id"=>$school);
                           $data=$obj->SelectAllByID($table1,$array);
						     if(!empty($data))
                             foreach($data as $rrow):
					
					?>
                              <?php echo $rrow->id; ?>
                              <img src="images/admission_icon.png" />
                              <?php endforeach; ?>
                             </div>
                            
                             <div class="result_sheet_name left">
                              <div class="result_sheet_name_1 shadow_inner">
                              <?php echo $obj->SelectAllByVal("ams_singup","id",$ting->school_id,"acount_name"); ?>
                              </div>
                              <div class="result_sheet_name_2 shadow_inner">Examination-2014 </div>
                               <div class="result_sheet_name_3 shadow_inner">Progress Report Card</div>
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
                                    <td>Name of Examinee   :</td>
                                    <td><?php echo $ting->name;?></td>
                                    <td>Roll Number   :</td>
                                    <td><?php echo $ting->roll;?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>Father’s Name :</td>
                                    <td><?php echo $ting->father_name;?></td>
                                    <td>Section :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mother’s Name :</td>
                                    <td><?php echo $ting->mother_name;?></td>
                                    <td>Group Name :</td>
                                    <td><?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name");?></td>
                                  </tr>
                                   
                                </table>
                              </div>
                             <?php } ?>
                          </div>
                          
                          <div class="result_sheet_2 left">
                           <table cellspacing="0">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  
                                  <tr>
                                    <td>80 of avobe</td>
                                    <td class="center">A+</td>
                                    <td class="center">4.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>75-below 80</td>
                                    <td class="center">A</td>
                                    <td class="center">3.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>70-below 75</td>
                                    <td class="center">A-</td>
                                    <td class="center">3.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>65-below 70</td>
                                    <td class="center">B+</td>
                                    <td class="center">3.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>60-below 65</td>
                                    <td class="center">B</td>
                                    <td class="center">3.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>55-below 60</td>
                                    <td class="center">B-</td>
                                    <td class="center">2.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>50-below 55</td>
                                    <td class="center">C+</td>
                                    <td class="center">2.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>45-below 50</td>
                                    <td class="center">C</td>
                                    <td class="center">2.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>40-below 45</td>
                                    <td class="center">D</td>
                                    <td class="center">2.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>below 40</td>
                                    <td class="center">F</td>
                                    <td class="center">0.00</td>
                                    
                                  </tr>
                                </table>
                          </div>
                          
                          
                          
                           <!--section loop Start structure-->
                     <div class="result_sheet_next left">
                          
                        <div class="result_sheet_next_table left">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" >1st Semester</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <td colspan="2"class="center">Marks Obtained</td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                    </tr>
                    <tr>  
                        <?php 
						$rr=array("school_id"=>$school);
						$dat=$obj->SelectAllByID("ams_report2",$rr);
						 if(!empty($dat))
						 foreach ( $dat as $rot):
						?>
                        <td class="center"><?php echo $obj->SelectAllByVal("ams_report","id",$rot->report_id,"name");?></td>
                        <?php endforeach; ?>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
						$array=array("admission_id"=>$admission,"exam_cateory_id"=>$d);
                         $data=$obj->SelectAllByID_Multiple($table,$array);
						 $x=1;
						 $c=0;
						 $t=0;
						 $s=0;
						 if(!empty($data))
                         foreach($data as $ting)
						
						 {
							 $s+=1;
					
					?>
                     <tr>
                      
                        <td class="center">
						 <?php echo $obj->SelectAllByVal("ams_subject","id",$ting->subject_id,"name");?>
                        </td>
                        <?php 
						$array=array("subject_id"=>$ting->subject_id);
                         $data=$obj->SelectAllByID("ams_marks_select",$array);
						 if(!empty($data))
                         foreach($data as $roo):
						
					?>
                        <td class="center"><?php echo $roo->full_marks; ?></td>
                       
                        <td class="center"><?php echo $roo->pass_marks; ?></td>
                         <?php endforeach; ?>
                        <td class="center">
						 <?php  $sum=$ting->marks; echo $sum;?>
                        </td>
                        <td class="center">
                          <?php  $sum_s=$ting->marks2; echo $sum;?>
                        </td>
                        <td class="center">
                         <?php $total=$sum+$sum_s; echo $total; 
						 $c+=$total;
						 ?>
                        </td>
                        <td class="center">
                        <?php echo $obj->checkgrade($total); $t+=$obj->checkGPA($total); ?>
                        </td>
                        <td class="center">
                         <?php echo $obj->checkGPA($total); ?>
                        </td>
                        
                            
                    </tr>
                    <?php $x++; }  ?>  
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                        <?php echo $c; ?> 
                        </td>
                        <td class="center">
                         <?php echo $obj->totalgpa($s,$t);?>
                        </td>
                        <td class="center">
                         <?php echo $obj->totalgpa($s,$t);?>
                        </td> 
                    </tr>
                    
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             
             <div class="table_next_report_1 left shadow_inner">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:center;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                 
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <?php 
						$array=array("admition"=>$admission);
                         $data=$obj->SelectAllByID("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">
<?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$ting->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$ting->admition));

echo $total ?> Days</td>
                        <td colspan="2" class="center"><?php $rrs=$total+$totall; $tt=($total/$rrs)*100; echo $tt; ?>%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center"><?php echo $rrs; ?> days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                   <?php } ?> 
                    
                
            </table>
             </div>
            </div>
           <div>
          </div>
          <!--section loop end structure-->
         </div>
             
                       </div><div class="clear"></div> </div>
            
            
            
            
            
            
            
            
           <?php } ?>