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
                
           	         
                <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-boat"></i> Fixed Assets Report </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form id="mws-validate" class="mws-form" action="class_file/class/addrates.php" method="post">
                                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                    <div class="mws-form-inline">
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Select Accounts Head</label>
                                            <div class="mws-form-item">
                                            <select class="mws-select2 large" name="achid">
                                            <?php 
											$qq=$obj->SelectAllByID("account_module_head_list",array("id"=>$achid));
											foreach($qq as $wow)
											{
/*<!--												$rid=$wow;
												$chkrid=mysql_num_rows(mysql_query("SELECT * FROM fixassetrates WHERE achid='$rid'"));
												if($chkrid!=1)
												{-->*/
											?>
											<option value="<?php echo $wow->id; ?>"><?php echo $wow->head_title; ?></option>
											<?php 
												/*}*/
											}
											?>    
                                            </select>
                                        </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Type Rate </label>
                                            <div class="mws-form-item">
                                            <select class="mws-select2 small" name="rates">
                                            <?php 
											for($i=0; $i<=100; $i++)
											{
											?>
											<option value="<?php echo $i; ?>"><?php echo $i; ?> %</option>
											<?php 
											}
											?>    
                                            </select>
                                        </div>
                                        </div>
                                        
                                        </div><div class="mws-button-row">
                    			<input type="submit" value="Submit" class="btn btn-danger">
                    			<input type="reset" value="Reset" class="btn ">
                    		</div>
                                    </div>
                                    
                                </form>
                            </div>
                    </div>  
                
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>