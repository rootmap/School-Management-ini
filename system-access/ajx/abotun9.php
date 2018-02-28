<?php
include("../class/auth.php");
$table="ams_category";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	
	
    <?php
    foreach($data as $row)
    {
    ?>
     <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="all_manage_sms.php?id=<?php echo $row->id;?>&amp;school=<?php echo $school; ?>">Show Class</a>
      
       
    <?php
    }
}
else
{
    ?>
Not Selected
    <?php
}
?>
