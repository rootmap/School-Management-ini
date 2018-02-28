<?php
include_once('class/auth.php');
$table="ams_student_attendance";
if(isset($_GET['day_id']))
{
    if($obj->exists($table,array("section_id"=>$_GET['section_id'],"shift_id"=>$_GET['shift_id'],"group_id"=>$_GET['group_id'],"day_id"=>$_GET['day_id'],"admission"=>$_GET['admission'],"class_id"=>$_GET['class_id'],"school_id"=>$school,"attendance"=>$_GET['status']))==0)
    {
       
        $obj->insert($table,array("section_id"=>$_GET['section_id'],"shift_id"=>$_GET['shift_id'],"group_id"=>$_GET['group_id'],"day_id"=>$_GET['day_id'],"admission"=>$_GET['admission'],"class_id"=>$_GET['class_id'],"school_id"=>$school,"date"=>date('Y-m-d'),"attendance"=>$_GET['status'],"status"=>1));
		
		
	}
	$count=count($_GET['day_id']);
	if($count!=0)
	{
		echo $obj->Success("Data Saved Successfully",$obj->filename()."?section_id=".$_GET['section_id']."&shift_id=".$_GET['shift_id']."&group_id=".$_GET['group_id']."&class_id=".$_GET['class_id']);
	}
	else
	{
		echo $obj->Error("Data Saved Failed",$obj->filename()."?day_id=".$_GET['day_id'],"&amp;section_id=".$_GET['section_id'],"&amp;shift_id=".$_GET['shift_id'],"&amp;group_id=".$_GET['group_id'],"&amp;admission=".$_GET['admission'],"&amp;class_id=".$_GET['class_id'],"&amp;attendance=".$_GET['status']);	
	}
}
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
				calendar=document.getElementById('calendar').value;
                xmlhttp.open("GET", "ajx/abotun7.php?s="+str+"&calendar="+calendar, true);
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
                xmlhttp.open("GET", "ajx/attend.php?k=" + str+"&group="+group, true);
                xmlhttp.send();
            }
        </script>
       <style>
		#calendar,
		#calendar2,
		#calendar3 {
			border: 1px solid #909090;
			font-family: Tahoma;
			font-size: 12px;
		}
	</style>
    <script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>

    </head>

    <body onload="doOnLoad();">
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
                        <div class="topbar_small_div_text2 left height-30"><h2>ATTENDANCE REGISTER</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>


                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div>
                <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                   <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                        <ul style="margin-left:10px;">
                           
                            <li class="add_st_form_div_label_view_details height-30 left">date:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <input class="textbox width-label-140" id="calendar" />
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showclass(this.value)" >
                                        <option>Session</option>
                                        <?php
										  $array=array("school_id"=>$school); 
										  $forti=$obj->SelectAllByID('ams_session',$array);
										  if(!empty($forti))
										  foreach($forti as $dd):
										?>
                                        <option value="<?php echo $dd->id;?>"><?php echo $dd->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                         
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
                            <li class="add_st_form_div_label_view_details height-30 width-label-60 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" onchange="showee(this.value)" >
                                        <option>Group</option>
                                         
                                    </select>
                                </li>
                            <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    
                                    <button type="submit" name="login" onclick="showstudent('5')" class=" height-35 div_btn">Show Class / Course</button>
                                    
                                </li>
                        </ul>
                    </div>
                        
                    </div>
                                           
                    <div class="attendance_reg_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                        <div class="attendance_reg_heading left">
                            <center><h2 class="">
                                     <?php 
									   $dt=date('M Y');
									   {
										 echo $dt;
									    }
									 ?>
                                </h2></center>
                            </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-auto color_1 shadow_inner auto-position" style="overflow:auto; padding:10px;">
                        <!--tables code start from here-->
                       <div id="dynamic"  style="margin-top:15px;">
                      <div id="dynamic">
                       
                      </div>
                      
                                
                               
                            </div>
                               <div class="clear"></div>
                            </div>


                            <div class="clear"></div>
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
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