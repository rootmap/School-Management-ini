<?php
include("../class/auth.php");
$table="ams_exam_category";
$table1="ams_exam_category_set";

extract($_GET);
if($class!='')
{
	$exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class']));
    if(!empty($exam))
    foreach($exam as $sub):
	if($obj->exists_multiple($table1,array("exam_id"=>$sub->id,"school_id"=>$school))==0)
	{
		?>                  
		<div class="slideThree margin_left10 width-label-220 a-left padding_top10">	
		  <label><input onclick="switchexam(<?php echo $sub->id;?>)" type="checkbox" id="exam_id" value="<?php echo $sub->id;?>" name="exam_id" /> <?php echo $sub->name;?></label>
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
