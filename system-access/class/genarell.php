<?php 
		 $array=array("group_id"=>$id,"school_id"=>$showstudent);
		 $data=$obj->SelectAllByID_Multiple($table1,$array);
		 if(!empty($data))
		 foreach($data as $row3):
		 ?>
<table width="100%" style="font-size:14px; margin-bottom:20px;" cellpadding="0" cellspacing="1" border="0" class="center" id="">
<tr class="" style="background:rgba(153,0,0,1); color:rgba(255,255,255,1);">
	
		<td style="width:200px; padding:10px;">Student's Name</td>
		<?php $tab=$obj->exists_multiple($table,array("group_id"=>$id,"exam_cateory_id"=>$exam,"admission_id"=>$row3->admition));
		if($tab!=0){ $col=$tab; }else{ $col="0"; }
		 ?>
		 
		 
		<td style="padding:10px;" colspan="<?php echo $tab; ?>">Subject Name </td>
		<td style="padding:10px;"><?php echo $obj->SelectAllByVal("ams_exam_category","id",$exam,"name"); ?> Exam</td>
		
</tr>

<tr class="" style="font-weight:300;color:rgba(0,0,0,1); background:rgba(255,153,153,1); ">
	
		<td><?php echo $row3->name; ?></td>
		 <?php 
		 $array=array("group_id"=>$id,"exam_cateory_id"=>$exam,"admission_id"=>$row3->admition);
		 $data=$obj->SelectAllByID_Multiple($table,$array);
		 if(!empty($data))
		 foreach($data as $row7):
		 ?>
		<td>
		
		 
		   <?php echo $obj->SelectAllByVal("ams_subject","id",$row7->subject_id,"name"); ?>
		 
		
		</td>
		<?php endforeach; ?>
		
	   
		<td colspan="2">Class/Course</td>
	
</tr>


	<tr class="" style="font-weight:300; color:rgba(0,0,0,1);">
			<td class="center" >
			  <ul>
				<li class="left" style="width:46%;background:rgba(153,255,255,.5); text-align:left;padding-left:5px;">Class</li>
				<li class="left" style="width:49%; background:rgba(153,153,153,.5);">
				  <?php echo $obj->SelectAllByVal("ams_class","id",$id,"name"); ?>
				</li>
				<li class="left" style="width:46%; background:rgba(153,255,255,.5); text-align:left;padding-left:5px;">Roll</li>
				<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php echo $row3->roll; ?></li>
				<li class="left" style="width:46%;background:rgba(153,255,255,.5); text-align:left;padding-left:5px;">Section</li>
				<li class="left" style="width:49%;background:rgba(153,153,153,.5);">
				  <?php echo $obj->SelectAllByVal("ams_section","id",$row3->section_id,"name"); ?>
				</li>
				<li class="left" style="width:46%;background:rgba(153,255,255,.5); text-align:left;padding-left:5px;">Shift</li>
				<li class="left" style="width:49%;background:rgba(153,153,153,.5);">
				  <?php echo $obj->SelectAllByVal("ams_shift","id",$row3->shift_id,"name"); ?>
				</li>
				<li class="left" style="width:46%;background:rgba(153,255,255,.5); text-align:left; padding-left:5px;">Group</li>
				<li class="left" style="width:49%;background:rgba(153,153,153,.5);">
				  <?php echo $obj->SelectAllByVal("ams_student_group","id",$id,"name"); ?>
				</li>
			  </ul>
			</td>
			
			
			
		<?php 
		 $array=array("group_id"=>$id,"exam_cateory_id"=>$exam,"admission_id"=>$row3->admition);
		 $data=$obj->SelectAllByID_Multiple($table,$array);
		 $c=0;
		  $oi=0;
		  $gttt=0;
		 if(!empty($data))
		 foreach($data as $row4):
		 ?>
		<td>
		  <ul>
		   <?php 
				 $array=array("school_id"=>$school);
				 $data=$obj->SelectAllByID("ams_report2",$array);
				 if(!empty($data))
				 foreach($data as $row1):
				 ?>
				 <li class="left" style="width:49%;background:rgba(153,255,255,.5);">
				  <?php echo $obj->SelectAllByVal("ams_report","id",$row1->report_id,"name"); ?>
				 </li> 
				 
			
			<?php endforeach; ?>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $s=$row4->marks; echo $s; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $e=$row4->marks2; echo $e; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $r=$row4->marks3; echo $r; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $t=$row4->marks4; echo $t; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $y=$row4->marks5; echo $y; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $u=$row4->marks6; echo $u; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $i=$row4->marks7; echo $i; ?></li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);"><?php $o=$row4->marks7; echo $o; ?></li>
			<li class="left" style="width:49%;background:rgba(204,153,153,1);">Total</li>
			<li class="left" style="width:49%;background:rgba(204,153,153,1);">
			  <?php $total=$s+$e+$r+$t+$y+$u+$i+$o; echo $total; $c+=$total;  ?>
			 </li>
			<li class="left" style="width:49%;background:rgba(153,255,255,.5);">G.P.A</li>
			<li class="left" style="width:49%;background:rgba(153,255,255,.5);">
			  <?php  $ttt=$obj->SelectAllByVal("ams_grading_system_dateils","school_id",$school,"category_id");
			  $gttt+=$ttt;
		echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$total,"category_id",$ttt,"school_id",$school,"point");
		?>
			</li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);">L.G</li>
			<li class="left" style="width:49%;background:rgba(153,153,153,.5);">
			   <?php  echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$total,"category_id",$ttt,"school_id",$school,"letter");
		?>
			</li>
		  </ul>
		</td>
		<?php endforeach; ?>
		
			<td class="center" >
			  <ul>
				<li class="left" style="width:48%;background:rgba(153,153,153,.5); text-align:left; padding-left:5px;">Position</li>
				<li class="left" style="width:50%;background:rgba(153,255,255,.5);">
				  .
				</li>
				<li class="left" style="width:48%;background:rgba(153,153,153,.5); text-align:left; padding-left:5px;">Remarks</li>
				<li class="left" style="width:50%;background:rgba(153,255,255,.5);">.....</li>
				<li class="left" style="width:48%;background:rgba(204,153,153,1); text-align:left; padding-left:5px;">Total Marks</li>
				<li class="left" style="width:50%;background:rgba(204,153,153,1);"><?php echo $c; ?></li>
				<li class="left" style="width:48%;background:rgba(153,153,153,.5); text-align:left; padding-left:5px;">Grade Point</li>
				<?php $tabb=$obj->exists_multiple("ams_exam_subject",array("school_id"=>$school,"group_id"=>$id,"exam_id"=>$exam));
		if($tabb!=0){ $col=$tabb; }else{ $col="0"; }
		 ?>
				<li class="left" style="width:50%;background:rgba(153,255,255,.5);">
				<?php $vag=$c/$tabb; $number= number_format($vag); echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number,"category_id",$gttt,"school_id",$school,"point"); ?>
				</li>
				<li class="left" style="width:48%;background:rgba(153,153,153,.5); text-align:left; padding-left:5px;">Letter Grede</li>
				<li class="left" style="width:50%;background:rgba(153,255,255,.5);"><?php  echo $obj->GetCstomRes("ams_grading_system_dateils","range_1","range_2",$number,"category_id",$gttt,"school_id",$school,"letter");
		?></li>
			  </ul>
			</td>
			</tr>
		   

</table>
<?php endforeach; ?>                     
