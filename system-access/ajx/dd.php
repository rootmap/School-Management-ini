
<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($k!='')
{
	
	?>
    
     <?php
          $array=array("id"=>$k,"school_id"=>$school);
          $data=$obj->SelectAllByID_Multiple($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

        <a href="ffff.php?id=<?php echo $k; ?>&amp;school=<?php echo $school; ?>" style="padding-bottom:10px;;padding-left:20px;padding-right:30px;padding-top:10px;" name="submit" class="height-35 div_btn" >Create View</a>
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
