<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($m!='')
{
	
	?>
    
   <form action="" method="post" name="sms">
   
<table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
                                    <thead>
                                    <th><input type="checkbox" id="checkAll" name="all" value=""/> All</th>   
                                    <th>SL NO</th> 
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Information</th>
                                    <th>Number</th> 
                                    <th>Group</th>
                                   
                                    </thead>
                                    <tbody>
     <?php
          $array=array("category_id"=>$category);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

                                 <tr name="all" id="all" class="">
                                    <td class="center" class="shadow_inner" style="background:#b40909;">
									<input type="checkbox" id="slideThree" name="id_number[]" value="<?php echo $row->id_number;?>"/>
									 </td>  
                                     
                                     
                                      <td class="center" style="background:#f6baa0;">
									 <?php echo $s;?>
                                     </td>  
                                    
                                     <td class="center" style="background:#d4f7f2;">
									 <?php echo $row->name;?>
                                    </td>  
                                    
                                    <td class="center" style="background:#f6baa0;">
									 <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name");?>
                                    </td>
                                    
                                    <td class="center" style="background:#d4f7f2;">
									<?php echo $row->experience_info;?>
                                    </td>
                                    
                                    <td class="center" style="background:#f6baa0;">
                                    <input type="hidden" name="number[]" value="<?php echo $row->number;?>"/>
                                    <input type="hidden" name="group" value="<?php echo $row->group_id;?>"/>
									 <?php echo $row->number;?>
                                    </td>
                                    
                                    <td class="center" style="background:#d4f7f2;">
                                    <input type="hidden" name="number[]" value="<?php echo $row->number;?>"/>
                                    <input type="hidden" name="group" value="<?php echo $row->group_id;?>"/>
									 <?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name");?>
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
                                            <textarea name="text" type="text" placeholder="Write SMS Here" style="width:300px; height:100px; border-radius:5px;"></textarea>
                                        </div>

                                        <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold ">
                                            <h3 class="left arial font-color-dark-red margin_right10" style="line-height:40px;">&lowast;Characters Left</h3>
                                            <input type="button" value="160" placeholder="" class="left arial bold"  style="width:50px; height:40px; border-radius:5px;">
                                            
                                        </div>
                                        
                                            
                                                   <button type="submit" style="margin-top:0px; margin-left:10px;" class="div_btn" name="save">Send SMS</button>
                                        
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
