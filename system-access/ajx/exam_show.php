<?php
include("../class/auth.php");
$table="ams_exam_subject";
extract($_GET);
if($f!='')
{
    $array=array("subject_id"=>$f);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->exam_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_exam_category","id",$row->exam_id,"name"); ?>
       
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
