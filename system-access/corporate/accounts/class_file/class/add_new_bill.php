<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();

	
	$customer_id=$_POST['customer_id'];
	$date=$_POST['date'];
	$duedate=$_POST['duedate'];
	$subheading=$_POST['subheading'];
	$currency=$_POST['currency'];
	$footer=$_POST['footer'];
	$poso=$_POST['poso'];
	$notes=$_POST['notes'];
	$currentdate=date('Y-m-d');

	
	$ladgername="Accounts Payable"; //cr
	
	$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
		$sqlledfet=mysql_fetch_array($sqlled);
		$ledgerid=$sqlledfet['id'];
	
	
$sql=mysql_query("INSERT INTO bill VALUES ('id','$customer_id','$date','$duedate','$subheading','$currency','$footer','$poso','$notes','0')");
$jdid=mysql_insert_id();

$limit=$_POST['limit'];

for($i=1; $i<=$limit; $i++)
{	
	$itemid=$_POST["itemname$i"];
	$quantity=$_POST["quantity$i"];
	$price=$_POST["price$i"];
	$tax=$_POST["tax$i"];
	$querytaxrate=mysql_query("SELECT * FROM newtax WHERE id='$tax'");
	$fetrate=mysql_fetch_array($querytaxrate);
	$rate=$fetrate['rate'];
	$main_tax_id=$fetrate['main_id'];
	$totalprice=$quantity*$price;
	$totalvat=$totalprice*$rate/100;
	$totalamount=$totalprice+$totalvat;
	
	$sqlitemq=mysql_query("SELECT * FROM buy_product WHERE id='$itemid'");
	$fetid=mysql_fetch_array($sqlitemq);
	$income_account_id=$fetid['in_ac_id'];
	$invoice_id="B".$jdid;
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$ledgerid','$invoice_id','$currentdate', '0', '$totalamount')");//dr value account Paytanble
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$income_account_id','$invoice_id','$currentdate', '$totalamount', '0')");//cr value Income Account
	mysql_query("INSERT INTO payabletax (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '$main_tax_id','$invoice_id','$currentdate', '$totalvat', '0')");//DR value For Tax
	
	
	
   $sqlss=mysql_query("INSERT INTO bill_detail (bill_id,pid,quantity,price,tax_id,tax_total,subtotal,totalamount,status) VALUES ('$jdid','".$_POST["itemname$i"]."','".$_POST["quantity$i"]."','".$_POST["price$i"]."','".$_POST["tax$i"]."','$totalvat','$totalprice','$totalamount','0')");
   
}



/*	for($i=1; $i<=$limit; $i++)
{
	echo $_POST["itemname$i"];
}*/
/*for($i = 0;$i <$limit;$i++)
{
    $sqls .= "('$jdid','".$_POST['itemname'][$i]."','".$_POST['quantity'][$i]."','".$_POST['price'][$i]."','0','0')";
    if($i !=$limit - 1)
    {
        $sqls .= ',';  //Will insert a comma after each except the last.  Count - 1 since $i will equal count - 1 on the last one, since it starts at 0 and not 1.
    }
}*/


	
/*	  $query =mysql_query("INSERT INTO invoice_detail (invoice_id,pid,quantity,price,tax_id,status) VALUES ";
	for($i=1;$i<=$limit;$i++) 
	{
		
		('$jdid','$_POST[itemname][$i]','$_POST[quantity][$i]','$_POST[price][$i]','','0');
	
	}*/
			$errmsg_arr[] = 'Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../bill.php");
				exit();
						}
			
/*$errflag = true;
//If there are input validations, redirect back to the login form
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../addinvoices.php");
	exit();
			}*/
	
	
/*	$values = array();
	foreach ($_POST as $key => $value) {
		$qvalue =mysql_real_escape_string($value);
		$values[] = "($jdid,$option_a, $opt_a_d, $opt_a_debit, $opt_a_cradit)"; // quoted value, not the raw value
	}
	
	$query_values = implode(',', $values);
	//$insert1 = mysql_query("INSERT INTO journal_transaction VALUES ('','$jdid','$option_a','$opt_a_d','$opt_a_debit','$opt_a_cradit')");
	
	$query = "INSERT INTO journal_transaction (jdid, option_text, option_jd, option_debit, option_cradit) VALUES $query_values";
	$result = mysql_query($query);*/
        

	//$sqlquery=mysql_query("INSERT INTO journal_transaction VALUES ('','$jdid','$option_a','$opt_a_d','$opt_a_debit','$opt_a_cradit')");
	
/*	if($sqlquery)
	{

			$errmsg_arr[] = 'Success Full Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../journal_transaction.php");
				exit();
						}
	
	}*/
	
	
?>