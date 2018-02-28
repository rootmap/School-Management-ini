<?php
	session_start();
	include('../db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
	extract($_GET);
	
	$ppid=$pidname."-".$pid;
	$curyear=substr($dop,6,18);
	
	mysql_query("INSERT INTO fixed_asset_register (fid,lid,pid,sup_name,location,dop,cost,installation,charge,total,nod,years,nomal,doubled,three,totald,cumdep,wdv,adjustment,tdctdos,awdv,proceed,plos,ondate,bywhim,recordyear) VALUES ('','$lid','$ppid','$sup_name','$location','$dop','$cost','$installation','$charge','$total','0','0','$normal','$double','$three','$totald','$cumdep','$wdv','0','0','0','0','0','0','0','$curyear')");
	
	
	$errmsg_arr[] = 'Row Create complete';
	$errflag = true;

	if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../../fixedassetregisterreport.php?q=".$q);
	exit();
			}
	//echo $q;
	
	
	
?>