<?php
include('class_file/auth.php');
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
                
           	  	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Voucher</span> 
                            <span style="float:right; margin-top:-30px;">
                            <a href="addbill.php" class="btn btn-success" id="mws-jui-dialog-mdl-btn"><i class="icon-plus"></i> Create Voucher</a>
                        <div id="mws-jui-dialog">
                        		<div class="mws-dialog-inner">
                                <form method="get" action="addbill.php" name="bill_add">
                                 <?php if(@$branch_id!='') {?>
                                   <input type="hidden" name="branch_id" value="<?php echo $branch_id; ?>"/>
                                   <?php } ?>
                            		<span><i class="icon-table"></i> &nbsp;&nbsp;&nbsp;How Many Item You Want to Add &nbsp;&nbsp;&nbsp;<input type="text" name="inrow" style="width:50px;"><button class="btn btn-success" style="margin-left:40px;">Create Voucher</button></span>
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
							$array=array("branch_id"=>$branch_id);
							$sql1=$obj->SelectAllByID("account_module_bill",$array);
							
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
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
									if(!empty($sql_vat1))
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
                                            <li><a href="viewbill.php?id=<?php echo $row->id; ?>&amp;vendor_id=<?php echo $row->vendor_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>&amp;link_id=<?php echo $row->link_id; ?>" class="btn"><i class="icon-tools"></i> View </a></li>
                                            <li><a href="addpayment_bill.php?id=<?php echo $row->id; ?>&amp;due=<?php echo $qp1+$tax1-$p;  ?>&amp;vendor_id=<?php echo $row->vendor_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>&amp;link_id=<?php echo $row->link_id; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->date; ?></td>
                                    <td align="center" valign="middle"><a style="font-size:18px; font-weight:bolder; color:#333;" href="viewbill.php?id=<?php echo $row->id; ?>&amp;vendor_id=<?php echo $row->vendor_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>&amp;link_id=<?php echo $row->link_id; ?>">Voucher - <?php echo $row->id; ?></a></td>
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
									
									?></td>
                                    <td align="center" valign="middle"><?php echo number_format($qp1+$tax1,2); ?></td>
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
                                    
                                    <a href="printbill.php?id=<?php echo $row->id; ?>" class="btn icon-print"></a>
                                    
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
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>