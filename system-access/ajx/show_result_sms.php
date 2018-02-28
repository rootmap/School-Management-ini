
<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
    
   
 <form action="" method="post" name="result_wish"> 
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
    <thead>
        <tr>
            <th><input type="checkbox" value="None" id="checkAll" name="check" /></th>
            <th>S/L</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Shift</th>
            <th>Group</th>
            <th>Ruselt</th>
            
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
		

        <tr class="" style="font-weight:500;">
                <td class="center" class="shadow_inner" style="background:#b40909;">
                <input type="checkbox" value="<?php echo $row->admition;?>" name="admission[]" />
                </td>
                <td  class="center" style="background:#f6baa0;">
                <input type="hidden" value="<?php echo $row->phone_number;?>" name="number[]" />
				<?php echo $r;?>
                </td>
                 <td  class="center" style="background:#d4f7f2;">
				 <?php echo $row->name;?>
                 </td>
                 <td style="background:#f6baa0;" class="center">
				 <?php echo $row->roll;?>
                 <input type="hidden" value="<?php echo $row->class_id;?>" name="class" />
                 </td>
                 
                 <td style="background:#f6baa0;" class="center">
				 <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                
                 </td>
                 <td style="background:#f6baa0;" class="center">
				 <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                 </td>
                 <td style="background:#f6baa0;" class="center">
				 <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                 </td>
                 <td style="background:#f6baa0;" class="center">
				 <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
                 </td>
                <td style="background:#d4f7f2; padding:10px;" class="center">
				 <input class="textbox height-20 width-label-100" value="" placeholder="type result" type="text" name="result[]"/>
                 </td>
               
        </tr>
       
                                             
    </tbody>
    <?php $r++; } ?>
</table>
<ul>
                             <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="#" style="text-decoration:none">
   <button type="submit" name="save" class="height-35 div_btn">Sand SMS</button>
                                </a>
                            </li>
                        </ul>
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
