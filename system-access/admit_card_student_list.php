<?php
include_once('class/auth.php');
$table="ams_admission";
extract($_GET);

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
						//show group
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
							{
								document.getElementById("group").innerHTML = xmlhttps.responseText;
							}
						}
						xmlhttps.open("GET", "ajx/group1.php?s=" + str, true);
						xmlhttps.send();
						//show group
						
						//show exam'
						xmlhttpd = new XMLHttpRequest();
						xmlhttpd.onreadystatechange = function()
						{
							if (xmlhttpd.readyState == 4 && xmlhttpd.status == 200)
							{
								document.getElementById("exam").innerHTML = xmlhttpd.responseText;
							}
						}
						xmlhttpd.open("GET", "ajx/group_g.php?e=" + str, true);
						xmlhttpd.send();
						//show exam end
						
						
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
                xmlhttp.open("GET", "ajx/shift.php?s=" + str, true);
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
            function showgroupg(str)
            {
                if (str == "")
                {
                    document.getElementById("exam").innerHTML = "";
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
                        document.getElementById("exam").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/group_g.php?e=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showee(str)
            {
                if (str == "")
                {
                    document.getElementById("df").innerHTML = "";
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
                        document.getElementById("df").innerHTML = xmlhttp.responseText;
                    }
                }
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/abotun10.php?s="+str+"&group="+group, true);
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
                            <img src="images/exam2_small_icon.png"/>
                            <div class="topbar_small_div_text left height-30">STUDENT DETAIL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>STUDENT LIST</h2></div>
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
                     
                        <ul style="margin-left:10px;">
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" style="text-align:right;">Session:</li>
                               
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									  $array=array("school_id"=>$school);
									    $section=$obj->SelectAllByID("ams_session",$array);
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;"> Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                                
                       <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group">
                                        <option>Group</option>
                                        
                                    </select>
                                </li>

                                </ul>
                            <div style="clear:both !important;"></div>
                            <ul style="margin-left:10px;"> 
                                
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift">
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                                
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Exam:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="exam" id="exam" onchange="showee(this.value)">
                                    
                                        <option>Select Exam</option>
                                       
                                    </select>
                                </li>
                                
                                
                            <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                   
                                    <button type="submit" onclick="showstudent('2')" name="submit" class=" height-35 div_btn" >Show Student</button>
                                </li>
                        </ul>
                    </div>
                         <?php include_once('class/esm.php'); ?>                  
                    <div class="admission_div_page height-auto" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Student List :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position color_1 shadow_inner" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="printableArea">
                                <table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
                                <thead>
                                    <tr>
                                        <th>S/L</th>
                                        <th><input type="checkbox" value="None" id="checkAll" name="check_all" /></th>
                                        <th>Student's Name</th>
                                        <th>Roll</th>
                                        <th>Class / Course</th>
                                        <th>Section</th>
                                        <th>Group</th>
                                        <th>shift</th>
                                        
                                        <th>Exam Mode</th>
                                        <th>Admit Card</th>
                                    </tr>
                                </thead>
                                 
                            
                                <tbody>
                                    
                            <?php
                                      $array=array("group_id"=>$group_id,"school_id"=>$showstudent);
                                      $data=$obj->SelectAllByID_Multiple($table,$array);
                                      $r=1;
                                      if(!empty($data))
                                      foreach($data as $row)
                            
                            {        ?>
                                    <tr class="">
                                            <td class="center"><?php echo $r;?></td>
                                            <td class="center"><input type="checkbox" /></td>
                                             <td class="center"><?php echo $row->name;?></td>
                                             <td  class="center"><?php echo $row->roll;?></td>
                                            <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                            <td  class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                                            <td class="center"><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?></td>
                                            <td  class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                            
                                            
                                            <td class="center"><?php echo $obj->SelectAllByVal("ams_exam_category","id",$exam,"name"); ?></td>
                                            <td  class="center">
                                              <a target="new" href="student_admitcard.php?roll=<?php echo $row->roll; ?>&amp;admission=<?php echo $row->admition; ?>&amp;exam=<?php echo $exam; ?>&amp;school_id=<?php echo $school; ?>">AC</a>
                                            </td>
                            
                                    </tr>
                                   <?php $r++; } ?>
                                                                         
                                </tbody>
                                
                            </table>
                                
                            </div>
                             <ul>
                             <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                 <a type="submit" style="padding-left:15px;padding-right:30px; padding-bottom:10px;padding-top:10px;" name="submit" class="height-35 div_btn" href="all_admit.php?group_id=<?php echo $row->group_id; ?>&amp;showstudent=<?php echo $school; ?>&amp;exam=<?php echo $exam; ?>">View Admit Card</a>
                            </li>
                        </ul>      
                           <?php include ('./include/print.php'); ?>
<div class="clear"></div>
                        </div>
                    </div>
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

 <script>

            var placeholder = "Please Select";

            $('.select2, .select2-multiple').select2({placeholder: placeholder});

            $(".select2, .select2-multiple, .select2-allow-clear, .select2-remote").on(select2OpenEventName, function() {
                if ($(this).parents('[class*="has-"]').length) {
                    var classNames = $(this).parents('[class*="has-"]')[0].className.split(/\s+/);
                    for (var i = 0; i < classNames.length; ++i) {
                        if (classNames[i].match("has-")) {
                            $('#select2-drop').addClass(classNames[i]);
                        }
                    }
                }

            });

        </script>

    </body>
</html>