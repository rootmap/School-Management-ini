<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
    
   <form action="" method="get" name="promot">
   
   <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="session" onchange="showclass(this.value)" name="session1">
                                        <option>Session</option>
                                        <?php
										  $array=array("school_id"=>$school); 
										  $forti=$obj->SelectAllByID('ams_session',$array);
										  if(!empty($forti))
										  foreach($forti as $dd):
										?>
                                        <option value="<?php echo $dd->id;?>"><?php echo $dd->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Class:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="class" onchange="showsection(this.value)" name="class1">
                                        <option>Class</option>
                                         
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="section" onchange="showshift(this.value)" name="section1">
                                        <option>Section</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="shift" onchange="showgroup(this.value)" name="shift1">
                                        <option>Shift</option>
                                         
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="group" name="group1">
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            
                        </ul>
                    </div>
                                           
                    <div class="admission_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Promote Class :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position color_1 shadow_inner" style="padding:10px;">
                       <!--tables code start from here-->
                           <div id="">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                          <th rowspan="2"><input type="checkbox" value="" name="all"/> All</th>
                                          <th rowspan="2">S/L</th>
                                          <th rowspan="2">Student's Name</th>
                                          <th colspan="2">Roll</th>
                                          <th rowspan="2">Class</th>
                                          
                                          <th rowspan="2">Section</th>
                                          <th rowspan="2">Shift</th>
                                          <th rowspan="2">Group</th>
                                        </tr>
                                        <tr>
                                          <th>Old</th>
                                            <th>New</th>
                                        </tr>
                                    </thead>
                                    <tbody>
     <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
		  $x=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

   <tr class="">
                                <td class="shadow_inner center" style="background:#b40909;">
                                <input type="checkbox" value="<?php echo $row->id;?>" name="id[]"/>
                                 
                                 </td>
                                 
                                 <td class="center" style="background:#f6baa0;">
                                 <?php echo $x; ?>
                                 </td>
                                 
                                <td style="background:#d4f7f2;" class="center">
								<input type="hidden" name="old_session[]" value="<?php echo $row->session_id;?>" />
								<?php echo $row->name; ?></td>
                                
                             
                                <td class="center" style="background:#f6baa0;">
                                 <input type="hidden" name="rool[]" value="<?php echo $row->roll;?>" />
								<?php echo $row->roll; ?>
                                </td>
                                
                                <td class="center" style="background:#d4f7f2;">
                                <input style="height:20px;width:70px;" name="roll[]" placeholder="new roll"/>
                                </td>
                       
                                
                                <td class="center" style="background:#d4f7f2;">
                                <input type="hidden" name="old_class[]" value="<?php echo $row->class_id;?>" />
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                
                                
                                
                                <td class="center" style="background:#f6baa0;">
                                <input type="hidden" name="old_section[]" value="<?php echo $row->section_id;?>" />
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                </td>
                                
                                <td class="center" style="background:#d4f7f2;">
                                <input type="hidden" name="old_shift[]" value="<?php echo $row->shift_id;?>" />
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                </td>
                                
                                <td class="center" style="background:#f6baa0;">
                                <input type="hidden" name="old_group[]" value="<?php echo $row->group_id;?>" />
								<?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?>
                                </td>
                                        </tr>
                                        <?php 
                                       $x++;
}
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            <ul>
                                	<li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="promote" class=" height-35 div_btn">Promote</button>
                                    </a>
                                </li>
                        </ul>
                                
                            </div>
                            
							
                            <div class="clear"></div>
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
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
