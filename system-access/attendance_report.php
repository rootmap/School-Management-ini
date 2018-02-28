<?php
include_once('class/auth.php');
$table="ams_admission";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
 <script>
            function showclass(str)
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
				
                xmlhttp.open("GET", "ajx/session.php?s="+str, true);
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
				
                xmlhttp.open("GET", "ajx/section.php?t="+str, true);
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
				
                xmlhttp.open("GET", "ajx/shift.php?s="+str, true);
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
				
                xmlhttp.open("GET", "ajx/group1.php?s="+str, true);
                xmlhttp.send();
            }
</script>


        <script>
            function showmang(str)
            {
                
				
					if (str == "")
					{
						document.getElementById("manage").innerHTML = "";
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
							document.getElementById("manage").innerHTML = xmlhttp.responseText;
						}
					}
					if (str == 4)
					{
					xmlhttp.open("GET", "ajx/mode_year_month.php?b="+str, true);
					xmlhttp.send();
					}
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
                xmlhttp.open("GET", "ajx/attendance_show.php?s=" + str+"&group="+group, true);
                xmlhttp.send();
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
                            <img src="images/extra_images/attendance_icon.png"/>
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
                    
                    <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                     
                        <ul style="margin-left:10px;">
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showclass(this.value)" >
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

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                       
                                    </select>
                                </li>
                                </ul>
                            <div style="clear:both !important;"></div>
                            <ul style="margin-left:10px;">   
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    
                                    <button type="submit" onclick="showstudent('2')" name="submit" class=" height-35 div_btn" >Create View</button>
                                </li>
                        </ul>
                    </div>
                          <!--
                            <li class="attendance_report_small_top_li height-40 width-label-150 left">Select a Mode:</li>
                                <li class="attendance_report_small_top_li height-40 width-label-200 left">
                                    <select class="select_option" name="mode" id="mode" name="Select a Mode" onchange="showmang(this.value)" >
                                        <option>Select a Mode</option>
                                        <option value="4">Monthly</option>
                                        <option>Overall</option>
                                    </select>
                                </li>-->
                                            
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
                         <div id="printableArea">
                             <div id="dynamic"  style="margin-top:15px;">
                             </div>  
                           </div>
                            <div class="report_menu_div width-col3 right">
                                <ul>
                                    <li class="right">
                                        <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                            
                                            <img class="right" style="margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style="margin-top:5px;" src="images/excel_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style=" margin-top:5px;" src="images/mword_icon.png" />
                                        </button>
                                    </li>
                                </ul>
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