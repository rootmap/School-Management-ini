<?php
include_once('class/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar ">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>FINANCE SETTING</h2></div>
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
                                           
                    <div class="attendance_mode_div shadow_inner color_1" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>SELECT FINANCE SETTING:</left></h2>
                        </div>
                        <div class="admission_mode_form_div width-col4 auto-position" >
                            <div class="finance_doc_small_div left shadow_inner" style="width:230px;">
                                <a href="#"><img src="images/st_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                                </br>
                                <a href="st_fin_inner_page.php" class="attendance_doc_small_div_text autoposition">Academic Students' Accounts </a>
                            </div>
                            
                            
                            
                            <div class="finance_doc_small_div right shadow_inner" style="width:230px;">
                                <a href="#"><img src="images/mgt_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                                </br>
                                <a href="st_fin.php" class="attendance_doc_small_div_text autoposition">View Students' Accounts</a>
                            </div>
                            <div class="finance_doc_small_div left shadow_inner" style="width:230px;">
                                <a href="#"><img src="images/mgt_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                                </br>
                                <a href="mgt_fin.php" class="attendance_doc_small_div_text autoposition">
                                Management Accounts</a>
                            </div>
                            <div class="finance_doc_small_div right shadow_inner" style="width:230px;">
                                <a href="#"><img src="images/mgt_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                                </br>
                                <a href="managmant_finance_view.php" class="attendance_doc_small_div_text autoposition">
                                  View Manage Accounts
                                </a>
                            </div>
                            
                            <div class="finance_doc_small_div left shadow_inner" style="width:230px;">
                                <a href="other_fin_stationery.php" class="attendance_doc_small_div_text autoposition"><img src="images/others_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/>
                                </br>
                                
                                  Other Manage Accounts
                                </a>
                            </div>
                            
                        <div class="finance_doc_small_div right shadow_inner" style="width:230px;">
                            <a href="stationery_list.php" class="attendance_doc_small_div_text autoposition">
                                <img src="images/others_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/>
                                </br>
                                View Stationary' Accounts</a>
                            </div>
                            
                            <div class="finance_doc_small_div left shadow_inner" style="width:230px; margin-left:175px; background:#CCC;">
                            <a href="corporate/index.php" class="attendance_doc_small_div_text autoposition">
                                <img src="images/others_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/>
                                </br>
                                Corporate Accounts</a>
                            </div>

                           
<div class="clear" style="height:30px;"></div>

                            
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