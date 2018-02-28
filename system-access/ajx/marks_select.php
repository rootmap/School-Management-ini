<?php
include("../class/auth.php");
$table="ams_exam_subject";
extract($_GET);
if($t!='')

{
   
	?>
	
    <?php
	
	
	$array=array("exam_id"=>$t,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
	 if(!empty($data))
    foreach($data as $row):
    if($obj->exists_multiple("ams_marks_select",array("school_id"=>$school,"exam_id"=>$row->exam_id,"class_id"=>$row->class_id,"subject_id"=>$row->subject_id))==1)
	{
		$fullmarks=$obj->SelectAllByVal4("ams_marks_select","school_id",$school,"exam_id",$row->exam_id,"class_id",$row->class_id,"subject_id",$row->subject_id,"full_marks");
		$passmarks=$obj->SelectAllByVal4("ams_marks_select","school_id",$school,"exam_id",$row->exam_id,"class_id",$row->class_id,"subject_id",$row->subject_id,"pass_marks");
		$checked="checked='checked'";
	}
	else
	{
		$fullmarks="";
		$passmarks="";
		$checked="";
	}
    ?>
    
  
 <li class="width-auto margin-top-10 height-40">
    <label class="left" style="width:140px; line-height:35px; text-align:left;">
      <input type="checkbox" <?php echo $checked; ?>  name="subject[]" value="<?php echo $row->subject_id; ?>" />
       <span ><?php echo $obj->SelectAllByVal("ams_subject","id",$row->subject_id,"name"); ?><?php //echo $row->subject_id; ?></span>
       <input type="hidden" name="class" id="class" value="<?php echo $row->class_id; ?>" />
        <input type="hidden" name="session" id="session" value="<?php echo $row->session_id; ?>" />
        <!--<input type="hidden" name="group" id="group" value="<?php //echo $row->group_id; ?>"/>-->
        <input type="hidden" name="exam" id="exam" value="<?php echo $row->exam_id; ?>" />
    </label>
        
        
        
                                	
    <label class="left center" style="width:150px;">
     	<input style="border:rgba(0,102,102,1) 1px solid;" value="<?php echo $fullmarks; ?>" type="text" name="<?php echo $row->subject_id; ?>_full_marks" id="full_marks" placeholder="Full Marks" class="width-label-100 center font_1 height-30" />
    </label>
                                
    <label class="left center" style="width:150px;margin-left:10px; ">
     	<input type="text" style="border:rgba(0,102,102,1) 1px solid;"  value="<?php echo $passmarks; ?>" placeholder="Pass Marks" id="pass_markss" class="width-label-100 height-30 font_1 center" name="<?php echo $row->subject_id; ?>_pass_markss"  />
    </label>
</li> 


    <?php endforeach; ?>
  
	<?php 
	
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
