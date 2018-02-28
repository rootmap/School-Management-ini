<?php
include("../class/auth.php");
$table="ams_exam_result";
extract($_GET);
if($k!='')
{
	
	?>
    
   
   
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
        <tr>
            <th>S/L</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Group</th>
            <th>Shift</th> 
            <th>Admission</th>
            <th>Name Of Exam</th>
        </tr>
    </thead>
     <?php
          $array=array("admission_id"=>$admission);
          $data=$obj->SelectAllByID($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody>
		

        <tr class="gradeX">
        <td class="center"><?php echo $r;?></td>
                <td><?php echo $obj->SelectAllByVal("ams_admission","id",$row->name_id,"name");?></td>
                 <td class="center"><?php echo $row->roll;?></td>
                <td><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                <td><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                <td><?php echo $row->admission_id;?></td>
                <td><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                <td class="center">
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
