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
	
	foreach ($data as $ro):
    
    ?>
<form action="" method="post" name="ediit">
     <ul >
     
                              
     <li class="admission_form_div_label height-30 width-label-200 left">Update Group Name<span class="right">:</span></li>
        <li class="admission_form_div_label height-30 width-label-250 right">
              <input type="text" name="name" value="<?php echo $ro->name; ?>" class="textbox" />
            <input type="hidden" name="id" value="<?php echo $ro->id; ?>" />
        </li>
      
       
       
        
        <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
          <button type="submit" name="update" class="height-35 div_btn">Update</button>
        </li>
</ul>
</form>

      
 <?php endforeach; ?>
    <?php
    
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
