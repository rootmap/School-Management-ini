<?php

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
                border:none;
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
                            <img src="images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">ADMISSION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>STEP-02-STUDENT DETAILS</h2></div>
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
                    <div class="admission_div_page" style="margin-top: 20px; ">
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