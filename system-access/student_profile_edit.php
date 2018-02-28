<?php
include_once('class/auth.php');
$table="ams_admission";

$w=80; $h=100; $thumb="photo/";
if(isset($_POST['update']))

{
	if(!empty($_FILES['image']['name']))
        {
			$files =$obj->image_bigcaption($w,$h,$thumb);
			$photo=substr($files,6,1600);
        }
		else 
        {
            $photo=$_POST['exphoto'];
        }
	 
	{
	
	if($obj->Update($table,array("id"=>$_POST['id'],"name"=>$_POST['name'],"class_id"=>$_POST['class'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"session_id"=>$_POST['session'],"shift_id"=>$_POST['shift'],"group_id"=>$_POST['group'],"dob"=>$_POST['dob'],"blood_group"=>$_POST['blood_group'],"gender"=>$_POST['gender'],"nationality"=>$_POST['nationality'],"religion"=>$_POST['religion'],"language"=>$_POST['language'],"mother_name"=>$_POST['m_name'],"father_name"=>$_POST['f_name'],"guardian_name"=>$_POST['g_name'],"occupation"=>$_POST['occupation'],"income"=>$_POST['income'],"number"=>$_POST['number'],"serial_number"=>$_POST['serial'],"present_address"=>$_POST['ps_address'],"permanent_address"=>$_POST['pr_address'],"state"=>$_POST['state'],"city"=>$_POST['city'],"zip_code"=>$_POST['code'],"countryr"=>$_POST['country'],"phone_number"=>$_POST['p_number'],"email"=>$_POST['email'],"photo"=>$photo))==1)
	{
		echo $obj->Success("Data Saved Successfully( ".$count." )","st_profile_info.php?student_details=".$_POST['id']);
	}
	else
	{
		echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename()."?student_id=".$_POST['id']."&eiinnumber=".$school);	
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
						//show group
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
							{
								document.getElementById("group").innerHTML = xmlhttps.responseText;
							}
						}
						xmlhttps.open("GET", "ajx/group1.php?s=" + str, true);
						xmlhttps.send();
						//show group
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
        <div id="body_container ">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left ">
                            <img src="images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">Edit</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Edit Student Profile</h2></div>
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
                   <?php 
				      extract($_GET);
					  $array=array("id"=>$student_id,"school_id"=>$eiinnumber);
					  $data=$obj->SelectAllByID_Multiple($table,$array);
					  if(!empty($data))
					  foreach ($data as $row):
				   ?>
                    <div class="admission_div_top shadow_inner">
                    
                      <form action="" method="post" name="adm" enctype="multipart/form-data">
                        <ul>
                            <li class="add_st_form_div_label height-30 width-label-250 left margin-top-10 margin_bottom10 margin_left10"> &lowast;Admission Serial Number<span class="right">:</span></li>
                            
                            <li class="add_st_form_div_label height-30 width-label-200 left margin-top-10 margin_bottom10">
                    <input name="admition" type="text" placeholder="Type Serial Number Here" readonly="readonly" value="<?php echo $row->admition; ?>"  class="textbox" />
                            </li>

                            <li class="add_st_form_div_label height-30 width-label-200 right margin-top-10 margin_bottom10">
                                <input type="date" readonly="readonly" size="12" id="calendar" value="<?php $dd=date('D-M-Y'); { echo"$dd"; } ?>" placeholder="Type Admission Date Here" class="textbox"/>
                            </li>
                            <li class="add_st_form_div_label height-30 width-label-150 right margin-top-10 margin_bottom10"> &lowast;Admission Date<span class="right">:</span></li>
                        </ul>
                    </div>


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Edit Student Profile :</left></h2>
                        </div>
                       
                        <div class="admission_form_div width-col2 auto-position">
                        

                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Student Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="name" value="<?php echo $row->name; ?>" placeholder="Type Student's Name Here" class="textbox"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>" />
                                </li>
                                
                               <input type="hidden" name="school" value="<?php echo $school; ?>" />
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Session<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="session" class="hh_inpput" name="session" onchange="showcls(this.value)" >
                                        <option value="<?php echo $row->session_id; ?>"><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?></option>
                                         <?php
										 $array=array("school_id"=>$school);
										 $sec=$obj->SelectAllByID('ams_session',$array);
										 if(!empty($sec))
										 foreach($sec as $sc):
										 ?>
                                        <option value="<?php echo $sc->id; ?>"><?php echo $sc->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Class / Course<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                     <select name="class" id="class" onchange="showsection(this.value)" class="hh_inpput" >
                                        <option value="<?php echo $row->class_id; ?>"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></option>
                                       
                                        
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="group" id="group" class="hh_inpput">
                                        <option value="<?php echo $row->group_id; ?>"><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?></option>
                                          
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Section<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                     <select name="section" id="section" onchange="showshift(this.value)" class="hh_inpput">
                                        <option value="<?php echo $row->section_id; ?>"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?></option>
                                          
                                    </select>
                                </li>
                                
                                 
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Shift<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                  <select name="shift" id="shift" class="hh_inpput">
                                      <option value="<?php echo $row->shift_id; ?>"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?></option>
                                        
                                    </select>
                                </li>
                                
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Roll<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="roll" value="<?php echo $row->roll; ?>" placeholder="Type Roll Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Date of Birth<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input id="calendar2" name="dob" value="<?php echo $row->dob; ?>" placeholder="Type Date of Birth Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Blood Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="blood_group" class="hh_inpput" >
                                        <option value="<?php echo $row->blood_group; ?>"><?php echo $obj->SelectAllByVal("ams_blood_group","id",$row->blood_group,"name"); ?></option>
                                        <?php 
										 $blood=$obj->SelectAll('ams_blood_group');
										 if(!empty($blood))
										 foreach($blood as $bld):
										 ?>
                                        <option value="<?php echo $bld->id; ?>"><?php echo $bld->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Gender<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="gender" class="hh_inpput" >
                                        <option value="<?php echo $row->gender; ?>"><?php echo $row->gender; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Nationality<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="nationality" class="hh_inpput">
                                        <option value="<?php echo $row->nationality; ?>">
										<?php echo $row->nationality; ?></option>
                                        <option value="Bangladeshi">Bangladesi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Religion<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="religion" class="hh_inpput" >
                                        <option value="<?php echo $row->religion; ?>"><?php echo $row->religion; ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Language<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="language" class="hh_inpput">
                                        <option value="<?php echo $row->language; ?>"><?php echo $row->language; ?></option>
                                        <option value="Bangali">Bengali</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast; Mother's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="m_name" value="<?php echo $row->mother_name; ?>" placeholder="Type Mother's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">  &lowast;Father's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="f_name" value="<?php echo $row->father_name; ?>" placeholder="Type Father's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">  &lowast;Guardian's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="g_name" value="<?php echo $row->guardian_name; ?>" placeholder="Type Guardian's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Occupation<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="occupation" value="<?php echo $row->occupation; ?>" placeholder="Type Guardian's Occupation Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Income<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="income" value="<?php echo $row->income; ?>" placeholder="Type Guardian's Monthly Income Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast; Mobile Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="number" value="<?php echo $row->number; ?>" placeholder="Type Mobile Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Present Address<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row->present_address; ?>" name="ps_address" placeholder="Type Present Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">  &lowast;Permanent Address<span class="right">:</span></li>
                                 <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="pr_address" value="<?php echo $row->permanent_address; ?>" placeholder="Type Permanent Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Country<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="country" class="hh_inpput">
                                        <option>Country</option>
                                       <?php 
									   $sqlcountry=$obj->SelectAll("country");
									   if(!empty($sqlcountry))
									   foreach($sqlcountry as $country):
									   ?>
                                        <option <?php if($row->countryr==$country->id){ ?> selected="selected" <?php } ?> value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                                                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Division / State<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="state" class="hh_inpput">
                                        <option>Division / State</option>
                                        <?php 
										 $state=$obj->SelectAll('ams_division');
										 if(!empty($state))
										 foreach($state as $stt):
										 ?>
                                        <option <?php if($row->state==$stt->id){ ?> selected="selected" <?php } ?> value="<?php echo $stt->id; ?>"><?php echo $stt->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                        
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;District / City<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="city" class="hh_inpput">
                                        <option>District / City</option>
                                        <?php 
										 $city=$obj->SelectAll('district');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option <?php if($row->city==$ct->id){ ?> selected="selected" <?php } ?> value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Thana / Zip code<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                  <!--  <input name="code" placeholder="Type zipe code / thana" class="textbox"/>-->
                                    <select name="code" class="hh_inpput">
                                        <option>District / City</option>
                                        <?php 
										 $city=$obj->SelectAll('thana');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option <?php if($row->zip_code==$ct->id){ ?> selected="selected" <?php } ?> value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                
                                                               
                                <li class="admission_form_div_label height-30 width-label-200 left"> &lowast;Phone Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="p_number" value="<?php echo $row->phone_number; ?>" placeholder="Type Phone Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Email<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="email" value="<?php echo $row->email; ?>" placeholder="Type Email Id Here" class="textbox"/>
                                </li>
                                <?php  if($row->photo!=''){ ?>
                                <li class="admission_form_div_label height-30 width-label-200 left"> Photo
                                <span class="right">:</span></li>
                                <li style="clear:right;" class="admission_form_div_label height-100 width-label-250 right margin-top-25">
                                    <img style="margin-top:-20px;" src="photo/<?php echo $row->photo; ?>" height="100" width="95" />
                                </li>
                                <?php } ?>                              
                                <li class="admission_form_div_label height-30 width-label-200 left" <?php  if($row->photo!=''){ ?> style="margin-top:100px;"<?php } ?>>  <?php  if($row->photo!=''){ ?> Change Profile Photo</br>(60 KB Max.) <?php }else{ ?> Upload Profile Photo</br>(60 KB Max.) <?php } ?>
                                <span class="right">:</span></li>
                                <li class="admission_form_div_label height-35 width-label-250 right margin-top-25">
                                    <input type="file" name="image" placeholder=" " class="textbox"/>
                                    <input value="<?php echo $row->photo; ?>" name="exphoto" type="hidden" class="medium inputs height-30 left"/>
                                </li>
                                
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    
                                    <button type="submit" name="update" class=" height-35 div_btn">Update</button>
                                    
                                </li>

                            </ul>
                            </form>

                        </div>
                        

                    </div>
                  <?php endforeach; ?>


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