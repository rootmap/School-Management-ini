<?php
	include('../auth.php');

	extract($_POST);
	$branch_id=$_POST['branch_id'];
	$sql=$obj->increment_field1("account_module_salary_voucher",array("id"=>$id,"due"=>$due),"paid",$paid);
		
	//Checking Account 
	$cr=12;
	
	$currentdate=date('Y-m-d');
	$voucherid="S".$id;
	$ladgername="Accounts Payable"; //cr

	$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
	
	$obj->insert("account_module_ladger",array("ladger_id"=>$ledgerid,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>$paid,"cradit"=>0,"branch_id"=>$branch_id,"link_id"=>$link_id));
	
	//dr value account Paytanble
	$obj->insert("account_module_ladger",array("ladger_id"=>$cr,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$paid,"branch_id"=>$branch_id,"link_id"=>$link_id));	
									
	$obj->Success("Success Fully Added","../../view_transaction_salary.php?id=".$id."&link_id=".$link_id."&branch_id=".$branch_id);

	
	
	
?>
