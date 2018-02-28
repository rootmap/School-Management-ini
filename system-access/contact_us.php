<!DOCTYPE html>
<html>
<head>
<title>Dreams Tech &ndash; Contact Us</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/link_page_styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="wrapper">
    
        <!-- primary container starts -->
        <div class="container_primary">
        	
            <!-- container starts -->
            <div class="container fl_l">
            
                <!-- logo starts here -->
                <div id="logo">
                    <h1>
	                    <a href="#" title="Dreams Tech">Dreams Tech Logo</a>
                    </h1>
                </div>
                <!-- logo ends here -->
                
                <!-- container inside starts -->
                <div class="container_ins">
                
                    <!-- vertical menu stars -->
                    <?php include('include/left_menu.php'); ?>
                    <!-- vertical menu ends -->
                    
                    <!-- content box starts -->
                    <div class="content_box fl_l">
                    
                        <h2>Contact us</h2>
                        
                        <div class="blog blog_r">
                        
                            <form id="form_contact_us" action="#" method="post">
                            
                                <div class="row">
                                
                                    <div class="row fl_l">
                                    	<label for="form_user_name">Name</label>
                                    </div>
                                    
                                    <div class="row fl_r">
                                    	<input id="form_user_name" class="input" name="user_name" type="text" value="" title="Write your name" />
                                    </div>
                                    
                                    <div class="clear"></div>
                                
                                </div>
                                
                                <div class="row">
                                
                                    <div class="row fl_l">
                                    	<label for="form_user_email">E-mail</label>
                                    </div>
                                    
                                    <div class="row fl_r">
                                    	<input id="form_user_email" class="input" name="user_email" type="text" value="" title="Write your e-mail address" />
                                    </div>
                                    
                                    <div class="clear"></div>
                                
                                </div>
                                
                                <div class="row">
                                
                                    <div class="row fl_l">
                                    	<label for="form_user_phone">Phone</label>
                                    </div>
                                    
                                    <div class="row fl_r">
                                    	<input id="form_user_phone" class="input" name="user_phone" type="text" value="" title="Write your phone number" />
                                    </div>
                                    
                                    <div class="clear"></div>
                                
                                </div>
                                
                                <div class="row">
                                
                                    <div class="row fl_l">
                                    	<label for="form_user_msg">Message</label>
                                    </div>
                                    
                                    <div class="row fl_r textarea">
                                    	<textarea id="form_user_msg" class="input" name="user_msg">Write your message...</textarea>
                                    </div>
                                    
                                    <div class="clear"></div>
                                
                                </div>
                                
                                <div class="row">
                                
                                    <div class="row fl_l"></div>
                                    
                                    <div class="row fl_r">
                                    	
                                        <button class="mrg_r" type="submit" title="Send your message">Send</button>
                                        <button type="reset" title="Try again">Clear</button>
                                        
                                    </div>
                                    
                                    <div class="clear"></div>
                                
                                </div>
                            
                            </form>
                        
                        </div>
                        
                        <h2>Stay in touch ( 148, Shantinagor, Dhaka-1217 )</h2>
                        <div class="blog">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d913.0632853944127!2d90.4160155604701!3d23.738350737474576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!1i0!3e6!4m3!3m2!1d23.7389762!2d90.4157829!4m3!3m2!1d23.7388878!2d90.41596799999999!5e0!3m2!1sen!2s!4v1401976406455" width="670" height="240" frameborder="0" style="border:0"></iframe>
                        </div>
                    
                    </div>
                    <!-- content box ends -->
                    
                    <div class="clear"></div>
                
                </div>
                <!-- container inside ends -->
            
            </div>
            <!-- container ends -->
            
            <!-- side bar starts -->
            <div class="side_bar fl_l">
            
                <div class="links">
                
                    <div class="row">
                    
                    	<ul>
                        	<li><a href="log_in.php">Log in</a></li>
                            <li><a href="#">Notice</a></li>
                            <li><a href="#">Call: 01671448829</a></li>
                        </ul>
                    
                    </div>
                    
                    <div class="row">
                    
                        <a class="fl_l" href="https://www.facebook.com/pages/Dreams-Tech-Ltd/220164278178540?fref=ts" title="Follow us on Facebook">
                            <img src="images_01/facebook.png" alt="" />
                        </a>
                        
                        <a class="fl_l" href="#" title="Get RSS Feed">
                            <img src="images_01/rss.png" alt="" />
                        </a>
                        
                        <a class="fl_l" href="#" title="Follow us on Linked-in">
                            <img src="images_01/linkedin.png" alt="" />
                        </a>
                        
                        <a class="fl_l" href="#" title="Follow us on Twitter">
                            <img src="images_01/twitter.png" alt="" />
                        </a>
                        
                        <a class="fl_l" href="#" title="Follow us on You Tube">
                            <img src="images_01/youtube.png" alt="" />
                        </a>
                        
                        <div class="clear"></div>
                    
                    </div>
                
                </div>
                
                <?php include('include/marquee.php'); ?>
                
            </div>
            <!-- side bar ends -->
            
            <div class="clear"></div>
        
        </div>
        <!-- primary container ends -->
        
        <!-- header starts -->
        <header>
        
        	<div class="menu_container">
            
                <div class="front">
                    
                    <div class="menu_block">
                    
                        <?php include('include/menu.php'); ?>
                        
                        <div class="clear"></div>
                        
                    </div>
                
                </div>
                
                <div class="back"></div>
            
            </div>
        
        </header>
        <!-- header ends -->
        
        
        
    </div>
<?php include('include/footer.php');  ?>
</body>

</html>
