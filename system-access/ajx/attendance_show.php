
<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($s!='')
{
	
	?>
    
   
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
    <thead>
      <tr>
        <th>SL.no</th>
        <th>Students' Name</th>
        <th>Roll</td>
        <th>Class</th>
        <th>Section</th>
        <th>Shift</th>
        <th>Group</th>
        <th>Working Day</th>
        <th>Total Present</th>
        <th>Percentage %</th>
       </tr>
</thead>
     <?php
          $array=array("group_id"=>$group,"school_id"=>$school);
          $data=$obj->SelectAllByID_Multiple($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody>
		

         <tr>
        <td class="shadow_inner center" style="background:#b40909; color:#FFF;"><?php echo $r; ?></td>
        <td class="center" style="background:#f6baa0;"><?php echo $row->name; ?></td>
        <td style="background:#d4f7f2;" class="center">
        <?php echo $row->roll; ?>
        </td>
        <td style="background:#f6baa0;" class="center">
        <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
        </td>
        <td style="background:#d4f7f2;" class="center">
        <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
        </td>
        <td style="background:#f6baa0;" class="center">
        <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
        </td>
        <td style="background:#d4f7f2;" class="center">
        <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
        </td>
        <td style="background:#f6baa0;" class="center">
        <?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"school_id"=>$school,"admission"=>$row->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"school_id"=>$school,"admission"=>$row->admition));

$work=$total+$totall; echo $work ?> 
        </td>
        <td class="center" style="background:#d4f7f2;">
<?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"school_id"=>$school,"admission"=>$row->admition));
$totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"school_id"=>$school,"admission"=>$row->admition));

echo $total ?> Days
        </td>
       <td style="background:#f6baa0;" class="center">
        <?php $rrs=$total+$totall; $tt=($total/$rrs)*100; echo $tt; ?>%
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
