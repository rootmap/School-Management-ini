<?php
include("../class/auth.php");
$table="ams_subject";
$table1="ams_exam_subject";
extract($_GET);
if($exam1!='')
{
    $array=array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach($data as $row)
    {
		$arrays=array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"subject_id"=>$row->id,"exam_id"=>$_GET['exam1'],"school_id"=>$school);
		$subjectcheck=$obj->exists_multiple($table1,$arrays);
		if($subjectcheck==0)
		{
			?>
			   <div class="slideThree left margin_left10 width-label-220 a-left padding_top10">	
					<label><input id="subject" onclick="showsubjectsave(this.value)" type="checkbox" value="<?php echo $row->id;?>" name="subject" /> <?php echo $row->name; ?></label>
				</div>
			<?php
		}
    }
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
