<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($n!='')
{
    
	?>
	
	
    <?php
	$array=array("roll"=>$roll);
    $data=$obj->SelectAllByID($table,$array);
	if(!empty($data))
    foreach($data as $row)
    {
    ?>
     
                                
                               <li class="add_st_form_div_label_view_details height-30 width-label-80 left" style="text-align:center; margin-left:-2px;">Name:</li>
                                <li id="name" class="admission_form_div_label height-30 margin-top-10 left " style="">
                                
                                    <input placeholder="Type Student's Name Here" value="<?php echo $row->name;?>" name="name"  class="select_option_1"/>
                                </li>
                            <li id="name" class="add_st_form_div_label_view_details height-30 width-label-80 left" style="margin-left:5px;">Adm. No.:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" style="margin-left:-3px;">
                                   
                                        <input class="select_option_1" type="text" id="admission" name="admission"   value="<?php echo $row->admition;?>">
                                    
                                </li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-80 left" style="margin-left:0px;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left" >
                                    <select class="" name="Group:" >
                                          
                                        <option value="<?php echo $row->group_id;?>"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name")?></option>
                                       
                                    </select>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-80 left" style="margin:0px;">Exam:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" id="category" name="category:" >
                                    <option>Select Exam</option>
                                          <?php 
									    $section=$obj->SelectAll("ams_exam_category");
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                       
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
