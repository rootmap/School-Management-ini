<?php
include_once('class/auth.php');
$table="ams_subject";
$table1="ams_admission";
extract($_GET);
/*if(isset($_POST['save']))
{ 
	if($obj->exists_multiple($table,array("name"=>$_POST['name'],"shift_id"=>$_POST['shift'],"section_id"=>$_POST[section],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"school_id"=>$school))==0)
	{
		if($obj->insert($table,array("name"=>$_POST['name'],"shift_id"=>$_POST['shift'],"section_id"=>$_POST['section'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"group_id"=>$_POST['group'],"school_id"=>$school,"date"=>date('Y-m-d'),"satuts"=>1))==1)
		{
			$obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			$obj->Error("Data Saved Failed",$obj->filename());	
		}
	}
}*/
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
				var school=$('#school_id').val();
                if(str=='')
				{
					window.alert("Please Select A Section Using Session -> And -> Class -> Group.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('ams.php'); ?>?id="+group+"&group="+group+"&session="+session+"&class="+sclass+"&section="+str+"&showstudent="+school,true);	
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
				var school=$('#school_id').val();
                if(str=='')
				{
					window.alert("Please Select A Group Using Session -> And -> Class.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('ams.php'); ?>?id="+str+"&group="+str+"&session="+session+"&class="+sclass+"&showstudent="+school,true);	
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
				var school=$('#school_id').val();
                if(str=='')
				{
					window.alert("Please Select A Shift Using Session -> And -> Class -> Group -> Section.");	
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('ams.php'); ?>?id="+group+"&group="+group+"&session="+session+"&class="+sclass+"&section="+section+"&shift="+str+"&showstudent="+school,true);	
				}
            }
        </script>
        <script>
            function showresult(str,admission,status)
            {
                if (str == "")
                {
                    document.getElementById("tabulation").innerHTML = "";
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
                        document.getElementById("tabulation").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/progreess.php?d=" +str+"&admission="+admission+"&status="+status, true);
                xmlhttp.send();
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
                        <div class="topbar_small_div left ">
                            <img src="images/exam2_small_icon.png"/>
                            <div class="topbar_small_div_text left height-30">RESULT CARD</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>RESULT CARD	</h2></div>
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
                
                 <div class="admission_div_top shadow_inner" style="padding-bottom:0px; padding-top:10px;">
                     
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left a-right">Session:</li>
                               
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                	<input type="hidden" name="school_id" id="school_id" value="<?php echo $school; ?>" />
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
                    </div>
                            
                    

                    <div class="admission_div shadow_inner" style="margin-top: 20px; color:#666; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination RESULT CARD </left></h2>
                        </div>
                        
                        <div id="dynamic"  style="margin-top:15px; padding:10px; overflow:auto;">
                           <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                            <thead>
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Group</th>
                                    <th>Shift</th> 
                                    <th>Name Of Exam</th>
                                </tr>
                            </thead>
                             
                            <tbody>
                                
                        		  <?php
								  if(isset($_GET['section']))
								  {
									  if(isset($_GET['shift']))
									  {
										$array=array("group_id"=>$_GET['group'],"section_id"=>$_GET['section'],"shift_id"=>$_GET['shift'],"school_id"=>$showstudent);
									  }
									  else
									  {
										$array=array("group_id"=>$_GET['group'],"section_id"=>$_GET['section'],"school_id"=>$showstudent);
									  }  
									
								  }
								  else
								  {
									$array=array("group_id"=>$_GET['group'],"school_id"=>$showstudent);
								  }
                                  //$array=array("group_id"=>$id,"school_id"=>$showstudent);
                                  $data=$obj->SelectAllByID_Multiple($table1,$array);
                                  $r=1;
                                  if(!empty($data))
                                  foreach($data as $row){        
								  ?>
                        
                                <tr class="">
                                <td class="center"><?php echo $r;?></td>
                                        <td class="center" ><?php echo $row->name;?> </td>
                                         <td class="center"><?php echo $row->roll;?></td>
                                        <td class="center" ><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                        
                                        <td class="center" ><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                                       
                                          <input type="hidden" id="admission" name="admission" value="<?php echo $row->admition; ?>" />
                                        
                                        <td class="center">
                                          <select name="category" id="category"  class="select_option">
                                           <option selected="selected">Select Category</option>
                                           <?php
                                            $data=$obj->SelectAllByID_Multiple("ams_exam_category",array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"school_id"=>$school));
                                            if(!empty($data))
                                            foreach($data as $ro):
												$chkse=$obj->exists_multiple("ams_exam_result",array("name_id"=>$row->id,"exam_cateory_id"=>$ro->id));
												if($chkse!=0)
												{
											   ?>
											   		<option onclick="showresult(<?php echo $ro->id;?>,<?php echo $row->admition;?>,1)" value="<?php echo $ro->id;?>"><?php echo $ro->name;?></option>
											   <?php 
												}
										   endforeach;?>
                                              <option onclick="showresult(1000,<?php echo $row->admition;?>,2)" value="<?php echo $ro->id;?>">
                                                 Total Result
                                              </option>
                                          </select>
                                        </td>
                                        
                                </tr>
                                <?php $r++; } ?>
                                                                     
                            </tbody>
                            
                           
                        </table>
                        </div>
                          <div id="printableArea">
                            <div id="tabulation" class="height-auto width-auto">
                             <div class="clear"></div>
                            </div>
                          </div>
                     <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
  <button type="button" onClick="printDiv('printableArea')" class="div_btn" value="print a div!" />    Print</button>
                               
                            </li>
                </div>


            </div></div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>