<?php
include("../class/auth.php");
$table="ams_time_table_1";
extract($_GET);
if($s!='')
{
    $array=array("group_id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->category_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_time_table_category","id",$row->category_id,"name"); ?>
       
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
