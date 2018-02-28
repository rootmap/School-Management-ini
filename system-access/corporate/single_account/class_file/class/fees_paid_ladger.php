<?php
include('../auth.php');
extract($_GET);
$branch_id=$school;
if($subhead=='')
{
	$obj->Error("Account sub Should Not Be Empty","../../fees_paid_ledger.php");
}
if($name=='')
{
	$obj->Error("Account Should Not Be Empty","../../fees_paid_ledger.php");
}
if($status=='')
{
	$obj->Error("Account Should Not Be Empty","../../fees_paid_ledger.php");	
}

	//$chkmain=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE "));
	
		//$sql=mysql_query("INSERT INTO  ladger_list_properties VALUES ('','','','','','')");
		if($obj->insert("account_module_ladger_list_properties",array("main_head_id"=>$subhead,"head_sub_list_id"=>$id,"head_sub_list_name"=>$name,"status"=>$status,"branch_id"=>$branch_id))==1)
		{
			$ledid=$obj->SelectAllByVal3("account_module_ladger_list_properties","main_head_id",$subhead,"head_sub_list_id",$id,"head_sub_list_name",$name,"id");
			$obj->insert("fees_paid_ledger",array("ledger_id"=>$ledid,"branch_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
			$obj->Success("Account Successfully Made","../../fees_paid_ledger.php");
		}
		else
		{
			$ledid=$obj->SelectAllByVal3("account_module_ladger_list_properties","main_head_id",$subhead,"head_sub_list_id",$id,"head_sub_list_name",$name,"id");
			$obj->insert("fees_paid_ledger",array("ledger_id"=>$ledid,"branch_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
			$obj->Success("Account Successfully Made","../../fees_paid_ledger.php");
		}
	
?>