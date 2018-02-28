<?php 
session_start();
$error_data[]='';
$error_flag=false;
include('class/db_Class.php');
$obj=new db_class();
$table='ams_singup';
if(isset($_POST['save']))
{
    $exist=array("email"=>$_POST['email']);
    $insert=array("eiin_number"=>$_POST['eiin'],"number"=>$_POST['number_p'],"email"=>$_POST['email'],"acount_type"=>$_POST['account_type'],"servic_type"=>$_POST['service_type'],"acount_name"=>$_POST['account_name'],"address"=>$_POST['address'],"packs_type"=>$_POST['packs_type'],"country"=>$_POST['country'],"divition"=>$_POST['divition'],"city"=>$_POST['city'],"zip_code"=>$_POST['code'],"sms_sander_id"=>$_POST['smsid'],"choos"=>$_POST['choos'],"name"=>$_POST['name'],"gender"=>$_POST['sex'],"dob"=>$_POST['dob'],"password"=>$_POST['pass'],"date"=>date('Y-m-d'),"status"=>1);
    
    if($obj->exists($table,$exist)==1)
    {
        $error_data[]="<div class='error_msg'>Already Exists</div>";
        $error_flag=true;
        
        if($error_flag)
        {
            $_SESSION['ERRMSG_ARR']=$error_data;
            session_write_close();
            header('location: signup.php');
            exit();
        }
    }
 else
    {
     if($obj->insert($table,$insert)==1)
     {
         $error_data[]="<div class='sucess'>Successfully Saved</div>";
         $error_flag=true;
         if($error_flag)
         {
             $_SESSION['SMSG_ARR']=$error_data;
             session_write_close();
             header('location:signup.php');
             exit();
         }
     }
 else
     {
      $error_data[]='Failed to Save';
      $error_flag=true;
      if($error_flag)
      {
        $_SESSION['ERRMSG_ARR']=$error_data;
        session_write_close();
        header('location:signup.php');
        exit();
      }
     }
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dreams</title>
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
    content:'Dreams';
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
               
                
    </head>

    <body onload="doOnLoad();">
        <!-- body starts from here-->
        <div id="body_container">
            <?php include('class/header.php'); ?>
<!-------------------ffff-------------------------------->
            <div class="signup_form_div">

                <div class="signup_form shadow_inner left">

                    <div class="signup_form_div_text auto-position margin-top-10" style="padding-bottom:30px;">
                    <h2 align="center">Sign up! It's Simple, Helpful and Effective</h2></br>
                    <h3 align="center">Please Collect Your EIIN Number Before Signing Up</h3> 
                    </div>
                       
                 <form action="" method="post" name="sing">
                    <ul>
                            <li>
                                <input value="<?php echo $obj->RandNumber(5);?>" placeholder="EIIN Number" name="eiin" class="small inputs height-30 margin-top-10 margin_right10 left"/>
                            </li>
                            <li>
                                <select name="account_type" class="small height-29 margin_left10 left">
                                    <option value="">Account Type</option>
                                    <option value="1">Trial</option>
                                    <option value="2">Licensed</option>
                                </select>

                            </li>
                            <li>
                                <select name="service_type" class="small height-29  margin_left10  right">
                                    <option>Service Type</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </li>
                            <li>
                                <input name="account_name" placeholder="Account Name(e.g. Business or Individual Name)" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <input name="address" placeholder="address" class="large inputs height-30 left"/>
                            </li>
                            <li>
                                <select name="packs_type" class="medium height-29 left">
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
                                <select name="country" class="medium height-29 margin_bottom10 right">
                                    <option>Country</option>
                                    ‪Afrikaans‬
                                      </option>
                                      <option value="Afrikaans"
                                             >
                                      ‪azərbaycan‬
                                      </option>
                                      <option value="azərbaycan"
                                             >
                                      ‪Bahasa Indonesia‬
                                      </option>
                                      <option value="Bahasa Indonesia‬"
                                             >
                                      ‪Bahasa Melayu‬
                                      </option>
                                      <option value=" ‪Bahasa Melayu‬"
                                             >
                                      ‪català‬
                                      </option>
                                      <option value="català"
                                             >
                                      ‪Čeština‬
                                      </option>
                                      <option value="Čeština"
                                             >
                                      ‪Dansk‬
                                      </option>
                                      <option value="Dansk"
                                             >
                                      ‪Deutsch‬
                                      </option>
                                      <option value="Deutsch"
                                             >
                                      ‪eesti‬
                                      </option>
                                      <option value="eesti"
                                             >
                                      ‪English (United Kingdom)‬
                                      </option>
                                      <option value="English (United Kingdom)‬"
                                            >
                                     
                                      </option>
                                      <option value="es"
                                             >
                                      ‪Español (España)‬
                                      </option>
                                      <option value="es-419"
                                             >
                                      ‪Español (Latinoamérica)‬
                                      </option>
                                      <option value="eu"
                                             >
                                      ‪euskara‬
                                      </option>
                                      <option value="fil"
                                             >
                                      ‪Filipino‬
                                      </option>
                                      <option value="fr-CA"
                                             >
                                      ‪Français (Canada)‬
                                      </option>
                                      <option value="fr"
                                             >
                                      ‪Français (France)‬
                                      </option>
                                      <option value="gl"
                                             >
                                      ‪galego‬
                                      </option>
                                      <option value="hr"
                                             >
                                      ‪Hrvatski‬
                                      </option>
                                      <option value="zu"
                                             >
                                      ‪isiZulu‬
                                      </option>
                                      <option value="is"
                                             >
                                      ‪íslenska‬
                                      </option>
                                      <option value="it"
                                             >
                                      ‪Italiano‬
                                      </option>
                                      <option value="sw"
                                             >
                                      ‪Kiswahili‬
                                      </option>
                                      <option value="lv"
                                             >
                                      ‪latviešu‬
                                      </option>
                                      <option value="lt"
                                             >
                                      ‪lietuvių‬
                                      </option>
                                      <option value="hu"
                                             >
                                      ‪magyar‬
                                      </option>
                                      <option value="nl"
                                             >
                                      ‪Nederlands‬
                                      </option>
                                      <option value="no"
                                             >
                                      ‪norsk‬
                                      </option>
                                      <option value="pl"
                                             >
                                      ‪polski‬
                                      </option>
                                      <option value="pt"
                                             >
                                      ‪Português‬
                                      </option>
                                      <option value="pt-BR"
                                             >
                                      ‪Português (Brasil)‬
                                      </option>
                                      <option value="pt-PT"
                                             >
                                      ‪Português (Portugal)‬
                                      </option>
                                      <option value="ro"
                                             >
                                      ‪română‬
                                      </option>
                                      <option value="sk"
                                             >
                                      ‪Slovenčina‬
                                      </option>
                                      <option value="sl"
                                             >
                                      ‪slovenščina‬
                                      </option>
                                      <option value="fi"
                                             >
                                      ‪Suomi‬
                                      </option>
                                      <option value="sv"
                                             >
                                      ‪Svenska‬
                                      </option>
                                      <option value="vi"
                                             >
                                      ‪Tiếng Việt‬
                                      </option>
                                      <option value="tr"
                                             >
                                      ‪Türkçe‬
                                      </option>
                                      <option value="el"
                                             >
                                      ‪Ελληνικά‬
                                      </option>
                                      <option value="bg"
                                             >
                                      ‪български‬
                                      </option>
                                      <option value="mn"
                                             >
                                      ‪монгол‬
                                      </option>
                                      <option value="ru"
                                             >
                                      ‪Русский‬
                                      </option>
                                      <option value="sr"
                                             >
                                      ‪Српски‬
                                      </option>
                                      <option value="uk"
                                             >
                                      ‪Українська‬
                                      </option>
                                      <option value="ka"
                                             >
                                      ‪ქართული‬
                                      </option>
                                      <option value="hy"
                                             >
                                      ‪հայերեն‬
                                      </option>
                                      <option value="iw"
                                             >
                                      ‫עברית‬‎
                                      </option>
                                      <option value="ur"
                                             >
                                      ‫اردو‬‎
                                      </option>
                                      <option value="ar"
                                             >
                                      ‫العربية‬‎
                                      </option>
                                      <option value="fa"
                                             >
                                      ‫فارسی‬‎
                                      </option>
                                      <option value="am"
                                             >
                                      ‪አማርኛ‬
                                      </option>
                                      <option value="ne"
                                             >
                                      ‪नेपाली‬
                                      </option>
                                      <option value="mr"
                                             >
                                      ‪मराठी‬
                                      </option>
                                      <option value="hi"
                                             >
                                      ‪हिन्दी‬
                                      </option>
                                      <option value="bn"
                                             >
                                      ‪বাংলা‬ Bangladesh
                                      </option>
                                      <option value="Bangladesh"
                                             >
                                      ‪ગુજરાતી‬
                                      </option>
                                      <option value="ta"
                                             >
                                      ‪தமிழ்‬
                                      </option>
                                      <option value="te"
                                             >
                                      ‪తెలుగు‬
                                      </option>
                                      <option value="kn"
                                             >
                                      ‪ಕನ್ನಡ‬
                                      </option>
                                      <option value="ml"
                                             >
                                      ‪മലയാളം‬
                                      </option>
                                      <option value="si"
                                             >
                                      ‪සිංහල‬
                                      </option>
                                      <option value="th"
                                             >
                                      ‪ไทย‬
                                      </option>
                                      <option value="lo"
                                             >
                                      ‪ລາວ‬
                                      </option>
                                      <option value="km"
                                             >
                                      ‪ខ្មែរ‬
                                      </option>
                                      <option value="ko"
                                             >
                                      ‪한국어‬
                                      </option>
                                      <option value="zh-HK"
                                             >
                                      ‪中文（香港）‬
                                      </option>
                                      <option value="ja"
                                             >
                                      ‪日本語‬
                                      </option>
                                      <option value="简体中文"
                                             >
                                      ‪简体中文‬
                                      </option>
                                      <option value="简体中文"
                                             >
                                      ‪繁體中文‬
                                      </option>
                                </select>
                            </li>
                            <li>
                                <select name="divition" class="small height-29 margin-top-10 left">
                                    <option>Division/State</option>
                                    <option value="1">Trial</option>
                                    <option value="2">Licensed</option>
                                </select>
                            </li>
                            <li>
                                <select name="city" class="small height-29  margin_left10 left">
                                    <option>District/City</option>
                                    <option>Trial</option>
                                    <option>Licensed</option>
                                </select>
                            </li>
                            <li>
                                <input placeholder="Thana/Zip Code" name="code" class="small inputs height-30 margin-top-30 margin_left10 right"/>
                            </li>
                            <li >
                                <input placeholder="Your Desired SMS Sender ID" style="margin-top:10px;" class="small inputs height-30 margin-top-40 margin_left10 left" name="smsid" />
                                    
                            </li>
                            <li>
                                <select name="choos" class="medium height-29 margin_bottom10 right" style=" margin-top:-3px;">
                                    <option>Choose the best describes you</option>
                                    <option value="19">Advocate</option>
                                    <option value="21">Beautician</option>
                                    <option value="3">Business Man</option>
                                    <option value="22">Business Owner</option>
                                    <option value="12">CEO</option>
                                    <option value="7">Chairman</option>
                                    <option value="10">Computer Teacher</option>
                                    <option value="16">Consultant</option>
                                    <option value="15">Director</option>
                                    <option value="5">Director General</option>
                                    <option value="18">Doctor</option>
                                    <option value="4">Employee</option>
                                    <option value="2">Executive</option>
                                    <option value="11">Founder</option>
                                    <option value="13">Founder & CEO</option>
                                    <option value="8">Head Master</option>
                                    <option value="14">Manager</option>
                                    <option value="6">Managing Director</option>
                                    <option value="23">President</option>
                                    <option value="9">Principal</option>
                                    <option value="20">Proprietor</option>
                                    <option value="24">Secretary</option>
                                    <option value="17">Student</option>
                                    <option value="1">Teacher</option>
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
                                <select name="sex" class="medium height-29 margin_bottom10 left">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </li>
                            <li>
                                <input name="dob" id="calendar" placeholder="Your Date of Birth" class="medium inputs height-30 right" style=" margin-top:-2px;"/>
                            </li>
                            <li>
                                <input name="pass" placeholder="Password" class="medium inputs height-30 left"/>
                            </li>
                            <li>
                              <input placeholder="Type your password again" class="medium inputs height-30 right" style=" margin-top:-1px;"/>
                            </li>
                        <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <button type="submit" name="save" class=" height-35 div_btn">Submit Now</button>
                      </li>

                        
                    </ul>

</form>

                </div>

                <div class="eiin_note right">
                    <h4>Please Collect Your </br> EIIN Before Signing Up</h4></br> 
                    <p>You're going to need an EIIN
                        number to complete your 
                        registration process. Please 
                        Send Us an email with your 
                        detail information at 
                        <u>admin@dreams.com.bd</u> to get  
                        your EIIN. </br> 
                        Hotline: +8801553363017,
                        01671448829
                </div>
            </div><div class="clear"></div>
            <!-------------------ffff-------------------------------->
            
            
       









            <div class="footer_div_full" style="margin-top:40px;">
           <div class="footer_div">
               <?php include ('./class/footer.php'); ?>
           </div>
          </div>
        </div>


    </body>
</html>