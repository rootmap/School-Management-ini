<?php
include_once('class/auth.php');
$table="ams_admission";

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
                            <img src="images/mgt_group_setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">STUDENT</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h2>ALL STUDENTS LIST</h2></div>
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
                    
                    
                                           
                    <div class="admission_div_page color_1 shadow_inner" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>ALL Student LIST:</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            <th>Roll</th>
                                            <th>Class / Course</th>
                                            <th>Group</th>
                                            <th>Section</th>
                                            <th>Shift</th>
                                            <th>Guardian</th>
                                            <th>Mobile No.</th>
                                            <th>Image</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500;">
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                                <td><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                 <td class="center">
												   <?php echo $row->roll; ?>
                                                   </td>
                                                <td class="center">
												
                                                <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?> 
                                                </td>
                                                <td class="center">
												  <?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                                </td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                                </td>
                                                
                                                <td class="center"><?php echo $row->guardian_name; ?></td>
                                                <td class="center"><?php echo $row->phone_number; ?></td>
                                                <td class="center"><a target="new" href="st_profile_info.php?student_details=<?php echo $row->id; ?>"><img src="photo/<?php echo $row->photo;?>" height="35" width="40" /></a></td>
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                                <div class="report_menu_div width-col3 right">
                                <ul>
                                    <li class="right">
                                        <a href="#">
                                            
                                           
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </a>
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            
                                           
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/excel_icon.png" />
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                           
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/mword_icon.png" />
                                        </a> 
                                    </li>
                                </ul>
                            
                            </div>
                           
                            <!--tables code end here-->
</div><div class="clear"></div>
                            
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