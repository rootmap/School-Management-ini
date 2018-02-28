<?php
include_once('class/auth.php');
$table="ams_admission";
extract($_GET);
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
                            <img src="images/attendance_report.png"/>
                            <div class="topbar_small_div_text left height-30">ATTENDANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>ATTENDANCE REPORT</h2></div>
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
                    
                    
                                           
                    <div class="attendance_reg_div_page" style="margin-top: 20px;">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                        <div class="attendance_reg_heading left">
                            <center><h2 class="">
                                     REPORT
                                </h2></center>
                            </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-auto auto-position shadow_inner color_1" style="padding:10px;">
                        <!--tables code start from here-->
                         <div id="dynamic"  style="margin-top:15px;">
                              <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                            <thead>
                              <tr>
                                <th>SL.no</th>
                                <th width="30%">Students' Name</th>
                                <th>Roll</td>
                                <th>Class / Course</th>
                                <th>Section</th>
                                <th>Shift</th>
                                <th>Group</th>
                                <th>Working Day</th>
                                <th>Total Present</th>
                                <th>Percentage %</th>
                               </tr>
                        </thead>
                            
                        
                            <tbody>
                                 <?php
                                  $array=array("id"=>$student_details,"school_id"=>$school_id,"admition"=>$admission);
                                  $data=$obj->SelectAllByID_multiple($table,$array);
                                  $r=1;
                                  if(!empty($data))
                                  foreach($data as $row)
                        
                                  {       
						          ?>
                        
                                 <tr>
                                <td class="center"><?php echo $r; ?></td>
                                <td class="center"><?php echo $row->name; ?></td>
                                <td class="center">
                                <?php echo $row->roll; ?>
                                </td>
                                <td class="center">
                                <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                <td class="center">
                                <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                </td>
                                <td class="center">
                                <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                </td>
                                <td class="center">
                                <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
                                </td>
                                <td class="center">
                                <?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$row->admition));
                        $totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$row->admition));
                        
                        $work=$total+$totall; echo $work ?> 
                                </td>
                                <td class="center">
                        <?php  $total=$obj->exists_multiple("ams_student_attendance",array("attendance"=>1,"admission"=>$row->admition));
                        $totall=$obj->exists_multiple("ams_student_attendance",array("attendance"=>2,"admission"=>$row->admition));
                        
                        echo $total ?> Days
                                </td>
                               <td class="center">
                                <?php $rrs=$total+$totall; $tt=($total/$rrs)*100; echo $tt; ?>%
                                </td>
                        </tr>
                             <?php $r++; } ?>                                         
                            </tbody>
                           
                        </table>  
                       </div>
                                <div class="clear"></div>
                            </div>

                          
                            <!--tables code end here-->
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