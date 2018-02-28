<?php
include("../class/auth.php");
extract($_GET);
if($d!='')
{
	?>
  <form action="" method="post" name="result">
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                    <tr>
                     <thead>
                        <th class="center width-label-70"><input name="" value="" type="checkbox" /> ALL</th>
                        <th class="center height-10" >SL.No</th>
                        <th class="center height-10" >name</th>
                        <th class="center height-10" >Session</th>
                        <th class="center height-10" >Class</th>
                        <th class="center height-10" >Group</th>
                        <th class="center height-10" >Roll</th>
                        <th class="center height-10"> Shift</th>
                        <th class="center height-10" >SUBJECT</th>
                        <th class="center height-10" >SECTION</th>
                        
                        <?php 
						$rr=array("school_id"=>$school);
						$dat=$obj->SelectAllByID("ams_report2",$rr);
						 if(!empty($dat))
						 foreach ( $dat as $rot):
						?>
                        <th class="center height-10" ><?php echo $obj->SelectAllByVal("ams_report","id",$rot->report_id,"name");?></th>
                        <?php endforeach; ?>
                       </thead>  
                      </tr>
                   
                   
                   
                    <?php 
						 
					     $rokl=$obj->SelectAllByID_Multiple("ams_admission",array("session_id"=>$session,"class_id"=>$class,"section_id"=>$section));
						 $s=1;
						  if(!empty($rokl))
						  foreach($rokl as $ting):
					   ?>
                       <tbody>
                     <tr>
                      
                        <td class="shadow_inner" style="background:#b40909;"><input type="checkbox" name="name[]" value="<?php echo $ting->id;?>" />
                        </td>
                        
                        <td class="center" style="background:#f6baa0;"><?php echo $s;?>
                        </td>
                        <td class="center height-15" style="background:#d4f7f2;">
                        <label> <?php echo $ting->name;?></label> 
                        </td>
                        <td class="center" style="background:#f6baa0;">
                          <input type="hidden" name="session[]" value="<?php echo $session; ?>"/>
						  <?php echo $obj->SelectAllByVal("ams_session","id",$ting->session_id,"name");?>
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                           <input type="hidden" name="class[]" value="<?php echo $class; ?>"/>
						  <?php echo $obj->SelectAllByVal("ams_class","id",$ting->class_id,"name");?>
                         </td>
                        <td class="center" style="background:#f6baa0;">
                          <input type="hidden" name="group[]" value="<?php echo $ting->group_id; ?>"/>
                          <?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name");?>
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="hidden" name="roll[]" value="<?php echo $ting->roll;?>"/>
						  <?php echo $ting->roll;?>
                        </td>
                        <td class="center" style="background:#f6baa0;">
                          <input type="hidden" name="shift[]" value="<?php echo $ting->shift_id; ?>"/>
                          <?php echo $obj->SelectAllByVal("ams_shift","id",$ting->shift_id,"name");?>
                        </td>
                        <td class="center" style="background:#d4f7f2;">
						 
						 <?php echo $obj->SelectAllByVal("ams_subject","id",$subject,"name");?>
                        </td>
                        
                        	<input type="hidden" name="category[]" value="<?php echo $category; ?>" />
                            <input type="hidden" name="subject[]" value="<?php echo $subject; ?>" />
                            <input type="hidden" name="admission[]" value="<?php echo $ting->admition; ?>"/>
						  
                        <td class="center" style="background:#f6baa0;">
                        	<input type="hidden" name="section[]" value="<?php echo $section; ?>" />
						  <?php echo $obj->SelectAllByVal("ams_section","id",$section,"name");?> 
                         
                        </td>
                        
                          
                        <?php 
						$rr=array("school_id"=>$school);
						$ft=$obj->exists_multiple("ams_report2",$rr);
						if($ft==1)
						{
						?>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <?php 
						}
						elseif($ft==2)
						{
						 ?>
                         <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                         <?php
						}
						elseif($ft==3)
						{
						 ?>
                         <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep3[]" class="div_in" />
                        </td>
                        
                        <?php
						}
						elseif($ft==4)
						{
						 ?>
                         <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep3[]" class="div_in" />
                        </td>
                        <td class="center" style="background:#d4f7f2;">
                          <input type="text" placeholder=" 100 " name="rep4[]" class="div_in" />
                        </td>
                         <?php
						}
						 ?>
                        
                            
                    </tr>
                    </tbody>
             <?php $s++; endforeach;?>
                   
                     
            </table>
            <button class="div_btn" name="save" style="margin-left:400px;">Submit</button>
          </form>
    <?php
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
