<?php
include_once('class/auth.php');
$table="";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        <style type="text/css">
	.TFtable{
		width:98%;
	 	margin: 0 auto 0 10px;
		border-collapse:collapse;
		
	}
	.TFtable td{ 
		padding:5.5px; border:#4e95f4 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #D19500;
	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background:#dbe5f1;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background:#f2dbdb;
	}
</style>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/sdetail_icon.png"/>
                            <div class="topbar_small_div_text left height-30">MANAGE USER</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>DETAILS ABOUT USERS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                          <?php include('includes/back.php'); ?>

                        </ul>
                       
						 
                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    <div class="menu_div">
                    <div class=" width-label-175 arial font-color-dark-red left space-top-5 bold">&lowast; Select User Group :</div>
                        <div class="width-label-250 left">
      <select id="single" class="form-control select2">
      	<option value=""> </option>
        <option value="tg">Teachers Group</option>
        <option value="AK">All Teachers Group</option>
        <option value="HI">Management Group</option>
        <option value="AK">Staff Group</option>
        <option value="HI">Comitee Group</option>
        <option value="AK">Employee Group</option>
        <option value="HI">Driver Group</option>
    </select>
    </div>
                    	
                    <!--nav Menu Start From Here-->
                    <ul id="nav" class="right arial bold">
                    	<li><a href="#">MORE +</a>
                        <ul>
                                <li><a href="#">Notice</a></li>
                                <li><a href="#">Academic Calendar  </a></li>
                                <li><a href="#">Massages Book</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PROFILE</a>
                        <ul>
                                <li><a href="#">Full Profile</a></li>
                                <li><a href="#">General Profile</a></li>
                                <li><a href="#">Personal Profile</a></li>
                                <li><a href="#">Contact Address</a></li>
                            </ul>
                        </li>
                        <li><a href="#">EDIT</a>
                            
                        </li>
                        <li><a href="#">DELETE</a>
                        
                        </li>
                        
                    </ul>

                    <div class="clear"></div>
                    </div>                       
                    
<div class="clear"></div>


                </div>

                  
            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>
<script>

  var placeholder = "Please Select";

  $('.select2, .select2-multiple').select2({ placeholder: placeholder });

  $(".select2, .select2-multiple, .select2-allow-clear, .select2-remote").on( select2OpenEventName, function() {
	if ( $(this).parents('[class*="has-"]').length ) {
	  var classNames = $(this).parents('[class*="has-"]')[0].className.split(/\s+/);
	  for (var i=0; i<classNames.length; ++i) {
		  if ( classNames[i].match("has-") ) {
			$('#select2-drop').addClass( classNames[i] );
		  }
	  }
	}

  });

</script>
    </body>
</html>