<?php
include_once('class/auth.php');
$table="ams_sms_attendance";
if (isset($_POST['save']))
 {
	 
    foreach($_POST['admission'] as $index=>$nn):
			if($obj->exists_multiple($table,array("admission"=>$nn,"class_id"=>$_POST['class'],"text"=>$_POST['text'],"number"=>$_POST['number'][$index],"school_id"=>$school))==0)
			{
        	$obj->insert($table,array("admission"=>$nn,"text"=>$_POST['text'],"class_id"=>$_POST['class'],"number"=>$_POST['number'][$index],"date"=>date('Y-m-d'),"status"=>1,"school_id"=>$school));
			}
			
        endforeach;
		$count=count($_POST['admission']);
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
        
        <script type="text/javascript">
            jQuery(function($) {
                $('#checkAll').click(function() {
                    $('input:checkbox').prop('checked', this.checked);
                });
            })
        </script>
        
        
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
                {
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
						//show section
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
							{
								document.getElementById("section").innerHTML = xmlhttps.responseText;
							}
						}
						xmlhttps.open("GET", "ajx/section.php?t=" + str, true);
						xmlhttps.send();
						//show section
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
                var session=$('#session').val();
				var sclass=$('#class').val();
				var group=$('#group').val();
                if(str=='')
				{
					window.alert("Please Select A Section Using Session -> And -> Class -> Group.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('sms_attendence.php'); ?>?id="+group+"&session="+session+"&class="+sclass+"&section="+str+"&school="+<?php echo $school; ?>,true);	
				}
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
            function show_student_groupwise(str)
            {
				var session=$('#session').val();
				var sclass=$('#class').val();
                if(str=='')
				{
					window.alert("Please Select A Group Using Session -> And -> Class.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('sms_attendence.php'); ?>?id="+str+"&session="+session+"&class="+sclass+"&school="+<?php echo $school; ?>,true);	
				}
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
				
                xmlhttp.open("GET", "ajx/abotun8.php?s="+str, true);
                xmlhttp.send();
            }
</script>
        
        <script>
            function showstudent(str)
            {
                var session=$('#session').val();
				var sclass=$('#class').val();
				var group=$('#group').val();
				var section=$('#section').val();
                if(str=='')
				{
					window.alert("Please Select A Shift Using Session -> And -> Class -> Group -> Section.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('sms_attendence.php'); ?>?id="+group+"&session="+session+"&class="+sclass+"&section="+section+"&shift="+str+"&school="+<?php echo $school; ?>,true);	
				}
            }
        </script>
        	

    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container ">
            <div class="eims_soft_head_div">
        <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/images.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>SMS TO ATTENDANCE</h3></div>
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
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left a-right">Session:</li>
                               
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" id="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									    $array=array("school_id"=>$school);
									    $section=$obj->SelectAllByID("ams_session",$array);
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option <?php if(isset($_GET['session'])){ if($_GET['session']==$sec->id){ ?> selected="selected" <?php } } ?> value="<?php echo $sec->id; ?>"><?php echo $sec->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-120 left a-right">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                        <?php if(isset($_GET['class'])){ ?>
                                        <?php 
									    $array2=array("school_id"=>$school,"session_id"=>$_GET['session']);
									    $section2=$obj->SelectAllByID_Multiple("ams_class",$array2);
										 if(!empty($section2))
										 foreach($section2 as $sec2 ):
									  ?>
                                        <option <?php if($_GET['class']==$sec2->id){ ?> selected="selected" <?php } ?> value="<?php echo $sec2->id; ?>"><?php echo $sec2->name; ?></option>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </select>
                                </li>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-120 left a-right">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" onchange="show_student_groupwise(this.value)" id="group">
                                        <option>Group</option>
                                        <?php if(isset($_GET['group'])){ ?>
                                        <?php 
									    $array3=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class']);
									    $section3=$obj->SelectAllByID_Multiple("ams_student_group",$array3);
										 if(!empty($section3))
										 foreach($section3 as $sec3):
									  ?>
                                        <option <?php if($_GET['group']==$sec3->id){ ?> selected="selected" <?php } ?> value="<?php echo $sec3->id; ?>"><?php echo $sec3->name; ?></option>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </select>
                                </li>
                            <div style="clear:both !important;"></div> 
                            <?php if(isset($_GET['group'])){ ?>   
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left a-right">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)">
                                        <option>Section</option>
                                        <?php 
									    $array4=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class']);
									    $section4=$obj->SelectAllByID_Multiple("ams_section",$array4);
										 if(!empty($section4))
										 foreach($section4 as $sec4):
									  ?>
                                        <option <?php if(isset($_GET['section'])){ if($_GET['section']==$sec4->id){ ?> selected="selected" <?php }} ?> value="<?php echo $sec4->id; ?>"><?php echo $sec4->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            </ul>
                            <ul style="margin-left:10px;">   
                            <li class="add_st_form_div_label_view_details height-30 width-label-120 left a-right">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showstudent(this.value)">
                                        <option>Shift</option>
                                        <?php 
									    $array5=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"section_id"=>$_GET['section']);
									    $section5=$obj->SelectAllByID_Multiple("ams_shift",$array5);
										 if(!empty($section5))
										 foreach($section5 as $sec5):
									  	?>
                                        <option <?php if(isset($_GET['shift'])){ if($_GET['shift']==$sec5->id){ ?> selected="selected" <?php }} ?> value="<?php echo $sec5->id; ?>"><?php echo $sec5->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            <?php } ?>   
                                
                                </ul>
                                
                            
                            <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
  
                               
                            </li>
                        </ul>
                        
                    </div>

                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>Select Send SMS Attendance</left></h2>
                        </div>
                        <div class="admission_div_page auto-position height-auto shadow_inner" style="padding:8px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                
                               
                                </div>
                               
                                <!--tables code end here-->

                              <div class="clear"></div>
                            </div>


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