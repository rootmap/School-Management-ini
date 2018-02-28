<?php 
include('class_file/auth.php');
if(isset($_GET['del']))
{
	if($obj->delete("account_module_customer",array("id"=>$_GET['del']))==1)
	{
		$obj->Success("Customer Successfully Deleted",$obj->filename());	
	}
	else
	{
		$obj->Error("Customer Deleted Failed, Please Try Agian.",$obj->filename());	
	}
}

if(isset($_POST['update']))
{
	extract($_POST);
	if($obj->update("account_module_customer",array("id"=>$id,"company_name"=>$company_name,"email"=>$email,"fname"=>$fname,"lname"=>$lname,"currency"=>$currency,"phone"=>$phone,"address"=>$address,"ac"=>$ac,"bankname"=>$bankname))==1)
	{
		$obj->Success("Customer Account Update Successfully",$obj->filename());
	}
	elseif(!$sql)
	{
		$obj->Error("Customer Update Failed Try Again",$obj->filename());
	}
}
?>
<body>

	<!-- Header -->
  <?php include('header_footer_file/head.php'); ?>
    <!-- Start Main Wrapper -->
  <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	 <?php include('header_footer_file/search_box.php'); ?>
        	<!-- Searchbox -->
        	
            
            <!-- Main Navigation -->
            <?php include('header_footer_file/left_menu.php'); ?>
            </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
            		<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	
