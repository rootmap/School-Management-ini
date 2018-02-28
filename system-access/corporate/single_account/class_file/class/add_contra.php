<?php
	include('../auth.php');
	
	$time=time();
	$branch_id=$_POST['branch_id'];
	$link_id=time();
	$jd=$_POST['jd'];
	$jdate=$_POST['jdate'];
	$sql=$obj->insert("account_module_journal_description",array("jd_id"=>$time,"jd"=>$jd,"jddate"=>$jdate,"branch_id"=>$branch_id,"link_id"=>$link_id));
	$jdid=$obj->SelectAllByVal("account_module_journal_description","jd_id",$time,"id");
	$invoice_id="J".$jdid;
	$option_a=$_POST['option_a'];
	$opt_a_d=$_POST['opt_a_d'];
	$opt_a_debit=$_POST['opt_a_debit'];
	$opt_a_cradit=$_POST['opt_a_cradit'];
	
	$ladgername="Accounts Receivables"; //dr
	
	//$sqlled=mysql_query("SELECT * FROM ladger_list_properties where head_sub_list_name='$ladgername' LIMIT 1");
		//$sqlledfet=mysql_fetch_array($sqlled);
	$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
	
	$sip=$_SERVER['REMOTE_ADDR'];
	//$regdate=clean(date('d-m-Y'));
	
	
	$reg_date=date('Y-m-d');
	
	
	$limit=count($option_a);
	
	
	
	
	foreach($_POST['option_a'] as $index=>$val):
	
		$obj->insert("account_module_ladger",array("ladger_id"=>$val,
		"invoice_id"=>$invoice_id,
		"ladger_date"=>$reg_date,
		"debit"=>$_POST['opt_a_debit'][$index],
		"cradit"=>$_POST['opt_a_cradit'][$index],"branch_id"=>$branch_id,"link_id"=>$link_id));
		
		$obj->insert("account_module_journal_transaction",array("jdid"=>$jdid,
		"option_text"=>$val,
		"option_jd"=>$_POST['opt_a_d'][$index],
		"option_debit"=>$_POST['opt_a_debit'][$index],
		"option_cradit"=>$_POST['opt_a_cradit'][$index],"branch_id"=>$branch_id,"link_id"=>$link_id));
	
	endforeach;
	
	$obj->Success("Contra Successfully Added","../../contra.php");

?>
