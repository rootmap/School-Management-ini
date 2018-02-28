<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($r!='')
{
    $array=array("section_id"=>$r);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <option value="<?php echo $row->roll; ?>">
	   <?php echo $row->roll; ?>
       
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
