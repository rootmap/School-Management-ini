<?php 
if(!empty($pname)){
	if($obj->insert($table1,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"cprotine"=>$cprotine,"wtest"=>$wtest,"aso"=>$aso,"to"=>$to,"group"=>$group,"th"=>$th,"vdrl"=>$vdrl,"ah"=>$ah,"hbs"=>$hbs,"bh"=>$bh,"ra"=>$ra,"opinion"=>$opinion,"date"=>$joiningdate,"status"=>1))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	
?>