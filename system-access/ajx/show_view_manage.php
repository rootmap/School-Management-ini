<?php
include("../class/auth.php");
$table="ams_management_group";
extract($_GET);
if($k!='')
{
	
	?>
    
   
   
 
     <?php
          $array=array("id"=>$k);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>
            <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="manage11.php?id=<?php echo $row->id;?>&amp;school=<?php echo $school;?>">Show Manage Group</a>

<?php $s++; } ?>
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
