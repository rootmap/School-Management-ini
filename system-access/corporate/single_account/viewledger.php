<?php include('class_file/auth.php'); extract($_GET); ?>
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
                      
                
                
           	  	<div class="mws-panel grid_8" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding">
                    <h2 align="center"><?php 
					//$sqlledger=mysql_query("SELECT * FROM ladger_list_properties WHERE id='$ladger_id'");
					//$fetledger=mysql_fetch_array($sqlledger);
					echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$ladger_id,"head_sub_list_name");
					//echo $fetledger['head_sub_list_name']; 
					?></h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">From 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-datatable-fn mws-table" style="margin-top:-30px;">
                            <thead>
                                <tr>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Accounts</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Debit</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Credit</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Net Movement</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
									
									$ld=$obj->SelectAllByID("account_module_ladger",array("ladger_id"=>$ladger_id));
									if(!empty($ld))
									foreach($ld as $row)
									{
										$nj=$row->invoice_id;
										$njc=substr($nj,0,1);
										/*$chkledger=mysql_num_rows(mysql_query("SELECT * FROM ladger WHERE ladger_id='$invoice_ladger_id' AND invoice_id='$invoice_id'"));*/
																	
									?>   
									<?php 
									if($njc=="J"){ $linkname="viewjournal.php"; $linktitle="Journal";  }
                                    elseif($njc=="N"){ $linkname="viewinvoice.php"; $linktitle="Invoice"; }
                                    elseif($njc=="B"){ $linkname="viewbill.php"; $linktitle="Bill"; }
									elseif($njc=="O"){ $linkname="view_officeexpense_voucher_ladger.php"; $linktitle="Office Expense "; }
									elseif($njc=="S"){ $linkname="view_transaction_salary.php"; $linktitle="Salary Voucher "; }
									else
									{
										$linkname="#"; $linktitle="";
									}
                                    ?>                         
									  <tr>
											<td valign="middle" align="left">
										   
											<a style="color:#000; font-size:18px; font-weight:bolder;" href="<?php echo $linkname; ?>?id=<?php echo substr($nj,1,1000); ?>"><?php echo $row->ladger_date; ?> ( <?php echo $linktitle; echo substr($nj,1,1000); ?> )</a>
											</td>
											<td valign="middle" align="right" style="color:#000; font-size:18px; font-weight:bolder;">
											<?php
											echo number_format($row->debit);
											$debit=$row->debit;
											?></td>
											<td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><?php //echo $b;	
											echo number_format($row->cradit);
											$debitc=$row->cradit; ?></td>
											<td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><strong><?php //echo $a-$b; ?></strong></td>
										</tr>
									 <?php 
									 
										}
									  ?>
									 
									 </tbody>
									
								</table>
								<table class="mws-table">
									<tbody><?php
											$getdutotala=$obj->SelectAllByID("account_module_ladger",array("ladger_id"=>$ladger_id));
												$debitt=0;
												$craditt=0;
											if(!empty($getdutotala))	
											foreach($getdutotala as $duet)
											{
												$debitt+=$duet->debit;
												$craditt+=$duet->cradit;
											}
											
							?>
                                <tr>
                                	<th width="400">&nbsp;</th>
                                    <th><strong>Total </strong></th>
                                    <th><strong>Debit = <?php echo number_format($debitt); ?></strong></th>
                                    <th><strong>Cradit = <?php echo number_format($craditt); ?></strong></th>
                                    <th><strong>Net Movement = <?php echo number_format($debitt-$craditt); ?></strong></th>
                                </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>