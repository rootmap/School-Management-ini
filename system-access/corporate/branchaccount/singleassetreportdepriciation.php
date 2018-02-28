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
                        <span><i class="icon-boat"></i> Asset Id : <?php echo $assetid; ?> </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th colspan="2">Dep</th>
                                    <th colspan="3">Cummalative</th>
                                    <th colspan="2">Net Movement of WDV</th>
                               </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>For The Year</th>
                                    <th>Opening</th>
                                    <th>Adjustment</th>
                                    <th>Year Closing</th>
                                    <th>Current Year</th>
                                    <th>Previous Year</th>
                                    
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
	$sqlh==$obj->SelectAllByID("account_module_fixed_asset_register",array("pid"=>$assetid));
	$a=1;
	foreach($sqlh as $mydata){
	$recy=$mydata->recordyear;
	$curyear=date('Y');
	$resy=$curyear-$recy;

								for($i=0; $i<=$resy; $i++)
								{
								?>
                                <tr>
                                    <td><?php echo $mydata->recordyear+$i; ?></td>
                                    <td><?php echo number_format($mydata->totald); ?></td>
                                    <td><?php echo number_format($i*$mydata->totald); ?></td>
                                    <td><?php echo number_format($mydata->adjustment); ?></td>
                                    <td><?php echo number_format($mydata->totald+($i*$mydata->totald)+$mydata->adjustment);
									 $cly=$mydata->totald+($i*$mydata->totald);
									?></td>
                                    <td><?php echo number_format($mydata->total-$cly); ?></td>
                                    <td><?php 
									if($i==0)
									{
										echo 0;
									}
									else
									{
									echo number_format(($mydata->total-($mydata->totald*$i)));
									}
									?></td>
                                </tr> 
                                <?php 
								
								}
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