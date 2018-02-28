<?php 
include('class_file/auth.php');
include('class_file/class/internal_query_dashboard.php');
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
        	<!-- Searchbox -->
        	 <?php include('header_footer_file/search_box.php'); ?>
        	<!-- Searchbox -->
        	
            
            <!-- Main Navigation -->
            <?php //include('header_footer_file/left_menu.php'); ?>
            </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
            	<div class="mws-stat-container clearfix">
                
                <a class="mws-stat grid_8 " href="">
                    <span class="mws-stat-content">
                        <span class="mws-stat-value grid_8" style="text-align:center;">Branch Accounts</span>
                    </span>
                 </a>
                <?php 
				  $barnch=$obj->SelectAll("ams_branch");
				  if(!empty($barnch))
				  foreach ($barnch as $row):
				?>
                	<a class="mws-stat grid_4" href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>">
                    	<span class="mws-stat-icon icol32-building"></span>
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title"></span>
                            <span class="mws-stat-value" style="font-size:1.5em;"><?php echo $row->name; ?></span>
                        </span>
                    </a>
                 <?php endforeach; ?>
            </div>
                
                
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>