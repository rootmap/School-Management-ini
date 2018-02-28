<?php
include("../class/auth.php");
$table="ams_examination";
extract($_GET);
if($s!='')
{
    $array=array("session_id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->class_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
       
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
