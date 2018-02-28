<?php
include("../class/auth.php");
$table="ams_massages_book";
extract($_GET);
if($s!='')
{
	
	?>
    <?php
	$array=array("id"=>$s,"school_id"=>$school);
   $data=$obj->SelectAllByID_Multiple($table,$array);
	
	foreach ($data as $ro):
    
    ?>
<form action="" method="post" name="uuu">
    <ul class="admission_form_div width-col2 auto-position">
                                <li class="admission_form_div_label height-30 width-label-200 left">Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type massages book Name" value="<?php echo $ro->name; ?>" name="namee" id="namee" type="text" class="textbox"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>" />
                                </li>
                                
                                
                                <li class="admission_form_div_label height-auto width-label-200 left">Details<span class="right">:</span></li>
                                <li class="admission_form_div_label height-auto width-label-250 right">
                                    <textarea name="text" id="text" placeholder="Type massages book" class="text_area">
                                      <?php echo $ro->details; ?>
                                    </textarea>
                                    
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="update" class=" height-35 div_btn"> Update </button>
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
