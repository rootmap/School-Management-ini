<?php
include_once('class/auth.php');
$table="ams_examination";
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
        
        <!--<script>
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
                xmlhttp.open("GET", "ajx/shift.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>-->
        
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
            function showexam(str)
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
				
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				/*section=document.getElementById('section').value;
				sshift=document.getElementById('shift').value;*/
                xmlhttp.open("GET", "ajx/exam.php?group="+str+"&session="+ssession+"&class="+cclass/*+"&section="+section+"&shift="+sshift*/, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function switchexam(str)
            {
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				/*section=document.getElementById('section').value;
				sshift=document.getElementById('shift').value;*/
				group=document.getElementById('group').value;
				
                if (str == "")
                {
                    document.getElementById("sexam").innerHTML = "";
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
                        document.getElementById("sexam").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/sexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+/*"&section="+section+"&shift="+sshift+*/"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttp.send();

                xmlhttps = new XMLHttpRequest();
                xmlhttps.onreadystatechange = function()
                {
                    if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
                    {
                        document.getElementById("exam").innerHTML = xmlhttps.responseText;
                    }
                }
			
                xmlhttps.open("GET", "ajx/ssexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+/*"&section="+section+"&shift="+sshift+*/"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttps.send();
            }
        </script>
        
        <script>
            function switchexamx(str)
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
                        document.getElementById("exam").innerHTML =xmlhttp.responseText;
                    }
                }
				
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				/*section=document.getElementById('section').value;
				sshift=document.getElementById('shift').value;*/
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/delexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+/*"&section="+section+"&shift="+sshift+*/"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttp.send();
				
				
				xmlhttps = new XMLHttpRequest();
                xmlhttps.onreadystatechange = function()
                {
                    if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
                    {
                        document.getElementById("sexam").innerHTML =xmlhttps.responseText;
                    }
                }
				

                xmlhttps.open("GET", "ajx/s_exam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+/*"&section="+section+"&shift="+sshift+*/"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttps.send();
            }
        </script>
       
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
                            <img src="images/extra_images/examination_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EXAMINATION SETTING</h2></div>
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
                <form action="" method="post" name="exam">
                    <div class="admission_div_page" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination System Setting :</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position shadow_inner color_1">
                        <!--tables code start from here-->
                        <div class="width-col7 margin-top-30 auto-position" >
                           	<!--<div class="class_time_setting_days_text center height-35" >Select Subject wise Time</div>-->
                            	<ul>
                            	<li class="add_st_form_div_label_view_details height-30 width-label-120 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="session" class="border_red1" id="session" onchange="showcls(this.value)" >
                                        <option>Session</option>
                                        <?php
										$array=array("school_id"=>$school); 
								 $session=$obj->SelectAllByID("ams_session",$array);
								  if(!empty($session))
								  foreach($session as $ses):
								 ?>
                                <option value="<?php echo $ses->id;?>"><?php echo $ses->name;?></option>
                                <?php endforeach; ?>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-120 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="class" id="class" onchange="showgroup(this.value)" class="border_red1" >
                                        <option>Class / Course</option>
                                       
                                        
                                    </select>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-120 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="group" id="group" onchange="showexam(this.value)"  class="border_red1" >
                                        <option>Group</option>
                                        
                                        
                                    </select>
                                </li>
                                <!--<li class="add_st_form_div_label_view_details height-30 width-label-120 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="section" id="section" onchange="showshift(this.value)" class="border_red1" >
                                        <option>Section</option>
                                       
                                        
                                    </select>
                                </li>
                                </ul>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-120 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="shift" id="shift" onchange="showgroup(this.value)" class="border_red1" >
                                        <option>Shift</option>
                                       
                                        
                                    </select>
                                </li>-->
                                </ul>
                                
                            </div>
                        
                           
                           <!--<div class="class_time_setting_small left margin_left30 margin-top-30 width-label-200">
                           	<div class="class_time_setting_days_text center height-35" >Choose Exam</div>
                            
                            <div id="exam">
                            
                            </div>
                            
                           </div>
                           
                           <div class="exam_setting_select_div width-label-150 left margin_left30 ">
                           
                           	<ul class="margin-top-75">
                            	<li class="auto-position"><a href="#"></a></li>
                                <li class="auto-position"><a href="#"></a></li>
                            </ul>
                           </div>
                           
                           
                           <div class="class_time_setting_small left margin_left30 margin-top-30 width-label-200">
                           	<div class="class_time_setting_days_text center height-35" >Selected</div>
                            
                            	<div id="sexam" class="sexam">
                                	
                                </div>
                            
                           </div>-->
                           <ul>
                           <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="examination_setting_page2.php" style="text-decoration:none; display:inline-block;" class="height-35 div_btn">
                                    <span style="padding:10px;">Submit</span>
                                    </a>
                                </li>
                                </ul>
                                
                                <div class="admission_div_page height-auto" style="margin-top: 20px; ">
                                    <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                                        <h2 class="margin_left30"><left>Student List :</left></h2>
                                    </div>
                                    <div class="admission_form_div width-auto auto-position color_1 shadow_inner" style="padding:10px;">
                                    <!--tables code start from here-->
            
                                        <div id="dynamic">
                                            
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
                           
                           
                           
                           
                           
                           
                          
                           
                           

                            
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
                        </div>
                        

                    </div>


                </form>
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