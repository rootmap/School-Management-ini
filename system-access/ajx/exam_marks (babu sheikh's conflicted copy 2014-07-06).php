<?php
include("../class/auth.php");
$table="ams_exam_category";
extract($_GET);
if($t!='')
{
   $array=array("group_id"=>$t);
    $data=$obj->SelectAllByID($table,$array);
	?>
	<option value="">Select Please</option>
    <?php
	
	 if(!empty($data))
    foreach($data as $row):
    
    ?>
    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>


    <?php endforeach; ?>
    
</form>
	<?php 
	
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
