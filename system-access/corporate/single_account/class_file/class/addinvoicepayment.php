<?php
include('../auth.php');
extract($_GET);
$branch_id=$_GET['branch_id'];
if($pa=='')
{
	$obj->Error("Select Payment Account","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
$pdate=date('Y-m-d');

if($amount=='')
{
	$obj->Error("Amount Should Not Be Empty","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}

if($obj->insert("account_module_invoice_payment",array("invoice_id"=>$invoice_id,"link_id"=>$link_id,"cid"=>$cid,"date"=>$pdate,"pa"=>$pa,"amount"=>$amount,"memo"=>$memo,"input_by"=>$uid,"branch_id"=>$branch_id,"status"=>0))==1)
{
	$obj->Success("Payment Successfully Made","../../addpayment.php?&id=".$invoice_id."&due=".$backdue."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
else
{
	$obj->Error("Payment Failed","../../addpayment.php?&id=".$invoice_id."&due=".$due."&cid=".$cid."&branch_id=".$branch_id."&link_id=".$link_id);
}
?>