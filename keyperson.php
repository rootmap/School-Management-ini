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
    <title>Key Person | <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"acount_name"); ?></title>

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
	.fullpart .key{ width:98%; height:auto; min-height: 250px; max-height: 800px; padding: 1%; margin-bottom: 10px;  }
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
									if(isset($_GET['chairman'])){ 
										$sqlchairman=$obj->SelectAllByID_Multiple("cms_keyperson_chairman",array("school_id"=>$school_id));
										?>
                                        <div class="fullpart">
                                            <h2>Chairman<hr></h2>
                                            <?php if(!empty($sqlchairman)){ 
											foreach($sqlchairman as $chairman):
											?>
                                            <div class="key">                      
                                                <img src="gallery/<?php echo $chairman->photo; ?>" class="left img-responsive">
                                                <div class="hh right">
                                                    <!--<h1>Chairman</h1>-->
                                                    <h2><?php echo $chairman->name; ?></h2>
                                                    
                                                </div>
                                                <div class="clear"></div>
                                                <p>
                                                <i>
                                                <?php echo nl2br($chairman->message); ?>
                                                </i>
                                                </p>
                                            </div>
                                            <?php 
											endforeach;
											}else{ ?>
                                            No Chairman Data Found in System.
                                            <?php } ?>
                                        </div>
                                        <?php
									}
									elseif(isset($_GET['managing-committee']))
									{
										$sqlmanaging_committee=$obj->SelectAllByID_Multiple("cms_keyperson_managing_committee",array("school_id"=>$school_id));
										?>
										<div class="fullpart">
                                            <h3>Managing Commitee <hr></h3>
                                            <div class="key">                      
                                                
                                                <?php if(!empty($sqlmanaging_committee)){ ?>
                                                <ul>
                                                   <?php foreach($sqlmanaging_committee as $committe): ?>
                                                    <li class="left">
                                                        <img src="gallery/<?php echo $committe->photo; ?>"  />
                                                        <div class="cont">
                                                            <h1><?php echo $committe->position; ?></h1>
                                                            <h2 style="height:auto; clear:both; margin-bottom:5px;"><?php echo $committe->name; ?></h2>
                                                            <h3><?php echo $committe->degree; ?></h3>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php }else{ ?>
                                                No Managing Committe Found on System.
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php
									}
									elseif(isset($_GET['principal']))
									{
										$sqlprincipal=$obj->SelectAllByID_Multiple("cms_keyperson_principle",array("school_id"=>$school_id));
										?>
                                        <div class="fullpart">
                                            <h3>Principal<hr></h3>
                                            <?php if(!empty($sqlprincipal)){ 
											foreach($sqlprincipal as $principal):
											?>
                                            <div class="key">                      
                                                <img src="gallery/<?php echo $principal->photo; ?>" class="left img-responsive">
                                                <div class="hh right">
                                                    <!--<h1>Chairman</h1>-->
                                                    <h2><?php echo $principal->name; ?></h2>
                                                    
                                                </div>
                                                <div class="clear"></div>
                                                <p>
                                                <i>
                                                <?php echo nl2br($principal->message); ?>
                                                </i>
                                                </p>
                                            </div>
                                            <?php 
											endforeach;
											}else{ ?>
                                            No Principal Data Found in System.
                                            <?php } ?>
                                        </div>
										<?php 
									}
									elseif(isset($_GET['teacher']))
									{
										$sqlteacher=$obj->SelectAllByID_Multiple("cms_keyperson_teacher",array("school_id"=>$school_id));
										?>
                                        <div class="fullpart">
                                            <h3>Teacher <hr></h3>
                                            <div class="key">                      
                                                
                                                	<?php if(!empty($sqlteacher)){ ?>
                                                    <ul>
                                                       <?php foreach($sqlteacher as $teacher): ?>
                                                        <li class="left">
                                                            <img src="gallery/<?php echo $teacher->photo; ?>"  />
                                                            <div class="cont">
                                                                <h2 style="height:auto; clear:both;"><?php echo $teacher->name; ?></h2>
                                                                <h3><?php echo $teacher->position; ?></h1>
                                                                <h3><?php echo $teacher->degree; ?></h1>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php }else{ ?>
                                                    No Teacher Found on System.
                                                    <?php } ?>
                                                                                
                                           	 </div>
                                            </div>
										<?php 
									}
									elseif(isset($_GET['staff']))
									{
										$sqloffice_staff=$obj->SelectAllByID_Multiple("cms_keyperson_managing_office_staff",array("school_id"=>$school_id));
										?>
										<div class="fullpart">
                                        <h3>Office Staff<hr></h3>
                                        <div class="key">                      
                                            
                                                <?php if(!empty($sqloffice_staff)){ ?>
                                                <ul>
                                                   <?php foreach($sqloffice_staff as $office_staff): ?>
                                                    <li class="left">
                                                        <img src="gallery/<?php echo $office_staff->photo; ?>"  />
                                                        <div class="cont">
                                                            <h2 style="height:auto; clear:both;"><?php echo $office_staff->name; ?></h2>
                                                            <h3><?php echo $office_staff->position; ?></h1>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php }else{ ?>
                                                No office staff Found on System.
                                                <?php } ?>
                                                                            
                                         </div>
                                        </div>
										<?php
										
									}
									else
									{
										$sqlchairman=$obj->SelectAllByID_Multiple("cms_keyperson_chairman",array("school_id"=>$school_id));
										$sqlmanaging_committee=$obj->SelectAllByID_Multiple("cms_keyperson_managing_committee",array("school_id"=>$school_id));
										$sqlprincipal=$obj->SelectAllByID_Multiple("cms_keyperson_principle",array("school_id"=>$school_id));
										$sqlteacher=$obj->SelectAllByID_Multiple("cms_keyperson_teacher",array("school_id"=>$school_id));
										$sqloffice_staff=$obj->SelectAllByID_Multiple("cms_keyperson_managing_office_staff",array("school_id"=>$school_id));
										$totalkeyperson=count($sqlchairman)+count($sqlmanaging_committee)+count($sqlprincipal)+count($sqlteacher)+count($sqloffice_staff);
										?>
                                        <div class="banner">
                                            <h2>Our Total Key Person (<?php echo $totalkeyperson; ?>)</h2>
                                        </div>
                                         <div class="fullpart">
                                            <h3>Chairman<hr></h3>
                                            <?php if(!empty($sqlchairman)){ 
											foreach($sqlchairman as $chairman):
											?>
                                            <div class="key">                      
                                                <img src="gallery/<?php echo $chairman->photo; ?>" class="left img-responsive">
                                                <div class="hh right">
                                                    <!--<h1>Chairman</h1>-->
                                                    <h2><?php echo $chairman->name; ?></h2>
                                                    
                                                </div>
                                                <div class="clear"></div>
                                                <p>
                                                <i>
                                                <?php echo nl2br($chairman->message); ?>
                                                </i>
                                                </p>
                                            </div>
                                            <?php 
											endforeach;
											}else{ ?>
                                            No Chairman Data Found in System.
                                            <?php } ?>
                                        </div>
                                        
                                        
                                        
                                        <div class="fullpart">
                                            <h3>Managing Commitee <hr></h3>
                                            <div class="key">                      
                                                
                                                <?php if(!empty($sqlmanaging_committee)){ ?>
                                                <ul>
                                                   <?php foreach($sqlmanaging_committee as $committe): ?>
                                                    <li class="left">
                                                        <img src="gallery/<?php echo $committe->photo; ?>"  />
                                                        <div class="cont">
                                                            <h1><?php echo $committe->position; ?></h1>
                                                            <h2 style="height:auto; clear:both; margin-bottom:5px;"><?php echo $committe->name; ?></h2>
                                                            <h3><?php echo $committe->degree; ?></h3>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php }else{ ?>
                                                No Managing Committe Found on System.
                                                <?php } ?>
                                            </div>
                                        </div>
                                        
                                        <div class="fullpart">
                                            <h3>Principal<hr></h3>
                                            <?php if(!empty($sqlprincipal)){ 
											foreach($sqlprincipal as $principal):
											?>
                                            <div class="key">                      
                                                <img src="gallery/<?php echo $principal->photo; ?>" class="left img-responsive">
                                                <div class="hh right">
                                                    <!--<h1>Chairman</h1>-->
                                                    <h2><?php echo $principal->name; ?></h2>
                                                    
                                                </div>
                                                <div class="clear"></div>
                                                <p>
                                                <i>
                                                <?php echo nl2br($principal->message); ?>
                                                </i>
                                                </p>
                                            </div>
                                            <?php 
											endforeach;
											}else{ ?>
                                            No Principal Data Found in System.
                                            <?php } ?>
                                        </div>
                                        
                                        <div class="fullpart">
                                            <h3>Teacher <hr></h3>
                                            <div class="key">                      
                                                
                                                	<?php if(!empty($sqlteacher)){ ?>
                                                    <ul>
                                                       <?php foreach($sqlteacher as $teacher): ?>
                                                        <li class="left">
                                                            <img src="gallery/<?php echo $teacher->photo; ?>"  />
                                                            <div class="cont">
                                                                <h2 style="height:auto; clear:both;"><?php echo $teacher->name; ?></h2>
                                                                <h3><?php echo $teacher->position; ?></h1>
                                                                <h3><?php echo $teacher->degree; ?></h1>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php }else{ ?>
                                                    No Teacher Found on System.
                                                    <?php } ?>
                                                                                
                                           	 </div>
                                            </div>
                                            
                                        
                                        <div class="fullpart">
                                            <h3>Office Staff<hr></h3>
                                            <div class="key">                      
                                                
                                                	<?php if(!empty($sqloffice_staff)){ ?>
                                                    <ul>
                                                       <?php foreach($sqloffice_staff as $office_staff): ?>
                                                        <li class="left">
                                                            <img src="gallery/<?php echo $office_staff->photo; ?>"  />
                                                            <div class="cont">
                                                                <h2 style="height:auto; clear:both;"><?php echo $office_staff->name; ?></h2>
                                                                <h3><?php echo $office_staff->position; ?></h1>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php }else{ ?>
                                                    No office staff Found on System.
                                                    <?php } ?>
                                                                                
                                           	 </div>
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