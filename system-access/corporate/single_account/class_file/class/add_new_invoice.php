<?php
include('../auth.php');
$customer_id=$_POST['customer_id'];
$month_id=$_POST['month_id'];
$date=$_POST['date'];
$duedate=$_POST['duedate'];
$subheading=$_POST['subheading'];
$currency=$_POST['currency'];
$footer=$_POST['footer'];
$poso=$_POST['poso'];
$notes=$_POST['notes'];
$currentdate=date('Y-m-d');

$link_id=time();
$branch_id=$_POST['branch_id'];

$ladgername="Accounts Receivables"; //dr

$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
$time=time();
$obj->insert("account_module_invoice",array("invoice_id"=>$time,"link_id"=>$link_id,"customer_id"=>$customer_id,"month_id"=>$month_id,"date"=>$date,"duedate"=>$duedate,"subheading"=>$subheading,"currency"=>$currency,"footer"=>$footer,"poso"=>$poso,"notes"=>$notes,"status"=>0,"branch_id"=>$branch_id));
	
$jdid=$obj->SelectAllByVal("account_module_invoice","link_id",$link_id,"id");

$limit=$_POST['limit'];
$amtot=0;
for($i=1; $i<=$limit; $i++)
{	
	$itemid=$_POST["itemname$i"];
	$quantity=$_POST["quantity$i"];
	$price=$_POST["price$i"];
	$tax=$_POST["tax$i"];
	$rate=$obj->SelectAllByVal("account_module_newtax","id",$tax,"rate");
	$main_tax_id=$obj->SelectAllByVal("account_module_newtax","id",$tax,"main_id");
	$totalprice=$quantity*$price;
	$totalvat=$totalprice*$rate/100;
	$totalamount=$totalprice+$totalvat;
	$amtot+=$totalamount;
	$income_account_id=$obj->SelectAllByVal("stockvalidation","id",$itemid,"in_ac_id");
	$invoice_id="N".$jdid;
	$obj->insert("account_module_ladger",array("ladger_id"=>$ledgerid,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>$totalamount,"cradit"=>0,"branch_id"=>$branch_id));
	//dr value account reciveable
	$obj->insert("account_module_ladger",array("ladger_id"=>$income_account_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$totalprice,"branch_id"=>$branch_id));
	//cr value Income Account
	$obj->insert("account_module_ladger",array("ladger_id"=>$main_tax_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$totalvat,"branch_id"=>$branch_id));
	//cr value For Tax
	
	
	$obj->insert("account_module_invoice_detail",array("invoice_id"=>$jdid,"link_id"=>$link_id,"pid"=>$_POST["itemname$i"],"quantity"=>$_POST["quantity$i"],"price"=>$_POST["price$i"],"tax_id"=>$_POST["tax$i"],"tax_total"=>$totalvat,"subtotal"=>$totalprice,"totalamount"=>$totalamount,"status"=>0,"branch_id"=>$branch_id));   
}


/*$sql_fees_manage=$obj->SelectAllByID("fees_ledger",array("branch_id"=>$school));
if(!empty($sql_fees_manage))
foreach($sql_fees_manage as $manage):
	$new_fees_amount=($totalprice*$manage->percent)/100;
	$obj->insert("account_module_ladger",array("ladger_id"=>$manage->ledger_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$new_fees_amount,"branch_id"=>$school));
endforeach;
*/
$obj->Success("Invoice Successfully Saved.","../../invoices.php");



?>