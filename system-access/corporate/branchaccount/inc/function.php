<?php 

class medicals
{
	function blank($head,$name,$normal,$result)
	{
		include('../class_file/db_Class.php');
		$obj = new db_class();
		$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
		$s=0;
		foreach($_POST[$head] as $heads):
			$head_id=time();
			$s+=$obj->insert("custom_report_head",array("name"=>$heads,"head_id"=>$head_id,"date"=>date('Y-m-d'),"status"=>1,"branch_id"=>$branch_id));
			foreach($_POST[$name] as $names=>$val):
				$obj->insert("custom_report",
				array("name"=>$val,
				"normal"=>$_POST[$normal][$names],
				"result"=>$_POST[$result][$names],
				"head_id"=>$head_id,
				"date"=>date('Y-m-d'),
				"status"=>1,"branch_id"=>$branch_id));
			endforeach;	
		endforeach;
		if($s==0)
		{
			return 0;	
		}
		else
		{
			return 1;
		}
	}
}
?>