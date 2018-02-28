<?php
include("../class/auth.php");
$table = "ams_exam_subject";
extract($_GET);
if ($id!= '') {

    $obj->delete($table, array("id" => $id));

    $exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"exam_id"=>$_GET['exam1'],"school_id"=>$school));
    if(!empty($exam))
    foreach($exam as $sub):
	?>
                            
    <div class="slideThree left margin_left30 width-label-200 a-left padding_top10">	
            <label><input checked="checked" onclick="delsubject(<?php echo $sub->id;?>)"  type="checkbox" id="" value="<?php echo $sub->id;?>"  />
                <?php echo $obj->SelectAllByVal("ams_subject","id",$sub->subject_id,"name");?></label>
    </div>
    <?php                      
    endforeach;
}
else {
    ?>
    Please Select All..
    <?php
}
?>