<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                
                <!-- Panels Start -->
                <?php 
				if(isset($_GET['view']))
				{
					?>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['view'],"company_name"); ?></strong> : Company Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID_Multiple("account_module_customer",array("id"=>$_GET['view']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                	<td  valign="middle"><strong>Company Name : </strong></td>
                                    <td  valign="middle"><?php echo $row->company_name; ?></td>
                                    <td  valign="middle"><strong>Contact Person 1 : </strong></td>
                                    <td  valign="middle"><?php echo $row->fname; ?></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Contact Person 2 : </strong></td>  
                                    <td  valign="middle"><?php echo $row->lname; ?></td>
                                    <td  valign="middle"><strong>Phone / Mobile </strong></td>
                                    <td  valign="middle"><?php echo $row->phone; ?></td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>Email Address </strong></td>
                                    <td  valign="middle"><?php echo $row->email; ?></td>
                                    <td  valign="middle"><strong>Address </strong></td>
                                    <td  valign="middle"><?php echo $row->address; ?></td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Bank Ac </strong></td>
                                    <td  valign="middle"><?php echo $row->ac; ?></td>
                                    <td  valign="middle"><strong>Bank Name </strong></td>
                                    <td  valign="middle"><?php echo $row->bankname; ?></td>
                                </tr>
                                
                             <?php 
									
							 $a++;
							 } ?>
                             <tr>
                                    <td  valign="middle" colspan="4">
                                    <?php if(@$branch_id=='') {?>
                                    <a href="<?php echo $obj->filename(); ?>" class="btn btn-info"><strong>Back To List</strong></a>
                                    <?php }else{?>
                                    <a href="<?php echo $obj->filename(); ?>?branch_id=<?php echo $branch_id; ?>" class="btn btn-info"><strong>Back To List</strong></a>
                                    <?php } ?>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!--income by customer-->
                
                <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['view'],"company_name"); ?></strong> : Sales Invoices | as a Customer Report </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Invoice Date</th>
                                    <th>Number</th>
                                    <th>Customer</th>
                                    <th>Amount Due</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_invoice",array("customer_id"=>$_GET['view']));
							$a=1;
							$amountsales_total=0;
							$amountsales_paid=0;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$inid));
										$totaldue=0;
										$total=0;
										if(!empty($getdutotal))
									foreach($getdutotal as $due)
									{
										$totaldue+=$due->subtotal;
										$total+=$due->subtotal;
									}
									
									$sql_payment=$obj->SelectAllByID("account_module_invoice_payment",array("invoice_id"=>$inid));
									$p=0;
									if(!empty($sql_payment))
									foreach($sql_payment as $ip)
									{
										$p+=$ip->amount;
									}
									
									
									
								$sql_leds=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$inid));
								 $qp_invoice=0;
								 $p_invoice=0;
								 $q_invoice=0;
								 $tax_invoice=0;
								 if(!empty($sql_leds))
									foreach($sql_leds as $fetled)
									{
										$qp_invoice+=$fetled->quantity*$fetled->price;
										$p_invoice+=$fetled->price;
										$q_invoice+=$fetled->quantity;
										$taxid=$fetled->tax_id;
										$sql_vat=$obj->SelectAllByID("account_module_newtax",array("id"=>$taxid));
										if(!empty($sql_vat))
										foreach($sql_vat as $fetvat)
										{
										 $tax_invoice+=(($fetled->quantity*$fetled->price)*$fetvat->rate)/100;
										}
									}
									$cid=$row->customer_id;
									$sqluser=$obj->SelectAllByID("account_module_customer",array("id"=>$cid)); 
									if(!empty($sqluser))
									foreach($sqluser as $fetuser){  
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php 
									
									
									
									echo $fetuser->company_name;  ?>&amp;currency=<?php echo $row->currency; ?>" class="btn"><i class="icon-table"></i> View</a></li>
                                            <li><a href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $fetuser->company_name;  ?>&amp;currency=<?php echo $row->currency; ?>" class="btn"><i class="icon-tools"></i> Edit</a></li>
                                            <li><a href="addpayment.php?id=<?php echo $inid; ?>&amp;due=<?php echo ($totaldue+$tax_invoice)-$p;  ?>&amp;tam=<?php echo $total+$tax_invoice; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            <li><a href="send.php?id=<?php echo $inid; ?>&amp;email=<?php echo $fetuser->email; ?>" class="btn"><i class="icon-envelope"></i> Send</a></li>
                                            <li><a href="invoice_id<?php echo $inid; ?>?id=<?php echo $inid; ?>" class="btn"><i class="icon-file-pdf"></i> Download Pdf</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->date; ?></td>
                                    <td align="center" valign="middle"><a style="font-size:18px; font-weight:bolder; color:#333;" href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $fetuser->company_name;  ?>&amp;currency=<?php echo $row->currency; ?>">Invoice <?php echo $row->id; ?></a></td>
                                    <td align="center" valign="middle"><?php
									echo $fetuser->company_name;
									?></td>
                                    <td align="center" valign="middle">
									<?php 
									echo number_format(($totaldue+$tax_invoice)-$p);
									$amountsales_paid+=$p;
									?></td>
                                    <td align="center" valign="middle">
									<?php echo number_format($total+$tax_invoice); $amountsales_total+=$total+$tax_invoice; ?>
                                    </td>
                                    <td align="center" valign="middle">
                                    <?php 
									$status=$row->status;
									if($status==0){
									?>
                                    <button type="button" class="btn btn-small" disabled="disabled"><font color="#FF0000">Unpaid</font></button>
                                    <?php 
									}elseif($status==1){
									?>
                                    <button type="button" class="btn btn-warning btn-small" disabled="disabled">Partial</button>
                                    <?php 
									}elseif($status==2){
									?>
                                    <button type="button" class="btn btn-success btn-small" disabled="disabled">Paid</button>
                                    <?php 
									}
									
									?>                                    
                                    <?php
									$totalam=$totaldue+$tax_invoice;
									if($totalam==$p)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>2));	
									}
									elseif($p!=0)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>1));
									}
									elseif($p==0)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>0));	
									}
									
									?>
                                    </td>
                                </tr>
                             <?php 
									}
							 $a++;
							 } ?> 
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Sales Amount : </td>
                                <td><?php echo number_format($amountsales_total,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Paid Amount : </td>
                                <td><?php echo number_format($amountsales_paid,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Receivables : </td>
                                <td><?php 
								$receives=$amountsales_total-$amountsales_paid;
								echo number_format($receives,2);
								?> Tk.</td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
                
                
                <!--income by customer -->
                
                <!--expense by customer-->
                
                <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['view'],"company_name"); ?></strong> : Purchase Voucher | as a Vendor Report </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Number</th>
                                    <th>Vendor</th>
                                    <th>Amount Due</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$amountpurchase_total=0;
							$amountpurchase_paid=0;
							$sqlpurchase=$obj->SelectAllByID("account_module_bill",array("vendor_id"=>$_GET['view']));
							$a=1;
							if(!empty($sqlpurchase))
							foreach($sqlpurchase as $row)
							{
								$inid=$row->id; 
								$getdutotal=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$inid));
									$totaldue=0;
									$total=0;
								if(!empty($getdutotal))	
								foreach($getdutotal as $due)
								{
									$totaldue+=$due->subtotal;
									$total+=$due->subtotal;
								}
								
							$sql_payment=$obj->SelectAllByID("account_module_bill_payment",array("bill_id"=>$inid));
								$p=0;
								if(!empty($sql_payment))
								foreach($sql_payment as $ip)
								{
									$p+=$ip->amount;
								}
								
								
								$sql_leds1=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$inid));
								$qp1=0;
								$p1=0;
								$q1=0;
								$tax1=0;
								if(!empty($sql_leds1))
								foreach($sql_leds1 as $fetled1){
									$qp1+=$fetled1->quantity*$fetled1->price;
									$p1+=$fetled1->price;
									$q1+=$fetled1->quantity;
									$taxid1=$fetled1->tax_id;
									$sql_vat1=$obj->SelectAllByID("account_module_newtax",array("id"=>$taxid1));
									foreach($sql_vat1 as $fetvat1)
									{
										$tax1+=(($fetled1->quantity*$fetled1->price)*$fetvat1->rate)/100;
									}
								}
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="viewbill.php?id=<?php echo $row->id; ?>" class="btn"><i class="icon-tools"></i> View </a></li>
                                            <li><a href="addpayment_bill.php?id=<?php echo $row->id; ?>&amp;due=<?php echo $qp1+$tax1-$p;  ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->date; ?></td>
                                    <td align="center" valign="middle"><a style="font-size:18px; font-weight:bolder; color:#333;" href="viewbill.php?id=<?php echo $row->id; ?>">Voucher - <?php echo $row->id; ?></a></td>
                                    <td align="center" valign="middle"><?php
									$bid=$row->vendor_id;
									$sql_bid=$obj->SelectAllByID("account_module_customer",array("id"=>$bid));
									if(!empty($sql_bid))
									foreach($sql_bid as $fetbid)
									{
										echo $fetbid->company_name;
									}
									?></td>
                                    <td align="center" valign="middle">
									<?php 
									//echo $totaldue-$p;
									
								
									
									echo number_format($qp1+$tax1-$p,2);
									
									$amountpurchase_paid+=$p;
									?></td>
                                    <td align="center" valign="middle"><?php echo number_format($qp1+$tax1,2);
									$amountpurchase_total+=$qp1+$tax1;
									 ?></td>
                                    <td align="center" valign="middle">
                                    <?php 
									$status=$row->status;
									if($status==0){
									?>
                                    <button type="button" class="btn btn-small" disabled="disabled"><font color="#FF0000">Unpaid</font></button>
                                    <?php 
									}elseif($status==1){
									?>
                                    <button type="button" class="btn btn-warning btn-small" disabled="disabled">Partial</button>
                                    <?php 
									}elseif($status==2){
									?>
                                    <button type="button" class="btn btn-success btn-small" disabled="disabled">Paid</button>
                                    <?php 
									}
									?>
                                    
                                    <?php
									
									if($totaldue==$p)
									{
										$obj->update("account_module_bill",array("id"=>$inid,"status"=>2));	
									}
									elseif($p!=0)
									{
										$obj->update("account_module_bill",array("id"=>$inid,"status"=>1));		
									}
									elseif($p==0)
									{
										$obj->update("account_module_bill",array("id"=>$inid,"status"=>0));	
									}
									
									?>
                                    </td>
                                </tr>
                             <?php 
							 $a++;
							 } ?> 
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Purchase Amount : </td>
                                <td><?php echo number_format($amountpurchase_total,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Paid Amount : </td>
                                <td><?php echo number_format($amountpurchase_paid,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Payable : </td>
                                <td><?php 
								$payable=$amountpurchase_total-$amountpurchase_paid;
								echo number_format($payable,2);
								?> Tk.</td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--expense by vendor -->
                
                <!--expense by customer-->
                
                <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['view'],"company_name"); ?></strong> : Purchase Voucher | as a Vendor Report </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <tr>
                             	<td colspan="5"></td>
                                <td>Total Sales Amount : </td>
                                <td><?php echo number_format($amountsales_total,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Paid By Customer : </td>
                                <td><?php echo number_format($amountsales_paid,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Receivables : </td>
                                <td><?php 
								$receives=$amountsales_total-$amountsales_paid;
								echo number_format($receives,2);
								?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Purchase Amount : </td>
                                <td><?php echo number_format($amountpurchase_total,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Paid To Vendor : </td>
                                <td><?php echo number_format($amountpurchase_paid,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Payable : </td>
                                <td><?php 
								$payable=$amountpurchase_total-$amountpurchase_paid;
								echo number_format($payable,2);
								?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="7"></td>
                                
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td><strong> 
								<?php  
								$sumation=$receives-$payable;
								if($sumation==0)
								{
									echo "No Receivables &amp; Payable :";	
								}
								elseif($receives>$payable)
								{
									echo "Current Receivables :";	
								}
								elseif($receives<$payable)
								{
									echo "Current Payable :";	
								}
								
								?>
                                </strong> </td>
                                <td><strong><?php 
								echo number_format($sumation,2);
								?></strong> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="7"></td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--expense by vendor -->
                
                    <?php
				}
				elseif(isset($_GET['edit']))
				{
					?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['edit'],"company_name"); ?></strong> : Company Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_customer",array("id"=>$_GET['edit']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                            <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                	<td  valign="middle"><strong>Company Name : </strong></td>
                                    <td  valign="middle"><input type="text" name="company_name" value="<?php echo $row->company_name; ?>" /></td>
                                    <td  valign="middle"><strong>Contact Person 1 : </strong></td>
                                    <td  valign="middle"><input type="text" name="fname" value="<?php echo $row->fname; ?>" /></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Contact Person 2 : </strong></td>  
                                    <td  valign="middle"><input type="text" name="lname" value="<?php echo $row->lname; ?>" /></td>
                                    <td  valign="middle"><strong>Phone / Mobile </strong></td>
                                    <td  valign="middle"><input type="text" name="phone" value="<?php echo $row->phone; ?>" /></td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>Email Address </strong></td>
                                    <td  valign="middle"><input type="text" name="email" value="<?php echo $row->email; ?>" /></td>
                                    <td  valign="middle"><strong>Address </strong></td>
                                    <td  valign="middle"><input type="text" name="address" value="<?php echo $row->address; ?>" /></td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Bank Ac </strong></td>
                                    <td  valign="middle"><input type="text" name="ac" value="<?php echo $row->ac; ?>" /></td>
                                    <td  valign="middle"><strong>Bank Name </strong></td>
                                    <td  valign="middle"><input type="text" name="bankname" value="<?php echo $row->bankname; ?>" /></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"><button name="update" type="submit" class="btn btn-success"><strong>Update Change</strong></button>
                                    <button type="reset" class="btn btn-warning"><strong>Reset</strong></button></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                             <?php 
									
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
                    <?php
				}
				else
				{
					?>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Customer Info </span> <span style="margin-top:-30px; float:right;">
                        <?php if(@$branch_id=='') {?>
                        <a href="addnewcustomer.php" class="btn btn-success"><i class="icon-plus"></i>Create a  New Customer</a>
                        <?php }?>
                        
                        </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table" style="font-size:12px !important;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Company Name</th>
                                    <th>Contact Person</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_customer",array("branch_id"=>$branch_id));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               			<?php echo $a; ?>    
                                    </td>
                                    <td align="center" valign="middle"><?php echo $row->company_name; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->fname." ".$row->lname; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->phone; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->email; ?></td>
                                    <td>
                                    <?php if(@$branch_id=='') {?>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to View Transaction This?')" title="View Transaction" href="<?php echo $obj->filename(); ?>?view=<?php echo $row->id; ?>" class="btn icon-business-card"></a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit Customer" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Delete This?')" title="Delete" href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="btn icon-remove-sign"></a>
                                    <?php }else{ ?>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to View Transaction This?')" title="View Transaction" href="<?php echo $obj->filename(); ?>?view=<?php echo $row->id; ?>&amp;branch_id=<?php echo $branch_id; ?>" class="btn icon-business-card"></a>
                                    <?php } ?>
                                    </td>
                                </tr>
                             <?php 
									
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                    <?php
				}
				?>
           	  	
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>