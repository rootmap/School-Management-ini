<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	

	$branch_id=$_POST['branch_id'];
	$customer_id=$_POST['customer_id'];
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

	
	$ladgername="Accounts Payable"; //cr
	
	$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
	$time=time();
	$obj->insert("account_module_bill",array("bill_id"=>$time,"link_id"=>$link_id,"vendor_id"=>$customer_id,"date"=>$date,"duedate"=>$duedate,"subheading"=>$subheading,"currency"=>$currency,"footer"=>$footer,"poso"=>$poso,"notes"=>$notes,"status"=>0,"branch_id"=>$branch_id));
$jdid=$obj->SelectAllByVal("account_module_bill","link_id",$link_id,"id");

$limit=$_POST['limit'];

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
	

	$income_account_id=$obj->SelectAllByVal("stockvalidation","id",$itemid,"in_ac_id");
	$invoice_id="B".$jdid;
	
	$obj->insert("account_module_ladger",array("ladger_id"=>$ledgerid,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$totalamount,"branch_id"=>$branch_id));
	
	$obj->insert("account_module_ladger",array("ladger_id"=>$income_account_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>$totalamount,"cradit"=>0,"branch_id"=>$branch_id));

	$obj->insert("account_module_payabletax",array("ladger_id"=>$main_tax_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>$totalvat,"cradit"=>0,"branch_id"=>$branch_id));
   
   $obj->insert("account_module_bill_detail",array("bill_id"=>$jdid,"link_id"=>$link_id,"pid"=>$_POST["itemname$i"],"quantity"=>$_POST["quantity$i"],"price"=>$_POST["price$i"],"tax_id"=>$_POST["tax$i"],"tax_total"=>$totalvat,"subtotal"=>$totalprice,"totalamount"=>$totalamount,"status"=>0,"branch_id"=>$branch_id));
   
}

$obj->Success("Success Fully Added","../../bill.php");
?>