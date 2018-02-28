<?php
include_once('class/auth.php');
$table="ams_time_table_teacher";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        
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
            function categoryy(str)
            {
                if (str == "")
                {
                    document.getElementById("categoryf").innerHTML = "";
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
                        document.getElementById("categoryf").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/time_table_category1.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
         <script>
            function showcategory(str)
            {
                if (str == "")
                {
                    document.getElementById("ttt").innerHTML = "";
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
                        document.getElementById("ttt").innerHTML = xmlhttp.responseText;
                    }
                }
				if(str == "1")
				{
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/time_table_teacher_1.php?k=" + str+"&group="+group, true);
                xmlhttp.send();
				}
				else if(str == "2")
				{
                group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/time_table1_teacher_2.php?r=" + str+"&group="+group, true);
                xmlhttp.send();
				}
				else if(str == "3")
				{
                group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/time_table_teacher_3.php?g=" + str+"&group="+group, true);
                xmlhttp.send();
				}
				else if(str == "4")
				{
                group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/time_table_teacher_4.php?h=" + str+"&group="+group, true);
                xmlhttp.send();
				}
            }
        </script>
       <style>
       input{text-align:center;width:70px; height:40px;}
	   table{text-align:center; color:rgba(255,255,255,1);}
	   table tr td{padding:8px;}
     </style>   	
       
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
                            <img src="images/class_time_Icon.png"/>
                            <div class="topbar_small_div_text left height-30">TIME TABLE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TEACHER TIME TABLE</h2></div>
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
                    
                   <div class="admission_div_top shadow_inner" style="padding-bottom:70px; height:60px; padding-left:10px;">
                     
                        <ul>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                               
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

                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Class / Course:</li>
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
                            <li class="add_st_form_div_label_view_details height-30 width-label-60 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" onchange="categoryy(this.value)" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                                
                                 <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Dising:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option"  id="categoryf" name="categoryf" onchange="showcategory(this.value)" >
                                        <option>Dising</option>
                                        
                                    </select>
                                    
                                </li>
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                   
                                    <!--<button type="submit" onclick="showtimetable('3')" name="submit" class=" height-35 div_btn" >View Time-Table</button>-->
                                   
                                </li>
                        </ul>
                    </div>
                                           
                    <div class="time_table_div_page shadow_inner color_1" style="margin-top: 20px;">
                    
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-label-325 left" >
                                <img src="images/direction_left.png"/>
                                </div>
                                
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                     CLASS TIME TABLE
                                </h2></center>
                         </div>
                                <div class="width-label-325 right" >
                                <img src="images/direction_right.png"/>
                                </div>
                         </div>
                        </center>
                        
                        <div id="printableArea" class="admission_form_div width-col5 auto-position">
                           <div id="ttt">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
  <button type="button" onClick="printDiv('printableArea')" class="div_btn" value="print a div!" />    Print</button>
                               
                            </li>

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