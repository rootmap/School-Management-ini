<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	
	$jd=$_POST['jd'];
	$jdate=$_POST['jdate'];
	$sql=mysql_query("INSERT INTO journal_description (jd,jddate) VALUES ('$jd','$jdate')");
	$jdid=mysql_insert_id();
	$invoice_id="J".$jdid;
	$option_a=$_POST['option_a'];
	$opt_a_d=$_POST['opt_a_d'];
	$opt_a_debit=$_POST['opt_a_debit'];
	$opt_a_cradit=$_POST['opt_a_cradit'];
	
	$ladgername="Accounts Receivables"; //dr
	
	$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
		$sqlledfet=mysql_fetch_array($sqlled);
		$ledgerid=$sqlledfet['id'];
	
	$sip=$_SERVER['REMOTE_ADDR'];
	//$regdate=clean(date('d-m-Y'));
	
	
	$reg_date=date('Y-m-d');
	
	
	$limit=count($option_a);
	
	
	
	
	
	
	
	
	for($i=0;$i<=$limit-1;$i++) 
	{
		
    $option_a[$i] = mysql_real_escape_string($option_a[$i]);
	$opt_a_d[$i]=mysql_real_escape_string($opt_a_d[$i]);
	$opt_a_debit[$i]=mysql_real_escape_string($opt_a_debit[$i]);
	$opt_a_cradit[$i] = mysql_real_escape_string($opt_a_cradit[$i]);
	
	mysql_query("INSERT INTO ladger (id,ladger_id,invoice_id,ladger_date,debit,cradit) VALUES ('', '".$option_a[$i]."','".$invoice_id."','".$reg_date."','".$opt_a_debit[$i]."', '".$opt_a_cradit[$i]."')");
	
    $query = "INSERT INTO journal_transaction (jdid, option_text, option_jd, option_debit, option_cradit) VALUES ('".$jdid."','".$option_a[$i]."','".$opt_a_d[$i]."','".$opt_a_debit[$i]."','".$opt_a_cradit[$i]."')";

		if(mysql_query($query))
		{
			echo "<input type='hidden' value='Success'>";
		}
		else
		{
			echo "<input type='hidden' value='Success'>";
		}
		
	}  
	
	
			$errmsg_arr[] = 'Success Fully Added';
			$errflag = true;

	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../contra.php");
				exit();
						}
	
	
	
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
