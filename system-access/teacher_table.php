<?php
include_once('class/auth.php');
$table="ams_time_table_teacher";
extract($_POST);
if(isset($_POST['save']))
{
    if($obj->exists_multiple($table,array("session_id"=>$session,
		"class_id"=>$class,
		"section_id"=>$section,
		"shift_id"=>$shift,
		"group_id"=>$group,"school_id"=>$school))==0)
    {
       
        if($obj->insert($table,array(
		"time1"=>$time1,
		"time2"=>$time2,
		"time3"=>$time3,
		"time4"=>$time4,
		"time5"=>$time5,
		"time6"=>$time6,
		"time7"=>$time7,
		"time8"=>$time8,
		"subject1"=>$subject1,
		"subject2"=>$subject2,
		"subject3"=>$subject3,
		"subject4"=>$subject4,
		"subject5"=>$subject5,
		"subject6"=>$subject6,
		"subject7"=>$subject7,
		"subject8"=>$subject8,
		"subject9"=>$subject9,
		"subject10"=>$subject10,
		"subject11"=>$subject11,
		"subject12"=>$subject12,
		"subject13"=>$subject13,
		"subject14"=>$subject14,
		"subject15"=>$subject15,
		"subject16"=>$subject16,
		"subject17"=>$subject17,
		"subject18"=>$subject18,
		"subject19"=>$subject19,
		"subject20"=>$subject20,
		"subject21"=>$subject21,
		"subject22"=>$subject22,
		"subject23"=>$subject23,
		"subject24"=>$subject24,
		"subject25"=>$subject25,
		"subject26"=>$subject26,
		"subject27"=>$subject27,
		"subject28"=>$subject28,
		"subject29"=>$subject29,
		"subject30"=>$subject30,
		"subject31"=>$subject31,
		"subject32"=>$subject32,
		"subject33"=>$subject33,
		"subject34"=>$subject34,
		"subject35"=>$subject35,
		"subject36"=>$subject36,
		"subject37"=>$subject37,
		"subject38"=>$subject38,
		"subject39"=>$subject39,
		"subject40"=>$subject40,
		"subject41"=>$subject42,
		"subject42"=>$subject42,
		"subject6a"=>$subject6a,
		"subject6b"=>$subject6b,
		"subject6c"=>$subject6c,
		"subject6d"=>$subject6d,
		"subject6e"=>$subject6e,
		"subject6f"=>$subject6f,
		"subject6g"=>$subject6g,
		"teacher1"=>$teacher1,
		"teacher2"=>$teacher2,
		"teacher3"=>$teacher3,
		"teacher4"=>$teacher4,
		"teacher5"=>$teacher5,"teacher6"=>$teacher6,"teacher7"=>$teacher7,"teacher8"=>$teacher8,"teacher9"=>$teacher9,"teacher10"=>$teacher10,"teacher11"=>$teacher11,"teacher12"=>$teacher12,"teacher13"=>$teacher13,"teacher14"=>$teacher14,"teacher15"=>$teacher15,"teacher16"=>$teacher16,"teacher17"=>$teacher17,"teacher18"=>$teacher18,"teacher19"=>$teacher19,"teacher20"=>$teacher20,"teacher21"=>$teacher21,"teacher22"=>$teacher22,"teacher23"=>$teacher23,"teacher24"=>$teacher24,"teacher25"=>$teacher25,"teacher26"=>$teacher26,"teacher27"=>$teacher27,"teacher28"=>$teacher28,"teacher29"=>$teacher29,"teacher30"=>$teacher30,"teacher31"=>$teacher31,"teacher32"=>$teacher32,"teacher33"=>$teacher33,"teacher34"=>$teacher34,"teacher35"=>$teacher35,"teacher36"=>$teacher36,"teacher37"=>$teacher37,"teacher38"=>$teacher38,"teacher39"=>$teacher39,"teacher40"=>$teacher40,"teacher41"=>$teacher41,"teacher42"=>$teacher42,"teacher6a"=>$teacher6a,"teacher6b"=>$teacher6b,"teacher6c"=>$teacher6c,"teacher6d"=>$teacher6d,"teacher6e"=>$teacher6e,"teacher6f"=>$teacher6f,"teacher6g"=>$teacher6g,"tffin"=>$tiffin,"day1"=>$day1,"day2"=>$day2,"day3"=>$day3,"day4"=>$day4,"day5"=>$day5,"day6"=>$day6,"day7"=>$day7,"session_id"=>$session,"class_id"=>$class,"section_id"=>$section,"shift_id"=>$shift,"group_id"=>$group,"category_id"=>$category,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
	
	{
		echo $obj->Success("Time Table Saved Successfully",$obj->filename());
	}
	else
	{
		echo $obj->Error("Time Table Saved Failed",$obj->filename());	
	}
	}
	else
	{
		$t_id=$obj->SelectAllByVal2($table,"group_id",$group,"school_id",$school,"id");
	    
		if($obj->update($table,array("id"=>$t_id,"time1"=>$time1,"time2"=>$time2,"time3"=>$time3,"time4"=>$time4,"time5"=>$time5,"time6"=>$time6,"time7"=>$time7,"time8"=>$time8,"subject1"=>$subject1,"subject2"=>$subject2,"subject3"=>$subject3,"subject4"=>$subject4,"subject5"=>$subject5,"subject6"=>$subject6,"subject7"=>$subject7,"subject8"=>$subject8,"subject9"=>$subject9,"subject10"=>$subject10,"subject11"=>$subject11,"subject12"=>$subject12,"subject13"=>$subject13,"subject14"=>$subject14,"subject15"=>$subject15,"subject16"=>$subject16,"subject17"=>$subject17,"subject18"=>$subject18,"subject19"=>$subject19,"subject20"=>$subject20,"subject21"=>$subject21,"subject22"=>$subject22,"subject23"=>$subject23,"subject24"=>$subject24,"subject25"=>$subject25,"subject26"=>$subject26,"subject27"=>$subject27,"subject28"=>$subject28,"subject29"=>$subject29,"subject30"=>$subject30,"subject31"=>$subject31,"subject32"=>$subject32,"subject33"=>$subject33,"subject34"=>$subject34,"subject35"=>$subject35,"subject36"=>$subject36,"subject37"=>$subject37,"subject38"=>$subject38,"subject39"=>$subject39,"subject40"=>$subject40,"subject41"=>$subject42,"subject42"=>$subject42,"subject6a"=>$subject6a,"subject6b"=>$subject6b,"subject6c"=>$subject6c,"subject6d"=>$subject6d,"subject6e"=>$subject6e,"subject6f"=>$subject6f,"subject6g"=>$subject6g,"teacher1"=>$teacher1,"teacher2"=>$teacher2,"teacher3"=>$teacher3,"teacher4"=>$teacher4,"teacher5"=>$teacher5,"teacher6"=>$teacher6,"teacher7"=>$teacher7,"teacher8"=>$teacher8,"teacher9"=>$teacher9,"teacher10"=>$teacher10,"teacher11"=>$teacher11,"teacher12"=>$teacher12,"teacher13"=>$teacher13,"teacher14"=>$teacher14,"teacher15"=>$teacher15,"teacher16"=>$teacher16,"teacher17"=>$teacher17,"teacher18"=>$teacher18,"teacher19"=>$teacher19,"teacher20"=>$teacher20,"teacher21"=>$teacher21,"teacher22"=>$teacher22,"teacher23"=>$teacher23,"teacher24"=>$teacher24,"teacher25"=>$teacher25,"teacher26"=>$teacher26,"teacher27"=>$teacher27,"teacher28"=>$teacher28,"teacher29"=>$teacher29,"teacher30"=>$teacher30,"teacher31"=>$teacher31,"teacher32"=>$teacher32,"teacher33"=>$teacher33,"teacher34"=>$teacher34,"teacher35"=>$teacher35,"teacher36"=>$teacher36,"teacher37"=>$teacher37,"teacher38"=>$teacher38,"teacher39"=>$teacher39,"teacher40"=>$teacher40,"teacher41"=>$teacher41,"teacher42"=>$teacher42,"teacher6a"=>$teacher6a,"teacher6b"=>$teacher6b,"teacher6c"=>$teacher6c,"teacher6d"=>$teacher6d,"teacher6e"=>$teacher6e,"teacher6f"=>$teacher6f,"teacher6g"=>$teacher6g,"tffin"=>$tiffin,"day1"=>$day1,"day2"=>$day2,"day3"=>$day3,"day4"=>$day4,"day5"=>$day5,"day6"=>$day6,"day7"=>$day7,"session_id"=>$session,"class_id"=>$class,"section_id"=>$section,"shift_id"=>$shift,"group_id"=>$group,"category_id"=>$category,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
		echo $obj->Success("Time Table Update Successfully ".$t_id,$obj->filename());
	}
	else
	{
		echo $obj->Error("Time Table Update Failed".$t_id ,$obj->filename());	
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
            function showcategory(str)
            {
                if (str == "")
                {
                    document.getElementById("ttt").innerHTML = "";
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
                        document.getElementById("ttt").innerHTML = xmlhttp.responseText;
                    }
                }
				if(str == "1")
				{
                xmlhttp.open("GET", "ajx/dising.php?q=" + str, true);
                xmlhttp.send();
				}
				else if(str == "2")
				{
                xmlhttp.open("GET", "ajx/dising1.php?d=" + str, true);
                xmlhttp.send();
				}
				else if(str == "3")
				{
                xmlhttp.open("GET", "ajx/dising2.php?u=" + str, true);
                xmlhttp.send();
				}
				else if(str == "4")
				{
                xmlhttp.open("GET", "ajx/dising3.php?o=" + str, true);
                xmlhttp.send();
				}
            }
        </script>
     <style>
       input{text-align:center;width:120px; height:25px;}
	   table{text-align:center; color:rgba(255,255,255,1);}
	   table tr td{padding:8px;}
     </style>  
       
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
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TEACHER TIME TABLE</h2></div>
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
                    <form action="" method="post" name="table">
                      <div class="admission_div_top shadow_inner" style="padding-bottom:70px; padding-left:10px; height:60px;">
                     
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
                            <li class="add_st_form_div_label_view_details height-30 width-label-60 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                             
                          <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Design :</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                           <select class="select_option" name="category" id="category" onchange="showcategory(this.value)" >
                                       <option>Select Design</option>
                                        <?php 
										  $data=$obj->SelectAll("ams_time_table_category");
										  if(!empty($data))
										  foreach($data as $desing):
										 ?>
                                        <option value="<?php echo $desing->id; ?>"><?php echo $desing->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                             
                           
                        </ul>
                    </div>
                                           
                    <div class="admission_div_page shadow_inner color_1" style="margin-top: 20px;">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Weekly Class / Course Time and Day Setting :</left></h2>
                        </div>
                        <div id="ttt" class="admission_form_div width-col5 auto-position" style="overflow:auto;">
                       
                          <!--<table  width="100%" cellspacing="1" >
                             <tr style="background:rgba(204,102,51,1)">
                               <td>Time & Day</td>
                               <td><input name="time1" placeholder="time"  /></td>
                               <td><input name="time2" placeholder="time"  /></td>
                               <td><input name="time3" placeholder="time"  /></td>
                               <td><input name="time4" placeholder="time"  /></td>
                               <td><input name="time5" placeholder="time"  /></td>
                               <td><input name="time6" placeholder="time"  /></td>
                               <td><input name="time7" placeholder="time"  /></td>
                             </tr>
                              <tr >
                               <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day1" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject1" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject2" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject3" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)" rowspan="12"><input name="tiffin" placeholder="TIFFIN"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject4" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject5" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher1" placeholder="Teacher"  /></td>
                               <td><input name="teacher2" placeholder="Teacher"  /></td>
                               <td><input name="teacher3" placeholder="Teacher"  /></td>
                               <td><input name="teacher4" placeholder="Teacher"  /></td>
                               <td><input name="teacher5" placeholder="Teacher"  /></td>
                               <td><input name="teacher6" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day2" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject7" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject8" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject9" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject10" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject11" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject12" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher7" placeholder="Teacher"  /></td>
                               <td><input name="teacher8" placeholder="Teacher"  /></td>
                               <td><input name="teacher9" placeholder="Teacher"  /></td>
                               <td><input name="teacher10" placeholder="Teacher"  /></td>
                               <td><input name="teacher11" placeholder="Teacher" /></td>
                               <td><input name="teacher12" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day3" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject13" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject14" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject15" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject16" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject17" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject18" placeholder="subject" /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher13" placeholder="Teacher"  /></td>
                               <td><input name="teacher14" placeholder="Teacher" /></td>
                               <td><input name="teacher15" placeholder="Teacher" /></td>
                               <td><input name="teacher16" placeholder="Teacher" /></td>
                               <td><input name="teacher17" placeholder="Teacher" /></td>
                               <td><input name="teacher18" placeholder="Teacher" /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day4" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject19" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject20" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject21" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject22" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject23" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject24" placeholder="subject" /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher19" placeholder="Teacher"  /></td>
                               <td><input name="teacher20" placeholder="Teacher"  /></td>
                               <td><input name="teacher21" placeholder="Teacher" /></td>
                               <td><input name="teacher22" placeholder="Teacher" /></td>
                               <td><input name="teacher23" placeholder="Teacher" /></td>
                               <td><input name="teacher24" placeholder="Teacher" /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day5" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject25" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject26" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject27" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject28" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject29" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject30" placeholder="subject" /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher25" placeholder="Teacher" /></td>
                               <td><input name="teacher26" placeholder="Teacher" /></td>
                               <td><input name="teacher27" placeholder="Teacher" /></td>
                               <td><input name="teacher28" placeholder="Teacher" /></td>
                               <td><input name="teacher29" placeholder="Teacher" /></td>
                               <td><input name="teacher30" placeholder="Teacher" /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day6" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject31" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject32" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject33" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject34" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject35" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject36" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher31" placeholder="Teacher" /></td>
                               <td><input name="teacher32" placeholder="Teacher" /></td>
                               <td><input name="teacher33" placeholder="Teacher" /></td>
                               <td><input name="teacher34" placeholder="Teacher" /></td>
                               <td><input name="teacher35" placeholder="Teacher" /></td>
                               <td><input name="teacher36" placeholder="Teacher" /></td>
                             </tr>
                          </table>-->
                           
                           
                            <div class="clear"></div>
                       
                            
                        </div>
                         <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="save" class="height-35 div_btn" >SUBMIT</button>
                                    </a>
                                </li>
                        </div>
     </form>                  

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