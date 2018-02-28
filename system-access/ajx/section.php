<?php
include("../class/auth.php");
$table="ams_section";
extract($_GET);
if($t!='')
{
    $array=array("class_id"=>$t,"school_id"=>$school);
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
