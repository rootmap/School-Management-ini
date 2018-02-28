<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
    
   
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
    <thead>
        <tr>
            <th>SL.no</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Shift</th>
            <th>Group Name</th>
            <th>Admission Date</th>
           
        </tr>
    </thead>
     <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody style="text-align:center;">
		

        <tr class="gradeX">
                <td style="background:#d4f7f2;"><?php echo $s;?></td>
                 <td><?php echo $row->name;?></td>
                <td style="background:#d4f7f2;"><?php echo $row->roll;?></td>
                <td><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                <td style="background:#d4f7f2;"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                <td><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                <td style="background:#d4f7f2;"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                <td><a target="new" href="st_profile_info.php?student_details=<?php echo $row->id;?>">
                                    <img src="images/contact_new.png" />
                                  </a></td>
               
        </tr>
       
                                             
    </tbody>
    <?php $s++; } ?>
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
