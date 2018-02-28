<?php 
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(!empty($pname)){
	if($obj->insert($table3,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"ptest"=>$ptest,"pus"=>$pus,"rbc"=>$rbc,"epcel"=>$epcel,"colore"=>$colore,"calcium"=>$calcium,"appe"=>$appe,"trip"=>$trip,"sediment"=>$sediment,"casts"=>$casts,"sp"=>$sp,"sulp"=>$sulp,"amor"=>$amor,"sugar"=>$sugar,"seper"=>$seper,"albumin"=>$albumin,"others"=>$others,"reaction"=>$reaction,"excess"=>$excess,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	?>