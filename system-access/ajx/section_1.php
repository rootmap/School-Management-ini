<?php
include("../class/auth.php");
$table="ams_examination";
extract($_GET);
if($t!='')
{
    $array=array("class_id"=>$t);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->section_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
       
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
