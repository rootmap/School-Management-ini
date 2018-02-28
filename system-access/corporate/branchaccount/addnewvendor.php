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
                                   
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                <!-- Panels Start -->
                
              <?php echo $obj->ShowMsg(); ?>
                <?php
				if(@$id=='')
				{
				?>
           	  	<div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-plus"></i> Add New Vendor</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" method="post" id="mws-validate" action="class_file/class/addnewvendor.php">
                        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                            <fieldset class="mws-form-inline">
                                <legend><strong>Company Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Vendor Name </label>
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
                                    <label class="mws-form-label">First Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="required large" name="fname">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Last Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="lname">
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
                <?php
				}
				elseif(@$id!='')
				{
				?>
                <div class="mws-panel grid_6" style="margin-left:150px;">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> Additional Info </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="#">
                       
                                <fieldset class="mws-form-inline">
                                 <legend><strong>Contact Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Vendor ID  </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" value="<?php echo $id; ?>" readonly>
                                    </div>
                                </div><div class="mws-form-row bordered">
                                    <label class="mws-form-label">Company Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" value="<?php echo $cn; ?>" readonly>
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Account Number </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Bank Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Address Line 1 </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Address Line 2 </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">City </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Country </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Province </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Postal / Zipcode </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Phone </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Fax </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Mobile </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Toll Free </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Website </label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large">
                                    </div>
                                </div>
                            </fieldset>
                           
                            <div class="mws-button-row">
                                <input type="submit" value="Submit" class="btn btn-danger">
                                <input type="reset" value="Reset" class="btn ">
                            </div>
                        </form>
                    </div>      
                </div>
                <?php
				}
				?>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>