<?php
include("../class/auth.php");
$table="ams_exam_category_set";
extract($_GET);
if($exam_id!='')
{
	$ar=array("exam_id"=>$_GET['exam_id'],"session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1);
	if($obj->exists_multiple($table,$ar)==0)
	{
		$obj->insert($table,$ar);	
	}
	else
	{
		$arid=$obj->SelectAllByVal2($table,"exam_id",$exam_id,"school_id",$school,"id");
		$obj->delete($table,array("id"=>$arid));
	}
	$exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
    if(!empty($exam))
    foreach($exam as $sub):
	?>
                            
    <div class="slideThree left margin_left10 width-label-200 a-left padding_top10">	
            <label><input checked="checked" onclick="switchexam(<?php echo $sub->exam_id; ?>)"  type="checkbox" id="exam_id" value="<?php echo $sub->exam_id;?>" name="exam_id" />
                <?php echo $obj->SelectAllByVal("ams_exam_category","id",$sub->exam_id,"name");?> </label>
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
