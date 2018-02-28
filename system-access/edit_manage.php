<?php
include_once('class/auth.php');
$table="ams_management_profile";
$w=80; $h=100; $thumb="photo/";
extract($_GET);
if(isset($_POST['update']))
{
	
 
        if(!empty($_FILES['image']['name']))
        {
        $files =$obj->image_bigcaption($w,$h,$thumb);
        $photo=substr($files,6,1600);
        }
        else 
        {
            $photo=$_POST['eximage'];
        }
	
        
        if($obj->update($table,array("group_id"=>$_POST['group'],
	"id_number"=>$_POST['id_number'],
	"joining_date"=>$_POST['date'],
	"name"=>$_POST['name'],
	"department_id"=>$_POST['department'],
	"category_id"=>$_POST['category'],
	"position_id"=>$_POST['position'],
	"job_id"=>$_POST['job'],
	"gender"=>$_POST['gender'],
	"m_status"=>$_POST['status'],
	"qualification"=>$_POST['qualification'],
	"experience_start"=>$_POST['year'],
	"experience_end"=>$_POST['month'],
	"experience_info"=>$_POST['experience'],
	"f_name"=>$_POST['f_name'],
	"m_name"=>$_POST['m_name'],
	"dob"=>$_POST['dob'],
	"blood_id"=>$_POST['group'],
	"marital_status"=>$_POST['mstatus'],
	"spouse_name"=>$_POST['spon'],
	"children"=>$_POST['children'],
	"nationality"=>$_POST['Nationality'],
	"religion"=>$_POST['religion'],
	"number"=>$_POST['number'],
	"state"=>$_POST['state'],
	"present_address"=>$_POST['p_address'],
	"permanent_address"=>$_POST['s_address'],
	"city"=>$_POST['city'],
	"zip_code"=>$_POST['code'],
	"countryr"=>$_POST['country'],
	"email"=>$_POST['email'],
	"photo"=>$photo))==1)
        {
			echo $obj->Success("Data Saved Successfully","mgt_list.php");	
		}
		else
		{
			echo $obj->Error("Data Saved Failed","mgt_list.php");	
		}
             
   
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function showscategory(str)
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
				
                xmlhttp.open("GET", "ajx/manage_group_t.php?t="+str, true);
                xmlhttp.send();
            }
