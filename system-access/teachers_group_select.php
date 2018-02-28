<?php
include_once('class/auth.php');
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
                            <div class="topbar_small_div_text left height-30">MANAGE USER</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>DETAILS ABOUT USERS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="manage_user_profile.php" style="text-decoration:none;">
                                    <button type="submit" name="login" class="css_btn_class1 height-35 " 
                                            style="background: url('images/signin_new02.png') no-repeat center left #C8C8C8;
                                            margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px;
                                            padding-left: 35px; border:none;">Back</button>
                                </a>
                            </li>

                        </ul>


                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    <div class="menu_div " style="background:#999; height:200px; padding-top:10px;border-radius:10px;">
                        <ul class="auto-position width-label-350 margin-top-20 " style="margin-top:10px;">
                            <li class="add_st_form_div_label_view_details height-35 width-label-210 left arial bold" style="text-align:center; margin-left:-20px; margin-top:-2px; ">Search Manage User				
                                <span class="right">:</span></li>
                            <li class="add_st_form_div_label_view_details height-35 width-label-100 left " style="margin-right:40px; margin-top:-2px;">
                                <select name="Select a group"  class="arial bold b_radius5">
                                    <option>Select a group</option>
                                    <?php 
									 $date=$obj->SelectAll("ams_management_group");
									 if(!empty($date))
									 foreach($date as $row):
									?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>

                            <li class="add_st_form_div_label_view_details height-35 width-label-210 left arial bold" style="text-align:center; margin-left:-20px; margin-top:-2px; ">Select a class/Department				
                                <span class="right">:</span></li>
                            <li class="add_st_form_div_label_view_details height-35 width-label-100 left " style="margin-right:40px; margin-top:-2px;">
                                <select name="Select a group"  class="arial bold b_radius5">
                                    <option>Select One</option>
                                    <?php 
									 $date=$obj->SelectAll("ams_department");
									 if(!empty($date))
									 foreach($date as $row):
									?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                    <?php endforeach;?>
                                    
                                </select>
                            </li>
                        </ul>
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href=" #" style="text-decoration:none;">
                                    <button type="submit" name="login" class="css_btn_class1 height-35 " 
                                            style="background: url('images/signin_new.png') no-repeat center right #C8C8C8;
                                            margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px;
                                            padding-right: 35px; border:none;">Create View</button>
                                </a>
                            </li>
<div class="clear"></div>
                        </ul>
                    </div> 
                    <div class="admission_div_page" style="margin-top: 10px; height: auto; padding-bottom:50px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Group List :</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position" style="height:auto;">
                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Group Name</th>
                                            <th>Creation Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <tr class="gradeX">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="center">edit</td>
                                                    <td class="center"><a href="&amp;action=delete">Delete</a></td>
                                                </tr>
       

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Group Name</th>
                                            <th>Creation Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
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
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
    </body>
</html>