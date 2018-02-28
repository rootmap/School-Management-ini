<?php 
include('class_file/auth.php');
include('class_file/class/internal_query_dashboard.php');
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
            	<?php /*?><div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Total Invoice</span>
                            <span class="mws-stat-value"><?php echo $query_a1; ?></span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Total Bill</span>
                            <span class="mws-stat-value down"><?php echo @$query_a2; ?></span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Total Receiables</span>
                            <span class="mws-stat-value"><?php echo $query_a3; ?></span>
                        </span>
                    </a>
                    
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Total Payables</span>
                            <span class="mws-stat-value up"><?php echo $query_a4; ?></span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Coming Soon</span>
                            <span class="mws-stat-value up"><?php echo 0; ?></span>
                        </span>
                    </a>
                    
<!--                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) 
                    	<span class="mws-stat-icon icol32-car"></span>-->

                        <!-- Statistic Content 
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Cash on Hand</span>
                            <span class="mws-stat-value">77</span>
                        </span>
                    </a>-->
            </div><?php */?>
            <style type="text/css">
			.dash_panel {
				height: 155px;
				width: 174px;
				margin-right: 6px;
				margin-bottom: 5px;
				text-align: center;
				box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.74) inset;
				border-radius: 8px;
				display:inline-block;
			}
			
			.dash_img {
				margin-top:10px;
				height: 100px;
				width: 100px;
			}
			
			.dash_label {
				margin: 0px;
				color: #1D2024;
				font-family:Arial, sans-serif;
				font-size: 16px;
				font-weight: bolder;
				text-decoration: none;
				text-transform: capitalize;
				height: 30px;
				line-height: 30px;
				text-align: center;
				width: auto;
				outline: medium none #222;
			}
			</style>
            <div class="nws-panel grid_8 clearfix">
            	<div class="mws-panel-header">
                    	<h2 style="border-bottom:1px #ccc dotted; border-top:1px #ccc dotted;"><i class="icon-link"></i> Quick Links</h2>
                </div>
                <div class="mws-panel-body no-padding" style="text-align:center;">
                		
                        
                        <a href="invoices.php" class="dash_panel">
                            <img src="images/icons/new_icons/orderlist.png" class="dash_img">
                            <div class="dash_label"> Sales Invoice </div>
                        </a>
                        
                        <a href="bill.php" class="dash_panel">
                            <img src="images/icons/new_icons/Money_Calculator.png" class="dash_img">
                            <div class="dash_label">Purchase Voucher</div>
                        </a>
                        
                        <a href="officeexpense.php" class="dash_panel">
                            <img src="images/icons/new_icons/reports_out.png" class="dash_img">
                            <div class="dash_label">Expense Voucher</div>
                        </a>
                        
                        <a href="payment_receive.php" class="dash_panel">
                            <img src="images/icons/new_icons/security_creditcard.png" class="dash_img">
                            <div class="dash_label">Receive Payment</div>
                        </a>
                        
                        <a href="salary_voucher.php" class="dash_panel">
                            <img src="images/icons/new_icons/leave.png" class="dash_img">
                            <div class="dash_label">Salary Voucher</div>
                        </a>
                        
                        <a href="add_officeexpense_voucher.php" class="dash_panel">
                            <img src="images/icons/new_icons/f_report_out.png" class="dash_img">
                            <div class="dash_label">Office Epense</div>
                        </a>
                        
                        <a href="customer.php" class="dash_panel">
                            <img src="images/icons/new_icons/Add-Male-User.png" class="dash_img">
                            <div class="dash_label">Customer List</div>
                        </a>
                        
                        <a href="journal_transaction.php" class="dash_panel">
                            <img src="images/icons/new_icons/pentest-report-icon.png" class="dash_img">
                            <div class="dash_label">Journal Transaction</div>
                        </a>
                </div>
                <div class="mws-panel-header">
                    	<h2 style="border-bottom:1px #ccc dotted; border-top:1px #ccc dotted;"><i class="icon-link"></i> Dashboard Reports</h2>
                </div>
            </div>
                <div class="clear"></div>
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span><i class="icon-book"></i> Bank &amp; Asset Detail</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table-fn mws-table">
                            <thead>
                                <tr>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Accounts</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Balance</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$balance=0;
							$ld=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
							foreach($ld as $row)
							{
								$inid=$row->id; 
								$getdutotal=$obj->SelectAllByID("account_module_ladger",array("ladger_id"=>$inid));
									$debit=0;
									$cradit=0;
								if(!empty($getdutotal))	
								foreach($getdutotal as $due)
								{
									$debit+=$due->debit;
									$cradit+=$due->cradit;
								}
								
								
								$chdc=$debit-$cradit;
								if($chdc!=0)
								{
								
							?>
                                <tr>
                                	<td valign="middle" align="left">
                                    <a style="color:#000; font-size:18px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </td>
                                    <td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><strong>
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm); $balance+=$netm; }
									else
									{ echo "(".number_format(substr($netm,1,200)).")"; $balance+=$netm; }  
									
									?></strong></td>
                                </tr>
                             <?php 
							 }
							}
							 ?> 
                             
                            </tbody>
                            
                        
                            <thead><tr>
                                    <th><strong>Total </strong></th>
                                    <th><span style="border-bottom:1px #666666 dotted;"><strong>Balance = <?php echo number_format($balance,2); ?></strong></span></th>
                                </tr>
                            </thead>
                         </table>
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span><i class="icon-user"></i> Customer Accounts Status </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table-fn mws-table">
                            <thead>
                                <tr>
                                    <th  width="40%" style="font-size:12px;"><strong>Accounts</strong></th>
                                    <th  width="15%" style="font-size:12px;"><strong>Total Bill</strong></th>
                                    <th  width="30%" style="font-size:12px;"><strong>Paid Amount</strong></th>
                                    <th  width="15%" style="font-size:12px;"><strong>Due</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$customer_total=0;
							$customer_paid=0;
							$customer_balance=0;
							$ld=$obj->SelectAll("account_module_customer");
							if(!empty($ld))
							foreach($ld as $row)
							{
							
							$inid=$row->id; 
							$sqlinvoice=$obj->SelectAllByID("account_module_invoice",array("customer_id"=>$inid));
							$invoice_total=0;
							if(!empty($sqlinvoice))	
							foreach($sqlinvoice as $invoice)
							{
								$invoice_link_id=$invoice->link_id;
								$sqlinvoicedetail=$obj->SelectAllByID("account_module_invoice_detail",array("link_id"=>$invoice_link_id));
								if(!empty($sqlinvoicedetail))
								foreach($sqlinvoicedetail as $detail):
									$invoice_total+=$detail->totalamount;
								endforeach;
							}
							
							$sqlinvoicepayment=$obj->SelectAllByID("account_module_invoice_payment",array("cid"=>$inid));
							$invoice_paid=0;
							if(!empty($sqlinvoicepayment))
							foreach($sqlinvoicepayment as $payment):
								$invoice_paid+=$payment->amount;
							endforeach;
							
							$cusbal=$invoice_total-$invoice_paid;
							
							?>
                                <tr>
                                	<td valign="middle" align="left">
                                    <a style="color:#000; font-size:10px;" href="customer.php?view=<?php echo $inid; ?>"><?php echo $row->company_name; ?></a>
                                    </td>
                                    <td valign="middle" align="left">
                                    <?php echo number_format($invoice_total,2); ?>
                                    </td>
                                    <td valign="middle" align="left">
                                    <?php echo number_format($invoice_paid,2); ?>
                                    </td>
                                    <td align="right" valign="middle">
									<?php 
									echo number_format($cusbal,2);
									
									?></td>
                                </tr>
                             <?php
							 $customer_total+=$invoice_total; 
							 $customer_paid+=$invoice_paid;
							 $customer_balance+=$cusbal;
							}
							 ?> 
                             
                            </tbody>
                            
                        
                            <thead><tr>
                                    <th><strong>Total </strong></th>
                                    <th><span style="border-bottom:1px #666666 dotted; color:#000; font-size:12px; font-weight:bolder;"><strong>Balance = <?php echo number_format($customer_total,2); ?></strong></span></th>
                                    <th><span style="border-bottom:1px #666666 dotted; color:#000; font-size:12px; font-weight:bolder;"><strong>Paid =<br> <?php echo number_format($customer_paid,2); ?></strong></span></th>
                                    <th><span style="border-bottom:1px #666666 dotted; color:#000; font-size:12px; font-weight:bolder;"><strong>Due = <?php echo number_format($customer_balance,2); ?></strong></span></th>
                                </tr>
                            </thead>
                         </table>
                    </div>
                </div>
                
				<div class="clearfix"></div>
                <div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span><i class="icon-book"></i> Report Summary ( Income Statement )</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <ul class="mws-summary clearfix">
                        
                            <li>
                                <span class="key"><i class="icon-support"></i>Total Income</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $totalincome; ?></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-certificate"></i> Gross Profit</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $grossprofit; ?> <i class="up icon-arrow-up"></i></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-certificate"></i>Direct Expense</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $directexpense; ?> <i class="up icon-arrow-up"></i></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-shopping-cart"></i> Net Profit</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $netprofit; ?> <i class="down icon-arrow-down"></i></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-key"></i> Last Report Date</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $lastindate; ?></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
  <div class="mws-panel grid_4">
                	<div class="mws-panel-header">
