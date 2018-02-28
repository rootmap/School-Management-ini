<?php
include_once('../class/auth.php');
extract($_GET);
if($str==1)
{
	$chk=$obj->exists_multiple("ams_sms_attendance",array("admission"=>$fid,"school"=>$school,"date"=>date('Y-m-d')));
	if($chk==0)
	{
	   $obj->insert("ams_sms_attendance",array("admission"=>$fid,"school"=>$school,"date"=>date('Y-m-d'),"status"=>0));
	   $label="<font color='#FF0000'>A</font>";
	   echo $label;
	}
	else
	{
	   $student_present=$obj->SelectAllByVal3("ams_sms_attendance","school",$school,"admission",$fid,"date",date('Y-m-d'),"status");
	   $student_present_id=$obj->SelectAllByVal3("ams_sms_attendance","school",$school,"admission",$fid,"date",date('Y-m-d'),"id");
	   if($student_present==0)
	   {
		  $type=1;
		  $label="<font color='#09f'>P</font>";
	   }
	   elseif($student_present==1)
	   {
		  $type=0;
		  $label="<font color='#FF0000'>A</font>";
	   }
	   
		   $obj->delete("ams_sms_attendance",
		  array("id"=>$student_present_id));
		  echo $label; 
	   exit();
	   
	}
	
}
elseif($str==2)
{
	echo "<font color='#FF0000'>P</font>";
}