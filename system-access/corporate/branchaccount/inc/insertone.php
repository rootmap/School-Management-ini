<?php 
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(!empty($pname)){
	if($obj->insert($table,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"esc"=>$esc,"hemo"=>$hemo,"poly"=>$poly,"rbc"=>$rbc,"lym"=>$lym,"wbc"=>$wbc,"mono"=>$mono,"pleat"=>$pleat,"eosi"=>$eosi,"circu"=>$circu,"baso"=>$baso,"reticu"=>$reticu,"other"=>$other,"btime"=>$btime,"ctime"=>$ctime,"ptime"=>$ptime,"malay"=>$malay,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	?>