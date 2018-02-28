<?php
include("../class/auth.php");
$table="ams_exam_category";
extract($_GET);
if($f!='')
{
    $array=array("class_id"=>$f);
    $data=$obj->SelectAllByID_Multiple($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->id;?>">
	   <?php echo $row->name; ?>
       
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
