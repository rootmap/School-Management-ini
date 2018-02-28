<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	
	
    <?php
    foreach($data as $row)
    {
    ?>
     <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="attendance_new.php?id=<?php echo $row->id;?>&amp;showstudent=<?php echo $school; ?>&amp;date=<?php echo $calendar; ?>">Show Class</a>
      
       
       </option>
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
