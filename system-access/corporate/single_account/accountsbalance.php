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
                <div class="mws-panel grid_8" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding">
                    <h2 align="center">Accounts Balances</h2>
                        <table class="mws-datatable-fn mws-table" style="margin-top:-30px;">
                            <thead>
                                <tr>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Name</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Debit</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Credit</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$ld=$obj->SelectAll("account_module_ladger_list_properties");
							foreach($ld as $row)
							{
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID("account_module_ladger",array("ladger_id"=>$inid));
										$debit=0;
										$cradit=0;
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
									
							?>
                                <tr>
                                	<td valign="middle" align="left">
                                    <a style="color:#000; font-size:18px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </td>
                                    <td valign="middle" align="center" style="color:#000; font-size:18px; font-weight:bolder;"><?php echo $debit; ?></td>
                                    <td align="center" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><?php echo $cradit; ?></td>
                                </tr>
                             <?php } ?> 
                             
                            </tbody>
                            
                        </table>
                        <table class="mws-table">
                            <tbody><?php
									$getdutotala=$obj->SelectAll("account_module_ladger");
										$debitt=0;
										$craditt=0;
									foreach($getdutotala as $duet)
									{
										$debitt+=$duet->debit;
										$craditt+=$duet->cradit;
									}
									
							?>
                                <tr>
                                	<th width="400">&nbsp;</th>
                                    <th><strong>Total </strong></th>
                                    <th><strong>Debit = <?php echo $debitt; ?></strong></th>
                                    <th><strong>Cradit = <?php echo $craditt; ?></strong></th>
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