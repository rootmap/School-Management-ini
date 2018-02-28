<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from www.malijuthemeshop.com/live_previews/mws-admin/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 07 Jan 2013 09:12:20 GMT -->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="../plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="../custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="../css/mws-style.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="../css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="../jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="../jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="../css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/themer.css" media="screen">

<title>MWS Admin - Form Wizard</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
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
    </div>
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
                	<img src="../example/profile.jpg" alt="User Photo">
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
            	
                
                <!-- Panels Start -->
                <div class="mws-panel grid_8">
              <div class="mws-panel-header">
                        <span><i class="icon-magic"></i> Vertical Wizard Form</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form wzd-vertical">
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-accept"></i> Member Profile</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Fullname <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="fullname" class="required large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Email <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="email" class="required email large">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Address <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Gender <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" id="male" name="gender" class="required"/> <label for="male">Male</label></li>
                                            <li><input type="radio" id="female" name="gender"> <label for="female">Female</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-delivery"></i> Membership Type</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Membership Plan <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>Free</option>
                                            <option>Standard</option>
                                            <option>Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Subscription Period <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>One Month</option>
                                            <option>Six Months</option>
                                            <option>Twelve Months</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Payment Method <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" id="cc" name="pm" class="required"> <label for="cc">Credit Card</label></li>
                                            <li><input type="radio" id="pp" name="pm"> <label for="pp">PayPal</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="pm" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-user"></i> Confirmation</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Message <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="address" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Subscribe Newsletter <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list inline">
                                            <li><input type="radio" id="sn_yes" name="sn" class="required"> <label for="sn_yes">Yes</label></li>
                                            <li><input type="radio" id="sn_no" name="sn"> <label for="sn_no">No</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="sn" style="display:none"></label>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">I agree to the TOS <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list inline">
                                            <li><input type="checkbox" id="tos_y" name="tos" class="required"> <label for="tos_y">Yes</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="tos" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
	<script src="../js/libs/jquery-1.8.3.min.js"></script>
    <script src="../js/libs/jquery.mousewheel.min.js"></script>
    <script src="../js/libs/jquery.placeholder.min.js"></script>
    <script src="../custom-plugins/fileinput.min.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="../jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="../jui/jquery-ui.custom.min.js"></script>
    <script src="../jui/js/jquery.ui.touch-punch.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="../plugins/colorpicker/colorpicker-min.js"></script>
    <script src="../plugins/validate/jquery.validate-min.js"></script>

    <!-- Wizard Plugin -->
    <script src="../custom-plugins/wizard/wizard.min.js"></script>
    <script src="../custom-plugins/wizard/jquery.form.min.js"></script>

    <!-- Core Script -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="../js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="../js/demo/demo.wizard.js"></script>

</body>

<!-- Mirrored from www.malijuthemeshop.com/live_previews/mws-admin/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 07 Jan 2013 09:12:22 GMT -->
</html>
