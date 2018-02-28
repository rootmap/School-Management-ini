<?php
include_once('class/auth.php');
$table="ams_admission";
$table2="ams_transfer";
if(isset($_GET['transfer']))
{
	$exis=$obj->exists_multiple($table2,array("roll_id"=>$_GET['roll_id']));
	if($exis==0)
	{	
    	$edit=array("roll_id"=>$_GET['roll_id'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>2);
		if($obj->insert($table2,$edit)==1)
		{
			$errmsg_arr[]="<div class='sucess'>Successfully Transfer</div>";
			$error_flag=true;
			if($error_flag)
			{
				$_SESSION['SMSG_ARR']=$errmsg_arr;
				session_write_close();
				header('location:'.$obj->filename());
				exit();
			}
		}
		else
		{
			$errmsg_arr[]="<div class='sucess'>Successfully Fail</div>";
			$error_flag=true;
			if($error_flag)
			{
				$_SESSION['SMSG_ARR']=$errmsg_arr;
				session_write_close();
				header('location:'.$obj->filename());
				exit();
			}	
		}
		
	}
	else
	{
		$edit=array("roll_id"=>$_GET['roll_id'],"status"=>2);
		if($obj->update($table2,$edit)==1)
		{
			$errmsg_arr[]="<div class='sucess'>Successfully Transfer</div>";
			$error_flag=true;
			if($error_flag)
			{
				$_SESSION['SMSG_ARR']=$errmsg_arr;
				session_write_close();
				header('location:'.$obj->filename());
				exit();
			}
		}
		else
		{
			$errmsg_arr[]="<div class='sucess'>Successfully Fail</div>";
			$error_flag=true;
			if($error_flag)
			{
				$_SESSION['SMSG_ARR']=$errmsg_arr;
				session_write_close();
				header('location:'.$obj->filename());
				exit();
			}	
		}
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
				
                xmlhttp.open("GET", "ajx/abotun6.php?s="+str, true);
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
                xmlhttp.open("GET", "ajx/student_transfer.php?k=" + str+"&group="+group, true);
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
                            <img src="images/Admin icon.jpeg"/>
                            <div class="topbar_small_div_text left height-30">STUDENT DETAIL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>VIEW DETAILS</h2></div>
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
                    
                    <div class="admission_div_top shadow_inner" style="height:180px;">
                     
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
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" onchange="showee(this.value)" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                   
                                    <button type="submit" onclick="showstudent('2')" name="submit" class=" height-35 div_btn" >Create View</button>
                                </li>
                        </ul>
                    </div>
                         <?php include_once('class/esm.php'); ?>                  
                    <div class="admission_div_page height-auto" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Student List :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto color_1 shadow_inner auto-position" style="padding:10px;">
                        <!--tables code start from here-->
 <form action="" method="post" name="hh">
                            <div id="dynamic">
                           
                                 <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            <th>Roll</th>
                                            <th>Section</th>
                                            <th>Group</th>
                                            <th>Details</th>
                                            <th>Transfer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                       $array=array("school_id"=>$school); 
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr>
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?>
                                                </td>
                                                <td class="center"><?php echo $row->roll; ?></td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?></td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td class="center"><a href="st_profile_info.php?student_details=<?php echo $row->id;?>"><img src="images/contact_new.png" /></a></td>
                                                <td class="center">
                                                <a name="edit" href="transfar_c.php?transfer=yes&amp;roll_id=<?php echo $row->roll; ?>">
												<?php 
				$ex=$obj->exists_multiple("ams_transfer",array("roll_id"=>$row->roll));
				if($ex==0){
				 ?>Transfer<?php }else{ ?>Already Transfered<?php } ?></a>
                                                </td>
                                                
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                   
                                </table>
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
                                </ul>
                            </div>
                            </div>
                           <div class="clear"></div>
                            <!--tables code end here-->
</form>
                        </div>
                        
<div class="clear"></div>
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