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
                                	
                               
                                
           	  	<div class="grid_8" style="margin-top:-30px;">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3>
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> Voucher <?php 
										echo $id;
										//$sql_in=$obj->SelectAllByID("account_module_bill",array("id"=>$id));
										//foreach($sql_in as $fetsqlin)
										//{
										
										
										
									
										
										?>
                                        <?php
									 $sql_leds1=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$id));
									 $qp1=0;
									 $p1=0;
									 $q1=0;
									 $tax1=0;
									 if(!empty($sql_leds1))
									foreach($sql_leds1 as $fetled1)
									{
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
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        
                                        <a href="addpayment_bill.php?id=<?php echo $id; ?>&amp;due=<?php echo $qp1+$tax1;  ?>&amp;vendor_id=<?php echo $_GET['vendor_id']; ?>&amp;branch_id=<?php echo $_GET['branch_id']; ?>&amp;link_id=<?php echo $_GET['link_id']; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a>
                                    </h3><hr>
                                    </div>
                                                                    
                                    <div class="mws-form-row" style="margin-top:-40px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Vendor</label>
                                                         
                     
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php 
												$cid=$obj->SelectAllByVal("account_module_bill","id",$id,"vendor_id");
												$currency=$obj->SelectAllByVal("account_module_bill","id",$id,"currency");
												$branch=$obj->SelectAllByVal("ams_branch","id",$_GET['branch_id'],"name");
											$sql_cus=$obj->SelectAllByID("account_module_customer",array("id"=>$cid));
												if(!empty($sql_cus))
												foreach($sql_cus as $fetsqlus)
												{
													echo $fetsqlus->company_name;
												}
												 ?>" readonly>                                                       
                                            </div>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Branch</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo $branch; ?>" readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Date</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"date"); ?>" readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Due Date</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"duedate"); ?>" readonly>                                                       
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
                                           		<input type="text" class="large" value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"subheading"); ?>"  readonly>                                                       
                                            </div>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Footer</label>
                                           <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"footer"); ?>"  readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">P.O / S.O / currency</label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large"  value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"poso"); ?> / <?php echo @$obj->SelectAllByVal("account_module_currency","id",$currency,"title"); ?>(<?php echo @$obj->SelectAllByVal("account_module_currency","id",$currency,"detail"); ?>)"  readonly>                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">
                                                	Notes
                                                </label>
                                            <div class="mws-form-item">
                                           		<input type="text" class="large" value="<?php echo @$obj->SelectAllByVal("account_module_bill","id",$id,"notes"); ?>"   readonly>                                                       
                                            </div>
                                    	</div>
                                        </div> 
                                        <hr>
                        
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="center">Item</th>
                                    <th align="center">Stock Available</th>
                                    <th align="center">Quantity</th>
                                    <th align="center">Price</th>
                                    <th align="center">Tax</th>
                                    <th align="center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$inrow=$obj->exists_multiple("account_module_bill_detail",array("bill_id"=>$id));
							$taxtt=0;
							$sql_led=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$id));
							if(!empty($sql_led))
							foreach($sql_led as $fetled){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px; font-size:18px;">
                                    <?php $pid=$fetled->pid;
									
									echo $obj->SelectAllByVal("stockvalidation","id",$pid,"name");
									//$fetpid=mysql_fetch_array($sql_pid);
									
									//echo $fetpid[''];
									?>
                              		</td>
                                    <td valign="middle" align="center" style="width:140px; font-size:18px;">
                                    <?php 
									echo $obj->SelectAllByVal("stockvalidation","id",$pid,"kg");
									//echo $fetpid['description']; ?>
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
									
									//$querytaxrate=$obj->SelectAllByVal("account_module_newtax",array("id"=>$tax));
									//$fetrate=mysql_fetch_array($querytaxrate);
									$rate=$obj->SelectAllByVal("account_module_newtax","id",$tax,"rate");
									$name=$obj->SelectAllByVal("account_module_newtax","id",$tax,"name");
									$vat=$totalprice*$rate/100;
									echo $name."(".$rate."%)".number_format($vat,2);
									$taxtt+=$vat;
									?>
                                    </td>
                                    <td style="width:100px; text-align:right; font-weight:bold; font-size:18px;" align="right"><?php echo number_format(($fetled->price*$fetled->quantity)+$vat,2); ?></td>
                                </tr>
                                <?php } ?>
                                 <tr style="border:1px solid #000;">
                                 <?php
                                 $sql_leds=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$id));
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
										@$rates=$obj->SelectAllByVal("account_module_bill_detail","bill_id",$id,"rate");
										$totas=$fetled->quantity*$fetled->price;
										@$tax+=($totas*$rates)/100;
									}
										
										?>
                                   <td align="center" valign="middle">
                                    
                              		</td>
                                    <td valign="middle" align="center"><span style="font-size:18px;">Item : <?php echo $q; ?></span>
                                    </td>
                                    <td colspan="2" align="center" valign="middle" style="font-size:18px;">
       								Price <?php echo number_format($p,2); ?> TK.       								</td>
                                   	<td valign="middle" align="center" style="font-size:18px;">
									Tax <?php echo number_format($taxtt,2); ?> TK.
                                    </td>
                                    <td align="right" style="font-size:18px;"><?php echo number_format($qp,2); echo "TK"; ?></td>
                                </tr>
                                <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Sub Total : <?php echo number_format($qp,2)."TK + ".number_format($taxtt,2); echo "TK."; ?></td>
                              </tr>
                                <tr>
                                   <td align="center" valign="middle">
                                    
                           		  </td>
                                    <td valign="middle" align="center">&nbsp;</td>
                                    <td valign="middle" align="center">
                                    </td>
                                   	<td valign="middle" align="center">&nbsp;</td> 
                                    <td align="right" colspan="2" style="font-size:18px;">Total : <?php echo number_format($qp+$taxtt,2);  echo "TK."; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                            </form>
                        </div>
                        <?php //} ?>
                    </div>
                </div>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>