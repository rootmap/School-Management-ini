<?php
include("../class/auth.php");
$table="ams_exam_result";
$table1="ams_singup";
extract($_GET);
if($d!='')
{
	$chk=$obj->exists_multiple($table1,array("board_id"=>2));                  			   
	if($chk==0) 
	{
		include('technial_data1.php');
	}
	else
	{ 
		include('general_data1.php');
	}
}
else
{
    ?>
		<option value="">Not Selected</option>
    <?php
}
?>