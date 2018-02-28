<?php
include("../class/auth.php");
$table="ams_section";
extract($_GET);
$obj->insert("student_subject",array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class_id,"group_id"=>$group_id,"user_id"=>$input_by,"student_id"=>$admission,"subject_id"=>$subject_id,"date"=>date('Y-m-d'),"status"=>$sts));

?>
