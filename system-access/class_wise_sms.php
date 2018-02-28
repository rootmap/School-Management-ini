<?php
include_once('class/auth.php');
$tabl="ams_total_count";
$table="ams_admission";
$table1 = "ams_management_sms";
if (isset($_POST['save']))
 {
	 
	 if($balanceuser!=0)
	 {
		 $time=date('h:i:s a');
			$s=0;
		 	$f=0;
			$phone=array();
			foreach($_POST['number'] as $index=>$nn):
				$phone[]=$nn;
			endforeach;
			
			$gotnumber=implode(",",$phone);
			$numbers=str_replace(",","|88",$gotnumber);
			
			$count=count($_POST['number']);
			if($count!=0)
			{
				$ops->sms($numbers,$_POST['name'],$brand,$school);
				echo $obj->Success("SMS Sent Successfully","class_wise_sms.php?id=".$_POST['id']);	
			}
			else
			{
				echo $obj->Error("Sent SMS Failed","class_wise_sms.php?id=".$_POST['id']);	
			}
	 }
	 else
	 {
		$obj->Error("Insufficient Sms Quantity In Stock..",$obj->filename()."?id=".$_POST['id']); 
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

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" >Class / Course:</li>
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
                                 </ul>
                            <div style="clear:both !important;"></div>
                            <ul>  
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left" style="text-align:left;">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" >
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Select Shift</option>
                                        
                                    </select>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:center;">Group:</li>
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
                                <left>Select Send SMS Class / Course </left></h2>

                        </div>
                         <form action="" method="post" name="class_wish">
                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px; height:auto;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                              <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                <thead>
                                <th><input type="checkbox" value="None" id="checkAll" name="check_all" /></th>
                                <th>S/L</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Class / Course</th>
                                <th>Section</th>
                                <th>Group</th>
                                <th>Shift</th>
                                <th>Guardian Name</th>
                                <th>Contact Number</th>
                                </thead>
                                <tbody>
                                <?php
							extract($_GET);
                              $array=array("group_id"=>@$id);
                              $data=$obj->SelectAllByID($table,$array);
                              $r=1;
                              if(!empty($data))
                              foreach($data as $row):
                            
                            ?>
                                  <tr>
                                    <td class="center"><input type="checkbox" value="<?php echo $row->phone_number; ?>" name="number[]"  /></td>
                                    <td class="center"><?php echo $r;?></td>
                                    <td class="center"><?php echo $row->name;?></td>
                                    <td class="center"><?php echo $row->roll;?></td>
                                    <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                    <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                                    <td class="center"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                                    <td class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                    <td class="center"><?php echo $row->guardian_name;?></td>
                                    <td class="center"><?php echo $row->number;?>
                                  </tr>
                                   <?php $r++; endforeach; ?>
                                </tbody>
                              </table>
                            <div>
                          
                            
        <div class="menu_div" style="margin-top:40px; background:none; color:#09F;">
            
                <ul>
                    <li style="margin-left:10px;">
                     <a class="sa" style="" href='#'><span>Choose From SMS Book</span></a></li>

                </ul>
            
            <div class="margin_left10 b_radius5" style="margin-top:5px;">
                <div id="char_namb" class="left arial bold">
                    <span id="remaining">160 /</span> 
                    <span id="messages">1</span>
                </div>
                <textarea name="name" value="" id="message" class="smsbox" placeholder="Write Message Here……"></textarea>
                </div>
    
                <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold "></div>
    
                <button type="submit" style="margin:0px; margin-left:190px;" class="div_btn" name="save">Send SMS</button>
          
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