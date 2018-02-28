<?php
	include('../auth.php');
	$branch_id=$_POST['branch_id'];
	
	
	$company_name=$_POST['company_name'];
	$payslipdate=$_POST['payslipdate'];
	$empcode=$_POST['empcode'];
	$ename=$_POST['ename'];
	$department=$_POST['department'];
	$designation=$_POST['designation'];
	$pfac=$_POST['pfac'];
	$esino=$_POST['esino'];
	$f_hname=$_POST['f_hname'];
	$joiningdate=$_POST['joiningdate'];
	$bankac=$_POST['bankac'];
	$mdl=$_POST['mdl'];
	
	$total=$_POST['total'];
	$paid=$_POST['paid'];
	
	$due=$total-$paid;
	$currentdate=date('Y-m-d');
	
	$etype=$_POST['etype'];
	$time=time();
	$link_id=$time;
	$sql=$obj->insert("account_module_salary_voucher",array("salary_id"=>$time,"company_name"=>$company_name,"payslipdate"=>$payslipdate,"empcode"=>$empcode,"ename"=>$ename,"department"=>$department,"designation"=>$designation,"pfac"=>$pfac,"esino"=>$esino,"f_hname"=>$f_hname,"joiningdate"=>$joiningdate,"bankac"=>$bankac,"mdl"=>$mdl,"total"=>$total,"paid"=>$paid,"due"=>$due,"etype"=>$etype,"branch_id"=>$branch_id,"link_id"=>$link_id));
	
	$salleryid=$obj->SelectAllByVal("account_module_salary_voucher","salary_id",$time,"id");
	
	$voucherid="S".$salleryid;
	
	//Pay & Allowance of Officers
	$dr=86;
	//Checking Account 
	$cr=12;
	
	//$sqlleddr=mysql_query("SELECT * FROM ladger_list_properties where ='' LIMIT 1");
	//$sqlledfetdr=mysql_fetch_array($sqlleddr);
	$dr=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_id",$etype,"id");
	
	$ladgername="Accounts Payable"; 
	//cr

	$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");

	$obj->insert("account_module_ladger",array("ladger_id"=>$dr,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>$total,"cradit"=>0,"branch_id"=>$branch_id,"link_id"=>$link_id));
	//dr value account Paytanble
	$obj->insert("account_module_ladger",array("ladger_id"=>$cr,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$paid,"branch_id"=>$branch_id,"link_id"=>$link_id));									

	$obj->insert("account_module_ladger",array("ladger_id"=>$ledgerid,"invoice_id"=>$voucherid,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$due,"branch_id"=>$branch_id,"link_id"=>$link_id));	
	//dr value account Paytanble
	$earning=$_POST['earning'];
	$actual=$_POST['actual'];
	$earned=$_POST['earned'];
	
	$limit=count($earning);
	
	foreach($_POST['earning'] as $index=>$val) 
	{	
		$obj->insert("account_module_salary_earing",array("sid"=>$salleryid,"earning"=>$val,"actual"=>$_POST['actual'][$index],"earned"=>$_POST['earned'][$index],"branch_id"=>$branch_id,"link_id"=>$link_id));
		
	}  

//end of earning code

	$deduction=$_POST['deduction'];
	$amount=$_POST['amount'];
	
	$limits=count($deduction);
	
	foreach($_POST['deduction'] as $index=>$val) 
	{
	
		$obj->insert("account_module_salary_deduction",array("sid"=>$salleryid,"deduction"=>$val,"amount"=>$_POST['amount'][$index],"branch_id"=>$branch_id,"link_id"=>$link_id));

	} 

	$obj->Success("Success Fully Added","../../add_transaction_salary.php");
?>
