<?php
include("../class/auth.php");
$table="ams_admission";
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
            <th>Guardian Name</th>
            <th>Number</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View Details</th>
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
		

        <tr class="gradeX">
        <td class="center"><?php echo $r;?></td>
                <td><?php echo $row->name;?></td>
                 <td class="center"><?php echo $row->roll;?></td>
                <td><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>

                <td><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                <td><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                               
                <td class="center"><?php echo $row->guardian_name;?></td>
                 <td class="center"><?php echo $row->number;?></td>
                  
                  <td class="center"><a target="new" title="clik here to View profile" href="st_profile_info.php?student_details=<?php echo $row->id;?>"><img src="images/write.gif"/></a></td>
                  
                <td class="center"><a href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete"> <img src="images/deletered.gif"/></a></td>
                
                <td class="center"><a target="new" title="clik here to View profile" href="st_profile_info.php?student_details=<?php echo $row->id;?>"><img src="images/contact_new.png"/></a></td>
                
        </tr>
       
                                             
    </tbody>
    
    <?php $r++; } ?>
</table>

<div class="report_menu_div width-col3 right" style="margin-top:20px;">
                                <ul>
                                    <li class="right">
                                        <a href="#">
                                            
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </a>
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                           
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/excel_icon.png" />
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                           
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/mword_icon.png" />
                                        </a> 
                                    

                          
                                </ul>
                            </div><div class="clear"></div>
          
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
