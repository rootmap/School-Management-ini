<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
 <form action="" method="get" name="update">  
   
   
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Group Name</th>
            <th>Creation Date</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Details</th>
            <th>Transfer</th>
        </tr>
    </thead>
     <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody>
		

        <tr class="gradeX">
                <td>
				<input name="id" type="hidden" value="<?php $row->id;?>" />
                <input type="hidden" value="<?php echo $row->roll; ?>" name="roll_id" />
				<?php echo $row->name;?><input type="hidden" name="name" value="<?php echo $row->name;?>" />
                </td>
                
                <td><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                
                <td><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?></td>
                <td><?php echo $row->date;?></td>
                <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                <td class="center">
				
				<?php echo $row->roll;?>
                </td>
                <td class="center"><a target="new" title="clik here to View profile" href="st_profile_info.php?student_details=<?php echo $row->id;?>">Details</a></td>
                <th><a name="edit" href="transfar_c.php?transfer=yes&amp;roll_id=<?php echo $row->roll; ?>">
				<?php 
				$ex=$obj->exists_multiple("ams_transfer",array("roll_id"=>$row->roll));
				if($ex==0){
			   ?>Transfer<?php }else{ ?>Already Transfered<?php } ?></a></th>
        </tr>
       
                                             
    </tbody>
    <?php } ?>
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
