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
     <a type="submit" style="padding-left:15px;padding-right:35px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="student_list1.php?id=<?php echo $row->id;?>&amp;showstudent=<?php echo $school; ?>">Show Student</a>
      
       
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
