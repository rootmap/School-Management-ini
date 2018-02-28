<?php
include("../class/auth.php");
$table="ams_management_group";
extract($_GET);
if($s!='')
{
	
	?>
    
   
   
 
     <?php
          $array=array("id"=>$s);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>
<li style="height:40px; clear:both; margin-left:auto; margin-right:auto; width: 50%; padding: 10px; text-align: center;">
                                
            <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="div_btn" href="manage.php?id=<?php echo $row->id;?>&amp;school=<?php echo $school;?>">Manage Group</a>
</li>
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
