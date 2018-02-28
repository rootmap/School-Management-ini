<?php
include('../auth.php');
extract($_GET);
if($main=='')
{
	$obj->Error("Select Account Catagory","../../index.php");
}
if($account=='')
{
	$obj->Error("Account Should Not Be Empty","../../index.php");
}
		
if(($main!=0) && ($submain==0) && ($hd==0))
{	
	//$maintab=mysql_query("SELECT * FROM list_of_head_accounts WHERE id='$main'");
	//$tabrow=mysql_fetch_array($maintab);
	$tab=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"tab_name");
	$tabn=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"head_title");
	$status=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"status");
	
	
	$chkmain=$obj->exists_multiple("account_module_".$tab,array("head_title"=>$account));
	if($chkmain==0)
	{
		$sql=$obj->insert("account_module_".$tab,array("list_of_head_accounts_id"=>$main,"head_title"=>$account,"status"=>$status,"branch_id"=>$branch_id));
		if($sql)
		{
			$obj->Success("Account Successfully Made","../../index.php?id=1");
		}
	}
	else
	{
		$obj->Success("Account Already Exist in ".$tabn,"../../index.php?id=1");
	}
}
elseif(($main!=0) && ($submain!=0) && ($hd==0))
{	
	//$maintab=$obj->SelectAllByID("list_of_head_accounts",array("id"=>$main));
	//$tabrow=mysql_fetch_array($maintab);
	$tab=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"tab_name");
	$tabn=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"head_title");
	$status=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"status");
	
	$realsubmainid=substr($submain,1,100);
	
	$chkmain=$obj->exists_multiple("account_module_head_list",array("head_title"=>$account));
	if($chkmain==0)
	{
		//$sql=$obj->insert("account_module_head_list",array("list_of_head_accounts_id"=>$main,"list_of_sub_head_accounts_id"=>$realsubmainid,"head_title"=>$account,"status"=>$status));
		if($obj->insert("account_module_head_list",array("list_of_head_accounts_id"=>$main,"list_of_sub_head_accounts_id"=>$realsubmainid,"head_title"=>$account,"status"=>$status,"branch_id"=>$branch_id))==1)
		{
			$obj->Success("Account Successfully Made","../../index.php?id=2");
		}
	}
	else
	{
		$obj->Success("Account Already Exist in ".$tabn,"../../index.php?id=1");
	}
}
elseif(($main!=0) && ($submain!=0) && ($hd!=0))
{	
	//$maintab=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"");
	//$tabrow=mysql_fetch_array($maintab);
	$tab=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"tab_name");
	$tabn=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"head_title");
	$status=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"status");
	
	$realsubmainid=substr($submain,1,100);
	
	$chkmain=$obj->exists_multiple("account_module_head_sub_list",array("head_title"=>$account));
	if($chkmain==0)
	{
		if($obj->insert("account_module_head_sub_list",array("list_of_head_accounts_id"=>$main,"list_of_sub_head_accounts_id"=>$realsubmainid,"list_of_sub_head_list_id"=>$hd,"head_title"=>$account,"status"=>$status,"branch_id"=>$branch_id))==1)
		{
			$obj->Error("Account Successfully Made","../../index.php");
		}
	}
	else
	{
		$obj->Error("Account Already Exist in ".$tabn,"../../index.php");
	}
}
else
{
	$obj->Error("Process Failed to create an Empty Account.".$tabn,"../../index.php");
}









?>