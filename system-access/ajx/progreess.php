<?php
include("../class/auth.php");
$table="ams_exam_result";
$table1="ams_singup";
extract($_GET);
if($d!='')
{
	if($status==2){
				
		     ?>
            
            
            <div class="result_sheet">
     
                   <div class="left result_sheet_1">
                   <?php 
						$array=array("admition"=>$admission,"school_id"=>$school);
                         $data=$obj->SelectAllByID_Multiple("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                          
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
                              <div class="result_sheet_name_1 shadow_inner" style="color:#09f; text-align:center; line-height:10px;">
							   <p style="text-decoration:underline; padding-top:10px; font-size:20px;"> 
							    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?>
                               </p>
                                <br />
                                <p style="font-size:12px; color:#006;">
                                  <?php echo $trow->address; ?>
                                </p>
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
                                  <td style="width:10%;"></td>
                                    <td style="width:18%;">Name of Examinee<span class="right">:</span></td>
                                    <td><?php echo $ting->name;?></td>
                                    <td style="width:15%;">Class / Course <span class="right">:</span></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_class","id",$ting->class_id,"name");?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                   <td></td>
                                    <td>Father’s Name <span class="right">:</span></td>
                                    <td><?php echo $ting->father_name;?></td>
                                    <td style="width:15%;">Roll Number <span class="right">:</span></td>
                                    <td><?php echo $ting->roll;?></td>
                                  </tr>
                                  
                                  <tr>
                                   <td></td>
                                    <td>Mother’s Name <span class="right">:</span></td>
                                    <td><?php echo $ting->mother_name;?></td>
                                    
                                    <td>Section <span class="right">:</span></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                   <td></td>
                                    
                                    <td></td>
                                    <td></td>
                                    <td>Group Name <span class="right">:</span></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_student_group","id",$ting->group_id,"name");?></td>
                                    
                                  </tr>
                                   
                                </table>
                              </div>
                             <?php } ?>
                          </div>
                          
                          <div class="result_sheet_2 left" style="width:22%;">
                           <table cellspacing="0" style="font-size:11px;">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                 <?php
								  $ttt=$obj->SelectAllByVal("ams_marks_shite_chos","school_id",$school,"grading_system_id");
								 $aaaa=array("category_id"=>$ttt,"school_id"=>$school);
                                 $data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$aaaa);
					             if(!empty($data))
					             foreach($data as $rof):
				                 ?>                               
                                  <tr>
                                    <td><?php echo $rof->range_1; ?> - below - <?php echo $rof->range_2; ?></td>
                                    <td class="center"><?php echo $rof->letter; ?></td>
                                    <td class="center"><?php echo $rof->point; ?></td>
                                    
                                  </tr>
                                  <?php endforeach; ?>
                                </table>
                          </div>
                          
                          
                         
                           <!--section loop Start structure-->
                          <div class="result_sheet_next left">
                          <?php
							$data=$obj->SelectAllByID("ams_exam_category",array("school_id"=>$school));
							if(!empty($data))
							foreach($data as $exan):
							
							$chk=$obj->exists_multiple("ams_exam_result",array("school_id"=>$school,"exam_cateory_id"=>$exan->id,"admission_id"=>$admission));
							if($chk!=0)
							{
						  ?>
                           
                            <div class="result_sheet_next_table left" style="margin-left:2px; border:1px #666666 solid; overflow:auto;">
                            
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" ><?php echo $exan->name; ?></td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <?php $tab=$obj->exists_multiple("ams_report2",array("school_id"=>$school));
							if($tab!=0){ $col=$tab; }else{ $col="0"; }
							 ?>
                        <td colspan="<?php echo $tab; ?>"class="center">Marks Obtained </td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        
                    </tr>
                    <tr>         
                        <?php 
						$rr=array("school_id"=>$school);
						$dat=$obj->SelectAllByID("ams_report2",$rr);
						 if(!empty($dat))
						 foreach ($dat as $rot):
						?>
                        <td class="center"><?php echo $obj->SelectAllByVal("ams_report","id",$rot->report_id,"name");?></td>
                        <?php endforeach; ?>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
						$array_subd=array("admission_id"=>$admission,"exam_cateory_id"=>$exan->id,"school_id"=>$school);
                         $datasubd=$obj->SelectAllByID_Multiple($table,$array_subd);
						 $x=1;
						 $c=0;
						 $t=0;
						 $totalmarks=0;
						 $totalpoint=0;
						 $new_point=0;
						 if(!empty($datasubd))
                         foreach($datasubd as $ting)
						
						 {
					      $s=1;
					?>
                     <tr>
                      
                        <td class="center">
						 <?php echo $obj->SelectAllByVal("ams_subject","id",$ting->subject_id,"name");?>
                        </td>
                         <?php 
							 $array_dmarks=array("subject_id"=>$ting->subject_id,"school_id"=>$school);
							 $data_dmarks=$obj->SelectAllByID_Multiple("ams_marks_select",$array_dmarks);
							 if(!empty($data_dmarks))
							 {
								 foreach($data_dmarks as $roo):
									 ?>
									<td class="center"><?php echo $roo->full_marks; ?></td>
								   
									<td class="center"><?php echo $roo->pass_marks; ?></td>
									 <?php 
								  endforeach;
							 }
							 else
							 {
								?>
                                <td>Examination subject not found on system</td>
                                <?php 
							 }
						  ?>
                        <td class="center">
						 <?php  $sum=$ting->marks; 
						 
						 echo $sum;
						 
						 ?>
                        </td>
                        <td class="center">
                         <?php  $sum_s1=$ting->marks3;?>
                        <?php  $sum_s2=$ting->marks4;?>
                             <?php  $sum_s3=$ting->marks5;?>
                         <?php  $sum_s4=$ting->marks6;?>
                        <?php  $sum_s5=$ting->marks7; ?>
                          <?php  $sum_s=$ting->marks2; 
						  
						  echo $sum_s;?>
                        </td>
                        <td class="center">
                         <?php $totall1=$sum+$sum_s+$sum_s1+$sum_s2+$sum_s3+$sum_s4+$sum_s5; 
						 echo $totall1; 
						 $c+=$totall1;  $totalmarks+=$totall1; 
						 ?>
                        </td>
                        <td class="center">
                        <?php
						$val = $totall1 ;
                        echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$val,"school_id",$school,"category_id",$ttt,"point");
						$poiant=$obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$val,"school_id",$school,"category_id",$ttt,"point");
						$totalpoint+=$poiant; 
						 $new_point+=$obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$val,"school_id",$school,"category_id",$ttt,"point");
						?>
                        </td>
                        <td class="center">
                           <?php 
						    echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$val,"school_id",$school,"category_id",$ttt,"letter");
							?>
                        </td>   
                    </tr>
                    <?php $x++; }  ?>  
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        <?php $tabb=$obj->exists_multiple("ams_exam_subject",array("school_id"=>$school,"exam_id"=>$exan->id));
							if($tabb!=0){ $col=$tabb; }else{ $col="0"; }
							 ?>
                        <td class="center"><?php   $pointal2=$tabb/$c; echo $c; $newGradepoint=$new_point/$col; ?></td>
                        <td class="center">
						<?php 
						echo number_format($newGradepoint,2);
						//$pointall=$tabb/$totalpoint;    $nombre_format_francais = number_format($pointall,2);  echo $newGradepoint; //echo $nombre_format_francais; //$newGradepoint;  ?>
                        </td>
                         <td class="center">
                         <?php $nombre_format = number_format($pointal2);   
						    echo $obj->GetCstomRes("ams_grading_system_dateils","point","point_2",$newGradepoint,"school_id",$school,"category_id",$ttt,"letter");
							?>
						
                        </td> 
                    </tr>
                    
                 </tbody>
            </table>
            <div class="result_sheet_next_table_next">
              <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left"><?php //$pointall=$tabb/$totalpoint;   
				 echo $nombre_format_francais = number_format($newGradepoint,2); ?></li>
                 <li class="left">Grade =</li>
                 <li class="left"><?php  $pointal2; $nombre_format = number_format($pointal2);   
						    echo $obj->GetCstomRes("ams_grading_system_dateils","point","point_2",$newGradepoint,"school_id",$school,"category_id",$ttt,"letter");
							?></li>
               </ul>
             </div>
             
              <div class="table_next_report_1 left shadow_inner">
                Student’s Personal Report
             </div>
             
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:center;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th  class="center">Performance </th>
                        <th class="center" ><?php echo $exan->name; ?></th>                     
                     </tr>
                    
                  </thead>
                      <?php 
						$array=array("school_id"=>$school);
                         $data=$obj->SelectAllByID("ams_performance2",$array);
						   if(!empty($data))
                             foreach($data as $perf):
					
					?> 
                     <tr>
                      
                      <td><?php echo $obj->SelectAllByVal("ams_performance","id",$perf->performance_id,"name");?></td>
                        
                        <td  class="center"><?php  $pointal2; $nombre_format = number_format($pointal2);   
						    //echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nombre_format,"school_id",$school,"category_id",$ttt,"letter");
							?></td>
                       
                    </tr>
                    
                   <?php endforeach; ?>
                   
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td  class="center"><?php  $pointal2; $nombre_format = number_format($pointal2);   
						    //echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nombre_format,"school_id",$school,"category_id",$ttt,"letter");
							?></td>
                        
                       
                    </tr>
                    
                    <?php 
						$array=array("admition"=>$admission,"school_id"=>$school);
                         $data=$obj->SelectAllByID_Multiple("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td  class="center">
<?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$ting->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$ting->admition));

