<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
?>
    
   
   
<table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
    <thead>
        <tr>
            <th>S/L</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Group</th>
            <th>Shift</th>
            <th>Guardian Name</th>
            <th>View Details</th>
        </tr>
    </thead>
     <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row){        
	?>

    <tbody>
        <tr class="" style="font-weight:500;">
                <td class="center" class="shadow_inner" style="background:#b40909; color:#FFF;"><?php echo $r;?></td>
                 <td class="center" style="background:#d4f7f2; width:200px;"><?php echo $row->name;?></td>
                 <td  class="center" style="background:#f6baa0;"><?php echo $row->roll;?></td>
                <td style="background:#d4f7f2;"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                <td  class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                <td class="center" style="background:#d4f7f2;"><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?></td>
                <td  class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                <td style="background:#d4f7f2;" class="center"><?php echo $row->guardian_name;?></td>
                <td  class="center" style="background:#f6baa0;">
                  <a target="new" href="st_profile_info.php?student_details=<?php echo $row->id;?>"><img src="images/contact_new.png" /></a>
                </td>
        </tr>
    </tbody>
    <?php $r++; } ?>
</table>
          
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
