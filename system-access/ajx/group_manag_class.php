<?php
include("../class/auth.php");
$table="ams_management_profile";
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
       <option value="<?php echo $row->department_id;?>">
       <?php echo $obj->SelectAllByVal("ams_class","id",$row->department_id,"name");?>
	  
       
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
