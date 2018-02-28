<?php
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID']; 
if(!empty($pname)){
	if($obj->insert($table5,array("pid"=>$pid,"pname"=>$pname,"age"=>$age,"sex"=>$sex,"dname"=>$dname,"method"=>$method,"timeco"=>$timeco,"timee"=>$timee,"volume"=>$volume,"colour"=>$colour,"odour"=>$odour,"visc"=>$visc,"reaction"=>$reaction,"count"=>$count,"motile"=>$motile,"sactive"=>$sactive,"dead"=>$dead,"abno"=>$abno,"cells"=>$cells,"cell"=>$cell,"option"=>$option,"date"=>$joiningdate,"status"=>1,"branch_id"=>$branch_id))){
		echo $obj->Success("Successfully",$obj->filename()."?id=".$_GET['id']);
	   }else{
		echo $obj->Error("failed Please Try Again",$obj->filename()."?id=".$_GET['id']);
	   }
	}else{
		echo $obj->Error("Patient name are empty..",$obj->filename()."?id=".$_GET['id']);
	}
	
?>