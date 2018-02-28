<?php
include("../class/auth.php");
$table="ams_examination";
extract($_GET);
if($v!='')
{
    $array=array("shift_id"=>$v);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->group_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
       
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
