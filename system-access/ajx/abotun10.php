<?php
include("../class/auth.php");
$table="ams_exam_category";
extract($_GET);
if($s!='')
{
    ?>
     <a type="submit" style="padding-left:15px;padding-right:35px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="admit_card_student_list.php?group_id=<?php echo $group; ?>&amp;showstudent=<?php echo $school; ?>&amp;exam=<?php echo $s; ?>">Show Student</a>
    <?php
   
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
