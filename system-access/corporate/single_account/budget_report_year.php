<?php
include('class_file/auth.php');
extract($_GET);
?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script src="jquery.min.js"></script>
<script>
        $(document).ready ( function () {
            $("#btn1").click ( function () {
              
			  var aa = 0.0;
			  var bb = 0.0;
			  var cc = 0.0;
			  var dd = 0.0;
			  var ee = 0.0;
			  var ff = 0.0;
			  
			  
               $(".aa").each ( function() {
                   aa += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
                //alert ( debit );
				document.getElementById('aaa').value= aa;
				
				$(".bb").each ( function() {
                   bb += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('bbb').value= bb;
				
				$(".cc").each ( function() {
                   cc += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('ccc').value= cc;
				
				$(".dd").each ( function() {
                   dd += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('ddd').value= dd;
				
				$(".ee").each ( function() {
                   ee += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('eee').value= ee;
				
				$(".ff").each ( function() {
                   ff += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('fff').value= ff;
				
				
				
				
				
            });
        });
		
    </script>
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
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i> Budget</span> 
                            <span style="margin-left:250px; margin-top:-30px;">
                            <a href="budget_report_make.php" class="btn btn-success"><i class="icon-plus"></i>Create Budget</a>
                        	</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="#" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                                               
                                    
                                   		<div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                            	<tr>
                                	<td width="27" rowspan="2" align="center" valign="middle">Item</td><td colspan="3" align="center" valign="middle">2011-2012</td><td colspan="3" align="center" valign="middle">2012-2013</td>
                                </tr>
                                <tr>
                                	<td align="center" valign="middle">Approved Budget</td><td width="91" align="center" valign="middle">Actual Exp</td><td width="117" align="center" valign="middle">Varience</td>
                                    <td width="147" align="center" valign="middle">Authorised Budget</td><td width="158" align="center" valign="middle">Actual Exp for 6mths</td><td width="163" align="center" valign="middle">Revised budget for 6mths</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$sql=mysql_query("SELECT * FROM budget WHERE byear='$id'");
							$a=0;
							$b=0;
							$c=0;
							$d=0;
							$e=0;
							$f=0;
							while($row=mysql_fetch_array($sql))  
							{
							?>
                            	<tr>
                                	<td align="center" valign="middle"><?php echo $row['ladgerid']; ?></td>
                                    <td align="center" valign="middle"><?php echo $row['aa']; $a+=$row['aa']; ?></td>
                                    <td width="91" align="center" valign="middle"><?php echo $row['bb']; $b+=$row['bb']; ?></td>
                                    <td width="117" align="center" valign="middle"><?php echo $row['cc']; $c+=$row['cc']; ?></td>
                                    <td width="147" align="center" valign="middle"><?php echo $row['dd']; $d+=$row['dd']; ?></td>
                                    <td width="158" align="center" valign="middle"><?php echo $row['ee']; $e+=$row['ee']; ?></td>
                                    <td width="163" align="center" valign="middle"><?php echo $row['ff']; $f+=$row['ff']; ?></td>
                                </tr>
                                <?php
								}
								?>
                            </tbody>
                            <thead>
                            <tr>
                                	<td align="center" valign="middle">Sub Total</td>
                                    <td align="center" valign="middle"><?php echo $a; ?></td>
                                    <td width="91" align="center" valign="middle"><?php echo $b; ?></td>
                                    <td width="117" align="center" valign="middle"><?php echo $c; ?></td>
                                    <td width="147" align="center" valign="middle"><?php echo $d; ?></td>
                                    <td width="158" align="center" valign="middle"><?php echo $e; ?></td>
                                    <td width="163" align="center" valign="middle"><?php echo $f; ?></td>
                                </tr>
                               
                            </thead>
                        </table>
                        
                </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>