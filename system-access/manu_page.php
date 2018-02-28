<?php
include('class/auth.php');
$table='ams_singup';
$w=150; $h=134; $thumb="photo/";
if(isset($_POST['save']))
{
	
	 if(!empty($_POST['name']) && !empty($_POST['number_p']))
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
        
	$array=array("eiin_number"=>$school,
	"number"=>$_POST['number_p'],
	"email"=>$_POST['email'],
	"acount_name"=>$_POST['account_name'],
	"account_name_estd"=>$_POST['account_name_estd'],
	"address"=>$_POST['address'],
	"packs_type"=>$_POST['packs_type'],
	"country"=>$_POST['country'],
	"divition"=>$_POST['divition'],
	"city"=>$_POST['city'],
	"zip_code"=>$_POST['code'],
	"sms_sander_id"=>$_POST['smsid'],
	"choos"=>$_POST['choos'],
	"name"=>$_POST['name'],
	"gender"=>$_POST['sex'],
	"dob"=>$_POST['dob'],
	"bank_name"=>$_POST['bank_name'],
	"ac"=>$_POST['ac'],
	"branch_name"=>$_POST['branch_name'],
	"photo"=>$photo);
	
	if($obj->update($table,$array)==1)
		echo $obj->Success("Data Successfully Change",$obj->filename());	
	 }
	 else
	 {
		 echo $obj->Error("Data Not Change",$obj->filename());	
	 }
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
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
    <script>
            function showdivision(str)
            {
                if (str == "")
                {
                    document.getElementById("division").innerHTML = "";
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
                        document.getElementById("division").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/showdivision.php?country=" + str, true);
                xmlhttp.send();
            }
            
            function showdistrict(str)
            {
                if (str == "")
                {
                    document.getElementById("district").innerHTML = "";
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
                        document.getElementById("district").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/showdistrict.php?division=" + str, true);
                xmlhttp.send();
            }
            
            function showthana(str)
            {
                if (str == "")
                {
                    document.getElementById("thana").innerHTML = "";
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
                        document.getElementById("thana").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/showthana.php?district=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>

    <body onload="doOnLoad();">
        <!-- body starts from here-->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            
           
            <div class="height-auto default_width auto-position margin-top-30">
            <div class="height-20"><?php include_once('class/esm.php'); ?></div> 
            <div class="signup_form shadow_inner left"  style="padding-top:5px;">
                    <?php include_once('class/esm.php'); ?>
                    <div class="signup_form_div_text auto-position margin-top-10" style="padding-bottom:30px;">
                    <h2 align="center">User Settings! It's Simple, Helpful and Effective</h2></br>
                    <h3 align="center">Please Edit Your Profile Information</h3> 
                    </div>
                       
                 <form action="" method="post" name="sing" enctype="multipart/form-data">
                 <?php 
				  $array=array("eiin_number"=>$school);
				  $data=$obj->SelectAllByID($table,$array);
				  if(!empty($data))
				  foreach ($data as $row):
				?>
                    <ul>
                            <li>
                            
   <input placeholder="EIIN Number" value="<?php echo $row->eiin_number; ?>" readonly="readonly" name="eiin" class="small inputs height-30 margin-top-10 margin_right10 left"/>
                            </li>
                            <li>
                            <input placeholder="EIIN Number" style="margin-left:15px; width:156px; " value="<?php echo $row->acount_type; ?>" readonly="readonly" name="eiin" class="small inputs height-30 margin-top-10 left"/>                            </li>
                            <li>
                            <input placeholder="EIIN Number" style="margin-left:15px; width:168px; " value="<?php echo $row->servic_type; ?>" readonly="readonly" name="eiin" class="small inputs height-30 margin-top-10 left"/>
                            </li>
                            
                            <li>
              <input name="account_name" style="width:458px; "  value="<?php echo $row->acount_name; ?>" placeholder="Account Name(e.g. Business or Individual Name)" class="large inputs height-30 left"/>
                            </li>
                            <li>
              <input name="account_name_estd" style="margin-left:15px; width:78px;"  value="<?php echo $row->account_name_estd; ?>" placeholder="ESTD : <?php echo date('Y'); ?>" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <input value="<?php echo $row->address; ?>" name="address" placeholder="address" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <select name="packs_type" class="medium height-29 left">
                                    <?php 
										 $class=$obj->SelectAll('ams_package_type');
										 if(!empty($class))
										 foreach($class as $cl):
										 	if($row->packs_type==$cl->id)
											{
										 ?>
										  <option value="<?php echo $cl->id; ?>"><?php echo $cl->name; ?></option>
										  <?php 
											}
										     endforeach;
										   ?>
                                </select>
                            </li>
                            <li>
                                <select name="country" onchange="showdivision(this.value)" class="medium height-29 margin_bottom10 right">
                                    <option value="<?php echo $row->country; ?>">
									<?php echo $obj->SelectAllByVal("country","id",$row->country,"name"); ?></option>
                                      <?php
                                      $datacountry=$obj->SelectAllorderByname("country");
                                      if(!empty($datacountry))
                                      foreach($datacountry as $country):
                                          ?>
                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                          <?php
                                      endforeach;
                                      ?>
                                      
                                </select>
                            </li>
                            <li>
                                <select name="divition" onchange="showdistrict(this.value)" id="division" class="small height-29 margin-top-10 left">
                                <option value="<?php echo $row->divition; ?>"><?php echo $obj->SelectAllByVal("ams_division","id",$row->divition,"name"); ?></option>
                                    
                                </select>
                            </li>
                            <li>
                                <select name="city" onchange="showthana(this.value)"  id="district" class="small height-29  margin_left30 left"> 
                                <option value="<?php echo $row->city; ?>"><?php echo $obj->SelectAllByVal("district","id",$row->city,"name"); ?></option>
                                    
                                </select>
                            </li>
                            <li>
                                <select name="code" id="thana" class="small height-29  margin_left10  right">
                                    <option value="<?php echo $row->zip_code; ?>"><?php echo $obj->SelectAllByVal("thana","id",$row->zip_code,"name"); ?></option>
                                </select>
                            </li>
                            <li>
                                <input value="<?php echo $row->sms_sander_id; ?>" placeholder="Your Desired SMS Sender ID" style="margin-top:10px; width:287px;" class="small inputs height-30 margin-top-40 margin_left10 left" name="smsid" />
                                    
                            </li>
                            <li>
                                <select name="choos" class="medium height-29 margin_bottom10 right" style=" margin-top:12px;">
                                    <option value="<?php echo $row->choos; ?>">
                                    <?php echo $row->choos; ?>
                                    </option>
                                    <option value="Advocate">Advocate</option>
                                    <option value="Beautician">Beautician</option>
                                    <option value="Business Man">Business Man</option>
                                    <option value="Business Owner">Business Owner</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Chairman">Chairman</option>
                                    <option value="Computer Teacher">Computer Teacher</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Director">Director</option>
                                    <option value="Director General">Director General</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Executive">Executive</option>
                                    <option value="Founder">Founder</option>
                                    <option value="Founder & CEO">Founder & CEO</option>
                                    <option value="Head Master">Head Master</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Managing Director">Managing Director</option>
                                    <option value="President">President</option>
                                    <option value="Principal">Principal</option>
                                    <option value="Proprietor">Proprietor</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                            </li>
                            <li>
                                <input value="<?php echo $row->name; ?>" name="name" placeholder="Your Name(Or the person's name who will operate the application )" class="large inputs height-30 margin-top-10 left"/>
                            </li>
                            <li>
                                <input value="<?php echo $row->number; ?>" placeholder="Your Mobile Number" name="number_p" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <input value="<?php echo $row->email; ?>" name="email" placeholder="Your Email id" class="large inputs height-30 left"/>
                            </li>
                            
                            <li>
                                <select name="sex" class="medium height-29 margin_bottom10 left">
                                    <option value="<?php echo $row->gender; ?>"><?php echo $row->gender; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </li>
                            <li>
                                <input value="<?php echo $row->dob; ?>" name="dob" readonly="readonly" id="calendar" placeholder="Your Date of Birth" class="medium inputs height-30 right" style=" margin-top:-2px;"/>
                            </li>
                            <li>
                                <input name="bank_name" placeholder="Bank Name :" style="width:33%;" id="bank_name" class="small inputs height-29 left" value="<?php echo $row->bank_name; ?>" type="text" />
                            </li>
                            <li>
                                <input name="ac" placeholder="A/C No. :" style="width:25%; margin-left:20px;" id="ac" class="small inputs height-29 left" value="<?php echo $row->ac; ?>" type="text" /> 
                            </li>
                            <li>
                                <input name="branch_name" placeholder="Bank Branch Name/Area :" style="width:25%;" id="branch_name" class="small inputs height-29 right" value="<?php echo $row->branch_name; ?>" type="text" />
                            </li>
                            <li class="right">
                             <input type="file" name="image" style=" margin-top:-1px;"/>
                             <input value="<?php echo $row->photo; ?>" name="exphoto" type="hidden" class="medium inputs height-30 left"/>
                             <img src="photo/<?php echo $row->photo; ?>" width="100" />
                            </li>
                            
                              
                           
                        <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                       <button type="submit" name="save" class=" height-35 div_btn">Submit Now</button>
                      </li>

                        
                           <li style="clear: both; display: block;  width:  100%; padding: 10px; text-align: center;">
                          <a href="change_password.php" title="clik here Change password" name="save" class="height-35 k">Change password</a>                         
                      </li>
                            
                    </ul>
<?php endforeach; ?>
</form>

                </div>
            <div class="clear"></div>
            </div>
            



            <div class="footer_div_full">
            <div class="footer_div">
                <?php include ('./class/footer.php'); ?>
            </div>
        </div>
        </div>


    </body>
</html>