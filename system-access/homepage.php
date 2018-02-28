<?php
include_once('class/auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
       
    </head>

    <body>
        <!-- body starts from here-->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>

            <div class="eims_soft_body_menu">
                <!--<div class="welcome">
                    <img src="images/welcome.png" class="welcome_img"/>
                </div>-->
                <div class="school_name_banner" >
                
                    <h3 style="font-family:Tahoma, Geneva, sans-serif;"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name"); ?></h3>
                    <!--<img src="images/bannername.png" class="school_name_banner_img" />-->
                  
                </div>
                <div class=" img_menu shadow_inner color_1">
                    <div class="img_menu_div">
                        <a href="admission.php">
                            <div class="img_menu_div_small left ">
                                <img src="images/admission_icon.png"/>
                                <div class="img_menu_div_small_text left">ADMISSION</div>
                            </div>
                        </a>
                        <a href="student_list.php"><div class="img_menu_div_small left">
                                <img src="images/sdetail_icon.png"/>
                                <div class="img_menu_div_small_text left">STUDENT DETAILS</div>
                            </div></a>
                        <a href="attendance_doc.php"><div class="img_menu_div_small right">
                                <img src="images/attendance_icon.png"/>
                                <div class="img_menu_div_small_text left">ATTENDANCE</div>
                            </div></a>
                        <a href="time_table_doc.php"><div class="img_menu_div_small right">
                                <img src="images/time_table.png"/>
                                <div class="img_menu_div_small_text left">TIME TABLE</div>
                            </div></a>
                        <a href="exam_a.php"><div class="img_menu_div_small right">
                                <img src="images/Exam_icon.png"/>
                                <div class="img_menu_div_small_text left">EXAMINATION</div>
                            </div></a>
                    </div>
                    <div class="img_menu_div">
                        <a href="teachers_group_view_details.php"><div class="img_menu_div_small left">
                                <img src="images/M_user_icon.png"/>
                                <div class="img_menu_div_small_text left">MANAGE USER</div>
                            </div></a>
                        <a href="finance_setting.php"><div class="img_menu_div_small left">
                                <img src="images/Finance_icon.png"/>
                                <div class="img_menu_div_small_text left">FINANCE</div>
                            </div></a>
                        <a href="settings_to.php"><div class="img_menu_div_small right">
                                <img src="images/color_settings.png"/>
                                <div class="img_menu_div_small_text left">SETTING</div>
                            </div></a>
                        <a href="transport_details.php"><div class="img_menu_div_small right">
                                <img src="images/transportation_service.png"/>
                                <div class="img_menu_div_small_text left">TRANSPORT</div>
                            </div></a>
                        <a href="sms_box.php"><div class="img_menu_div_small right">
                                <img src="images/Message-icon.png"/>
                                <div class="img_menu_div_small_text left">SMS BOX</div>
                            </div></a>
                    </div>
                </div>

            </div>

<div style="width:960px;height:123px; margin-left:auto;margin-right:auto;"></div>






            <div class="footer_div_full">
            <div class="footer_div">
                <?php include ('./class/footer.php'); ?>
            </div>
        </div>
        </div>


    </body>
</html>