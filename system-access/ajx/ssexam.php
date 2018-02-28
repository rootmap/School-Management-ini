<?php
include("../class/auth.php");
$table="ams_exam_category_set";
$table1="ams_exam_category";
extract($_GET);
if($session!='')
{
	$exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class']));
    if(!empty($exam))
    foreach($exam as $sub):
	?>
                          
    <div class="slideThree left margin_left10 width-label-220 a-left padding_top10">	
            <label><input  onclick="switchexam(<?php echo $sub->exam_id;?>)" checked="checked" type="checkbox" id="exam_id" value="<?php echo $sub->exam_id;?>" name="exam_id" /> <?php echo $obj->SelectAllByVal($table1,"id",$sub->exam_id,"name");?></label>
    </div>
    <?php
    endforeach;
}
else
{
    ?>
Please Select All..
    <?php
}
?>
