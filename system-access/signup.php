<?php 
ob_start();
session_start();
$error_data[]='';
$error_flag=false;
ini_set('date.timezone', 'America/Los_Angeles');
include('class/db_Class.php');
$obj=new db_class();
$table='ams_singup';
if(isset($_POST['save']))
{
	
	if(!empty($_POST['eiin']) 
	&& !empty($_POST['number_p']) 
	&& !empty($_POST['email']) 
	&& !empty($_POST['eiin']) 
	&& !empty($_POST['account_type']) 
	&& !empty($_POST['service_type']) 
	&& !empty($_POST['account_name']) 
	&& !empty($_POST['address']) 
	&& !empty($_POST['packs_type']) 
	&& !empty($_POST['country']) 
	&& !empty($_POST['divition']) 
	&& !empty($_POST['smsid']) 
	&& !empty($_POST['choos']) 
	&& !empty($_POST['name']) 
	&& !empty($_POST['pass'])){
	
		if($obj->exists_multiple("ams_admin_eiin_number",array("eiin"=>$_POST['eiin'],"status"=>3))==1)
		{
			
			if($obj->insert($table,array("eiin_number"=>$_POST['eiin'],"number"=>$_POST['number_p'],"email"=>$_POST['email'],"acount_type"=>$_POST['account_type'],"servic_type"=>$_POST['service_type'],"acount_name"=>$_POST['account_name'],"address"=>$_POST['address'],"packs_type"=>$_POST['packs_type'],"country"=>$_POST['country'],"divition"=>$_POST['divition'],"city"=>$_POST['city'],"zip_code"=>$_POST['code'],"sms_sander_id"=>$_POST['smsid'],"choos"=>$_POST['choos'],"name"=>$_POST['name'],"gender"=>$_POST['sex'],"dob"=>$_POST['dob'],"password"=>$_POST['pass'],"time"=>$time,"date"=>date('Y-m-d'),"status"=>3))==1)
			{
				echo $obj->Success("Data Saved Successfully",$obj->filename());	
			}
			else
			{
				echo $obj->Error("Failed, Please Try Again After Some Times",$obj->filename());	
			}
			
		}
		else
		{
			echo $obj->Error("EIIN Number Is Not Exists",$obj->filename());	
		}
	}
	else
	{
		echo $obj->Error("Please Fillup All Field Carefully.",$obj->filename());		
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skeleton</title>
<?php include('class/head.php'); ?>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
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
         
        <style type="text/css">
                    /* The CSS */
select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
    /*width: 150px;*/
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'Skeleton';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}

           
inputs  { 
-webkit-border-radius: 1px; 
-moz-border-radius: 1px; 
-ms-border-radius: 1px; 
-o-border-radius: 1px; 
border-radius: 1px; 

-webkit-transition: all 0.5s ease; 
-moz-transition: all 0.5s ease; 
-ms-transition: all 0.5s ease; 
-o-transition: all 0.5s ease; 
transition: all 0.5s ease; 
background: #EAE7E7 ; 
border: 1px solid #C8C8C8; 
color: #777; 
font: 13px Helvetica, Arial, sans-serif;

} 
 
inputs:focus { 
-webkit-box-shadow: 0 0 1px #ED1C24 inset; 
-moz-box-shadow: 0 0 1px #ed1c24 inset; 
-ms-box-shadow: 0 0 1px #ed1c24 inset; 
-o-box-shadow: 0 0 1px #ed1c24 inset; 
box-shadow: 0 0 1px #ED1C24 inset; 
background-color: #FFF; 
border: 1px solid #ED1C24; 
outline: none; 
} 
inputs1 {-webkit-border-radius: 1px; 
-moz-border-radius: 1px; 
-ms-border-radius: 1px; 
-o-border-radius: 1px; 
border-radius: 1px; 

-webkit-transition: all 0.5s ease; 
-moz-transition: all 0.5s ease; 
-ms-transition: all 0.5s ease; 
-o-transition: all 0.5s ease; 
transition: all 0.5s ease; 
background: #EAE7E7 ; 
border: 1px solid #C8C8C8; 
color: #777; 
font: 13px Helvetica, Arial, sans-serif;
}
        </style> 
               
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
            <?php include('class/header.php'); ?>
<!-------------------ffff-------------------------------->
            <div class="signup_form_div">
                <div class="signup_form shadow_inner left"  style="padding-top:5px;">
                    <?php include_once('class/esm.php'); ?>
                    <div class="signup_form_div_text auto-position margin-top-10" style="padding-bottom:30px;">
                    <h2 align="center">Sign up! It's Simple, Helpful and Effective</h2></br>
                    <h3 align="center">Please Collect Your EIIN Number Before Signing Up</h3> 
                    </div>
                       
                 <form action="" method="post" name="sing">
                    <ul>
                            <li>
                            
   <input placeholder="EIIN Number" value="" name="eiin" class="small inputs height-30 margin-top-10 margin_right10 left"/>
                            </li>
                            <li>
                                <select name="account_type" style="margin-top:2px;" class="small height-29 margin_left20 left">
                                    <option value="">Account Type</option>
                                    <option value="Educational Institutes">Educational Institutes</option>
                                    <option value="Super Shop Management">Super Shop Management</option> 
                                    <option value="One Shop Management"> One Shop Management</option>
                                    <option value="Departmental Store Management"> Departmental Store Management</option>
                                    <option value="Real Estate/Property Management"> Real Estate/Property Management</option>
                                    <option value="Multi Purpose Management">Multi Purpose Management</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Apartment Management ">Apartment Management </option>
                                    <option value=" Hotel Management"> Hotel Management</option>
                                    <option value="Firearms Shop Management">Firearms Shop Management</option>
                                    <option value="Law Firm Information Management">Law Firm Information Management</option>
                                    <option value="Hospital Management">Hospital Management</option>
                                    <option value="Office Management">Office Management</option>
                                    <option value="Diagnostic & Clinic Management">Diagnostic & Clinic Management</option>
                                    <option value="Production factory Management">Production factory Management</option>
                                    <option value="Pharmacy Management">Pharmacy Management</option>
                                    <option value="Restaurant Management">Restaurant Management</option>
                                    <option value="Buying House Management">Buying House Management</option>
                                    <option value="Garments Management">Garments Management</option>
                                    <option value="Customer Relationship Management">Customer Relationship Management</option>
                                    <option value="NGO Management">NGO Management</option>
                                    <option value="Social service Management">Social service Management</option>
                                     <option value="hospitality firms Management">hospitality firms Management</option>
                                   <option value="CLUB Management">CLUB Management</option>
                                   <option value="Courier management">Courier management</option>
                                   <option value="Dish line management">Dish line management</option>
                                   <option value="Investment management">Investment management</option>
                                   <option value="Generator line management">Generator line management</option>
                                   <option value="Somitee management">Somitee management</option>
                                     
                                </select>

                            </li>
                            <li>
                                <select name="service_type"  style="margin-top:2px;" class="small height-29  margin_left10  right">
                                    <option>Service Type</option>
                                    <option value="Unlimited Bulk SMS">Unlimited Bulk SMS</option>
                                    <option value="Bulk SMS">Bulk SMS</option>
                                    <option value="Subscription SMS">Subscription SMS</option>
                                    <option value="Push-Pull SMS">Push-Pull SMS</option>
                                </select>
                            </li>
                            <li>
                                <input name="account_name" placeholder="Account Name(e.g. Business or Individual Name)" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <input name="address" placeholder="address" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <select name="packs_type" style="width:310px;" class="medium height-29 left">
                                    <option>Packs Type</option>
                                    <?php 
										 $class=$obj->SelectAll('ams_package_type');
										 if(!empty($class))
										 foreach($class as $cl):
										 ?>
										  <option value="<?php echo $cl->id; ?>"><?php echo $cl->name; ?></option>
										  <?php 
										     endforeach;
										   ?>
                                </select>
                            </li>
                            <li>
                                <select name="country" onchange="showdivision(this.value)" class="medium height-29 margin_bottom10 right">
                                    <option>Country</option>
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
                                    
                                </select>
                            </li>
                            <li>
                                <select name="city" onchange="showthana(this.value)"  id="district" class="small height-29  margin_left30 left">
                                    
                                </select>
                            </li>
                            <li>
                                <select name="code" id="thana" class="small height-29  margin_left10  right">
                                    
                                </select>
                            </li>
                            <li>
                                <input placeholder="Your Desired SMS Sender ID ( MAX - 11 )" maxlength="11" style="margin-top:10px; width:285px;" class="small inputs height-30 margin-top-40 margin_left10 left" name="smsid" />
                                    
                            </li>
                            <li>
                                <select name="choos" class="medium height-29 margin_bottom10 right" style=" margin-top:10px;">
                                    <option>Choose the best describes you</option>
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
                                <input name="name" placeholder="Your Name(Or the person's name who will operate the application )" class="large inputs height-30 margin-top-10 left"/>
                            </li>
                            <li>
                                <input placeholder="Your Mobile Number" name="number_p" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <input name="email" placeholder="Your Email id" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <select name="sex" style="width:80px;" class="medium height-29 margin_bottom10 left">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                
                                <input name="dob" readonly="readonly" id="calendar" placeholder="Your Date of Birth" class="medium inputs height-30 left" style=" margin-top:-2px; width:100px; margin-left:20px;"/>
                            </li>
                            <li>
                               <input name="pass" placeholder="Password" type="password" class="medium inputs height-30 left"  style=" margin-top:-2px; width:147px; margin-left:20px;" /> 
                               
                               <input type="password" placeholder="Type your password again" class="medium inputs height-30 right" style=" margin-top:-2px; width:147px; margin-left:20px;" />
                            </li>
                           
                            
                        <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <button type="submit" name="save" class=" height-35 div_btn">Submit Now</button>
                      </li>

                        
                    </ul>

</form>

                </div>

                <div class="eiin_note right">
                <style type="text/css">
					.dd{ color:#03C; }
					.dd:hover{ color:#09f; }
				</style>
                    <h4> <font color="#990000"> Please Collect Your </br> EIIN Before Signing Up </font></h4></br> 
                    <p style="color:#333;">You're going to need an EIIN
                        number to complete your 
                        registration process. Please 
                        Send Us an email with your 
                        detail information at 
                        <u><a href="mailto:contact@dreamstech.net" class="dd">contact@dreamstech.net</a></u> to get  
                        your EIIN. </br> 
                        <font color="#0066CC">Hotline: </font><font color="#990000">+8801553363017,
                        01671448829</font>
                </div>
            </div><div class="clear"></div>
            <!-------------------ffff-------------------------------->
            
            
       









            <div class="footer_div_full" style="margin-top:40px;">
           <div class="footer_div">
               <?php include ('./class/footer.php'); ?>
           </div>
          </div>
        </div>

<?php ob_end_flush(); ?>
    </body>
</html>