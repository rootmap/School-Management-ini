<?php
include_once('class/auth.php');
$table="tsms_group";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            /* The CSS */
            select {
                padding:5px;
                margin: 0;
                /*-webkit-border-radius:4px;
                -moz-border-radius:4px;
                border-radius:4px;
                -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;*/
                background: #f8f8f8;
                color:#888;
                border:1px #C00 solid;
                outline:none;
                display: inline-block;
                -webkit-appearance:none;
                -moz-appearance:none;
                appearance:none;
                cursor:pointer;
                width: 150px;
				height:30px;
				line-height:30px;
            }

            /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
            @media screen and (-webkit-min-device-pixel-ratio:0) {
                select {padding-right:18px}
            }

            label {position:relative}
            label:after {
                /*content:'Dreams';*/
                font:11px "Consolas", monospace;
                color:#aaa;
                -webkit-transform:rotate(90deg);
                -moz-transform:rotate(90deg);
                -ms-transform:rotate(90deg);
                transform:rotate(90deg);
                right:8px; top:2px;
                padding:0 0 2px;
                border-bottom:1px solid #ddd;
                position:absolute;
                pointer-events:none;
            }
            label:before {
                /*content:'';*/
                right:6px; top:0px;
                width:20px; height:20px;
                background:#f8f8f8;
                position:absolute;
                pointer-events:none;
                display:block;
            }


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
                            <div class="topbar_small_div_text left height-30">TRANSPORT</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>VIEW TRANSPORT DETAILS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>


                        </ul>
                       
						 <?php include_once('class/esm.php'); ?>
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    <div class="menu_div">
                    
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

                    
                    </div>                       
                    <div class="staff_profile_info_div_page" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>DRIVER PROFILE INFORMATION :</left></h2>
                        </div>
                        <div class="staff_profile_info_form_div width-col5 auto-position">
                        
                        <div class="profile_info_top_div">
                            <div class="profile_pic_div left">
                                <img src="images/profile_pic.png"/>
                            </div>
                            <div class="staff_profile_info_small_div left margin-top-75">
                                <ul>
                                    <li class=" width-label-150 left margin_left10">Name<span class="right">:</span></li>
                                    <li class="width-label-150 right">Md. Shafin Khan</li>
                                    <li class="width-label-150 left margin_left10">User ID<span class="right">:</span></li>
                                    <li class="width-label-150 right">Two</li>
                                    <li class="width-label-150 left margin_left10">Joining Date<span class="right">:</span></li>
                                    <li class="width-label-150 right">A</li>
                                </ul>
                            </div>
                            <div class="profile_info_menu_div right">
                                <ul>
                                    <li class="right">
                                        <a href="#">
                                            
                                            <div class="left css_button_red">PDF Report</div>
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </a>
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            
                                            <div class="left css_button_red">EXCEL Report</div>
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/excel_icon.png" />
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--tables code start from here-->
                        <div class="left margin_left10" style="margin-top:5px;">Profile: (General / Personal / Contact Address) </div>
                        <div id="dynamic"  style="margin-top:35px;">
                                <table class="TFtable" align="center"><tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        <tr>
                                                <td>Joining Date</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Class / Course/Department</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Category</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Position</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Job Title</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Gender</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Status</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Qualification</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Total Experience</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Experience Info</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        
                                </table>
                                <!---personal profile info starts from here---->
                                <table class="TFtable" align="center" style="margin-top:10px;"><tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        <tr>
                                                <td>Father’s Name</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Mother’s Name</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Date of Birth</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Blood Group</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Marital Status</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Spouse Name</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>No of Children</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Nationality</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Religion</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Mobile No</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        <tr>
                                                <td>Email</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        
                                </table>
                                
                                <!---personal profile info starts from here---->
                                <table class="TFtable" align="center" style="margin-top:10px;"><tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        <tr>
                                                <td>Present Address</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Permanent Address</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>Division / State</td>
                                                <td class="center">edit</td>
                                        </tr><tr>
                                                <td>District / City</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Thana / Zip code</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Country</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Phone Number</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Mobile Number</td>
                                                <td class="center">edit</td>
                                        </tr>
                                        </tr><tr>
                                                <td>Email</td>
                                                <td class="center">edit</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
                        

                           
                            
                            

                            
                        </div>
                        

                    </div>



                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>