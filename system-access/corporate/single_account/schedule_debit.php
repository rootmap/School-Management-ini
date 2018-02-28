<?php
include('header_footer_file/header.php');
include('class_file/db_Class.php');
$obj = new db_class();
$obj->MySQL();
?>
<body>

	<!-- Themer (Remove if not needed) -->  
	<!--<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
       	  <form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="../images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="../css/icons/icol16/src/user.png" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="../index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
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
                    	<span><i class="icon-table"></i> Inter Project Current Account Debit  </span> 
                    </div>
                    <h2 style="text-align:center; border-left:#000 thick dotted; border-right:#000 thick dotted;">Inter Project Current Account Debit </h2>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th align="left" valign="middle"> Name of Unit &amp; Garden </th>
                                    <th> LF </th>
                                    <th align="right" valign="middle">Amount In Taka </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='6'");
							while($row=mysql_fetch_array($ld))
							{
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
									}
									
									
									$chdc=$debit;
									if($chdc!=0)
									{
									
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="view_transaction_salary.php?id=<?php echo $row['id']; ?>" class="btn"><i class="icon-tools"></i> View </a></li>
                                            <li><a href="view_transaction_salary.php?id=<?php echo $row['id']; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><a style="color:#000; font-size:18px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a></td>
                                    <td align="center" valign="middle"><?php echo $inid; ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($debit); ?></td>
                                </tr>
                             <?php 
							 } 
							 
							}
							 ?> 
                            </tbody>
                        </table>
                        <table class="mws-table">
                            <tbody>
							<?php
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='6'");
							$deft=0;
							while($row=mysql_fetch_array($ld))
							{
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
									}
									
									$deft+=$debit;
									
							}
							?>
									
						
                                <tr>
                                	<th width="400">&nbsp;</th>
                                    <th width="39"><strong>Total </strong></th>
                                    <th width="187"><strong><?php echo number_format($deft); ?></strong></th>
                                </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>