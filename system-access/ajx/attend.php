<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
  <form action="" method="get" name="attend"> 
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                              <thead>
                                <tr>
                                <td >SL.no</td>
                                <td >Name</td>
                                <td >Roll</td>
                                <?php
								  $data=$obj->SelectAllByID("ams_attendance_reg_stng",array("group_id"=>$group));
								  $r=1;
								  if(!empty($data))
								  foreach($data as $row1):
						
							   ?>

                                <td ><?php echo $obj->SelectAllByVal("ams_weekly","id",$row1->weekly_id,"name");?>
                                  </br>
                                     <?php echo $row1->date1;?>
                                </td>
                                <?php endforeach; ?>
                                          
                          </tr>
                       </thead>
                    <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID("ams_admission",$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row2)

{        ?>

<tbody>
		

        <tr class="">
                <td class="shadow_inner center" style="background:#b40909; color:#FFF;">
				
				<?php echo $r;?>
                </td>
                <td class="center" style="background:#d4f7f2;">
				<?php echo $row2->name;?>
                </td>
                <td style="background:#d4f7f2;" class="center"><?php echo $row2->roll;?></td>
                <?php
				  $data=$obj->SelectAllByID("ams_attendance_reg_stng",array("group_id"=>$group));
				  $r=1;
				  if(!empty($data))
				  foreach($data as $row):
		
			   ?>
                <td class="center" style="background:#f6baa0;">
               
                
                <a name="ggg" href="attendance_reg.php?day_id=<?php echo $row->weekly_id;?>&amp;admission=<?php echo $row2->admition;?>&amp;class_id=<?php echo $row2->class_id;?>&amp;shift_id=<?php echo $row2->shift_id;?>&amp;section_id=<?php echo $row2->section_id;?>&amp;group_id=<?php echo $row2->group_id;?>&amp;status=1">
                
                <?php 
				$ex=$obj->exists_multiple("ams_student_attendance",array("admission"=>$row2->admition,"day_id"=>$row->weekly_id,"class_id"=>$row2->class_id,"group_id"=>$row2->group_id,"section_id"=>$row2->section_id,"shift_id"=>$row2->shift_id,"school_id"=>$school,"attendance"=>1));
				if($ex==0){
			   ?>P<?php }else{ ?><span style="color:#0C0;">P</span><?php } ?>
                </a>
                
               /
                
                <a name="ggg" href="attendance_reg.php?day_id=<?php echo $row->weekly_id;?>&amp;admission=<?php echo $row2->admition;?>&amp;class_id=<?php echo $row2->class_id;?>&amp;shift_id=<?php echo $row2->shift_id;?>&amp;section_id=<?php echo $row2->section_id;?>&amp;group_id=<?php echo $row2->group_id;?>&amp;status=2">
                
				<?php 
				$ex=$obj->exists_multiple("ams_student_attendance",array("admission"=>$row2->admition,"day_id"=>$row->weekly_id,"class_id"=>$row2->class_id,"group_id"=>$row2->group_id,"section_id"=>$row2->section_id,"shift_id"=>$row2->shift_id,"school_id"=>$school,"attendance"=>2));
				if($ex==0){
			   ?>A<?php }else{ ?><span style="color:#F00;">A</span><?php } ?>
                </a>
                </td>
                <?php endforeach; ?>
                                             
    </tbody>
    <?php $r++; } ?>
</table>

 </form>        
          
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
