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
        <!-----table starts------------------------------------------------------------------------------------------------------------->
         <link href="tables/media/css/demo_page.css" rel="stylesheet" type="text/css" />
         <link href="tables/media/css/demo_table.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" language="javascript" src="tables/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="tables/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="js/pagination.js"></script>
        	
        <!-----table ends------------------------------------------------------------------------------------------------------------->
        <style type="text/css">
            /* The CSS */
            select {
                padding:3px;
                margin: 0;
                -webkit-border-radius:4px;
                -moz-border-radius:4px;
                border-radius:4px;
                /*-webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
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


.textbox_exm { 
    border: 1px #CC0000 solid; 
    height: 18px; 
    width: 120px; 
    font-size: 13px; 
    padding: 3px 4px 3px 4px; 
    margin-top: -5px;
    margin-right: 5px;
	margin-left: 11px;
    border-radius: 5px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 5px; 
    box-shadow: 0px 0px 5px #d9d9d9; 
    -moz-box-shadow: 0px 0px 5px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 5px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
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
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h5>ADD TRANSPORT PROFILE INFORMATION PAGE-02</h5></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="transport_setting_profile.php" style="text-decoration:none;">
                                    <button type="submit" name="login" class="css_btn_class1 height-35 " 
                                            style="background: url('images/signin_new02.png') no-repeat center left #C8C8C8;
                                            margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px;
                                            padding-left: 35px; border:none;">Previous Page</button>
                                </a>
                            </li>

                        </ul>
                        <?php include_once('class/esm.php'); ?>

                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    
                        <div class="admission_div" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Contact Detail :</left></h2>
                        </div>
                       <div class="admission_form_div width-col4 auto-position">

                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Present Address<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Present Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Permanent Address<span class="right">:</span></li>
                                 <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Permanent Address Here" class="textbox"/>
                                </li>
                                                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Division / State<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="Division / State" >
                                        <option>Division / State</option>
                                        <option>Trial</option>
                                        <option>Licensed</option>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">District / City<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="District / City" >
                                        <option>District / City</option>
                                        <option>Trial</option>
                                        <option>Licensed</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Thana / Zip code<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="Thana / Zip code" >
                                        <option>Thana / Zip code</option>
                                        <option>Trial</option>
                                        <option>Licensed</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Countryr<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="Country" >
                                        <option>Country</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </li>
                                
                                                               
                                <li class="admission_form_div_label height-30 width-label-200 left">Phone Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Phone Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Mobile Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Mobile Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Email<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Email Id Here" class="textbox"/>
                                </li>
                                
                                                              
                                <li class="admission_form_div_label height-30 width-label-200 left"> Upload Profile Photo</br>(60 KB Max.)
                                <span class="right">:</span></li>
                                <li class="admission_form_div_label height-35 width-label-250 right margin-top-25">
                                    <input type="file" placeholder=" " class="textbox"/>
                                </li>
                                
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="login" class=" height-35 " style="background: url('images/signin_new.png') no-repeat center right #FFF; margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px; padding-right: 35px;  border: 1px #C00 solid; border-radius:5px; font-weight:bold; padding-bottom:2px; padding-left:5px; color:#09F; ">Save &amp; Proceed</button>
                                </li>

                            </ul>
                            

                        </div>
                        

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