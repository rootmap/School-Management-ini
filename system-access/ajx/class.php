<?php
include("../class/auth.php");
$table="ams_class";
extract($_GET);
if($c!='')
{
    $array=array("id"=>$c,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
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
