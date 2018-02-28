<?php
include_once('class/auth.php');
$table="ams_exam_result_two";
$table2="ams_exam_result";

if(isset($_POST['save']))
{
  
       	$rr=array("school_id"=>$school);
		$dat=$obj->SelectAllByID("ams_report2",$rr);
		$tt=$obj->exists_multiple("ams_report2",$rr); 
						
                       
  
         
        foreach($_POST['name'] as $index=>$nn):
			
			if($tt==1)
			{
				
        	$obj->insert($table2,array("name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index]));
			
			}
			elseif($tt==2)
			{
				$obj->insert($table2,array("name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index]));
			}
			elseif($tt==3)
			{
				$obj->insert($table2,array("name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index]));
			}
			elseif($tt==4)
			{
				$obj->insert($table2,array("name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index]));
			}
			
        endforeach;
		$count=count($_POST['name']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
		}
    
    
}


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
                xmlhttp.open("GET", "ajx/abotun15.php?s="+str+"&group="+group, true);
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
                            <img src="images/student-testimonial-icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">TESTIMONIAL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TESTIMONIAL</h2></div>
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
                    
                    <div class="exam_result_div_top shadow_inner" >
                        <ul style="margin-left:10px;">
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
                                  <select class="select_option" name="group" id="group" onchange="showee(this.value)" >
                                        <option>Group</option>
                                    </select>
                                </li>
                            
                                
                               <!-- <li class="add_st_form_div_label_view_details height-30 width-label-120 left" style="text-align:center;">Exam :</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="margin-right:40px;">
                                    <select class="select_option" name="category" id="category" onchange="showee(this.value)" >
                                        <option>Category</option>
                                       
                                    </select>
                                </li>-->
                                </ul>
                                
                            
                            <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                                <button type="submit" name="save" class=" height-35 div_btn" onclick="CreateResult(2)">SHOW STUDENT</button>
                            </li>
                        </ul>
                        
                    </div>
                            
                       
                        
                    </div>
                                           
                    <div class="exam_result_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-label-325 left" ><img src="images/direction_left.png"/></div>
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                     TESTIMONIAL
                                </h2></center>
                            </div>
                                <div class="width-label-325 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->
                           <div id="dynamic"  style="margin-top:15px; overflow:auto;">
                                
        </div>
                             
                            
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