<?php
include_once('class/auth.php');
$table="ams_admission";
extract($_GET);
if (isset($_POST['save']))
 {
	 
    foreach($_POST['admission'] as $index=>$nn):
			if($obj->exists_multiple($table,array("admission"=>$nn,"class_id"=>$_POST['class'],"name"=>$_POST['name'],"guardian_name"=>$_POST['guardian'][$index],"number"=>$_POST['number'][$index],"school_id"=>$school))==0)
			{
        	$obj->insert($table,array("admission"=>$nn,"class_id"=>$_POST['class'],"name"=>$_POST['name'],"guardian_name"=>$_POST['guardian'][$index],"number"=>$_POST['number'][$index],"date"=>date('Y-m-d'),"status"=>1,"school_id"=>$school));
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
				
                xmlhttp.open("GET", "ajx/abotun.php?s="+str, true);
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
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/sms_student_class_wishe.php?k=" + str+"&group="+group, true);
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
                        <div class="topbar_small_div left">
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>SEND SMS CLASS</h3></div>
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
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" >Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" name="session" id="session" onchange="showclass(this.value)" >
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

                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" >Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" style="text-align:center;">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" style="text-align:center;">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Select Shift</option>
                                        
                                    </select>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-70 left" style="text-align:center;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" name="group" id="group" onchange="showee(this.value)" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                                
                                </ul>
                                
                            
                            <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
   <button type="submit" name="submit" class="height-35 div_btn" onclick="showallstd('3')">Show Class / Course</button>
                               
                            </li>
                        </ul>
                        
                    </div>
                            
                       
                        
                    </div>

                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>Select Send SMS Class / Course</left></h2>

                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px; height:auto;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                                   
                                                
                            
                            
                            <form action="" method="post" name="class_wish"> 
                            <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                            <thead>
                            <tr>
                                <th>
                                
                                <input type="checkbox" value="None" id="checkAll" name="check_all" /></th>
                                <th>S/L</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Class / Course</th>
                                <th>Section</th>
                                <th>Group</th>
                                <th>Shift</th>
                                <th>Guardian Name</th>
                                <th>Contact Number</th>
                                
                            </tr>
                            </thead>
                            <?php
                              $array=array("group_id"=>$iiiii);
                              $data=$obj->SelectAllByID($table,$array);
                              $r=1;
                              if(!empty($data))
                              foreach($data as $row)
                            
                            {        ?>
                            
                            <tbody>
                            
                            
                            <tr class="" style="font-weight:500;">
                                    <td class="shadow_inner" style="background:#b40909;">
                                    <input type="checkbox" value="<?php echo $row->admition;?>" name="admission[]"  /></td>
                                    <td class="center" style="background:#f6baa0;"><?php echo $r;?></td>
                                     <td class="center" style="background:#d4f7f2;"><?php echo $row->name;?></td>
                                     <td class="center" style="background:#f6baa0;"><?php echo $row->roll;?></td>
                                    <td style="background:#d4f7f2;">
                                    <input type="hidden" value="<?php echo $row->class_id;?>" name="class" />
                                    <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>
                                    </td>
                                    <td class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                                    <td style="background:#d4f7f2;"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                                    <td class="center" style="background:#f6baa0;"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                    
                                    
                                    <td style="background:#d4f7f2;" class="center">
                                     <input type="hidden" value="<?php echo $row->guardian_name;?>" name="guardian[]" />
                                    <?php echo $row->guardian_name;?>
                                    </td>
                                    <td class="center" style="background:#f6baa0;">
                                    <?php echo $row->phone_number;?>
                                    <input type="hidden" value="<?php echo $row->phone_number;?>" name="number[]" />
                                    </td>
                                    
                            
                            </tr>
                            
                                                                 
                            </tbody>
                            <?php $r++; } ?>
                            </table>
                            
                            
                            <div>
                                                        <div class="menu_div" style="margin-top:40px; background:none; color:#09F;">
                                                            
                                                                <ul>
                                                                    <li>
                                                                     <a class="sa" style="" href='#'><span>Choose From SMS Book</span></a></li>
                            
                                                                </ul>
                                                            
                                                            <div class="margin_left10 margin-top-15 b_radius5">
                                                                <textarea name="name" type="text" placeholder="Write SMS Here" style="width:300px; height:100px; border-radius:5px;"></textarea>
                                                            </div>
                            
                                                            <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold ">
                                                                <h3 class="left arial font-color-dark-red margin_right10" style="line-height:40px;">&lowast;Characters Left</h3>
                                                                <input type="button" value="160" placeholder="" class="left arial bold"  style="width:50px; height:40px; border-radius:5px;">
                                                            </div>
                            
                                                            
                                                                    
                                                                       <button type="submit" style="margin:0px; margin-left:10px;" class="div_btn" name="save">Send</button>
                                                          
                                                        </div> 
                              </form>
                           
                           
                                                        

                                </div>
                                <div class="spacer"></div>
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
       

    </body>
</html>