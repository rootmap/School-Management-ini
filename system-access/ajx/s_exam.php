<?php
include("../class/auth.php");
$table="ams_exam_category_set";
extract($_GET);
if($exam_id!='')
{

	$exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class']));
    if(!empty($exam))
    foreach($exam as $sub):
	?>
                            
    <div class="slideThree left margin_left30 width-label-200 a-left padding_top10">	
            <label><input checked="checked"  onclick="switchexamx(<?php echo $sub->id;?>)"  type="checkbox" id="exam_id" value="<?php echo $sub->id;?>" name="exam_id" />
                <?php echo $obj->SelectAllByVal("ams_exam_category","id",$sub->exam_id,"name");?></label>
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
