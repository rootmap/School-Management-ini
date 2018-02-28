<?php
include_once('class/auth.php');
$table="ams_transport_setting_profile";

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
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Transport_icon.png"/>
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
                    
                  <!-- <div class="menu_div">
                    
                    	
                     <ul id="nav" class="right arial bold">
                    	<li><a href="#">MORE +</a>
                        <ul>
                                <li><a href="notice_list.php">Notice</a></li>
                                <li><a href="academic_calendar.php">Academic Calendar  </a></li>
                                <li><a href="#">Massages Book</a></li>
                            </ul>
                        </li>
                        <li><a href="driver_profile.php">PROFILE</a>
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
                    </div>-->
                                           
                    <div class="admission_div_page" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Transport List :</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position shadow_inner color_1" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="printableArea">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Transport No.</th>
                                            <th>Driver Name</th>
                                            <th>Category</th>
                                            <th>Driver Info</th>
                                            <th>Mobile Number</th>
                                            <th>Location</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="" style="text-align:center;">
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row->transport_number; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?></td>
                                                <td><?php echo $row->experience_info; ?></td>
                                                <td><?php echo $row->number; ?></td>
                                                <td><?php echo $row->area; ?></td>
                                                <td><a href="transprot_info_details.php?id=<?php echo $row->id; ?>&amp;school=<?php echo $row->school_id; ?>"><img src="images/contact_new.png" /></a></td>
                                                
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="clear"></div>
                            <!--tables code end here-->
                               <?php include ('./include/print.php'); ?>
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