</script>
        
         <style>
		#calendar,
		#calendar2,
		#calendar3 {
			border: 1px solid #909090;
			font-family: Tahoma;
			font-size: 12px;
		}
	</style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>


    </head>

    <body onload="doOnLoad();">
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
                        <div class="topbar_small_div_text2 left height-30"><h2>EDIT PROFILE INFORMATION</h2></div>
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
                    
                    <form action="" method="post" name="mngmt" enctype="multipart/form-data">
                        <div class="total_send_sms_div_top auto-position color_1 shadow_inner" style="color:rgba(0,51,51,1);">
                         <ul>
                                
                               <li class="add_st_form_div_label_view_details height-30 width-label-175 left" style="text-align:center; margin-left:10px;"><span style="color:rgba(153,0,0,1);">&lowast;</span>Select A Group Name:</li>
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10 left " style="margin-right:25px; margin-left:10px;">
                                    <!--<input placeholder="&nbsp;" name="name" class="textbox_exm"/>-->
                                    <select class="select_option" id="group" onchange="showscategory(this.value)" name="group" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"group_id"); ?>"><?php $group=$obj->SelectAllByVal($table,"id",$id,"group_id"); 
										echo $obj->SelectAllByVal("ams_management_group","id",$group,"name");
										?></option>
                                        <?php
										  $array=array("school_id"=>$school);
										  $group=$obj->SelectAllByID('ams_management_group',$array);
										  if(!empty($group))
										    foreach($group as $row):
										?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="text-align:center; margin-left:15px;"><span style="color:rgba(153,0,0,1);">&lowast;</span>ID Number :</li>
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10 left " style="margin-right:10px; margin-left:10px;">
                                    <input placeholder="ID number" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"id_number"); ?>" name="id_number" style="height:15px; width:120px; border-radius:7px; border:1px #CC0000 solid; padding:5px;" class=""/>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-130  left" style="text-align:center; margin-left:15px;"><span style="color:rgba(153,0,0,1);">&lowast;</span>Joining Date:</li> 
                                <li class="admission_form_div_label height-30 width-label-130 margin-top-10  left" style="margin-right:15px;">
                                    <input style="height:15px; width:120px; border-radius:7px; border:1px #CC0000 solid; padding:5px;" placeholder="&nbsp" readonly="readonly" id="calendar" name="date" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"joining_date"); ?>" class="textbox_exm"/>
                                </li>
                                
                           
                            </ul>
                    </div>
                            
                       
                        
                   
                                           
                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Personal Detail :</left></h2>
                        </div>
                        <div class="admission_form_div width-col2 auto-position auto-height" style="color:rgba(0,51,51,1);">

                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Student's Name Here" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"name"); ?>" name="name" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Information<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    
                                       <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"department_id"); ?>" placeholder="Type department Here" name="department" class="textbox"/>
                                        
                                   
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Category<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" id="category" name="category" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"category_id"); ?>"><?php $ct=$obj->SelectAllByVal($table,"id",$id,"category_id"); 
										echo $obj->SelectAllByVal("ams_category","id",$ct,"name");
										?></option>
                                        <!--<option value="Teacher">Teacher</option>
                                        <option value="Office Staff">Office Staff</option>
                                        <option value="Head Master">Security</option>
                                        <option value="Lab Assistant">Lab Assistant</option>
                                        <option value="System Admin">System Admin</option>
                                        <option value="Driver">Driver</option>
                                        <option value="Other's">Other's</option>-->

                                       
                                    </select>
                                    
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Position<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    
                                     <select class="hh_inpput" id="position" name="position" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"position_id"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"position_id"); ?></option>
                                        <option value="General">General</option>
                                        <option value="Principal">Principal</option>
                                        <option value="Head Master">Head Master</option>
                                        <option value="Manager">Manager</option>
                                        <option value="System Admin">System Admin</option>
                                        <option value="Other's">Other's</option>
                                       
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Job Title<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input class="textbox" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"job_id"); ?>" type="text" placeholder="Type your Job Title" name="job" >
                                        
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Gender<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="gender" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"gender"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"gender"); ?></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Status<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="status" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"m_status"); ?>" type="text" placeholder="Type Status Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Qualification<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input class="textbox" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"qualification"); ?>" type="text" placeholder="Type your Qualification" name="qualification" >
                                        
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Total Experience<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-70 left margin_left10">
                                    <select name="year" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"experience_start"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"experience_start"); ?></option>
                                        <?php 
                                           for($i=1; $i<=100; $i++){
										 ?>
                                         <option value="<?php echo $i;?> Years"><?php echo $i;?> Years</option>
                                         <?php 
										   }
										 ?>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-70 left margin_left10">
                                    <select name="month" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"experience_end"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"experience_end"); ?></option>
                                         <?php 
                                           for($i=1; $i<=12; $i++){
										 ?>
                                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php 
										   }
										 ?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Experience Info<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                     <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"experience_info"); ?>" name="experience" placeholder="Type Your Experience Info" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Father's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"f_name"); ?>" name="f_name" type="text" placeholder="Type Father's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Mother's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"m_name"); ?>" type="text" name="m_name" placeholder="Type Mother's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Date of Birth<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"dob"); ?>" id="calendar2" readonly="readonly" type="text" name="dob" placeholder="Type Date of Birth Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Blood Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                   <select class="hh_inpput" name="Language" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"blood_id"); ?>"><?php $ou=$obj->SelectAllByVal($table,"id",$id,"blood_id");  echo $obj->SelectAllByVal("ams_blood_group","id",$ou,"name"); ?></option>
                                          <?php 
                                           $data=$obj->SelectAll('ams_blood_group');
										    if(!empty($data))
											 foreach($data as $qual):
										 ?>
                                         <option value="<?php echo $qual->id;?>"><?php echo $qual->name;?></option>
                                         <?php 
										   endforeach;
										 ?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Marital Status<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                   <select class="hh_inpput" name="mstatus" >
                                        <option><?php $iu=$obj->SelectAllByVal($table,"id",$id,"marital_status");  echo $obj->SelectAllByVal("ams_marital","id",$iu,"name"); ?></option>
                                        <?php 
                                           $data=$obj->SelectAll('ams_marital');
										    if(!empty($data))
											 foreach($data as $qual):
										 ?>
                                         <option value="<?php echo $qual->id;?>"><?php echo $qual->name;?></option>
                                         <?php 
										   endforeach;
										 ?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Spouse Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="spon" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"spouse_name"); ?>" placeholder="Type Spouse Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>No of Children<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"children"); ?>" placeholder="Type No of Children Here" name="children" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Nationality<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="Nationality" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"nationality"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"nationality"); ?></option>
                                        <option value="Bangladeshi">Bangladesi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Religion<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="religion" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"religion"); ?>"><?php echo $obj->SelectAllByVal($table,"id",$id,"religion"); ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                 <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Mobile Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"number"); ?>" name="number" placeholder="Type Mobile Number Here" class="textbox"/>
                                </li>
                                 <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Present Address<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"present_address"); ?>" type="text" name="p_address" placeholder="Type Present Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Permanent Address<span class="right">:</span></li>
                                 <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $obj->SelectAllByVal($table,"id",$id,"permanent_address"); ?>" name="s_address" type="text" placeholder="Type Permanent Address Here" class="textbox"/>
                                </li>
                                                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Division / State<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="state" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"state"); ?>"><?php $rrr=$obj->SelectAllByVal($table,"id",$id,"state");  echo $obj->SelectAllByVal("ams_division","id",$rrr,"name"); ?></option>
                                        <?php 
										 $state=$obj->SelectAll('ams_division');
										 if(!empty($state))
										 foreach($state as $stt):
										 ?>
                                        <option value="<?php echo $stt->id; ?>"><?php echo $stt->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>District / City<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="city" >
                                        <option value="<?php echo $obj->SelectAllByVal($table,"id",$id,"city"); ?>"><?php $rrr=$obj->SelectAllByVal($table,"id",$id,"city");  echo $obj->SelectAllByVal("district","id",$rrr,"name"); ?></option>
                                        <?php 
										 $city=$obj->SelectAll('district');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Thana / Zip code<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <!--<input class="textbox" placeholder="Thana / Zip code" type="text" name="code" >-->
                                    <select class="hh_inpput" name="code" >
                                        <option>District / City</option>
                                        <?php 
										 $city=$obj->SelectAll('thana');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"><span style="color:rgba(153,0,0,1);">&lowast;</span>Country<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="country" >
                                        <option>Country</option>
                                       <option value="Bangladesh">Bangladesh</option>
                                        <option value="Bahasa Melayu (Malaysia)">Bahasa Melayu (Malaysia)</option>
                                        <option value="čeština (Česká republika)">čeština (Česká republika)</option>
                                        <option value="dansk (Danmark)">dansk (Danmark)</option>
                                        <option value="Deutsch (Deutschland)">Deutsch (Deutschland)</option>
                                        <option value="Deutsch (Österreich)">Deutsch (Österreich)</option>
                                        <option value="eesti (Eesti)">eesti (Eesti)</option>
                                        <option value="English (Australia)">English (Australia)</option>
                                        <option value="English (Canada)">English (Canada)</option>
                                        <option value="English (India)">English (India)</option>
                                        <option value="English (Ireland)">English (Ireland)</option>
                                        <option value="English (Maktoob)">English (Maktoob)</option>
                                        <option value="English (Malaysia)">English (Malaysia)</option>
                                        <option value="English (New Zealand)">English (New Zealand)</option>
                                        <option value="English (Philippines)">English (Philippines)</option>
                                        <option value="English (Singapore)">English (Singapore)</option>
                                        <option value="English (South Africa)">English (South Africa)</option>
                                        <option value="English (United Kingdom)">English (United Kingdom)</option>
                                        <option value="English (United States)">English (United States)</option>
                                        <option value="español (Argentina)">español (Argentina)</option>
                                        <option value="español (Chile)">español (Chile)</option>
                                        <option value="español (Chile)">español (Colombia)</option>
                                        <option value="español (España)">español (España)</option>
                                        <option value="español (Estados Unidos)">español (Estados Unidos)</option>
                                        <option value="español (México)">español (México)</option>
                                        <option value="español (Perú)">español (Perú)</option>
                                        <option value="español (Venezuela)">español (Venezuela)</option>
                                        <option value="Filipino (Pilipinas)">Filipino (Pilipinas)</option>
                                        <option value="français (Belgique)">français (Belgique)</option>
                                        <option value="français (Canada)">français (Canada)</option>
                                        <option value="français (France)">français (France)</option>
                                        <option value="hrvatski (Hrvatska)">hrvatski (Hrvatska)</option>
                                        <option value="italiano (Italia)">italiano (Italia)</option>
                                        <option value="latviešu (Latvija)">latviešu (Latvija)</option>
                                        <option value="lietuvių (Lietuva)">lietuvių (Lietuva)</option>
                                        <option value="magyar (Magyarország)">magyar (Magyarország)</option>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Email<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input type="text" name="email" placeholder="Type Email Id Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> <span style="color:rgba(153,0,0,1);">&lowast;</span>Image's<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="image" class="textbox" type="file"/>
                                    <input name="eximage" class="textbox" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"photo"); ?>" type="hidden"/>
                                </li>
                                
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="add_prof_info_mgt_group_page2.php" style="text-decoration:none">
                                    <button type="submit" name="update" class=" height-35 div_btn">Submitt</button>
                                    </a>
                                </li>

                            </ul>
                            

                        </div>
                        

                    </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
                            
                         </div>
                        

                    </div>
</form>


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