echo $total ?> Days <?php $rrs=$total+$totall; @$tt=($rrs/$total)*100; echo @$tt; ?>%</td>
                         </tr>
                     <tr> 
                      <td>
						 Working Days
                        </td>
                        <td  class="center"><?php echo $rrs; ?> days</td>
                    </tr>
                    
                   <?php } ?> 
                
            </table>
             </div>
            </div>
            </div>
           <?php } endforeach; ?>
           <div>
            
   <!----------------------------------------end total---------------------------------------->        
            <div class="result_sheet_next_table left" style="margin-left:2px; border:1px #666666 solid;">
                            
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td colspan="6" class="center" >All Semester Marks</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Eaxm name</td>
                        <td rowspan="2" class="center"> Total Marks</td>
                        <td rowspan="2" class="center">Average Marks</td>
                        <td rowspan="2" class="center"> Grade Point</td>
                        <td rowspan="2" class="center">Letter Grade</td>
                    </tr>
                  </thead>
                   <?php
				    $s_session_id=$obj->SelectAllByVal("ams_admission","admition",$admission,"session_id");
					$s_class_id=$obj->SelectAllByVal("ams_admission","admition",$admission,"class_id");
					$datac=$obj->SelectAllByID_Multiple("ams_exam_category",array("school_id"=>$school,"session_id"=>$s_session_id,"class_id"=>$s_class_id));
					$nom=1;
					$nom1=0;
					$nom2=0;
					$nom3=0;
					if(!empty($datac))
					foreach($datac as $rowe):
					$sqlcheckexam=$obj->exists_multiple("ams_exam_subject",array("exam_id"=>$rowe->id));
					if($sqlcheckexam!=0)
					{
					?>
                   <tbody>
                    <tr>
                      <td class="center"><?php echo $rowe->name; ?></td>
                     <?php 
						$array_dd=array("admission_id"=>$admission,"exam_cateory_id"=>$rowe->id,"school_id"=>$school);
                         $data_dd=$obj->SelectAllByID_Multiple($table,$array_dd);
						 $resulta=0;
						 $resultaa=1;
						 $resultaaa=0;
						 if(!empty($data_dd))
                         foreach($data_dd as $drem):
					?>
                    <?php $rosult1=$drem->marks; 
					  $rosult2=$drem->marks2; 
					  $rosult3=$drem->marks3; 
					  $rosult4=$drem->marks4; 
					  $rosult5=$drem->marks5; 
					  $rosult6=$drem->marks6; 
					  $rosult7=$drem->marks7; 
					  $rosult8=$drem->marks8; 
					  $resulttotal=$rosult1+$rosult2+$rosult3+$rosult4+$rosult5+$rosult6+$rosult7+$rosult8;
					  $resulta+=$resulttotal; ?>
                       <?php $resultaa++; endforeach; ?>
                       <td class="center">
					     <?php  echo $resulta; $nom1+=$resulta;  ?>
                       </td>
                       
                       <?php $tab2=$obj->exists_multiple("ams_exam_subject",array("school_id"=>$school,"exam_id"=>$rowe->id));
							if($tab2!=0){ $col=$tab2; }else{ $col="0"; }
							 ?>
                       <td class="center">
					     <?php  $avares=$resulta/$tab2; $number_formatt= number_format($avares); echo $number_formatt;  $nom2+=$number_formatt; ?>
                       </td>
                       
                       
                       
                       <td class="center">
					    <?php    
						    $pointmanr=$obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number_formatt,"school_id",$school,"category_id",$ttt,"point"); echo $pointmanr; $nom3+=$pointmanr;
							?>
                       </td>
                      
                       <td class="center">
					    <?php    
						    echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number_formatt,"school_id",$school,"category_id",$ttt,"letter");
							?>
                       </td>
                      
                      
                    </tr>  
                   </tbody>
                   <?php 
				   
				   $nom++;
					}
				    endforeach;
					 ?>
                   <tr class="center" style="background:rgba(153,0,0,1); color:rgba(255,255,255,1);">
                     <td>Total =</td>
                     <td><?php echo $nom1;?></td>
                     <?php
							$tab3=$obj->exists_multiple("ams_exam_category_set",array("school_id"=>$school,"exam_id"=>$rowe->id));
					  
							if($tab3!=0){ $col=$tab3; }else{ $col="0"; }
							 ?>
                     <td><?php $rakk=$nom2/$tab3; $nubmerformatt= number_format($rakk); echo $nubmerformatt; ?></td>
                     
                     <td><?php $rak=$nom3/$tab3;  $nubmerformat= number_format($rak,2); echo $nubmerformat; ?></td>
                    
                     <td><?php echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nubmerformatt,"school_id",$school,"category_id",$ttt,"letter");
							?><?php //echo $tab3; ?>
                     </td>
                    
                   </tr>
            </table>
            <div class="result_sheet_next_table_next">
              <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left"><?php echo $nubmerformat; ?></li>
                 <li class="left">Grade =</li>
                 <li class="left"><?php 
					  echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nubmerformatt,"school_id",$school,"category_id",$ttt,"letter");
							?></li>
               </ul>
             </div>
             
              <div class="table_next_report_1 left shadow_inner">
                Student’s Personal Report
             </div>
             
             
             <div class="table_next_report_1_table left">
               <table  style="padding:0px; text-align:center;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th colspan="2" class="center">Performance Grading</th>
                    </tr>
                    
                  </thead>
                      <?php 
						$array=array("school_id"=>$school);
                         $data=$obj->SelectAllByID("ams_performance2",$array);
						   if(!empty($data))
                             foreach($data as $perf):
					
					?> 
                     <tr>
                      
                      <td><?php echo $obj->SelectAllByVal("ams_performance","id",$perf->performance_id,"name");?></td>
                        
                        <td  class="center"><?php 
					 // echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nubmerformatt,"category_id",$ttt,"letter");
							?></td>
                       
                    </tr>
                    
                   <?php endforeach; ?>
                   
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td class="center"><?php 
					 // echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$nubmerformatt,"category_id",$ttt,"letter");
							?></td>
                        
                       
                    </tr>
                    
                    <?php 
						$array=array("admition"=>$admission,"school_id"=>$school);
                         $data=$obj->SelectAllByID_Multiple("ams_admission",$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td  class="center">
<?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$ting->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$ting->admition));

