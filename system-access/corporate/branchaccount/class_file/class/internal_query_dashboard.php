<?php
/*include('../db_Class.php');
$obj = new db_class();
*/
$fulldate=date('d/m/Y');
$systemdate=date('Y-m-d');
$year=date('Y');

$query_a1=$obj->totalrows("account_module_invoice");
$query_a2=$obj->totalrows("account_module_bill");
	
	$acrec="Accounts Receivables";
	
	$query_a3_q=$obj->SelectAllByID_Multiple_limit("account_module_ladger_list_properties",array("head_sub_list_name"=>$acrec),"1");
	$query_a3=0;
	if(!empty($query_a3_q))
	{
		foreach($query_a3_q as $row_a3)
		{
			$res_ac_rec=$row_a3->id;	 
			$query_new_ac=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$res_ac_rec));
			   if(!empty($query_new_ac))
			   foreach($query_new_ac as $res_row_ac_res)
			   {
				 $query_a3+=$res_row_ac_res->debit-$res_row_ac_res->cradit;   
			   }
		}
	}
	
	$acpay="Accounts Payable";
	$query_a4_q=$obj->SelectAllByID_Multiple_limit("account_module_ladger_list_properties",array("head_sub_list_name"=>$acrec),"1");
		$query_a4=0;
		if(!empty($query_a4_q))
  		foreach($query_a4_q as $row_a4)
		{
			$res_ac_pay=$row_a4->id;	 
			$query_new_pay_ac=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$res_ac_rec));
			   if(!empty($query_new_pay_ac))
			   foreach($query_new_pay_ac as $res_row_ac_pay)
			   {
				 $query_a4+=$res_row_ac_pay->debit-$res_row_ac_pay->cradit;   
			   }
		}
		   
$query_a5=$obj->exists_multiple("account_module_invoice",array("date"=>$fulldate));
$query_a6=$obj->exists_multiple("account_module_bill",array("date"=>$fulldate));
	  
	$acpay_sales="Accounts Receivables";
$query_a4_q_sales=$obj->SelectAllByID_Multiple_limit("account_module_ladger_list_properties",array("head_sub_list_name"=>$acrec),"1");
	$query_a4_sales=0;
		if(!empty($query_a4_q_sales))
  		foreach($query_a4_q_sales as $row_a4_sales)
		{
			$res_ac_pay_sales=$row_a4_sales->id;	 
			$query_new_pay_ac_sales=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$res_ac_pay_sales,"ladger_date"=>$systemdate));
			if(!empty($query_new_pay_ac_sales))
		   	foreach($query_new_pay_ac_sales as $res_row_ac_pay_sales)
		   	{
				$query_a4_sales+=$res_row_ac_pay_sales->debit-$res_row_ac_pay_sales->cradit;   
		   	}
		}
		   
	$acpay_payable="Accounts Payable";
$query_a4_q_payable=$obj->SelectAllByID_Multiple_limit("account_module_ladger_list_properties",array("head_sub_list_name"=>$acrec),"1");
		$query_a4_payable=0;
		if(!empty($query_a4_q_payable))
  		foreach($query_a4_q_payable as $row_a4_payable)
		{
		   $res_ac_pay_payable=$row_a4_payable->id;	 
		   $query_new_pay_ac_payable=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$res_ac_pay_payable,"ladger_date"=>$systemdate));
		   if(!empty($query_new_pay_ac_payable))
		   foreach($query_new_pay_ac_payable as $res_row_ac_pay_payable)
		   {
			 $query_a4_payable+=$res_row_ac_pay_payable->debit-$res_row_ac_pay_payable->cradit;   
		   }		
		}

$netprofit=$obj->SelectAllByVal("account_module_income_statement","year",$year,"amount");
$totalincome=$obj->SelectAllByVal("account_module_income_statement","year",$year,"totalincome");
$directexpense=$obj->SelectAllByVal("account_module_income_statement","year",$year,"directexpense");
$grossprofit=$obj->SelectAllByVal("account_module_income_statement","year",$year,"grossprofit");
$lastindate=$obj->SelectAllByVal("account_module_income_statement","year",$year,"date");


$totalasset=$obj->SelectAllByVal("account_module_balancesheet","year",$year,"totalasset");
$totalliability=$obj->SelectAllByVal("account_module_balancesheet","year",$year,"totalliability");
$totalequity=$obj->SelectAllByVal("account_module_balancesheet","year",$year,"totalequity");
$lastindate_balance=$obj->SelectAllByVal("account_module_balancesheet","year",$year,"date");

?>















