<?php
include("../class/auth.php");
$table="ams_student_attendance";
extract($_GET);
if($k!='')
{
	 if($obj->exists_Multiple($table,array("admission"=>$admission,"class_id"=>$class,"school_id"=>$school))==0)
		 {
			 if($obj->insert($table,array("admission"=>$admission,"class_id"=>$class,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
			 {
				 echo $post_id; "ss";
			 }
			 else
			 {
				 echo "f";
			 }
		 
		 }
	  
	
else
{
   
}
}
?>
