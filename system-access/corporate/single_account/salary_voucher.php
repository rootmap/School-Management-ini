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
                    	<span><i class="icon-table"></i>Salary Voucher</span> 
                            <span style=" float:right; margin-top:-30px;">
                            <a href="add_transaction_salary.php" class="btn btn-success"><i class="icon-plus"></i>Create Voucher</a>
                        	</span>
                    </div>
                    <h2 style="text-align:center; border-left:#000 thick dotted; border-right:#000 thick dotted;"> Salary Voucher </h2>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Total</th>
                                    <th>Due</th>
                                    <th>Paid</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAll("account_module_salary_voucher");
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="view_transaction_salary.php?id=<?php echo $row->id; ?>&amp;link_id=<?php echo $row->link_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>" class="btn"><i class="icon-tools"></i> View </a></li>
                                            <li><a href="view_transaction_salary.php?id=<?php echo $row->id; ?>&amp;link_id=<?php echo $row->link_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->payslipdate; ?></td>
                                    <td align="center" valign="middle"><a style="font-size:18px; font-weight:bolder; color:#333;" href="view_transaction_salary.php?id=<?php echo $row->id; ?>&amp;link_id=<?php echo $row->link_id; ?>&amp;branch_id=<?php echo $row->branch_id; ?>">Salay Voucher - <?php echo $row->id; ?></a></td>
                                    <td align="center" valign="middle"><?php echo $row->ename; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->total; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->due; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->paid; ?></td>
                                </tr>
                             <?php 
							 $a++;
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