<?php
include("../class/auth.php");
$table="ams_exam_subject";
extract($_GET);
if($s!='')
{
 /*   $array=array("exam_id"=>$s,"subject_id"=>$subject,"group_id"=>$group,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
	if(!empty($data))
    foreach($data as $row)
    {*/
    ?>
     <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="result_in.php?id=<?php echo $group; ?>&amp;showstudent=<?php echo $school; ?>&amp;exam=<?php echo $s; ?>&amp;subject=<?php echo $subject; ?>">Show Class</a>
      
       
       </option>
    <?php
   /* }*/
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
