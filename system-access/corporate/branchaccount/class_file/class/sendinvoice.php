<?php
session_start();
include('../db_Class.php');
$obj = new db_class();

$errmsg_arr = array();
$errflag = false;

extract($_POST);
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];		
$sql_com_detail=mysql_query("SELECT * FROM company_user WHERE id='1'");
$fetdetail=mysql_fetch_array($sql_com_detail);

$sql_com_detail=mysql_query("SELECT * FROM company_user WHERE id='1'");
$fetdetail=mysql_fetch_array($sql_com_detail);

//nl2br
$ToEmail = $email;
$EmailSubject ='Invoice Detail Ticket ID : '.$id;
$mailheader = "From: ".$fetdetail['email']."\r\n";
$mailheader .= "Reply-To: ".$fetdetail['email']."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Invoice No : ".$id."";
$MESSAGE_BODY .="<table><thead><tr><th></th><th>Invoice Date</th><th>Number</th><th>Customer</th><th>Amount Due</th><th>Total</th><th>Status</th></tr></thead><tbody>";
$asd=mysql_query("SELECT * FROM invoice WHERE id='$id'");
while($row=mysql_fetch_array($asd)) 
{
	$inid=$row['id']; $getdutotal=mysql_query("SELECT * FROM invoice_detail WHERE invoice_id='$inid'"); $totaldue=0; $total=0;									while($due=mysql_fetch_array($getdutotal)){ $totaldue+=$due['subtotal']; $total+=$due['subtotal']; }
	$sql_payment=mysql_query("SELECT * FROM invoice_payment WHERE invoice_id='$inid'"); $p=0;
	while($ip=mysql_fetch_array($sql_payment)) 
	{ $p+=$ip['amount']; }
	
$MESSAGE_BODY .="<tr><td valign='middle' align='center' style='width:30px;'></td><td valign='middle' align='center'>".$row['date']."</td><td align='center' valign='middle'>Invoice ".$row['id']."</td><td align='center' valign='middle'>".$fetuser['company_name']."</td><td align='center' valign='middle'>".$totaldue-$p."</td><td align='center' valign='middle'>".$total."</td><td align='center' valign='middle'>";
$status=$row['status'];
if($status==0){ 
$MESSAGE_BODY .="<button type='button' class='btn btn-small' disabled='disabled'><font color='#FF0000'>Unpaid</font></button>"; 
}
elseif($status==1){ $MESSAGE_BODY .="<button type='button' class='btn btn-warning btn-small' disabled='disabled'>Partial</button>"; }
elseif($status==2){ $MESSAGE_BODY .="<button type='button' class='btn btn-success btn-small' disabled='disabled'>Paid</button></td></tr>"; }
}
$MESSAGE_BODY .="</tbody></table>";

mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 	
	
	$errmsg_arr[] = 'Mail Has Been Sent';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../invoices.php");
	exit();
			}






?>