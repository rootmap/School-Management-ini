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
    <title><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"acount_name"); ?> | Academic Gallery </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Additional -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/main-frame.css" rel="stylesheet" type="text/css" />
    <link href="fonts/css-social-buttons/social-buttons.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font_awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/link-pages.css" rel="stylesheet" type="text/css" />
    <link href="css/lightbox.css" rel="stylesheet" type="text/css" />
	
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
           <!-- Gallery content starts here -->
           <div class="lower-content">
           		<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="banner">
                            	<h2>Photo gallery</h2>
                            </div>
                            <div class="inner-content">
                            	<?php 
								$sqlevent=$obj->SelectAllByID_Multiple("cms_event",array("school_id"=>$school_id));
								if(!empty($sqlevent))
								foreach($sqlevent as $event):
								?>
                                <div class="row">
                                	<p class="sub-header"><?php echo $event->name; ?></p>
                                    <!-- 1st row of images starts here -->
                                    <div class="row gallery-row clearfix">
                                    	<?php 
										$sqlgallery=$obj->SelectAllByID_Multiple("cms_event_photo",array("eid"=>$event->id));
										if(!empty($sqlgallery))
										foreach($sqlgallery as $gallery):
										?>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 gallery-img">
                                        	<div class="img-responsive">
                                            	<div class="img-thumbnail">
                                                	<a href="gallery/<?php echo $gallery->photo2; ?>" data-lightbox="image-set" data-title="Sample text">
                                                    	<img src="gallery/<?php echo $gallery->photo; ?>" alt="" title="Image" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        
                                    </div>
                                    <!-- 1st row of images ends here -->
                                    <p><?php echo $event->detail; ?></p>
                                </div>
                                <?php endforeach; ?>
                                
                                
                                

                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <!-- Gallery content ends here -->
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
    <script src="js/lightbox.js"></script>
    
  </body>
</html>