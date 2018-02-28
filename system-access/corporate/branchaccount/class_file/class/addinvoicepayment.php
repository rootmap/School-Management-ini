<?php
include('../auth.php');
extract($_GET);
if($pa=='')
{
	$obj->Error("Select Payment Account","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
$pdate=date('Y-m-d');

if($amount=='')
{
	$obj->Error("Amount Should Not Be Empty","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}

if($obj->insert("account_module_invoice_payment",array("invoice_id"=>$invoice_id,"link_id"=>$link_id,"cid"=>$cid,"date"=>$pdate,"pa"=>$pa,"amount"=>$amount,"memo"=>$memo,"branch_id"=>$branch_id))==1)
{
	$ladgername="Accounts Receivables"; //dr

$accreciveableladger=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
			
$invoice="N".$invoice_id;
$obj->insert("account_module_ladger",array("ladger_id"=>$pa,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$amount,"cradit"=>0,"branch_id"=>$branch_id));
$obj->insert("account_module_ladger",array("ladger_id"=>$accreciveableladger,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>0,"cradit"=>$amount,"branch_id"=>$branch_id));		

$backdue=$due-$amount;
	
	$obj->Success("Payment Successfully Made","../../addpayment.php?&id=".$invoice_id."&due=".$backdue."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
else
{
	$obj->Error("Payment Failed","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
?>