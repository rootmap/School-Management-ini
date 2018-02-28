
<?php
include("../class/auth.php");
$table="ams_category";
extract($_GET);
if($s!='')
{
	
	?>

     <?php
          $array=array("id"=>$s,"school_id"=>$school,"group_id"=>$user);
          $data=$obj->SelectAllByID_Multiple($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>
           <a href="manage_listt.php?id=<?php echo $s; ?>&amp;group=<?php echo $user; ?>&amp;school=<?php echo $school; ?>" style="padding-bottom:10px;;padding-left:20px;padding-right:30px;padding-top:10px;" name="submit" class=" height-35 div_btn" >Create View</a>
    <?php $r++; } ?>

    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
