<?php
include("../class/auth.php");
$table="ams_management_group";
extract($_GET);
if($c!='')
{
    $array=array("id"=>$c);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->category_id;?>">
	   <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name");?>
       
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
