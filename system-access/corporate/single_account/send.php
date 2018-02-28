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

/*$sql_jd=mysql_query("SELECT * FROM journal_description WHERE id='$id'");
$fetjd=mysql_fetch_array($sql_jd);*/
?>
                </div>
                
                
                <!-- Panels Start -->
                
           	  <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span>Email - Form</span>
                    </div>
                    <?php echo $obj->ShowMsg(); ?>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="class_file/class/sendinvoice.php" method="get">
                            <div class="mws-form-inline">
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Client Email</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="required email large" name="pdate" value="<?php echo $email; ?>" readonly>
                                        <input name="id" type="hidden" value="<?php echo $id; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="mws-button-row">
                                <input type="submit" value="Confirm : Mail Now" class="btn btn-success">
                            </div>
                        </form>
                    </div>      
                </div>
                
                
                
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>