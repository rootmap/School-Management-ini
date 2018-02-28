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
                
                
                
                
           	  	<div class="mws-panel grid_8" style="margin-top:-40px;">
                	<div class="mws-panel-body no-padding">
                    <h2 align="center">Trial Balance</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">From 01/01/<?php echo date('Y');  ?> To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-table-fn mws-table">
                            <thead>
                                <tr>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Accounts</strong></th>
                                    <th align="right" style="color:#000; font-size:18px; font-weight:bolder;"><strong>Debit</strong></th>
                                    <th align="right" style="color:#000; font-size:18px; font-weight:bolder;"><strong>Cradit</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$ld=$obj->SelectAll("account_module_ladger_list_properties");
							$dd=0;
							$cc=0;
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
									
									$getempty=$debit-$cradit;
									if($getempty!=0)
									{
							?>
                                <tr>
                                	<td valign="middle" align="left">
                                    <a style="color:#000; font-size:18px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </td>
                                    <td valign="middle" align="right" style="color:#000; font-size:18px; font-weight:bolder;">
									<?php 
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ 
									echo number_format($netm,2);
									
									$dd+=$netm;
									}
									else
									{ echo 0; }  
									?></td>
                                    <td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;">
									<?php
									 $netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo 0; }
									else
									{ 
									echo  number_format(substr($netm,1,200),2);
									$cc+=substr($netm,1,200);
									}  
									?></td>
                                </tr>
                             <?php 
									}
							 } ?> 
                             
                            </tbody>
                            
                          <thead>
                                <tr>
                                    <th width="168"><strong>Total </strong></th>
                                    <th width="275"><strong><span style="text-decoration:overline;"><u>Debit = <?php echo number_format($dd,2); 
									//echo strlen($dd); ?></u></span></strong></th>
                                    <th width="200"><strong><span style="text-decoration:overline;"><u>Cradit = <?php echo  number_format($cc,2); ?></u></span></strong></th>
                                </tr>
                            </thead>
                         </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>