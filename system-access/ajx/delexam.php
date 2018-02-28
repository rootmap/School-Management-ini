<?php
include("../class/auth.php");
$table="ams_exam_category_set";
$table1="ams_exam_category";
extract($_GET);
if($exam_id!='')
{
	$ar=array("id"=>$_GET['exam_id']);
	$obj->delete($table,$ar);	
	
	
	$exam=$obj->SelectAllByID_Multiple($table1,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class']));
    if(!empty($exam))
    foreach($exam as $sub):
	
	if($obj->exists_multiple($table,array("exam_id"=>$sub->id,"session_id"=>$_GET['session'],"class_id"=>$_GET['class']))==0){

	?>
                          
    <div class="slideThree left margin_left30 width-label-200 a-left padding_top10">	
            <label><input onclick="switchexam(<?php echo $sub->id;?>)" type="checkbox" id="exam_id" value="<?php echo $sub->id;?>" name="exam_id" />
                <?php echo $sub->name;?></label>
    </div>
    <?php
	}
    endforeach;
}
else
{
    ?>
Please Select All..
    <?php
}
?>