<span><i class="icon-book"></i> Balance Sheet </span></div>
                    <div class="mws-panel-body no-padding">
                        <ul class="mws-summary clearfix">
                            <li>
                                <span class="key"><i class="icon-support"></i> Total Asset</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $totalasset; ?></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-certificate"></i> Total Liabilitys</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $totalliability; ?> <i class="up icon-arrow-up"></i></span>
                                </span>
                            </li>
                            <li>
                                <span class="key"><i class="icon-key"></i> Total Equity</span>
                                <span class="val">
                                    <span class="text-nowrap"><?php echo $totalequity; ?></span>
                                </span>
                            </li>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>2));
							$currentasset=0;
							if(!empty($chkfourcountled))
							foreach($chkfourcountled as $cogsexpense)
							{
							$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ldd=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid,"id"=>25));
								if(!empty($ldd))
								foreach($ldd as $row)
								{
									
									$inid=$row->id; 
										$getdutotal=$obj->SelectAllByID("account_module_ladger",array("ladger_id"=>$inid));
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm1=$debit-$cradit;
										if($netm1!=0)
										{
							?>
                                        <li>
                                			<span class="key"><i class="icon-key"></i> 
                                            <a style="font-size:15px; font-weight:bolder; color:#000" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo substr($row->head_sub_list_name,9,200); ?></a>
                                            </span>
                                            <span class="val">
                                                <span class="text-nowrap">
                                            <?php 
                                            	$getch=substr($netm1,0,1);
												if($getch!='-')
												{ echo number_format($netm1,2); }
												else
												{ echo number_format(substr($netm1,1,200),2); }  
											   		$currentasset+=$netm1;
                                            ?></span>
                                                    </span>
                                                </li>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?>
                             <?php								
								$lde=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>2,"id"=>34));
								$liabilitycurrent=0;
								if(!empty($lde))
								foreach($lde as $row)
								{
									
									$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple_NotOne("account_module_ladger",array("ladger_id"=>$inid),"ladger_id","41");
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))		
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm3=$debit-$cradit;
										if($netm3!=0)
										{
							?>
                                         <li>
                                			<span class="key"><i class="icon-key"></i> 
                                            <a style="font-size:15px; font-weight:bolder; color:#000;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo substr($row->head_sub_list_name,9,200); ?></a>
                                            </span>
                                            <span class="val">
                                                <span class="text-nowrap">
                                            <?php 
                                            
                                            
                                            $getch=substr($netm3,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm3,2); }
                                            else
                                            { echo number_format(substr($netm3,1,200),2); }  
                                            $liabilitycurrent+=$netm3;
                                            ?></span>
                                                </span>
                                                </li>
                                     <?php
										}
                                     } 
							 ?>  
                        </ul>
                    </div>
                </div>
            	<!--<div class="mws-panel grid_8 mws-collapsible">
           	  <div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Browser Engines</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td><span class="badge badge-info">X</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td><span class="badge badge-success">C</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td><span class="badge badge-important">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6a</td>
                                    <td><span class="badge badge-warning">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td><span class="badge badge-success">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td><span class="badge badge-warning">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td><span class="badge badge-info">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td><span class="badge">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td><span class="badge badge-info">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td><span class="badge badge-important">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td><span class="badge badge-warning">X</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td><span class="badge badge-success">C</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td><span class="badge badge-warning">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td><span class="badge badge-info">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td><span class="badge">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td><span class="badge badge-warning">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td><span class="badge badge-success">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td><span class="badge badge-warning">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td><span class="badge badge-info">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td><span class="badge">A</span></td>
                                    <td>
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>-->
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>