<?php
include('class_file/auth.php');
extract($_GET);
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
                	
                <?php //include('header_footer_file/invoicehead.php'); ?>    
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
               <!-- <hr style="margin-top:-20px;">-->
                
                <!-- Panels Start -->
                                	
                               
                                
           	  	<div class="grid_8" style="margin-top:-10px;">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3>
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> 
                                        	Invoice 
                                        <?php 
										echo $id;
										$sql_in=$obj->SelectAllByID("account_module_invoice",array("id"=>$id));
										foreach($sql_in as $fetsqlin):
										
										
										//adpayment script
									//$sql1=$obj->SelectAllByID("account_module_invoice",array("id"=>$id));
									//$row=mysql_fetch_array($obj->result);
									$inid=$obj->SelectAllByVal("account_module_invoice","id",$id,"id");
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
										$frate=$obj->SelectAllByVal("account_module_newtax","id",$taxid,"rate");
										//$sql_vat=mysql_query("SELECT * FROM newtax WHERE id='$taxid'");
										//$fetvat=mysql_fetch_array($sql_vat);
										$tax_invoice+=(($fetled->quantity*$fetled->price)*$frate)/100;
									}
										
										
										?>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="addpayment.php?id=<?php echo $id; ?>&amp;cid=<?php echo $_GET['cid']; ?>&amp;branch_id=<?php echo $_GET['branch_id']; ?>&amp;link_id=<?php echo $_GET['link_id'];  ?>&amp;due=<?php echo ($total+$tax_invoice)-$p;  ?>&amp;tam=<?php echo $total+$tax_invoice; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></h3><hr>
                                    </div>
                                                                    
                                    <div class="mws-form-row" style="margin-top:-40px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;"> Student Name </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           		<input type="text" style="text-align:center;" class="large" value="<?php 
												$cid=$fetsqlin->customer_id;
												$currency=$fetsqlin->currency;
												echo $obj->SelectAllByVal("ams_student_list","id",$cid,"name");
												//$sql_cus=mysql_query("SELECT * FROM customer WHERE id='$cid'");
												//$fetsqlus=mysql_fetch_array($sql_cus);
												//echo $fetsqlus['company_name']; ?>" readonly>                                                       
                                            </div>
                                    	</div> 
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Month</label>
                                            <div class="mws-form-item">
                                           		<input type="text" style="text-align:center;" class="large" value="<?php echo $obj->month($fetsqlin->month_id); ?>" readonly>                                                       
                                            </div>
                                    	</div>
                                      	
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Date</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $fetsqlin->date; ?>" readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Due Date</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $fetsqlin->duedate; ?>" readonly>                                                       
                                            </div>
                                    	</div>
                                        </div>                                          
                                    </div>
                                    <div class="mws-form-row" style="margin-top:-10px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Subheading
</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $fetsqlin->subheading; ?>"  readonly>                                                       
                                            </div>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Footer</label>
                                           <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $fetsqlin->footer; ?>"  readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">P.O / S.O</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large"  value="<?php echo $fetsqlin->poso; ?>"  readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">
                                                	Notes
                                                </label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $fetsqlin->notes; ?>"   readonly>                                                       
                                            </div>
                                    	</div>
                                        </div> 
                                        <hr>
                        
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="center">Item</th>
                                    <th align="center">Detail</th>
                                    <th align="center">Quantity</th>
                                    <th align="center">Price</th>
                                    <th align="center">Tax</th>
                                    <th align="center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$inrow=$obj->exists_multiple("account_module_invoice_detail",array("invoice_id"=>$id));
							$sql_led=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$id));
							if(!empty($sql_led))
							foreach($sql_led as $fetled){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px; font-size:18px;">
                                    <?php $pid=$fetled->pid;
									
									//$sql_pid=mysql_query("SELECT * FROM product WHERE id=''");
									//$fetpid=mysql_fetch_array($sql_pid);
									
									echo $obj->SelectAllByVal("account_module_product","id",$pid,"pname");
									?>
                              		</td>
                                    <td valign="middle" align="center" style="width:140px; font-size:18px;">
                                    <?php echo $obj->SelectAllByVal("account_module_product","id",$pid,"description"); ?>
                                    </td>
                                    <td valign="middle" align="center" style="width:60px; font-size:18px;">
                                    <?php echo $fetled->quantity; ?>
                                    </td>
                                   	<td valign="middle" align="center" style="width:110px; font-size:18px;" id="priceff">
       								<?php echo @number_format($fetled->price,2); ?>
       								</td> 
                                    <td valign="middle" align="center" style="width:150px; font-size:18px;">
                                    <?php 
									
									$totalprice=$fetled->quantity*$fetled->price;
									
									
									$tax=$fetled->tax_id;
									//$querytaxrate=mysql_query("SELECT * FROM newtax WHERE id=''");
									//$fetrate=mysql_fetch_array($querytaxrate);
									@$rate=$obj->SelectAllByVal("account_module_newtax","id",$tax,"rate");
									@$name==$obj->SelectAllByVal("account_module_newtax","id",$tax,"name");
									$vat=$totalprice*$rate/100;
									echo @$name."(".$rate."%)".number_format($vat,2);
									?>
                                    </td>
                                    <td style="width:100px; text-align:right; font-weight:bold; font-size:18px;" align="right"><?php echo number_format($fetled->price*$fetled->quantity,2); ?></td>
                                </tr>
                                <?php } ?>
                                 
                                 <?php
                                 $sql_leds=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$id));
								 $qp=0;
								 $p=0;
								 $q=0;
								 $tax=0;
								 if(!empty($sql_leds))
								 foreach($sql_leds as $fetled)
								 {
										$qp+=$fetled->quantity*$fetled->price;
										$p+=$fetled->price;
										$q+=$fetled->quantity;
										$taxid=$fetled->tax_id;
										//$sql_vat=mysql_query("SELECT * FROM newtax WHERE id='$taxid'");
										//$fetvat=mysql_fetch_array($sql_vat);
										$frated=$obj->SelectAllByVal("account_module_newtax","id",$taxid,"rate");
										$tax+=(($fetled->quantity*$fetled->price)*$frated)/100;
								 }
										
										?>
                                   
                                <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Sub Total : <?php echo number_format($qp,2); ?></td>
                              </tr>
                              <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Tax : <?php echo number_format($tax,2); ?></td>
                              </tr>
                                <tr>
                                   <td align="center" valign="middle">
                                    
                           		  </td>
                                    <td valign="middle" align="center">&nbsp;</td>
                                    <td valign="middle" align="center">
                                    </td>
                                   	<td valign="middle" align="center">&nbsp;</td> 
                                    <td align="right" colspan="2" style="font-size:18px;">Total : <?php echo number_format($qp+$tax,2);  echo "TK."; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                            </form>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>