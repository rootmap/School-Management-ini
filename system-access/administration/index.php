<?php 
session_start();
$error_data[]='';
$error_flag=false;
include('class/db_Class.php');
$obj=new db_class();
if(isset($_POST['login']))
{
	if($obj->exists_multiple("ams_admin_eiin",array("name"=>$_POST['name'],"password"=>md5($_POST['password']))))
	{
		session_regenerate_id();
		$_SESSION['SESS_AMSIT_ADMIN_KEY']=$obj->SelectAllByVal("ams_admin_eiin","name",$_POST['name'],"id");
		$_SESSION['SESS_ADMINNAME']=$obj->SelectAllByVal("ams_admin_eiin","name",$_POST['name'],"name");
		$_SESSION['SESS_STATUS']=$obj->SelectAllByVal("ams_admin_eiin","name",$_POST['name'],"status");
		$_SESSION['SESS_AMSIT_COMPANY_KEY']=$obj->SelectAllByVal("ams_admin_eiin","name",$_POST['name'],"company_id");
		$_SESSION['SESS_SESSION_SCHOOL_ID']=$obj->SelectAllByVal2("ams_singup","eiin_number",$_POST['eiin'],"id");
		session_write_close();
		header('location: eiin_number_setting2.php');
		//echo "login ";
		exit();	
	}
	else
	{
		$error_data[]="<div class='error_msg'>Login Failed, Please Try Again</div>";
		$error_flag=true;
		if($error_flag)
		{
			$_SESSION['ERRMSG_ARR']=$error_data;
			session_write_close();
			header('location: index.php');
			exit();
			
		}	
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>ADMINISTRATION</title>
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />
<link href="css/dreams.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<!-- body starts from here-->
     <?php include('include/head.php');?>
        <div class="body_container auto-position " >
        
                
                
               
<div class="admin_logo_top_div auto-position height-40 margin-top-10">
 <div id='cssmenu' class="right">
<ul>
	 <li class='last'><a href='home.php'><span>HOME</span></a>
     
      
   </li>
   <li class='has-sub last'><a href='#'><span>EIMS Software User</span></a>
      <ul>
         <li><a href='home.php'><span>All EIMS Software User</span></a></li>
         <li><a href='#'><span>Search by EIIN Number</span></a></li>
         <li><a href='#'><span>Search by Thana</span></a></li>
         <li class='last'><a href='#'><span>Search by District </span></a></li>
      </ul>
   </li>
   <li class='has-sub last'><a href='#'><span>EIIN Number & SMS Settings</span></a>
      <ul>
         <li><a href='eiin_number_setting.php'><span>Create EIIN Number</span></a></li>
         <li><a href='#'><span>All EIIN Number Lists</span></a></li>
         <li class='last'><a href='#'><span>Recent Active EIIN Number</span></a></li>
      </ul>
   </li>
 
</ul>
</div>
</div>


</div>

<div class="width_960 marging_left_right" >
  <?php include_once('class/esm.php'); ?>
</div>
<!----------body_all strart------------------------------------------------->
<div id="body_all" class="padding_top_5">
   <!-----input fild start--------->
     <div class="input_fild height_50 backgroung_3 padding_top_15">
     <form action="" method="post" name="logine">
       <ul class="padding_left_10">
         <li class="left line-height_30 font_2 color_w">User ID   :</li>
         <li class="left margin_left10">
         <input name="name" type="text"  class="input font_1 height-30 padding_left_10 padding_right10" placeholder="Type Suer ID"/>
         </li> 
         <li class="left line-height_30 font_2 color_w margin_left10">Password   :</li> 
         <li class="left margin_left10">
         <input class="font_1 input height-30 padding_left_10 padding_right10" name="password" type="password" placeholder="Type New Password" />
         </li>
         <li class="left margin_left10">
           <button type="submit" name="login" class="padding_5 font_2 backgroung_4 borber2 color_w">Sign in</button>
         </li>
         
       </ul>
       </form>
     </div>
   <!-----input fild end--------->
   <div class="height_543 width_100 text_aling_center">
     <img src="../images/Untitled_01.png" />
   </div>
   
</div>
<!----------body_all end------------------------------------------------->                
<?php include ('./class/footer.php'); ?>
               
</body>
</html>