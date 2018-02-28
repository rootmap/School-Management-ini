<?php
include_once('class/auth.php');
$table="ams_transport_setting_profile";
$w=80; $h=100; $thumb="photo/";
extract($_GET);
if(isset($_POST['update']))
{
	
	if(!empty($_POST['name']) && !empty($_POST['id_number']))
	 
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
	
   
	$array=array("id"=>$_POST['id'],"driver_id"=>$_POST['id_number'],
	"joining_date"=>$_POST['joining_date'],
	"name"=>$_POST['name'],
	"transport_number"=>$_POST['transport'],
	"area"=>$_POST['area'],
	"group_id"=>$_POST['group'],
	"category_id"=>$_POST['category'],
	"gnder"=>$_POST['gender'],
	"qualification_id"=>$_POST['qualification'],
	"experience_start"=>$_POST['year'],
	"experience_end"=>$_POST['month'],
	"experience_info"=>$_POST['info'],
	"status_s"=>$_POST['s_status'],
	"f_name"=>$_POST['f_name'],
	"m_name"=>$_POST['m_name'],
	"dob"=>$_POST['dob'],
	"blood_group_id"=>$_POST['blood_group'],
	"marital_status_id"=>$_POST['mstatus'],
	"spouse_name"=>$_POST['spouse_name'],
	"children"=>$_POST['children'],
	"nationality"=>$_POST['nationality'],
	"religion"=>$_POST['religion'],
	"number"=>$_POST['number'],
	"state"=>$_POST['state'],
	"present_address"=>$_POST['p_address'],
	"permanent_address"=>$_POST['pe_address'],
	"city"=>$_POST['city'],
	"zip_code"=>$_POST['code'],
	"countryr"=>$_POST['country'],
	"email"=>$_POST['email'],
	"photo"=>$photo);
	
   
        
     if($obj->update($table,$array)==1)
		echo $obj->Success("Data Successfully Change","transport_details.php");	
	 }
	 else
	 {
		 echo $obj->Error("Data Not Change","transport_details.php");	
	 }
    
    
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
       
       <script>
            function showgroup(str)
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
                        <div class="topbar_small_div_text2 left height-30"><h4>ADD TRANSPORT PROFILE INFORMATION</h4></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                           <?php include('includes/back.php'); ?>
                        </ul>
                       

                    </div>
                </div>
                <div class="border_top"></div> <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        <?php 
										$array=array("school_id"=>$school,"id"=>$id);
                                        $data=$obj->SelectAllByID_Multiple($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row1):
                                        ?>
                <div style="clear:both; ">
                    <form action="" method="post" name="trans" enctype="multipart/form-data">
                    
                        <div class="admission_div_top shadow_inner">
                        <ul>
                            <li class="add_st_form_div_label height-30 width-label-250 left margin-top-10 margin_bottom10 margin_left10">Driver ID Number	<span class="right">:</span></li>
                            <li class="add_st_form_div_label height-30 width-label-200 left margin-top-10 margin_bottom10">
                                <input name="id_number" value="<?php echo $row1->driver_id; ?>" placeholder="Type Driver ID Number" class="textbox"/>
                                <input type="hidden" name="id" value="<?php echo $row1->id; ?>" />
                            </li>

                            <li class="add_st_form_div_label height-30 width-label-200 right margin-top-10 margin_bottom10">
                          <input type="text" id="calendar" name="joining_date" value="<?php echo $row1->joining_date; ?>" class="textbox"/>
                            </li>
                            <li class="add_st_form_div_label height-30 width-label-150 right margin-top-10 margin_bottom10">Joining Date<span class="right">:</span></li>
                        </ul>
                    </div>
                            
                       
                        
                   
                                           
                    <div class="admission_div shadow_inner " style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Personal Detail :</left></h2>
                        </div>
                        <div class="admission_form_div width-col2 auto-position auto-height" >

                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="name" value="<?php echo $row1->name; ?>" type="text" placeholder="Type Student's Name Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Transport Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input class="textbox" value="<?php echo $row1->transport_number; ?>" name="transport" type="text" placeholder="Type Transport Number Here" />
                                       
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Location/Area<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="area" value="<?php echo $row1->area; ?>" type="text" placeholder="Type Location/Area Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="group" onchange="showgroup(this.value)" >
                                        <option value="<?php echo $row1->group_id; ?>"><?php echo $obj->SelectAllByVal("ams_management_group","id",$row1->group_id,"name"); ?></option>
                                        <?php
										 $array=array("school_id"=>$school);  
										 $data=$obj->SelectAllByID("ams_management_group",$array);
										 if(!empty($data))
										 foreach($data as $row):
										 ?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Category<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" id="category" name="category" >
                                        <option value="<?php echo $row1->category_id; ?>"><?php echo $obj->SelectAllByVal("ams_category","id",$row1->category_id,"name"); ?></option>
                                       
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Gender<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="gender" >
                                        <option value="<?php echo $row1->gnder; ?>"><?php echo $row1->gnder; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </li>
                                 <li class="admission_form_div_label height-30 width-label-200 left">Qualification<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->qualification_id; ?>" name="qualification" type="text" placeholder="Type Your Qualification" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Total Experience<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-70 left margin_left10">
                                    <select class="" name="year" >
                                        <option value="<?php echo $row1->experience_start; ?>"><?php echo $row1->experience_start; ?></option>
                                        <?php 
                                           for($i=0; $i<=20; $i++){
										 ?>
                                         <option value="<?php echo $i;?> Years"><?php echo $i;?> Years</option>
                                         <?php 
										   }
										 ?>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-70 left">
                                    <select class="" style="margin-left:20px;" name="month" >
                                        <option value="<?php echo $row1->experience_end; ?>"><?php echo $row1->experience_end; ?></option>
                                        <?php for ($i=0; $i<=12; $i++) {?>
                                        <option value="<?php echo $i; ?> Months"><?php echo $i; ?> Months</option>
                                        <?php } ?>
                                    </select>
                                </li>
                                 <li class="admission_form_div_label height-30 width-label-200 left">Information<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                     <input value="<?php echo $row1->experience_info; ?>" name="info" type="text" placeholder="Type Your Information" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Status<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->status_s; ?>" name="s_status" type="text" placeholder="Type Status Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> Father's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->f_name; ?>" name="f_name" type="text" placeholder="Type Father's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Mother's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->m_name; ?>" name="m_name" type="text" placeholder="Type Mother's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Date of Birth<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->dob; ?>" id="calendar2" readonly="readonly" name="dob" type="text" placeholder="Type Date of Birth Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Blood Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                   <select class="hh_inpput" name="blood_group" >
                                        <option value="<?php echo $row1->blood_group_id; ?>"><?php echo $obj->SelectAllByVal("ams_blood_group","id",$row1->blood_group_id,"name"); ?></option>
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
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Marital Status<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                   <select class="hh_inpput" name="mstatus" >
                                        <option value="<?php echo $row1->marital_status_id; ?>"><?php echo $obj->SelectAllByVal("ams_marital","id",$row1->marital_status_id,"name"); ?></option>
                                        <option>Marital Status</option>
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
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Spouse Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->spouse_name; ?>" type="text" name="spouse_name" placeholder="Type Spouse Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">No of Children<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->children; ?>" name="children" type="text" placeholder="Type No of Children Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Nationality<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="nationality" >
                                        <option value="<?php echo $row1->nationality; ?>"><?php echo $row1->nationality; ?></option>
                                        <option value="bangladeshi">bangladeshi</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Religion<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="religion" >
                                        <option value="<?php echo $row1->religion; ?>"><?php echo $row1->religion; ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                 <li class="admission_form_div_label height-30 width-label-200 left"> Mobile Number<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->number; ?>" name="number" type="text" placeholder="Type Mobile Number Here" class="textbox"/>
                                </li>
                                
                                
                                
                                
                                 <li class="admission_form_div_label height-30 width-label-200 left">Present Address<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->present_address; ?>" type="text" name="p_address" placeholder="Type Present Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Permanent Address<span class="right">:</span></li>
                                 <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->permanent_address; ?>" name="pe_address" type="text" placeholder="Type Permanent Address Here" class="textbox"/>
                                </li>
                                                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Division / State<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="state" >
                                        <option value="<?php echo $row1->state; ?>"><?php echo $obj->SelectAllByVal("ams_division","id",$row1->state,"name"); ?></option>
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
                                <li class="admission_form_div_label height-30 width-label-200 left">District / City<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="city" >
                                        <option value="<?php echo $row1->city; ?>"><?php echo $obj->SelectAllByVal("ams_city","id",$row1->city,"name"); ?></option>
                                        <?php 
										 $city=$obj->SelectAll('ams_city');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Thana / Zip code<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->zip_code; ?>" class="textbox" placeholder="Thana / Zip code" type="text" name="code" >
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Country<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select class="hh_inpput" name="country" >
                                        <option value="<?php echo $row1->countryr; ?>"><?php echo $row1->countryr; ?></option>
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
                                
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Email<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->email; ?>" type="text" name="email" placeholder="Type Email Id Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Image<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input type="file" name="image" class="textbox"/>
                                    <input value="<?php echo $row->photo; ?>" name="exphoto" type="hidden" class="medium inputs height-30 left"/>
                                </li>
                                
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="" style="text-decoration:none">
                                    <button type="submit" name="update" class=" height-35 div_btn">Update</button>
                                    </a>
                                </li>

                            </ul>
                            

                        </div>
                        

                    </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
                            
                         </div>
                        <?php endforeach; ?>

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