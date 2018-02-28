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
    <title>Student Records | <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"acount_name"); ?></title>

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
    
    <style type="text/css">
	.left{ float: left; } .right{ float: right; }
	.fullpart .key{ width:98%; height:auto; min-height: 250px; padding: 1%; margin-bottom: 10px;  }
	.fullpart .key img{ width:10%; height:110px;  }
	.fullpart .key .hh{ width:89%; height:110px;   }
	.fullpart .key .hh h1{ width:100%; height:20px; margin: 0; padding: 0; font-size: 16px; font-weight: 800; text-align: left; }
	.fullpart .key .hh h2{ width:100%; height:18px; margin: 0; padding: 0; font-size: 15px; font-weight: 400; text-align: left; }
	.fullpart .key .hh h3{ width:100%; height:16px; margin: 0; padding: 0; font-size: 13px; font-weight: 700; text-align: left; }
	.fullpart .key .hh p{ width:100%; height:auto; min-height: 18px; max-height: 36px; margin: 0; padding: 0; font-size: 15px; font-weight: 400; text-align: left; }
	.fullpart .key .clear{ width:100%; clear: both; height: 10px; }
	
	.fullpart .key h4{ width:30%; clear: both; height: 30px; font-size: 18px; font-weight: 700; margin: 0; padding: 0; border-bottom: 2px #666666 dotted; }
	
	.fullpart .key ul{ width:100%; height:220px; list-style: none; }
	.fullpart .key ul li{ width:31%; margin-top: 10px; margin-right: 1%; height:110px;  }
	.fullpart .key ul li img{ float: left; width: 33%; height: 110px;  }
	.fullpart .key ul li .cont{ float: right; width: 66%; height: 110px;  }
	.fullpart .key ul li .cont h1{ width:100%; height:20px; margin: 10px 0; padding: 0; font-size: 16px; font-weight: 800; text-align: left; }
	.fullpart .key ul li .cont h2{ width:100%; height:18px; margin: 0; padding: 0; font-size: 15px; font-weight: 400; text-align: left; }
	.fullpart .key ul li .cont h3{ width:100%; height:15px; margin: 0; padding: 0; font-size: 12px; font-weight: 200; text-align: left; }

	</style>
    <style type="text/css">
            table{  width: 95%; margin-left: 10px; background: #1c191a; }
            table thead{ background: green;}
            table thead tr{   }
            table thead tr th{ height: 45px; color: #ffffff; font-size:16px; text-align:center; }
            table tbody{  }
            table tbody tr{  }
            table tbody tr th{  text-align: center; height: 30px; text-decoration: none;  font-size: 12px; }
        </style>
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
           <!-- Inner content starts here -->
           <div class="lower-content admission-page">
           		<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	
                            <div class="inner-content">
                            	<div class="row">
                                	<!--/*<p class="sub-header">Admission information</p>*/-->
                                    
									<?php
									if(isset($_GET['class-record'])){ 
										
										?>
                                        <div class="fullpart" style="min-height:200px; height:auto;">
                                        <h3>Student List <hr></h3>
                                                    <br><br>
                                                    <table border="0" cellpadding="1" cellspacing="1">
                                                        <thead>
                                                            <tr>
                                                            	<th>Session</th>
                                                                <th>Class</th>
                                                                <th>One</th>
                                                                <th>Two</th>
                                                                <th>Three</th>
                                                                <th>Four</th>
                                                                <th>Five</th>
                                                                <th>Six</th>
                                                                <th>Seven</th>
                                                                <th>Eight</th>
                                                                <th>Nine</th>
                                                                <th>Ten</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr style="background:whitesmoke; ">
                                                                <th>2014 - 2015</th>
                                                                <th>Girls</th>
                                                                <th><?php  $class1=$obj->exists_multiple("ams_admission",array("class_id"=>195)); echo $class1;  ?></th>
                                                                <th><?php  $class2=$obj->exists_multiple("ams_admission",array("class_id"=>196));  echo $class2; ?></th>
                                                                <th><?php  $class3=$obj->exists_multiple("ams_admission",array("class_id"=>197));   echo $class3; ?></th>
                                                                <th><?php  $class4=$obj->exists_multiple("ams_admission",array("class_id"=>198));  echo $class4; ?></th>
                                                                <th><?php  $class5=$obj->exists_multiple("ams_admission",array("class_id"=>199));  echo $class5; ?></th>
                                                                <th><?php  $class6=$obj->exists_multiple("ams_admission",array("class_id"=>200));  echo $class6; ?></th>
                                                                <th><?php  $class7=$obj->exists_multiple("ams_admission",array("class_id"=>201));  echo $class7; ?></th>
                                                                <th><?php  $class8=$obj->exists_multiple("ams_admission",array("class_id"=>202));  echo $class8; ?></th>
                                                                <th><?php  $class9=$obj->exists_multiple("ams_admission",array("class_id"=>203));  echo $class9; ?></th>
                                                                <th><?php  $class10=$obj->exists_multiple("ams_admission",array("class_id"=>204));  echo $class10; ?></th>
                                                            </tr>
                                                            <tr style="background:yellowgreen; ">
                                                                <th></th>
                                                                <th></th>
                                                                <th colspan="9" style="text-align:right;">Total Students = </th>
                                                                <th><?php  $totalstudent=$class1+$class2+$class3+$class4+$class5+$class6+$class7+$class8+$class9+$class10; 
																echo $totalstudent;
																  ?></th>
                                                            </tr>
                                                            <!--<tr style="background:yellowgreen; ">
                                                                <th>Boys</th>
                                                                <th>11</th>
                                                                <th>11</th>
                                                                <th>09</th>
                                                                <th>12</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>10</th>
                                                                <th>05</th>
                                                                <th>14</th>
                                                                <th>13</th>
                                                                <th>07</th>
                                                            </tr>
                                                            <tr style="background:whitesmoke; ">
                                                                <th>Total </th>
                                                                <th>18</th>
                                                                <th>18</th>
                                                                <th>14</th>
                                                                <th>20</th>
                                                                <th>16</th>
                                                                <th>17</th>
                                                                <th>15</th>
                                                                <th>06</th>
                                                                <th>22</th>
                                                                <th>20</th>
                                                                <th>10</th>
                                                            </tr>-->
                                                        </tbody>
                                                    </table>
                                    </div>
                                        <?php
									}
									elseif(isset($_GET['result-record']))
									{
										$obj->redirect("system-access/index.php");
									}
									elseif(isset($_GET['search-result']))
									{
										$obj->redirect("system-access/index.php"); 
									}
									else
									{
									
										?>
                                        <div class="fullpart" style="min-height:200px; height:auto;">
                                        <h3>Student List <hr></h3>
                                                    <br><br>
                                                    <table border="0" cellpadding="1" cellspacing="1">
                                                        <thead>
                                                            <tr>
                                                            	<th>Session</th>
                                                                <th>Class</th>
                                                                <th>One</th>
                                                                <th>Two</th>
                                                                <th>Three</th>
                                                                <th>Four</th>
                                                                <th>Five</th>
                                                                <th>Six</th>
                                                                <th>Seven</th>
                                                                <th>Eight</th>
                                                                <th>Nine</th>
                                                                <th>Ten</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr style="background:whitesmoke; ">
                                                                <th>2014 - 2015</th>
                                                                <th>Girls</th>
                                                                <th><?php  $class1=$obj->exists_multiple("ams_admission",array("class_id"=>195)); echo $class1;  ?></th>
                                                                <th><?php  $class2=$obj->exists_multiple("ams_admission",array("class_id"=>196));  echo $class2; ?></th>
                                                                <th><?php  $class3=$obj->exists_multiple("ams_admission",array("class_id"=>197));   echo $class3; ?></th>
                                                                <th><?php  $class4=$obj->exists_multiple("ams_admission",array("class_id"=>198));  echo $class4; ?></th>
                                                                <th><?php  $class5=$obj->exists_multiple("ams_admission",array("class_id"=>199));  echo $class5; ?></th>
                                                                <th><?php  $class6=$obj->exists_multiple("ams_admission",array("class_id"=>200));  echo $class6; ?></th>
                                                                <th><?php  $class7=$obj->exists_multiple("ams_admission",array("class_id"=>201));  echo $class7; ?></th>
                                                                <th><?php  $class8=$obj->exists_multiple("ams_admission",array("class_id"=>202));  echo $class8; ?></th>
                                                                <th><?php  $class9=$obj->exists_multiple("ams_admission",array("class_id"=>203));  echo $class9; ?></th>
                                                                <th><?php  $class10=$obj->exists_multiple("ams_admission",array("class_id"=>204));  echo $class10; ?></th>
                                                            </tr>
                                                            <tr style="background:yellowgreen; ">
                                                                <th></th>
                                                                <th></th>
                                                                <th colspan="9" style="text-align:right;">Total Students = </th>
                                                                <th><?php  $totalstudent=$class1+$class2+$class3+$class4+$class5+$class6+$class7+$class8+$class9+$class10; 
																echo $totalstudent;
																  ?></th>
                                                            </tr>
                                                            <!--<tr style="background:yellowgreen; ">
                                                                <th>Boys</th>
                                                                <th>11</th>
                                                                <th>11</th>
                                                                <th>09</th>
                                                                <th>12</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>10</th>
                                                                <th>05</th>
                                                                <th>14</th>
                                                                <th>13</th>
                                                                <th>07</th>
                                                            </tr>
                                                            <tr style="background:whitesmoke; ">
                                                                <th>Total </th>
                                                                <th>18</th>
                                                                <th>18</th>
                                                                <th>14</th>
                                                                <th>20</th>
                                                                <th>16</th>
                                                                <th>17</th>
                                                                <th>15</th>
                                                                <th>06</th>
                                                                <th>22</th>
                                                                <th>20</th>
                                                                <th>10</th>
                                                            </tr>-->
                                                        </tbody>
                                                    </table>
                                    </div>
                                        <?php
									}
									?>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
           </div>
           <!-- Inner content ends here -->
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