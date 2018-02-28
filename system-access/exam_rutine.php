<?php
include_once('class/auth.php');
$table="ams_exam_subject";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        
        <script>
            function showcls(str)
            {
                if (str == "")
                {
                    document.getElementById("class").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("class").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showsection(str)
            {
                if (str == "")
                {
                    document.getElementById("section").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("section").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/section.php?t=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showshift(str)
            {
                if (str == "")
                {
                    document.getElementById("shift").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("shift").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/shift1.php?v=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showgroup(str)
            {
                if (str == "")
                {
                    document.getElementById("group").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("group").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/group1.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showstudent(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("dynamic").innerHTML = xmlhttp.responseText;
                    }
                }
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/show_student.php?k=" + str+"&group="+group, true);
                xmlhttp.send();
            }
        </script>
        	
        <!-----table ends------------------------------------------------------------------------------------------------------------->
        
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
                            <div class="topbar_small_div_text left height-30">RUTINE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EXAMINATION RUTINE</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                           
                        </ul>
                       

                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                     
                        <ul>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                               
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									    $section=$obj->SelectAll("ams_session");
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                        <?php 
									    $class=$obj->SelectAll("ams_class");
										 if(!empty($class))
										 foreach($class as $cls ):
									  ?>
                                        <option value="<?php echo $cls->id?>"><?php echo $cls->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                        <?php 
									    $section=$obj->SelectAll("ams_section");
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                        <?php 
									    $shift=$obj->SelectAll("ams_shift");
										 if(!empty($shift))
										 foreach($shift as $sft ):
									  ?>
                                        <option value="<?php echo $sft->id?>"><?php echo $sft->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" onclick="showstudent('2')" name="submit" class=" height-35 div_btn" >Create View</button>
                                    </a>
                                </li>
                        </ul>
                    </div>
                         <?php include_once('class/esm.php'); ?>                  
                    <div class="admission_div_page height-auto" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination Rutine :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position color_1 shadow_inner" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Exam Name</th>
                                            <th>Session</th>
                                            <th>Class / Course</th>
                                            <th>Section</th>
                                            <th>Group</th>
                                            <th>Shift</th>
                                            <th>Subject</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $data=$obj->SelectAll($table);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr>
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_exam_category","id",$row->exam_id,"name"); ?></td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?></td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                                </td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                                </td>
                                                <td class="center">
                                                 <?php echo $obj->SelectAllByVal("ams_subject","id",$row->subject_id,"name"); ?>
                                                </td>
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
                                </ul><div class="clear"></div>
                            </div>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
<div class="clear"></div>
                            
                        </div>
                        
<div class="clear"></div>
                    </div>

<div class="clear"></div>

                </div>

<div class="clear"></div>
            </div>
<div class="clear"></div>

            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>