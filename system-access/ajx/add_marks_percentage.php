<?php
include("../class/auth.php");
$table="ams_exam_category_set";
extract($_GET);
if($df!='')
{
	$session_id=$obj->SelectAllByVal("ams_class","id",$df,"session_id");
	$exam=$obj->SelectAllByID_Multiple($table,array("session_id"=>$session_id,"class_id"=>$df));
    $d=0;
	?>
    <input type="hidden" id="totalfid" value="<?php echo count($exam); ?>" />
    <?php
	if(!empty($exam))
    foreach($exam as $sub):
	?>
        <tr>
            <td><?php echo $d; ?><input id="eid_<?php echo $d; ?>" type="hidden" value="<?php echo $sub->exam_id;  ?>" /></td>
            <td><?php echo $obj->SelectAllByVal("ams_exam_category","id",$sub->exam_id,"name");?></td>
            <td><label> Input Marks Percentage : <input id="fid_<?php echo $d; ?>" type="text" value="10" class="textbox space-top-2 width-label-70" /> % </label></td>
        </tr>                        
    <?php   
	$d++;                   
    endforeach;
}
else
{
    ?>
Please Select All..
    <?php
}
?>
