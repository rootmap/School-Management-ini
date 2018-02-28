<?php
include("../class/auth.php");
$table="ams_next_class_promot";
extract($_GET);
if($k!='')
{
	
	?>
    
   <form action="" method="post" name="promot">
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                          <th rowspan="2">S/L</th>
                                          <th rowspan="2">Student's Name</th>
                                          <th colspan="2">Class</th>
                                          <th colspan="2">Roll</th>
                                          <th colspan="2">Section</th>
                                          <th colspan="2">Shift</th>
                                          <th colspan="2">Group</th>
                                        </tr>
                                        <tr>
                                          <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                        </tr>
                                        
                                    </thead>
     <?php
          $array=array("class_id"=>$class);
          $data=$obj->SelectAllByID($table,$array);
		  $x=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

   <tr class="">
                                <td class="center" class="shadow_inner" style="background:#b40909; color:#FFF;"><?php
								$name=$obj->SelectAllByVal("ams_admission","roll",$row->roll,"name");
								 echo $x; ?>
                                 </td>
                                <td style="background:#d4f7f2;" class="center">
								<?php echo $name; ?>
                                </td>
                                <td style="background:#f6baa0;" class="center">
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                <td style="background:#d4f7f2;" class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                
                                
                                <td style="background:#f6baa0;" class="center" ice:editable="*">
								<?php echo $row->old_roll_id; ?>
                                </td>
                                <td style="background:#d4f7f2;" class="center">
								<?php echo $row->roll; ?>
                                </td>
                                <td style="background:#f6baa0;" class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->old_section_id,"name"); ?>
                                </td>
                                <td style="background:#d4f7f2;" class="center">
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                </td>
                                
                                <td style="background:#f6baa0;" class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->old_shift_id,"name"); ?>
                                </td>
                                <td style="background:#d4f7f2;" class="center">
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                </td>
                                
                                <td style="background:#f6baa0;" class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_group","id",$row->old_group_id,"name"); ?>
                                </td>
                                <td style="background:#d4f7f2;" class="center"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?></td>
                                        </tr>
                                        <?php 
                                       $x++;
}
                                        ?>
                                                                             
                                    </tbody>
                                    
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
