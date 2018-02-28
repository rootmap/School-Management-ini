<?php
include("../class/auth.php");
$table="ams_exam_category";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach($data as $row)
    {
    ?>
    <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
     <a type="submit" style="padding-left:15px;padding-right:35px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="tabulation_b.php?id=<?php echo $row->group_id;?>&amp;showstudent=<?php echo $school; ?>&amp;exam=<?php echo $row->id; ?>">SHOW STUDENT</a>
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
