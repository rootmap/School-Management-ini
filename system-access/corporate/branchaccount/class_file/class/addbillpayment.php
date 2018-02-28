<?php
include('../auth.php');
extract($_GET);
$link_id=$_GET['link_id'];
$vendor_id=$_GET['vendor_id'];
if($pa=='')
{
	$obj->Error("Select Payment Account","../../addpayment_bill.php?&id=".$invoice_id."&due=".$due."&link_id=".$link_id."&vendor_id=".$vendor_id."&branch_id=".$branch_id);
}
$pdate=date('Y-m-d');

if($amount=='')
{
	$obj->Error("Amount Should Not Be Empty","../../addpayment_bill.php?&id=".$invoice_id."&due=".$due."&link_id=".$link_id."&vendor_id=".$vendor_id."&branch_id=".$branch_id);
}
		

if($obj->insert("account_module_bill_payment",array("bill_id"=>$invoice_id,"date"=>$pdate,"pa"=>$pa,"amount"=>$amount,"memo"=>$memo,"branch_id"=>$branch_id,"vendor_id"=>$vendor_id,"link_id"=>$link_id))==1)
{
	$ladgername="Accounts Payable"; //dr
	
	$accreciveableladger=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");	
	$invoice="B".$invoice_id;
	
	$obj->insert("account_module_ladger",array("ladger_id"=>$pa,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>"0","cradit"=>$amount,"branch_id"=>$branch_id));
	
    $obj->insert("account_module_ladger",array("ladger_id"=>$accreciveableladger,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$amount,"cradit"=>"0","branch_id"=>$branch_id));

	
	$obj->Success("Payment Paid Successful","../../addpayment_bill.php?&id=".$invoice_id."&due=".$due."&link_id=".$link_id."&vendor_id=".$vendor_id."&branch_id=".$branch_id);
}
else
{
	$obj->Error("Failed, Try Again","../../addpayment_bill.php?&id=".$invoice_id."&due=".$due."&link_id=".$link_id."&vendor_id=".$vendor_id."&branch_id=".$branch_id);
}





?>