echo $total ?> Days <?php $rrs=$total+$totall; @$tt=($total/$rrs)*100; echo @$tt; ?>%</td>
 </tr>
                     <tr> 
                      <td>
						 Working Days
                        </td>
                        <td  class="center"><?php echo $rrs; ?> days</td>
                    </tr>
                    
                   <?php } ?> 
                
            </table>
             </div>
            
            
            </div>
            
<!----------------------------------------end total---------------------------------------->
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
					$array=array("admition"=>$admission,"school_id"=>$school);
					$data=$obj->SelectAllByID_Multiple("ams_admission",$array);
					if(!empty($data))
					foreach($data as $ting){
					?>
                          
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
                             <div class="result_sheet_name_1 shadow_inner" style="color:#09f; text-align:center; line-height:10px;">
							   <p style="text-decoration:underline; padding-top:10px; font-size:20px;"> 
							    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?>
                               </p>
                                <br />
                                <p style="font-size:12px; color:#006;">
                                  <?php echo $trow->address; ?>
                                </p>
                              </div>
                              <div class="result_sheet_name_2 shadow_inner"><?php echo $obj->SelectAllByVal("ams_exam_category","id",$d,"name"); ?> </div>
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
                                  <td style="width:10%;"></td>
                                    <td style="width:18%;">Name of Examinee<span class="right">:</span></td>
                                    <td><?php echo $ting->name;?></td>
                                    <td style="width:15%;">Roll Number <span class="right">:</span></td>
                                    <td><?php echo $ting->roll;?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                   <td></td>
                                    <td>Father’s Name <span class="right">:</span></td>
                                    <td><?php echo $ting->father_name;?></td>
                                    <td>Section <span class="right">:</span></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                   <td></td>
                                    <td>Mother’s Name <span class="right">:</span></td>
                                    <td><?php echo $ting->mother_name;?></td>
                                    <td>Group Name <span class="right">:</span></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_student_group","id",$ting->group_id,"name");?></td>
                                  </tr>
                                   
                                </table>
                              </div>
                             <?php } ?>
                          </div>
                          
                          <div class="result_sheet_2 left" style="width:22%;">
                           <table cellspacing="0">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  
                                 <?php
								  $ttt_mark_id=$obj->SelectAllByVal("ams_marks_shite_chos","school_id",$school,"grading_system_id");
								 $aaaa_markchos=array("category_id"=>$ttt_mark_id,"school_id"=>$school);
                                 $data_mark_data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$aaaa_markchos);
					             if(!empty($data_mark_data))
					             foreach($data_mark_data as $ro):
				                 ?>                                
                                  <tr>
                                    <td><?php echo $ro->range_1; ?> below <?php echo $ro->range_2; ?></td>
                                    <td class="center"><?php echo $ro->letter; ?></td>
                                    <td class="center"><?php echo $ro->point; ?></td>
                                    
                                  </tr>
                                  <?php endforeach; ?>
                                </table>
                          </div>
                          
                          
                          
                           <!--section loop Start structure-->
                     <div class="result_sheet_next left" style="border-top:1px #666666 solid;">
                          
                        <div class="result_sheet_next_table left" style="overflow:auto;">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center"><?php echo $obj->SelectAllByVal2("ams_exam_category","school_id",$school,"id",$d,"name"); ?></td>                    
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <?php $tab=$obj->exists_multiple("ams_report2",array("school_id"=>$school));
							if($tab!=0){ $col=$tab; }else{ $col="0"; }
							 ?>
                        <td colspan="<?php echo $tab; ?>"class="center">Marks Obtained </td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
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
						$array_subject_list=array("admission_id"=>$admission,"exam_cateory_id"=>$d,"school_id"=>$school);
                         $data_subject_list=$obj->SelectAllByID_Multiple($table,$array_subject_list);
						 $x=1;
						 $c=0;
						 $t=0;
						 $s=0;
						 $totalpoint=0;
						 if(!empty($data_subject_list))
                         foreach($data_subject_list as $ting):
						 
							 $s+=1;
					?>
                     <tr>
                      
                        <td class="center">
						 <?php echo $ting->subject_id; ?>. <?php echo $obj->SelectAllByVal("ams_subject","id",$ting->subject_id,"name");?>
                        </td>
                        	<?php 
							$array_fixed_mark=array("subject_id"=>$ting->subject_id,"school_id"=>$school,"exam_id"=>$d);
                         	$data_fixed_mark=$obj->SelectAllByID_Multiple("ams_marks_select",$array_fixed_mark);
						 	if(!empty($data_fixed_mark))
							{
                         	foreach($data_fixed_mark as $roo):
							?>
                        	<td class="center"><?php echo $roo->full_marks; ?></td>
                        	<td class="center"><?php echo $roo->pass_marks; ?></td>
                         	<?php 
						 	endforeach;
							}
							else
							{
							?>
                            	<td><?php //echo $ting->subject_id; ?>Add Subject Name in Exam Configureation</td>
                            <?php	
							}
						 	?>
                        <td class="center">
						 <?php  $sum=$ting->marks; 
						 echo $sum; ?>
                        </td>
                        <td class="center">
                         <?php  
						 $sum_s1=$ting->marks3;
						 ?>
                        <?php  
						$sum_s2=$ting->marks4;
						?>
						 <?php  
                         $sum_s3=$ting->marks5;
                         ?>
                         <?php  
						 $sum_s4=$ting->marks6;
						 ?>
                        <?php  
						$sum_s5=$ting->marks7; 
						?>
                          <?php  
						  $sum_s=$ting->marks2; 
						  echo $sum_s;
						  ?>
                        </td>
                        <td class="center">
                         <?php $total=$sum+$sum_s+$sum_s1+$sum_s2+$sum_s3+$sum_s4+$sum_s5; 
						 echo $total; 
						 $c+=$total;
						 ?>
                        </td>
                       <td class="center">
                        <?php
						$val = $total ;
						echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$total,"category_id",$ttt_mark_id,"school_id",$school,"point");
						$poiant=$obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$total,"category_id",$ttt_mark_id,"school_id",$school,"point");
						$totalpoint+=$poiant; 
						?>
                        </td>
                        <td class="center">
                        <?php echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$total,"category_id",$ttt_mark_id,"school_id",$school,"letter"); ?>
                        </td>   
                    </tr>
                    <?php 
					$x++;
					endforeach; 
					?>  
                    
                    
                   <tr>
                    <?php $tab1=$obj->exists_multiple("ams_exam_subject",array("school_id"=>$school,"exam_id"=>$d)); 
					if($tab1!=0){ $col=$tab1; }else{ $col="0"; }
							 ?>
                      
                        <td class="center">
						   <?php echo $col; ?>
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                        <?php 
						$rr=$tab1/$c; 
						echo $c; ?> 
                        </td>
                        <td class="center">
                        <?php @$rww=$totalpoint/$tab1;  $number_format1 = number_format($rww,2); echo $number_format1;
						//@$rww=$totalpoint;  $number_format1 = number_format($rww,2); echo $number_format1;
						 ?>
                        </td>
                        <td class="center">
                        <?php  $number = number_format($rr);
							//echo $rr;
							echo $obj->GetCstomRes("ams_grading_system_dateils","point","point_2",$number_format1,"category_id",$ttt_mark_id,"school_id",$school,"letter");
							?>
                        </td> 
                    </tr>
                    
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left"><?php $rww=$totalpoint/$tab1;  $number_format1 = number_format($rww,2); echo $number_format1; ?></li>
                 <li class="left">Grade =</li>
                 <li class="left"> <?php  $number = number_format($rr);
						    echo $obj->GetCstomRes("ams_grading_system_dateils","point","point_2",$number_format1,"category_id",$ttt_mark_id,"school_id",$school,"letter");
							?></li>
               </ul>
             </div>
             
             <div class="table_next_report_1 left shadow_inner">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:center;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance :</th>
                        <th colspan="6" class="center" ><?php echo $obj->SelectAllByVal2("ams_exam_category","school_id",$school,"id",$d,"name"); ?></th>
                                                
                     </tr>
                    <!--<tr>
                        <th rowspan="2" colspan="4" class="center"><?php //echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number,"category_id",$ttt_mark_id,"school_id",$school,"letter"); ?></th>
                    </tr>-->
                    
                  </thead>
                 
                   <?php 
					$array=array("school_id"=>$school);
					$data=$obj->SelectAllByID("ams_performance2",$array);
					if(!empty($data))
					foreach($data as $perf):
					?> 
                     <tr>
                      <td><?php echo $obj->SelectAllByVal("ams_performance","id",$perf->performance_id,"name");?></td>
                      <td colspan="4" class="center"> <?php  $number = number_format($rr);
						    //echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number,"category_id",$ttt_mark_id,"school_id",$school,"letter");
							?></td>
                    </tr>
                   <?php endforeach; ?>
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center"> <?php  $number = number_format($rr);
						   // echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number,"category_id",$ttt_mark_id,"school_id",$school,"letter");
							?></td>
                        
                       
                    </tr>
                    
                    <?php 
						$array=array("admition"=>$admission,"school_id"=>$school);
                         $data=$obj->SelectAllByID_Multiple("ams_admission",$array);
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
                        <td colspan="2" class="center"><?php @$rrs=$total+$totall; @$tt=($total/$rrs)*100; echo $tt; ?>%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>Working Days</td>
                        <td colspan="2" class="center"><?php echo $rrs; ?> days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                   <?php } ?> 
                    
                
            </table>
             </div>
            <?php }  ?> 
            </div>
           <div>
          </div>
          <!--section loop end structure-->
         </div>
             
   </div><div class="clear"></div> </div>
           
            
            
            
            
            
            
            
<?php 
}
else
{
    ?>
		<option value="">Not Selected</option>
    <?php
}
?>
