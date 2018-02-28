<?php 
session_start();
include('inc/db_Class.php'); 
$obj=new db_class();
$school_id="105949";
if(isset($_POST['login']))
{
	if($obj->exists_multiple("ams_singup",array("eiin_number"=>$_POST['name'],"password"=>$_POST['password'],"status"=>3)))
	{
		session_regenerate_id();
		$_SESSION['SESS_AMSIT_USERLOGIN_KEY']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"id");
		$_SESSION['SESS_USERNAME']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"eiin_number");
		$_SESSION['SESS_STATUS']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"status");
		$_SESSION['SESS_SESSION_SCHOOL_ID']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"id");
		session_write_close();
		header('location: system-access/homepage.php');
		//echo "login ";
		exit();	
	}
	else
	{
		if($obj->exists_multiple("ams_student_login",array("admition"=>$_POST['name'],"password"=>$_POST['password'],"status"=>1)))
		{
			session_regenerate_id();
			$_SESSION['SESS_AMSIT_STLOGIN_KEY']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"admition");
			$_SESSION['SESS_STSTATUS']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"status");
			$_SESSION['SESS_SESSION_STSCHOOL_ID']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"school_id");
			session_write_close();
			header('location: system-access/student_panel.php');
			//echo $obj->Success("Successfully Login.....",$obj->filename());
			exit();	
		}else{
			echo $obj->Error("Login Failed",$obj->filename());	
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"acount_name"); ?> | Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Additional -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/main-frame.css" rel="stylesheet" type="text/css" />
    <link href="fonts/css-social-buttons/social-buttons.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font_awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" />
    <link href="css/tinycarousel.css" rel="stylesheet" type="text/css" />
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
               <!-- https://www.google.com.bd/maps/place/23%C2%B015%2720.2%22N+91%C2%B012%2709.5%22E/@23.255599,91.20265,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0?hl=en-->
                <!-- Slider starts here -->
                <div class="container" >
                    <div id="slide" style="border:rgba(0,102,0,1) solid 3px;">
                        <div class="slider">
                            <ul class="items">
                            	<?php 
								$sqlslider=$obj->SelectAllByID_Multiple("cms_slider",array("school_id"=>$school_id));
								if(!empty($sqlslider))
								foreach($sqlslider as $slider):
								?>
                                <li><img src="gallery/<?php echo $slider->photo; ?>" alt="" />
                                    <div class="banner">
                                        <div class="banner-inner">
                                            <span><?php echo $slider->name; ?></span>
                                            <!--<p>Powered BY SKELETON IT</p>-->
                                        </div>
                                    </div>
                                </li>
                                <?php 
								endforeach; 
								?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Slider ends here -->
            </div>
        </header>
        <!-- header part ends here -->
        
        <!-- Body content starts here -->
        <div class="body-content">
            <!-- Institute moto starts here -->
            <div class="target" style="padding-top:260px;">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-1 clearfix">
                        	<div class="block-focus pull-left">
                            	<p><i class="fa fa-lock"></i></p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Student Login<hr></p>
                                <div style="font-size:12px;">
                                
                                	<form action="" method="post">
                                    	<input type="text"  class="form-control" name="name" placeholder="Student ID : ">
                                        <input type="password"  class="form-control" style="margin-top:5px;" name="password" placeholder="Password : ">
                                        <button type="submit" name="login" class="btn btn-success" style="margin-top:5px;"><i class="fa fa-unlock-alt"></i> Login</button>
                                        <button type="reset" class="btn btn-danger" style="margin-top:5px;"><i class="glyphicon glyphicon-remove-sign"></i> Clear</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-2 clearfix">
                        	<div class="block-focus pull-left">
                            	<p><i class="fa fa-lock"></i></p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Teachers Login<hr></p>
                                <div style="font-size:12px;">
                                
                                	<form action="" method="post">
                                    	<input type="text"  class="form-control" name="name" placeholder="Teacher ID : ">
                                        <input type="password"  class="form-control" style="margin-top:5px;" name="password" placeholder="Password : ">
                                        <button type="submit" name="login" class="btn btn-success" style="margin-top:5px;"><i class="fa fa-unlock-alt"></i> Login</button>
                                        <button type="reset" class="btn btn-danger" style="margin-top:5px;"><i class="glyphicon glyphicon-remove-sign"></i> Clear</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-3 clearfix">
                        	<div class="block-focus pull-left">
                            	<p><i class="fa fa-lock"></i></p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Admin Login<hr></p>
                                <p>
                                	<form action="" method="post">
                                    	<input type="text"  class="form-control" name="name" placeholder="EIIN No : ">
                                        <input type="password"  class="form-control" style="margin-top:5px;" name="password" placeholder="Password : ">
                                        <button type="submit" name="login" class="btn btn-success" style="margin-top:5px;"><i class="fa fa-unlock"></i> Login</button>
                                        <button type="reset" class="btn btn-danger" style="margin-top:5px;"><i class="glyphicon glyphicon-remove-sign"></i> Clear</button>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
           	</div>     
            <!--<div class="target" style="padding-top:0px;">    
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-1 clearfix">
                        	<div class="block-focus pull-left">
                            	<p>A</p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Research that benefits children</p>
                                <p>
                                	<a href="#">Lorem ipsum dolor sit amet cosectetur adipiscing elit. Duis id cursus massa.Null um eros id pharetra eleifend.</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-2 clearfix">
                        	<div class="block-focus pull-left">
                            	<p>B</p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Programs for educators</p>
                                <p>
                                	<a href="#">Lorem ipsum dolor sit amet cosectetur adipiscing elit. Duis id cursus massa.Null um eros id pharetra eleifend.</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 target-block-3 clearfix">
                        	<div class="block-focus pull-left">
                            	<p>C</p>
                            </div>
                            <div class="block-wrapper pull-left">
                            	<p>Dynamic <br />classrooms</p>
                                <p>
                                	<a href="#">Lorem ipsum dolor sit amet cosectetur adipiscing elit. Duis id cursus massa.Null um eros id pharetra eleifend.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Institute moto ends here -->
            <!-- Institute info starts here -->
            <div class="info-part">
            	<div class="container">
                	<div class="row clearfix">
                    	<div class="col-xs-12 info-part-block" style="width:100%;">
                        	<h2><i class="fa fa-university"></i> Welcome to Natopara Girls Dakhil Madrasha <hr></h2>
                            <?php 
							$sqlabout=$obj->SelectAllByID_Multiple_Limit("cms_welcome_message",array("school_id"=>$school_id),1);
							if(!empty($sqlabout))
							foreach($sqlabout as $about):
							?>
                            <p style="font-size:16px; font-family:Century;" align="justify">
                           	<img src="gallery/<?php echo $about->photo; ?>" alt="" class="img-responsive" style="float:left; padding-right:20px;" />
                           	<?php echo nl2br($obj->limit_words($about->name,70)); ?>
                           	</p>
                            <a class="btn btn-default" href="about_us.php">Read more</a>
							<?php 
							endforeach; 
							?>
                            
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class="info-part">
            	<div class="container">
                	<div class="row clearfix">
                    	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 info-part-block">
                        	<h2><i class="fa fa-external-link-square"></i> Quick Links <hr></h2>
                            <ul>
                            	<?php 
								$sqlquicklink=$obj->SelectAllByID_Multiple_Limit("cms_quicklink",array("school_id"=>$school_id),7);
								if(!empty($sqlquicklink))
								foreach($sqlquicklink as $quicklink):
								?>
                                <li>
                                	<a target="_blank" href="<?php echo $quicklink->link; ?>"><strong><?php echo $quicklink->name; ?></strong></a>
                                </li>
								<?php 
								endforeach; 
								?>
                            </ul>
                            <a class="btn btn-default" href="quicklink.php">Read more</a>
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 info-part-block">
                        	<h2><i class="fa fa-road"></i> Our Mission <hr></h2>
                            <?php 
							$sqlmission=$obj->SelectAllByID_Multiple_Limit("cms_mision",array("school_id"=>$school_id),1);
							if(!empty($sqlmission))
							foreach($sqlmission as $mission):
							?>
                            <p style="font-size:16px; font-family:Century;" align="justify">
                           	<?php echo nl2br($obj->limit_words($mission->name,30)); ?>
                           	</p>
                            <a class="btn btn-default" href="about_us.php?mission">Read more</a>
							<?php 
							endforeach; 
							?>
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 info-part-block">
                        	<h2><i class="fa fa-exclamation-triangle"></i> Notice board <hr></h2>
                            <!-- set slider in it -->
                            <ul id="ticker" class="list-group">
                                <?php 
								$sqlnotice=$obj->SelectAllByID_Multiple_Limit("ams_notice",array("school_id"=>$school_id),10);
								if(!empty($sqlnotice))
								foreach($sqlnotice as $notice):
								?>
                                <li class="list-group-item">
                                    <div class="block-wrapper clearfix">
                                        <div class="block-wrapper-content" style="width:100%;">
                                            <p style="width:100%;">
                                                <a href="notice.php?notice=<?php echo $notice->id; ?>"><?php echo $notice->name; ?></a>
                                            </p>
                                            <p style="width:100%;"><?php echo $obj->limit_words($notice->details,5); ?></p>
                                        </div>
                                    </div>
                                </li>
								<?php 
								endforeach; 
								?>
                                
                            </ul>
                            <!-- set slider in it -->
                            <a class="btn btn-default" href="notice.php">Read more</a>
                        </div>
                    </div>
                    <hr />
                    <!-- Mini-slider starts here -->
                    <div class="row row-mini-slider">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mini-slider">
                        	<h2>Our teachers</h2>
                            <div class="slider-container">
                                <div id="slider1">
                                    <a class="buttons prev" href="#">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <div class="viewport">
                                        <ul class="overview">
                                            <?php 
											$sqlteacher=$obj->SelectAllByID_Multiple_Limit("cms_keyperson_teacher",array("school_id"=>$school_id),10);
											if(!empty($sqlteacher))
											foreach($sqlteacher as $teacher):
											?>
                                            <li>
                                            	<a href="#">
                                                	<div class="img-responsive">
                                                    	<div class="img-thumbnail">
                                                        	<img src="gallery/<?php echo $teacher->photo; ?>" alt="Amina Wilson" title="Amina Wilson" />
                                                        </div>
                                                    </div>
                                                    <p><?php echo $teacher->name; ?></p>
                                                </a>
                                            </li>
                                            <?php  
											endforeach;
											?>
                                        </ul>
                                    </div>
                                    <a class="buttons next" href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mini-slider ends here -->
                </div>
            </div>
            
            <!-- Institute info ends here -->
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
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>
    
  </body>
</html>