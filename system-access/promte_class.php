<?php
include_once('class/auth.php');
$table="ams_admission";
$table2="ams_student_login";
extract($_GET);
if(isset($_POST['promote']))
{
    

    extract($_POST);
        foreach($_POST['id'] as $index=>$nn):
			
			{
		    $array=array("admition"=>$nn,"name"=>$name[$index],"session_id"=>$session1,"roll"=>$roll[$index],"class_id"=>$class1,"group_id"=>$group1,"school_id"=>$school,"shift_id"=>$shift1,"section_id"=>$section1,"blood_group"=>$blood_group[$index],"dob"=>$dob[$index],"gender"=>$gender[$index],"nationality"=>$nationality[$index],"religion"=>$religion[$index],"language"=>$language[$index],"mother_name"=>$mother_name[$index],"father_name"=>$father_name[$index],"guardian_name"=>$guardian_name[$index],"occupation"=>$occupation[$index],"income"=>$income[$index],"number"=>$number[$index],"serial_number"=>$serial_number[$index],"present_address"=>$present_address[$index],"permanent_address"=>$permanent_address[$index],"state"=>$state[$index],"city"=>$city[$index],"zip_code"=>$zip_code[$index],"countryr"=>$countryr[$index],"phone_number"=>$phone_number[$index],"email"=>$email[$index],"photo"=>$photo[$index],"date"=>date('Y-m-d'),"status"=>1);
        	
			//$insert=array("id"=>$nn,"status"=>55);
			
            $obj->insert($table,$array);
			
			$obj->update($table2,$array);
			}
			
        endforeach;
		
		
    
   $count=count($_POST['id']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )","student_promote.php");	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )","student_promote.php");	
		} 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
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
                        <div class="topbar_small_div_text2 left height-30"><h2>PROMOTE TO NEXT CLASS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                           <?php include('includes/back.php'); ?>

                        </ul>
                        
                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>

                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both;" id="dynamic">
                 
    
   <form action="" method="post" name="promot">
   
   <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" id="session" onchange="showclass(this.value)" name="session1">
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
                                    <select class="select_option" id="group" name="group1" onchange="showee(this.value)">
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                                
                               <!-- <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">      
                                    <button type="submit" name="login" onclick="showallstd('5')" class=" height-35 div_btn">Create View</button>
                                   
                                </li>-->
                            
                        </ul>
                    </div>
                                           
                    <div class="admission_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Promote Class / Course :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position color_1 shadow_inner" style="padding:10px;">
                       <!--tables code start from here-->
                           <div id="">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                          <th rowspan="2"><input type="checkbox" value="None" id="checkAll" name="check_all" /> All</th>
                                          <th rowspan="2">S/L</th>
                                          <th rowspan="2">Student's Name</th>
                                          <th colspan="2">Roll</th>
                                          <th rowspan="2">Class / Course</th>
                                          
                                          <th rowspan="2">Section</th>
                                          <th rowspan="2">Shift</th>
                                          <th rowspan="2">Group</th>
                                        </tr>
                                        <tr>
                                          <th>Old</th>
                                            <th>New</th>
                                        </tr>
                                    </thead>
                                    <tbody>
							 <?php
                                  $array=array("group_id"=>$id,"school_id"=>$school);
                                  $data=$obj->SelectAllByID_multiple($table,$array);
                                  $x=1;
                                  if(!empty($data))
                                  foreach($data as $row)
                            
                            {        ?>

   <tr class="">
                                <td class="center">
                                <input type="checkbox" value="<?php echo $row->admition;?>" name="id[]"/>
                                 
                                 </td>
                                 
                                 <td class="center">
                                 <?php echo $x; ?>
                                 </td>
                                 
                                <td class="center">
								
								<?php echo $row->name; ?></td>
                                
                             
                                <td class="center">
                                 <input type="hidden" name="name[]" value="<?php echo $row->name;?>" />
                                 <input type="hidden" name="dob[]" value="<?php echo $row->dob;?>" />
                                 <input type="hidden" name="blood_group[]" value="<?php echo $row->blood_group;?>" />
                                 <input type="hidden" name="gender[]" value="<?php echo $row->gender;?>" />
                                 <input type="hidden" name="nationality[]" value="<?php echo $row->nationality;?>" />
                                 <input type="hidden" name="religion[]" value="<?php echo $row->religion;?>" />
                                 <input type="hidden" name="language[]" value="<?php echo $row->language;?>" />
                                 <input type="hidden" name="mother_name[]" value="<?php echo $row->mother_name;?>" />
                                 <input type="hidden" name="father_name[]" value="<?php echo $row->father_name;?>" />
                                 <input type="hidden" name="guardian_name[]" value="<?php echo $row->guardian_name;?>" />
                                 <input type="hidden" name="occupation[]" value="<?php echo $row->occupation;?>" />
                                 <input type="hidden" name="income[]" value="<?php echo $row->income;?>" />
                                 <input type="hidden" name="number[]" value="<?php echo $row->number;?>" />
                                 <input type="hidden" name="serial_number[]" value="<?php echo $row->serial_number;?>" />
                                 <input type="hidden" name="present_address[]" value="<?php echo $row->present_address;?>" />
                                 <input type="hidden" name="permanent_address[]" value="<?php echo $row->permanent_address;?>" />
                                 <input type="hidden" name="state[]" value="<?php echo $row->state;?>" />
                                 <input type="hidden" name="city[]" value="<?php echo $row->city;?>" />
                                 <input type="hidden" name="zip_code[]" value="<?php echo $row->zip_code;?>" />
                                 <input type="hidden" name="countryr[]" value="<?php echo $row->countryr;?>" />
                                 <input type="hidden" name="phone_number[]" value="<?php echo $row->phone_number;?>" />
                                 <input type="hidden" name="email[]" value="<?php echo $row->email;?>" />
                                 <input type="hidden" name="photo[]" value="<?php echo $row->photo;?>" />
								<?php echo $row->roll; ?>
                                </td>
                                
                                <td class="center">
                                <input style="height:20px;width:70px; text-align:center;" type="text" name="roll[]" placeholder="new roll"/>
                                </td>
                       
                                
                                <td class="center">
                                
								<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                </td>
                                
                                
                                
                                <td class="center">
                                
								<?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?>
                                </td>
                                
                                <td class="center">
                                
								<?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?>
                                </td>
                                
                                <td class="center">
                                
								<?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?>
                                </td>
                                        </tr>
                                        <?php 
                                       $x++;
}
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            <ul>
                                	<li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="promote" class=" height-35 div_btn">Promote</button>
                                    </a>
                                </li>
                        </ul>
                                
                            </div>
                            
							
                            <div class="clear"></div>
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
                        </div>
                        

                    



                </div>
   

                               
</form>
          
   
                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('class/footer.php'); ?>
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