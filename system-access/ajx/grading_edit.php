<?php
include("../class/auth.php");
$table="ams_grading_system_dateils";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
    foreach($data as $row):
    
    ?><form action="" method="post" name="gread">
     <div id="subjectshow" class="admission_form_div width-col2 auto-position" style="height:auto;">
                            <form method="post" name="addgroup" action="" enctype="multipart/form-data">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Range of marks(%)<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row->range_1; ?>" style="width:37%;" placeholder="Range One" name="rangeone" class="textbox left"/>
                                    <input value="<?php echo $row->range_2; ?>" style="width:37%;" placeholder="Range Two" name="rangetwo" class="textbox left"/>
                                    <input value="<?php echo $row->id; ?>" name="id" type="hidden" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Letter Grade<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row->letter; ?>" placeholder="Type Letter Grade Here" name="ff" class="textbox"/>
                                </li>
                                
                                 <li class="admission_form_div_label height-30 width-label-200 left">Grade Point<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row->point; ?>" placeholder="Type Grade Point Here" name="fff" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
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
Not Selected
    <?php
}
?>
