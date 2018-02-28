<?php
$table="ams_admission";
include('auth.php');
extract($_GET); 
			$customer_id=$obj->SelectAllByVal($table,"admition",$admissionid,"id");
			$session_id=$obj->SelectAllByVal($table,"admition",$admissionid,"session_id");
			$class_id=$obj->SelectAllByVal($table,"admition",$admissionid,"class_id");
			$group_id=$obj->SelectAllByVal($table,"admition",$admissionid,"group_id");
			$month_id=date('m');
			$date=date('Y-m-d');
			$duedate=date('Y-m-d');
			$subheading=date('Y-m-d');
			$currency=5;
			$footer="Student Added using Short Admission Form";
			$poso="";
			$notes="";
			$currentdate=date('Y-m-d');
			
			$link_id=time();
			$branch_id=$school;
			
			$ladgername="Accounts Receivables"; //dr
			
			$ledgerid=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
			$time=time();
			$obj->insert("account_module_invoice",array("invoice_id"=>$time,"link_id"=>$link_id,"customer_id"=>$customer_id,"month_id"=>$month_id,"date"=>$date,"duedate"=>$duedate,"subheading"=>$subheading,"currency"=>$currency,"footer"=>$footer,"poso"=>$poso,"notes"=>$notes,"status"=>0,"branch_id"=>$school));
				
			$jdid=$obj->SelectAllByVal("account_module_invoice","link_id",$link_id,"id");
			
			//$limit=$_POST['limit'];
			$amtot=0;
			$sqlfeesmanagement=$obj->SelectAllByID_Multiple("fees_ledger",array("session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id));
			if(!empty($sqlfeesmanagement))
			foreach($sqlfeesmanagement as $fees):
				$prname=$obj->SelectAllByVal("account_module_ladger_list_properties","id",$fees->ledger_id,"head_sub_list_name");
				$chkproduct=$obj->exists("account_module_product",array("pname"=>$prname,"in_ac_id"=>$fees->ledger_id));
				if($chkproduct==0)
				{
					$obj->insert("account_module_product",array("pname"=>$prname,"in_ac_id"=>$fees->ledger_id,"price"=>$fees->percent,"description"=>"Product Added From Admission System","branch_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));	
					$itemid=$obj->SelectAllByVal2("account_module_product","pname",$prname,"in_ac_id",$fees->ledger_id,"id");
				}
				else
				{
					$itemid=$obj->SelectAllByVal2("account_module_product","pname",$prname,"in_ac_id",$fees->ledger_id,"id");
				}
				//$itemid=$fees->ledger_id;
				$quantity=1;
				$price=$fees->percent;
				$tax=0;
				$rate=0;
				$main_tax_id=$obj->SelectAllByVal("account_module_newtax","id",$tax,"main_id");
				$totalprice=$quantity*$price;
				$totalvat=$totalprice*$rate/100;
				$totalamount=$totalprice+$totalvat;
				$amtot+=$totalamount;
				$income_account_id=$fees->ledger_id;
				$invoice_id="N".$jdid;
				$obj->insert("account_module_ladger",array("ladger_id"=>$ledgerid,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>$totalamount,"cradit"=>0,"branch_id"=>$school));
				//dr value account reciveable
				$obj->insert("account_module_ladger",array("ladger_id"=>$income_account_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$totalprice,"branch_id"=>$school));
				//cr value Income Account
				$obj->insert("account_module_ladger",array("ladger_id"=>$main_tax_id,"link_id"=>$link_id,"invoice_id"=>$invoice_id,"ladger_date"=>$currentdate,"debit"=>0,"cradit"=>$totalvat,"branch_id"=>$school));
				//cr value For Tax
				
				
				$obj->insert("account_module_invoice_detail",array("invoice_id"=>$jdid,"link_id"=>$link_id,"pid"=>$itemid,"quantity"=>$quantity,"price"=>$price,"tax_id"=>$tax,"tax_total"=>$totalvat,"subtotal"=>$totalprice,"totalamount"=>$totalamount,"status"=>0,"branch_id"=>$school));   
			endforeach;
			$obj->Success("Student Invoice Successfully Generated, Please Add New Student.","../".$pager);
			exit();
			
?>