<?php include('class_file/auth.php'); ?>
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
                
           	  	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Student Invoices</span> <span style="margin-top:-30px; float:right;"><a href="addinvoices.php" class="btn btn-success" id="mws-jui-dialog-mdl-btn"><i class="icon-plus"></i>Create a New Student Invoices</a>
                        <div id="mws-jui-dialog">
                        		<div class="mws-dialog-inner">
                                <form method="get" action="addinvoices.php" name="invoice_add">
                            		<span><i class="icon-table"></i> &nbsp;&nbsp;&nbsp;How Many Item You Want to Add &nbsp;&nbsp;&nbsp;<input type="text" name="inrow" style="width:50px;"><button class="btn btn-success" style="margin-left:40px;">Create Invoice Design</button></span>
                                    </form>
                                </div>
                            </div>

                        </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Invoice Date</th>
                                    <th>Number</th>
                                    <th>Student</th>
                                    <th>Amount Due</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_invoice",array("branch_id"=>$school));
							$a=1;
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
									$branch_id=$row->branch_id;
									$link_id=$row->link_id;
									 
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $branch_id;  ?>&amp;link_id=<?php echo $link_id;  ?>&amp;currency=<?php echo $row->currency; ?>" class="btn"><i class="icon-table"></i> View</a></li>
                                            <li><a href="addpayment.php?id=<?php echo $inid; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $branch_id;  ?>&amp;link_id=<?php echo $link_id;  ?>&amp;due=<?php echo ($totaldue+$tax_invoice)-$p;  ?>&amp;tam=<?php echo $total+$tax_invoice; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->date; ?></td>
                                    <td align="center" valign="middle"><a style="font-size:18px; font-weight:bolder; color:#333;" href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $branch_id;  ?>&amp;link_id=<?php echo $link_id;  ?>&amp;currency=<?php echo $row->currency; ?>">Invoice <?php echo $row->id; ?></a></td>
                                    <td align="center" valign="middle"><?php
									echo $obj->SelectAllByVal("ams_student_list","id",$cid,"name");
									?></td>
                                    <td align="center" valign="middle">
									<?php 
									echo number_format(($totaldue+$tax_invoice)-$p,2);
									?></td>
                                    <td align="center" valign="middle"><?php echo number_format($total+$tax_invoice,2); ?></td>
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
                                    
                                    <a href="printinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $cid;  ?>&amp;currency=<?php echo $row->currency; ?>" class="btn icon-print"></a>
                                    
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
									
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>