<?php 
include('inc/db_Class.php'); 
$obj=new db_class();
$school_id="105949";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Additional -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/main-frame.css" rel="stylesheet" type="text/css" />
    <link href="fonts/css-social-buttons/social-buttons.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font_awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/link-pages.css" rel="stylesheet" type="text/css" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Wrapper starts here -->
    <div id="wrapper">
    
    	<!-- header part starts here -->
        <header>
        	<div class="header-content">
                <!-- Header 1st layer starts here -->
                <?php include('inc/header.php'); ?>
                <!-- Header 1st layer ends here -->
                <!-- Horizontal navigation starts here -->
                <nav class="navbar navbar-default" role="navigation">
                	<div class="container clearfix">
                    	<!-- Navigation starts here -->
                        <?php include('inc/manu.php'); ?>
                        <!-- Navigation ends here -->
                    </div>
                </nav>
                <!-- Horizontal navigation ends here -->
            </div>
        </header>
        <!-- header part ends here -->
        <!-- Body content starts here -->
        <div class="body-content">
           <!-- map part starts here -->
           <div class="upper-content">
           		<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="banner">
                            	<h2>Our location</h2>
                            </div>
                            <div class="location-map">
                            	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117277.32914176091!2d91.12316990038263!3d23.28248226461423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xfaec3ec50b89ec63!2sBanglabazar!5e0!3m2!1sen!2sbd!4v1435843700651" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <!-- map part ends here -->
           <!-- Form and address part starts here -->
           <div class="lower-content">
           		<div class="container">
                	<div class="row clearfix">
                    	<!-- Form part starts here -->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 contact-form">
                        	<div class="banner">
                            	<h2>Contact form</h2>
                            </div>
                            <form role="form">
                                <div class="form-group">
                                    <label for="formData[Name]">Name</label>
                                    <input type="text" class="form-control" id="formData[Name]" name="form-name" placeholder="Write your name" title="Write your name here" />
                                </div>
                                <div class="form-group">
                                    <label for="formData[Email]">Email address</label>
                                    <input type="email" class="form-control" id="formData[Email]" name="form-password" placeholder="Enter e-mail" title="Write your e-mail address here">
                                </div>
                                <div class="form-group">
                                    <label for="formData[Subject]">Subject</label>
                                    <input type="text" class="form-control" id="formData[Subject]" name="form-subject" placeholder="Write message subject" title="Write your message subject here" />
                                </div>
                                <div class="form-group">
                                    <label for="formData[Message]">Message</label>
                                    <textarea class="form-control" id="formData[Message]" name="form-message" rows="7" placeholder="Write your message..." title="Write your message here"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default" title="Send your message">Send</button>
                            </form>
                        </div>
                        <!-- Form part ends here -->
                        <!-- Address part starts here -->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 address">
                        	<div class="banner">
                            	<h2>Contact information</h2>
                            </div>
                            <div class="contact-info">
                            	<div class="row">
                                	<p class="info-header">Phone numbers</p>
                                    <p>+8801748-009080</p>
                                    <p>+8801817-514395</p>
                                </div>
                                <div class="row">
                                	<p class="info-header">E-mail address</p>
                                    <p>contact@natoparabdm.com</p>
                                    <p>super@natoparabdm.com</p>
                                </div>
                                <div class="row">
                                	<p class="info-header">Postal address</p>
                                    <p>Natopara, Banglabazar</p>
                                    <p>Comilla Sadar Dokhshin</p>
                                    <p>Comilla,Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <!-- Address part ends here -->
                    </div>
                </div>
           </div>
           <!-- Form and address part ends here -->
        </div>
        <!-- Body content ends here -->
        <!-- Footer part starts here -->
        <div id="footer">
        	<?php include('inc/footer.php'); ?>
        </div>
        <!-- Footer part ends here -->
    
    </div>
    <!-- Wrapper ends here -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Additional -->
    <!--<script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>-->
    
  </body>
</html>