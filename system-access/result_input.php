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
            function showsubjecti(str)
            {
                if (str == "")
                {
                    document.getElementById("subject").innerHTML = "";
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
                        document.getElementById("subject").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/r.php?f="+ str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showxam(str)
            {
                if (str == "")
                {
                    document.getElementById("category").innerHTML = "";
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
                        document.getElementById("category").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/exam_show.php?f="+ str, true);
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
				subject=document.getElementById('subject').value;
				
				session=document.getElementById('session').value;
				aclass=document.getElementById('class').value;
				//alert("aclass"+aclass);
				if(str=='')
				{
					window.alert("Please Select A Exam.");
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('result_in.php'); ?>?id="+group+"&showstudent=<?php echo $school; ?>&exam="+str+"&subject="+subject+"&session_id="+session+"&class_id="+aclass);	
				}
				
                //xmlhttp.open("GET", "ajx/abotun11.php?s="+str+"&group="+group+"&subject="+subject, true);
                ///xmlhttp.send();
            }
</script>
        
        
        <script>
            function CreateResult(str)
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
				session=document.getElementById('session').value;
				aclass=document.getElementById('class').value;
				rsection=document.getElementById('section').value;
				category=document.getElementById('category').value;
				subject=document.getElementById('subject').value;
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/result.php?d="+str+"&session="+session+"&class="+aclass+"&section="+rsection+"&category="+category+"&subject="+subject+"&group="+group, true);
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
                            <img src="images/class_time_Icon.png"/>
                            <div class="topbar_small_div_text left height-30">EXAMINATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>RESULT INPUT</h2></div>
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
                    
                    <div class="exam_result_div_top shadow_inner" style="height:120px;">
                        <ul style="margin-left:10px; padding-top:10px;">
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" id="session" onchange="showcls(this.value)" >
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

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-190 left" style="margin-right:50px;">
                                    <select class="select_option" name="group" id="group" onchange="showsubjecti(this.value)" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Subject:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" onchange="showxam(this.value)" name="subject" id="subject" >
                                        <option>Subject</option>
                                       
                                    </select>
                                </li>
                                
                                 <li class="add_st_form_div_label_view_details height-30 width-label-130 left"  style="text-align:right;">Exam : </li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select class="select_option" name="category" id="category" onchange="showee(this.value)" >
                                        <option>Category</option>
                                       
                                    </select>
                                </li>
                                </ul>
                                
                            
                            <ul>
                            <!-- <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                                <button type="submit" name="save" class=" height-35 div_btn" onclick="CreateResult(2)">Show Class / Course</button>
                            </li>-->
                        </ul>
                        
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