<?php
include("../class/auth.php");
$table="ams_notice";
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
     
     
       
        <li class="admission_form_div_label height-30 width-label-200 left">Update Name<span class="right">:</span></li>
        <li class="admission_form_div_label height-30 width-label-250 right">
            
            <input id="name" type="text" value="<?php echo $ro->name; ?>" class="textbox" name="name">
                                        
            <input type="hidden" name="id" value="<?php echo $ro->id; ?>" />
        </li>
        <li class="admission_form_div_label height-auto width-label-200 left">Update Details<span class="right">:</span></li>
                                <li class="admission_form_div_label height-auto width-label-250 right">
                                    <textarea name="text" id="text" placeholder="Type Notice Here" class="text_area"></textarea>
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
