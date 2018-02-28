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
                            <img src="images/Finance_icon.png"/>
                            <div class="topbar_small_div_text left height-30">FINANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>FINANCE MODE</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                       

                    </div>
                </div>
                <div class="border_top"></div> <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                                           
                    <div class="attendance_mode_div color_1 shadow_inner" style="margin-top: 20px; padding-bottom:10px;">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>SELECT FINANCE MODE :</left></h2>
                        </div>
                        <div class="admission_mode_form_div width-col4 auto-position">
                            
                            <div class="finance_doc_small_div left shadow_inner">
                                <a href="mgt_fin.php"><img src="images/mgt_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                                </br>
                                <a href="mgt_fin.php" class="attendance_doc_small_div_text autoposition">Management Accounts</a>
                            </div>
                            <div class="finance_doc_small_div right shadow_inner">
                                <a href="other_fin_stationery.php" ><img src="images/others_fin_icon.png" style="height: 60px; width:60px;" class="autoposition margin-top-10"/></a>
                            </br>
                                <a href="other_fin_stationery.php" class="attendance_doc_small_div_text autoposition">Others Account</a>
                            </div>
                            
                 <div class="clear"></div>       

                           

                            
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