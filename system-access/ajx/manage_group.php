<?php
include("../class/auth.php");
$table="ams_management_group";
extract($_GET);
if($c!='')
{
    $array=array("category_id"=>$c);
    $data=$obj->SelectAllByID($table,$array);
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
