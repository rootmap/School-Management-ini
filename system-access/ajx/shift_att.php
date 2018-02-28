<?php
include("../class/auth.php");
$table="ams_shift";
extract($_GET);
if($t!='')
{
    $array=array("session_id"=>$t);
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
