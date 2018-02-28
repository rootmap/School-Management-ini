<?php
/*include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();*/
$fulldate=date('d/m/Y');
$systemdate=date('Y-m-d');
$year=date('Y');

$query_a1=mysql_num_rows(mysql_query("SELECT * FROM invoice"));
$query_a2=mysql_num_rows(mysql_query("SELECT * FROM bill"));
	$acrec="Accounts Receivables";
$query_a3_q=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$acrec' LIMIT 1");
	$query_a3=0;
  $row_a3=mysql_fetch_array($query_a3_q);
		$res_ac_rec=$row_a3['id'];	 
		$query_new_ac=mysql_query("SELECT * FROM ladger WHERE ladger_id='$res_ac_rec'");
		   while($res_row_ac_res=mysql_fetch_array($query_new_ac))
		   {
			 $query_a3+=$res_row_ac_res['debit']-$res_row_ac_res['cradit'];   
		   }
	$acpay="Accounts Payable";
$query_a4_q=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$acrec' LIMIT 1");
	$query_a4=0;
  $row_a4=mysql_fetch_array($query_a4_q);
		$res_ac_pay=$row_a4['id'];	 
		$query_new_pay_ac=mysql_query("SELECT * FROM ladger WHERE ladger_id='$res_ac_rec'");
		   while($res_row_ac_pay=mysql_fetch_array($query_new_pay_ac))
		   {
			 $query_a4+=$res_row_ac_pay['debit']-$res_row_ac_pay['cradit'];   
		   }
		   
$query_a5=mysql_num_rows(mysql_query("SELECT * FROM invoice WHERE date='$fulldate'"));
$query_a6=mysql_num_rows(mysql_query("SELECT * FROM bill WHERE date='$fulldate'"));
	  
	$acpay_sales="Accounts Receivables";
$query_a4_q_sales=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$acrec' LIMIT 1");
	$query_a4_sales=0;
  $row_a4_sales=mysql_fetch_array($query_a4_q_sales);
		$res_ac_pay_sales=$row_a4_sales['id'];	 
		$query_new_pay_ac_sales=mysql_query("SELECT * FROM ladger WHERE ladger_id='$res_ac_pay_sales' AND  ladger_date='$systemdate'");
		   while($res_row_ac_pay_sales=mysql_fetch_array($query_new_pay_ac_sales))
		   {
			 $query_a4_sales+=$res_row_ac_pay_sales['debit']-$res_row_ac_pay_sales['cradit'];   
		   }
	$acpay_payable="Accounts Payable";
$query_a4_q_payable=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_name='$acrec' LIMIT 1");
	$query_a4_payable=0;
  $row_a4_payable=mysql_fetch_array($query_a4_q_payable);
		$res_ac_pay_payable=$row_a4_payable['id'];	 
		$query_new_pay_ac_payable=mysql_query("SELECT * FROM ladger WHERE ladger_id='$res_ac_pay_payable' AND  ladger_date='$systemdate'");
		   while($res_row_ac_pay_payable=mysql_fetch_array($query_new_pay_ac_payable))
		   {
			 $query_a4_payable+=$res_row_ac_pay_payable['debit']-$res_row_ac_pay_payable['cradit'];   
		   }		   

$sql_query_8=mysql_query("SELECT * FROM income_statement WHERE year='$year'");		   
$fet_sql8=mysql_fetch_array($sql_query_8);
$netprofit=$fet_sql8['amount'];
$totalincome=$fet_sql8['totalincome'];
$directexpense=$fet_sql8['directexpense'];
$grossprofit=$fet_sql8['grossprofit'];
$lastindate=$fet_sql8['date'];

$sql_query_9=mysql_query("SELECT * FROM  balancesheet WHERE year='$year'");		   
$fet_sql9=mysql_fetch_array($sql_query_9);
$totalasset=$fet_sql9['totalasset'];
$totalliability=$fet_sql9['totalliability'];
$totalequity=$fet_sql9['totalequity'];
$lastindate_balance=$fet_sql9['date'];

?>