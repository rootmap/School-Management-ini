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
            <th>S/L</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Group</th>
            <th>Shift</th> 
            <th>Name Of Exam</th>
        </tr>
    </thead>
     <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody>
		

        <tr class="">
        <td class="shadow_inner center" style="background:#b40909; color:#FFF;"><?php echo $r;?></td>
                <td class="center" style="background:#f6baa0;"><?php echo $row->name;?> </td>
                 <td style="background:#d4f7f2;" class="center"><?php echo $row->roll;?></td>
                <td class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                <td style="background:#d4f7f2;" class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>

                <td class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                <td style="background:#d4f7f2;" class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                               
                  <input type="hidden" id="admission" name="admission" value="<?php echo $row->admition;?>" />
                
                <td class="center" style="background:#f6baa0;">
                  <select name="category" id="category">
                   <option selected="selected">Select Category</option>
                  <?php
                    $data=$obj->SelectAllByID("ams_exam_category",array("school_id"=>$school));
					if(!empty($data))
					foreach($data as $ro):
				  ?>
                  
                   <option onclick="showresult(<?php echo $ro->id;?>,<?php echo $row->admition;?>,1)" value="<?php echo $ro->id;?>"><?php echo $ro->name;?></option>
                   
                  <?php endforeach;?>
                  <option onclick="showresult(1000,<?php echo $row->admition;?>,2)" value="<?php echo $ro->id;?>">Total Result</option>
                  </select>
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
