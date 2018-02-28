<?php
	include('../auth.php');
	
	extract($_POST);
	$currentdate=date('Y-m-d');
$time=time();
$link_id=$time;
$sql=$obj->insert("account_module_office_expense_voucher",array("expense_id"=>$time,"vdate"=>$date,"dr"=>$dr,"cr"=>$cr,"description"=>$des,"taka"=>$taka,"currentdate"=>$currentdate,"branch_id"=>$branch_id,"link_id"=>$link_id,"input_by"=>$uid));

$jdid=$obj->SelectAllByVal("account_module_office_expense_voucher","expense_id",$time,"id");

 $voucherid="O".$jdid;

	
	$obj->insert("account_module_ladger",array("ladger_id"=>$dr,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>$taka,"cradit"=>0,"branch_id"=>$branch_id,"link_id"=>$link_id));//dr value account Paytanble
	
	$obj->insert("account_module_ladger",array("ladger_id"=>$cr,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$taka,"branch_id"=>$branch_id,"link_id"=>$link_id));//dr value account Paytanble
	
	
	$obj->Success("Successfully Saved","../../add_officeexpense_voucher.php");
			

	
	
?>