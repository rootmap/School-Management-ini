<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$group,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach($data as $row)
    {
    ?>
     <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="transfar_cf_lisst.php?id=<?php echo $row->id; ?>&amp;school=<?php echo $school; ?>">Show Student</a>
      
       
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
