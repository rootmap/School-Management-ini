<?php 
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(!empty($pname)){
	if($obj->insert($table4,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"consistency"=>$consistency,"ova"=>$ova,"colour"=>$colour,"cysts"=>$cysts,"reaction"=>$reaction,"larva"=>$larva,"mucus"=>$mucus,"rbc"=>$rbc,"blood"=>$blood,"pus"=>$pus,"occult"=>$occult,"vegetable"=>$vegetable,"reducing"=>$reducing,"fat"=>$fat,"substance"=>$substance,"others"=>$others,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	?>