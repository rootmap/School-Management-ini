<style>
.sa{height:20px;width:170px; font-size:16px; color:#666; text-align:center; padding:10px; border-radius:6px; background:#CCC; display:block;}
.sa:hover{ color:#FFF; background:#C30; display:block;}
</style>
<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
    
   <form action="" method="post" name="sms">
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" value="None" id="checkAll" name="check" /> All</th> 
                                        <th>SL NO</th> 
                                        <th>Name</th>
                                        <th>Class Name</th>
                                        <th>Group</th>
                                        <th>Section</th>
                                        <th>Shift</th>
                                        <th>Number</th>
                                    </tr>
                                    </thead>
                                    
                                      <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>
                                    <tbody>
   

                                 <tr>
                                    <td class="center" class="shadow_inner" style="background:#b40909;">
									<label><input type="checkbox" name="admission[]" value="<?php echo $row->admition;?>"/>
									</label></td>
                                     
                                     <td class="center" style="background:#f6baa0;">
									 <?php echo $s;?>
                                     </td>  
                                    
                                    <td class="center" style="background:#d4f7f2;">
                                    <?php echo $row->guardian_name;?>
                                    <input type="hidden" name="class" value="<?php echo $row->class_id;?>"/>
									<input type="hidden" name="guardian[]" value="<?php echo $row->guardian_name;?>"/>
                                    
                                    </td>
                                    
                                    
                                    <td class="center" style="background:#f6baa0;">
                                    
									<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>
                                    </td>
                                    
                                    <td class="center" style="background:#d4f7f2;">
                                    
									<?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?>
                                    </td>
                                    
                                    <td class="center" style="background:#f6baa0;">
                                    
									<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?>
                                    </td>
                                    
                                    <td class="center" style="background:#d4f7f2;">
                                   
									<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?>
                                    </td>
                                    
                                    <td class="center" style="background:#f6baa0;">
                                   
                                      
                                    <input type="hidden" name="number[]" value="<?php echo $row->phone_number;?>"/>
									<?php echo $row->phone_number;?>
                                    </td>
                                    
                                    
                                </tr>
										
                                    </tbody>
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
                                        <ul>
                                                <li>
                                                 <a class="sa" style="" href='#'><span>Choose From SMS Book</span></a></li>

                                            </ul>
                                        
                                        <div class="margin_left10 margin-top-15 b_radius5">
                                            <textarea name="text" type="text" placeholder="Write SMS Here" style="width:300px; height:100px; border-radius:5px;"></textarea>
                                         
                                        </div>

                                        <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold ">
                                            <h3 class="left arial font-color-dark-red margin_right10" style="line-height:40px;">&lowast;Characters Left</h3>
                                            <input type="button" value="160" placeholder="" class="left arial bold"  style="width:50px; height:40px; border-radius:5px;">
                                        </div>
  <button type="submit" style="margin:0px; margin-left:10px;" class="div_btn" name="save">Send</button>
                                       
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
