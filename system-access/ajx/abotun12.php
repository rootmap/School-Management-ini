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
    <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
     <a type="submit" style="padding-left:15px;padding-right:35px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="ams.php?id=<?php echo $row->id;?>&amp;showstudent=<?php echo $school; ?>&amp;class=<?php echo $row->class_id;?>">SHOW STUDENT</a>
     </li> 
       
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
