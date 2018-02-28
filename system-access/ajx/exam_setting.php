<?php
include("../class/auth.php");
$table="ams_exam_category_set";
extract($_GET);
if($class!='')
{
    $array=array("session_id"=>$_GET['session'],"class_id"=>$_GET['class']);
    $data=$obj->SelectAllByID_Multiple($table,$array);
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
