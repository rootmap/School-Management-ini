<?php 
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(!empty($pname)){
	if($obj->insert($table6,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"injection"=>$injection,"am"=>$am,"resutl"=>$resutl,"pm"=>$pm,"resultat"=>$resultat,"injectionis"=>$injectionis,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	
?>