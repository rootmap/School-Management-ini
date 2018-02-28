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
                	
<?php //include('header_footer_file/accjournalbalance.php');

//$sql_jd=mysql_query("SELECT * FROM journal_description WHERE id='$id'");
//$fetjd=mysql_fetch_array($sql_jd);
?>
                </div>
                
                
                <!-- Panels Start -->
                
           	  
                <div class="mws-panel grid_12">
                    <div class="mws-panel-header">
                        <span>(Payment Paid to Vendor) </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">Date</th>
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">Invoice</th>
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">Payment Account</th>
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">Amount</th>
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">Memo</th>
                                    
                                    <th style="font-size:14px; font-weight:bolder; text-align:center;">&nbsp;</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
							$qq=$obj->SelectAll("account_module_bill_payment");
							if(!empty($qq))
							foreach($qq as $wow)
							{
							?>
                                <tr>
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;"><?php echo $wow->date; ?></td>
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;">
									<a style="color:#03C !important; font-weight:bolder; font-size:16px;" href="viewbill.php?id=<?php echo $wow->bill_id; ?>">Voucher - 
									<?php echo $wow->bill_id; ?></a>
                                    </td>
                                    
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;"><?php $pa=$wow->pa;
									echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$pa,"head_sub_list_name");
									?></td>
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;"><?php echo $wow->amount; ?></td>
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;"><?php echo $wow->memo; ?></td>
                                    <td style="font-size:12px; font-weight:bolder; text-align:center;"><a href="print_invoice_payment.php?id=<?php echo $wow->id; ?>" class="btn icon-print"></a></td>
                                </tr>
                            <?php 
							}
							?>    
                            </tbody>
                        </table>
                    </div>      
                </div>
                
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>