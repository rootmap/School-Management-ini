<?php
include_once('../class/auth.php');
$table="ams_grading_system_dateils";
extract($_GET);
if($ss!='')
{
	
    if($obj->delete($table,array("school_id"=>$id))==1)
	 {
	echo "Successfully Deleted...";
	 }
	else
	{
		echo "fff";
	}

}else{
	echo "ff";
}
?>