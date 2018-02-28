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


                        <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="recet.php?id=<?php echo $row->id;?>&amp;showstudent=<?php echo $school; ?>">Show Student</a>                
                     
						
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
