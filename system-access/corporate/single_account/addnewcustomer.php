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
                                   
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                <!-- Panels Start -->
                
              	<?php echo $obj->ShowMsg(); ?>
                
           	  	<div class="mws-panel grid_12">
                    <div class="mws-panel-header">
                        <span><i class="icon-plus"></i> Add New Customer</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" method="post" id="mws-validate" action="class_file/class/addnewcustomer.php">
                        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                            <fieldset class="mws-form-inline">
                                <legend><strong>Company Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Company Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="required large" name="company_name">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Email </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="email">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Contact Person Name 1 </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="required large" name="fname">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Contact Person Name 2 </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="lname">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Phone </label>
                                    <div class="mws-form-item">
                                        <input name="phone" placeholder="Phone / Mobile Number" type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Address Line 1 </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="address" placeholder="Company Address" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Bank Account Number </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="ac" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Bank Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="bankname" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Currency </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="currency">
                                        	<option value="" selected>Chose</option>
                                            <?php
											$sql1=$obj->SelectAll("account_module_currency");
											foreach($sql1 as $row)
											{
											?>
											<option value="<?php echo $row->id; ?>"><?php echo $row->title; echo "--".$row->detail; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
                                </div>
                                </fieldset>
                            <div class="mws-button-row">
                                <input type="submit" value="Save" class="btn btn-success">
                                <input type="reset" value="Clear" class="btn ">
                            </div>
                             </form>
                    </div>      
                </div>
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>