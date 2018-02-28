<?php 
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(!empty($pname)){
	if($obj->insert($table2,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"bil"=>$bil,"sldh"=>$sldh,"sgt"=>$sgt,"cret"=>$cret,"gpt"=>$gpt,"cpk"=>$cpk,"salk"=>$salk,"urinamy"=>$urinamy,"sacid"=>$sacid,"uric"=>$uric,"scho"=>$scho,"scla"=>$scla,"shdl"=>$shdl,"spro"=>$spro,"sldl"=>$sldl,"corurin"=>$corurin,"trid"=>$trid,"fast"=>$fast,"urin"=>$urin,"ran"=>$ran,"scre"=>$scre,"oneafter"=>$oneafter,"bun"=>$bun,"twoafter"=>$twoafter,"samy"=>$samy,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
		
?>