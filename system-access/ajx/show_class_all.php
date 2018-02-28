<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($t!='')
{
   ?>
       <form action="" method="post" name="class_at">
      <div class="attendance_reg_setting_small left">
                        	<div class="attendance_reg_setting_days_text center height-35" >Select Weekly Days: <?php echo date('Y'); ?></div>
                            <?php 
                                $weekly=$obj->SelectAll('ams_weekly');
								 if(!empty($weekly))
								  foreach($weekly as $wek):
							  ?>
                            <div class="left margin_left30 margin-top-5 width-label-220 a-left p" style="color:#F90;margin-bottom:5px;">	
									<label><input type="checkbox" value="<?php echo $wek->id;?>" name="weekly[]" />
										<?php echo $wek->name;?> </label>
  <input type="text" value="<?php echo date('Y-m-d');?>" style="width:100px; border:none; border:#CCC 1px solid; margin:3px; float:right;" name="dt[]"/>
                                       
							</div>
                            <?php endforeach; ?>
                           </div>
                           
                           <div class="right" style="height:auto; width:330px; background:#FFF; border:2px #0099FF solid; border-radius:15px;" >
                           	<div class="attendance_reg_setting_days_text center height-35" style="" >Select Class:</div>
                          <?php 
						        
								$array=array("session_id"=>$t);
                                 $data=$obj->SelectAllByID($table,$array);
								 if(!empty($data))
								foreach($data as $row)
								{
					      ?>
                            <div class="left margin_left30 margin-top-5 width-label-250 a-left p" style="color:#F90;margin-bottom:5px;">	
									<label><input type="checkbox" value="<?php echo $row->id;?>" name="group" />
                                    <input type="hidden" value="<?php echo $row->session_id;?>" name="session" />
										<input type="hidden" value="<?php echo $row->section_id;?>" name="section" />
                                        <input type="hidden" value="<?php echo $row->shift_id;?>" name="shift" />
                                        <input type="hidden" value="<?php echo $row->class_id;?>" name="class" />
										<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>&gt;
                                         <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?> &gt;
                                         <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?>&gt;
                                         <?php echo $row->name; ?>
                                    </label>
							</div>
                            <?php } ?>
                           </div>
                           
                        </div>
                        
                        
                        <div style="height:auto;">
                        <ul>
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                               
                                    <button type="submit" name="save" class="height-35 div_btn">Assign  Setting</button>
                                   
                                </li>
                            </ul>
                    </div>
                   <div class="clear"></div>   
       
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
