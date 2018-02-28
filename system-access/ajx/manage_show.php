<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
    <?php
	if(!empty($data))
    foreach($data as $row)
    {
    ?>
     
                                
                               <li class="add_st_form_div_label_view_details height-35 width-label-210 left arial bold" style="text-align:center; margin-left:-20px; margin-top:-2px; ">Search Manage User				
                                <span class="right">:</span></li>
                            <li  class="add_st_form_div_label_view_details height-35 width-label-100 left " style="margin-right:40px; margin-top:-2px;">
                                <select name="usergroup" id="usergroup" onchange="showclass(this.value)"  class="select_option">
                                    <option value="" >Select user</option>
                                    <option value="<?php echo $row->id;?>" ><?php echo $row->name;?></option>
                                    
                                </select>
                            </li>
                            
                            
                            
                            
                            
                            
                            

                            <li class="add_st_form_div_label_view_details height-35 width-label-210 left arial bold" style="text-align:center; margin-left:-20px; margin-top:-2px; ">Select a class/Department				
                                <span class="right">:</span></li>
                            <li class="add_st_form_div_label_view_details height-35 width-label-100 left " style="margin-right:40px; margin-top:-2px;">
                                <select name="class" id="class"  class="select_option">
                                    <option>Select One</option>
                                   
                                </select>
                            </li>
                                
                            
                        
    <?php
    }
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
