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
                	
                </div>
                
                
                <!-- Panels Start -->
                
           	  <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span>Add Payment - Form</span>
                    </div>
                    <?php echo $obj->ShowMsg(); ?>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="class_file/class/addbillpayment.php" method="get">
                            <div class="mws-form-inline">
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Payment Date</label>
                                    <div class="mws-form-item">
                                        <input type="text" value="<?php echo date('Y-m-d'); ?>" class="mws-datepicker small" name="pdate" readonly>
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Payment Account</label>
                                    <div class="mws-form-item">
                                        <select class="mws-select2 large" name="pa">
                                        <?php
										$ss=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
										if(!empty($ss))
										foreach($ss as $wow)
										{
										?>
                                            <option value="<?php echo $wow->id; ?>"><?php echo $wow->head_sub_list_name; ?></option>
                                        <?php
										}
										?>    
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Amount</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="amount" value="<?php echo $due; ?>">
                                        <input name="invoice_id" type="hidden" value="<?php echo $id; ?>">
                                        <input name="due" type="hidden" value="<?php echo $due; ?>">
                                        <input name="link_id" type="hidden" value="<?php echo $_GET['link_id']; ?>">
                                        <input name="branch_id" type="hidden" value="<?php echo $_GET['branch_id']; ?>">
                                        <input name="vendor_id" type="hidden" value="<?php echo $_GET['vendor_id']; ?>">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Memo</label>
                                    <div class="mws-form-item clearfix">
                                        <textarea class="large" name="memo"> </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mws-button-row">
                                <input type="submit" value="Submit" class="btn btn-danger">
                                <input type="reset" value="Reset" class="btn ">
                            </div>
                        </form>
                    </div>      
                </div>
                
                <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span>Voucher Id : <?php echo $id; ?> <span style="float:right; margin-top:-26px;">(Payment History)</span></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th style="font-size:18px; font-weight:bolder; text-align:center;">Date</th>
                                    <th style="font-size:18px; font-weight:bolder; text-align:center;">Payment Account</th>
                                    <th style="font-size:18px; font-weight:bolder; text-align:center;">Amount</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
							$qq=$obj->SelectAllByID("account_module_bill_payment",array("bill_id"=>$id));
							if(!empty($qq))
							foreach($qq as $wow)
							{
							?>
                                <tr>
                                    <td style="font-size:18px; font-weight:bolder; text-align:center;"><?php echo $wow->date; ?></td>
                                    <td style="font-size:18px; font-weight:bolder; text-align:center;"><?php $pa=$wow->pa;
									//$pa_q="SELECT * FROM ladger_list_properties WHERE =''";
									//$obj->sql($pa_q);
									//$fet_ledger=mysql_fetch_array($obj->result);
									echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$pa,"head_sub_list_name");
									?></td>
                                    <td style="font-size:18px; font-weight:bolder; text-align:center;"><?php echo $wow->amount; ?></td>
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