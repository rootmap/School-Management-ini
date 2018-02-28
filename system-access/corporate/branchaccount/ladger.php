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
                    <h2 align="center">General Ledger</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">From 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-table-fn mws-table">
                            <thead>
                                <tr>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Accounts</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Debit</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Cradit</strong></th>
                                    <th style="color:#000; font-size:18px; font-weight:bolder;"><strong>Net Movement</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$ld=$obj->SelectAll("account_module_ladger_list_properties");
							if(!empty($ld))
							foreach($ld as $row)
							{
								$inid=$row->id; 
								$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
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
                                    <a style="color:#000; font-size:18px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>&amp;branch_id=<?php echo $branch_id; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </td>
                                    <td valign="middle" align="right" style="color:#000; font-size:18px; font-weight:bolder;"><?php echo number_format($debit); ?></td>
                                    <td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><?php echo number_format($cradit); ?></td>
                                    <td align="right" valign="middle" style="color:#000; font-size:18px; font-weight:bolder;"><strong>
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm); }
									else
									{ echo "(".number_format(substr($netm,1,200)).")"; }  
									
									?></strong></td>
                                </tr>
                             <?php 
							 }
							}
							 ?> 
                             
                            </tbody>
                            
                        
                            <thead><?php
									$getdutotala=$obj->SelectAllByID("account_module_ladger",array("branch_id"=>$branch_id));
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
                                    <th><strong>Total </strong></th>
                                    <th><span style="border-bottom:1px #666666 dotted;"><strong>Debit = <?php echo number_format($debitt); ?></strong></span></th>
                                    <th><span style="border-bottom:1px #666666 dotted;"><strong>Cradit = <?php echo number_format($craditt); ?></strong></span></th>
                                    <th><span style="border-bottom:1px #666666 dotted;"><strong>Net Movement = <?php echo number_format($debitt-$craditt); ?></strong></span></th>
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