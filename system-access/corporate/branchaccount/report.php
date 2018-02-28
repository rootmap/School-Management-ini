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
                
				<div class="mws-panel grid_4 mws-collapsible  mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="balancesheet.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Balance Sheet </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Balance Sheet</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="balancesheet.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">The summary of what you have, what you owe and the business value.</h4>
                        
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="customer.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Income By Customer </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Income By Customer</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="customer.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See The Income You Received, Broken Down By Source</h4>
                        
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Accounts Transactions </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3> Accounts Transactions </h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See The Transactions That Occurred In Each Account</h4>
                        
                    </div>
                </div>
                
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="customer.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Expense By Vendor </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Expense By Vendor</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="customer.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See What You Paid In Expenses, Broken Down By Recipient</h4>
                        
                    </div>
                </div>
                
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="ladger.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> General Ledger </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>General Ledger</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="ladger.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See All Accounts Summary And Details</h4>
                        
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="trialbalance.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Trial Balance </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Trial Balance</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="trialbalance.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See How Much Expected To Come In, And How Long You Have T0 Wait</h4>
                        
                    </div>
                </div>
                
                
                
               <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Aged Receiables </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Aged Receiables</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h4 align="justify" style="color:#333;">See How Much Expected To Come In, And How Long You Have T0 Wait</h4>
                        
                    </div>
                </div> 
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="incomestatement.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Income Statement </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Income Statement</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="incomestatement.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h5 align="justify" style="color:#333;">Income Minus Expenses; Tells If You Brought In More That You Spend This Period.</h5>
                        
                    </div>
                </div>
                
                
                
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="agepayable.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Aged Payables </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Aged Payables</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="agepayable.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h5 align="justify" style="color:#333;">See The Expenses You Havn't Paid Yet, And How Long Payment Has Been Outstanding</h5>
                        
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="receive.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Total Recive Report </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Total Recive Report</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="receive.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h5 align="justify" style="color:#333;">See How Many Receveables You Collected. </h5>
                        
                    </div>
                </div>
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="payable.php?branch_id=<?php echo $branch_id; ?>" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Total Paid Report </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Total Paid Report</h3>
                        <h2 style="margin-left:270px; margin-top:-50px;"><a href="payable.php?branch_id=<?php echo $branch_id; ?>" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h5 align="justify" style="color:#333;">See How Many Paid to Vendor. </h5>
                        
                    </div>
                </div>
                
                
                <div class="mws-panel grid_4 mws-collapsible mws-collapsed">
                	<div class="mws-panel-header">
                    	<span><a href="" style="color:#FFF; text-decoration:none;"><i class="icon-table"></i> Gain/Loss On Forign Currency Exchange </a></span>
                    </div>
                    <div class="mws-panel-body">
                    	<h3>Gain/Loss On Forign Currency Exchange</h3>
                        <h2 style="margin-left:400px; margin-top:-50px;"><a href="" style="color:#000; text-decoration:none;"><i class="icon-arrow-right-2"></i> Go</a></h2>
                        <h5 align="justify" style="color:#333;">See Gain And Loss Of Forign Exchange Incurred When Doing Business In Forign Currency</h5>
                        
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>