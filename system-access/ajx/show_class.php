<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($k!='')
{
	
	?>
    
   <form action="" method="post" name="sms">
   
<table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
                                    <thead>
                                        
                                    <th>SL NO</th>  
                                    <th>Class Name</th>
                                    <th>Group</th>
                                    <th>Section</th>
                                    <th>Shift</th>
                                    <th>Number</th>
                                    
                                    </thead>
                                    <tbody>
     <?php
          $array=array("class_id"=>$class);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

                                 <tr name="all" id="all" class="">
                                    <td class="center">
									<label><input type="checkbox" name="class[]" value="<?php echo $row->class_id;?>"/>
									 <?php echo $s;?></label></td>  
                                    
                                    <td class="center">
                                    
									<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>
                                    </td>
                                    
                                    <td class="center">
                                    <input type="hidden" name="group[]" value="<?php echo $row->group_id;?>"/>
									<?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?>
                                    </td>
                                    
                                    <td class="center">
                                    <input type="hidden" name="section[]" value="<?php echo $row->section_id;?>"/>
									<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?>
                                    </td>
                                    
                                    <td class="center">
                                    <input type="hidden" name="shift[]" value="<?php echo $row->shift_id;?>"/>
									<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?>
                                    </td>
                                    
                                    <td class="center">
                                   
                                   <?php $number=$obj->SelectAllByVal("ams_admission","group_id",$row->group_id,"number");?>
                                    <input type="hidden" name="number[]" value="<?php echo $number ;?>"/>
									<?php echo $number;?>
                                    </td>
                                    
                                    
                                </tr>
										<?php $s++;
                                          
}
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                    
                                    
                                </table>
                                
                                <div>
                                    <div class="menu_div" style="margin-top:40px; background:none; color:#09F;">
                                        <div id='cssmenu'>
                                            <ul>
                                                <li><a href='#'><span>Write SMS</span></a></li>

                                                <li><a href='#'><span>Choose From SMS Book</span></a></li>

                                            </ul>
                                        </div>
                                        <div class="margin_left10 margin-top-15 b_radius5">
                                            <textarea name="name[]" type="text" placeholder="Write SMS Here" style="width:300px; height:100px; border-radius:5px;"></textarea>
                                        </div>

                                        <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold ">
                                            <h3 class="left arial font-color-dark-red margin_right10" style="line-height:40px;">&lowast;Characters Left</h3>
                                            <input type="button" value="160" placeholder="" class="left arial bold"  style="width:50px; height:40px; border-radius:5px;">
                                        </div>

                                        <div class="menu_div" style="background:none; color:#09F;">
                                            <div id='cssmenu'>
                                                <ul>
                                                    <li class='active'><button type="submit" class="div_btn" name="save">Send</button></li>
                                                </ul>
                                            </div>
                                        </div> 
                                    </div> 
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
