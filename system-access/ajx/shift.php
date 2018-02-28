<?php
include("../class/auth.php");
$table="ams_shift";
extract($_GET);
if($s!='')
{
    $array=array("section_id"=>$s,"school_id"=>$school);
	
    $data=$obj->SelectAllByID_Multiple($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
	if(!empty($data))
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
