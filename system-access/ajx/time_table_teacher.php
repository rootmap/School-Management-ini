
<?php
include("../class/auth.php");
$table="ams_teacher_time_table";
extract($_GET);
if($k!='')
{
	
	?>               
		<?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID($table,$array);
          $r=1;
          if(!empty($data))
          foreach($data as $row):
        
         ?>
        
        <?php echo $row->table;?>
        
        <?php endforeach ;?>
        
        
<?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
