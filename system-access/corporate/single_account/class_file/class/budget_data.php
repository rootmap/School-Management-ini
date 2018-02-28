<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	
	$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
	$ladgerid=$_POST['ladgerid'];
	
	$aa=$_POST['aa'];
	$bb=$_POST['bb'];
	$cc=$_POST['cc'];
	$dd=$_POST['dd'];
	$ee=$_POST['ee'];
	$ff=$_POST['ff'];
	$byear=date('Y');
	$curdate=date('Y-m-d');
	
	mysql_query("INSERT INTO account_module_budget_year (byear,curdate) VALUES ('$byear','$curdate')");
	$bid=mysql_insert_id();
	
	$limit=count($aa);
	
	for($i=0;$i<=$limit-1;$i++) 
	{
		
    $ladgerid[$i] = mysql_real_escape_string($ladgerid[$i]);
	$aa[$i]=mysql_real_escape_string($aa[$i]);
	$bb[$i]=mysql_real_escape_string($bb[$i]);
	$cc[$i]=mysql_real_escape_string($cc[$i]);
	$dd[$i]=mysql_real_escape_string($dd[$i]);
	$ee[$i]=mysql_real_escape_string($ee[$i]);
	$ff[$i]=mysql_real_escape_string($ff[$i]);
	
	mysql_query("INSERT INTO  account_module_budget (ladgerid,byear,aa,bb,cc,dd,ee,ff,branch_id) VALUES ('".$ladgerid[$i]."','".$bid."','".$aa[$i]."','".$bb[$i]."', '".$cc[$i]."', '".$dd[$i]."', '".$ee[$i]."', '".$ff[$i]."','".$branch_id."')");

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
				header("location: ../../budget_report.php");
				exit();
						}
	
	
	
?>
