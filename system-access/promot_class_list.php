<?php
include_once('class/auth.php');
$table="ams_next_class_promot";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
    <head>
        <?php include('class/head.php'); ?>
        <!-----table starts------------------------------------------------------------------------------------------------------------->
         
        
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
            function showallstd(str)
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
				aclass=document.getElementById('class').value;
                xmlhttp.open("GET", "ajx/next_class_list.php?k=" + str+"&class="+aclass, true);
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
                            <img src="images/Student.png"/>
                            <div class="topbar_small_div_text left height-30">STUDENT</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>PROMOTE CLASS LIST</h2></div>
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
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="session" onchange="showclass(this.value)" name="session1">
                                        <option>Session</option>
                                        <?php $array=array("school_id"=>$school);
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
                                    <select class="select_option" id="class" onchange="showsection(this.value)" name="class1">
                                        <option>Class / Course</option>
                                         
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="section" onchange="showshift(this.value)" name="section1">
                                        <option>Section</option>
                                        
                                    </select>
                                </li>
                                 </ul>
                            <div style="clear:both !important;"></div>
                            <ul>  
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="shift" onchange="showgroup(this.value)" name="shift1">
                                        <option>Shift</option>
                                         
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="group" name="group1">
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="login" onclick="showallstd('5')" class=" height-35 div_btn">Create View</button>
                                    </a>
                                </li>
                            
                        </ul>
                    </div>
                                           
                    <div class="admission_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Promote Class / Course List:</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position color_1 shadow_inner" style="height:auto; padding:10px;">
                       <!--tables code start from here-->
                           <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
                                    <thead>
                                        <tr>
                                          <th rowspan="2">S/L</th>
                                          <th rowspan="2">Student's Name</th>
                                          <th colspan="2">Roll</th>
                                          <th colspan="2">Class / Course</th>
                                          <th colspan="2">Section</th>
                                          <th colspan="2">Group</th>
                                          <th colspan="2">Shift</th>
                                        </tr>
                                        <tr>
                                          <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                           <th>Old</th>
                                           <th>New</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody style="font-weight:500;font-size:14px;">
                                        <?php 
                                        $data=$obj->SelectAllByID("ams_next_class_promot",array("school_id"=>$school));
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                <td class="center"><?php echo $x; ?></td>
                                <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?></td>
                                
                                 
                                <td class="center" ice:editable="*">
								<?php echo $row->old_roll_id; ?></td>
                                <td class="center">
								<?php echo $row->roll; ?>
                                </td>
                                
                                
                                <td class="center">
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                <td class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                
                               
                                <td class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->old_section_id,"name"); ?>
                                </td>
                                <td class="center">
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                </td>
                                
                                
                                 <td class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_group","id",$row->old_group_id,"name"); ?>
                                </td>
                                <td class="center"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?></td>
                                
                                
                                
                                <td class="center" ice:editable="*">
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->old_shift_id,"name"); ?>
                                </td>
                                <td class="center">
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                </td>
                                
                               
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                   
                                </table>
                                
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
                    <?php include ('class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>