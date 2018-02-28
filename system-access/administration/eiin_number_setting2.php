<?php 
include('class/auth.php');
$table="ams_singup";
$table1="ams_admin_sms_stteing";
if(isset($_POST['confarm']))
{
	

	$time= date('h:i:s a');
        
	$array=array("eiin_number"=>$_POST['eiin_number'],"cline_quantity"=>$_POST['t_quantity'],"company_id"=>$company,"school_id"=>$_POST['school'],"date"=>date('Y-m-d'),"time"=>$time,"status"=>2);
	
	 if($obj->insert($table1,$array)==1)
	 {
	     echo $obj->Success("Data Successfully Change",$obj->filename());	
	 }
	 else
	 {
		 echo $obj->Error("Data Not Change",$obj->filename());	
	 }
	
}
if(isset($_GET['update']))
{
	
	$array=array("id"=>$_GET['id'],"eiin_number"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}

if(isset($_GET['update1']))
{
	
	$array=array("id"=>$_GET['id'],"eiin_number"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}

if(isset($_GET['actionschool']))
{
	$school_id=$obj->SelectAllByVal("ams_singup","eiin_number",$_GET['eiin'],"id");
	//$obj->delete("ams_singup",array("eiin_number"=>$_GET['eiin']));
	if($obj->delete("ams_admission",array("school_id"=>$_GET['eiin']))==1)
	{
		$obj->delete("ams_academic_calendar",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_all_manege_group_sms",array("school_id"=>$school_id));
		$obj->delete("ams_annual_final",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_attendance_reg_stng",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_category",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_class",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_class_time_setting",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_contact",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_examination",array("school_id"=>$school_id));
		$obj->delete("ams_exam_category",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_exam_category_set",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_exam_result",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_exam_subject",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_grading_system_dateils",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_group",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_management_group",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_management_profile",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_management_sms",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_manage_account",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_manage_account_paymant",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_manage_account_paymant_details",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_marks_select",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_marks_shite_chos",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_massages_book",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_next_class_promot",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_notice",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_payment",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_payment_details",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_performance",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_performance2",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_report",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_report2",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_result_wise_sms",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_sand_sms_class_wise",array("school_id"=>$school_id));
		$obj->delete("ams_section",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_session",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_shift",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_sms_attendance",array("school_id"=>$school_id));
		$obj->delete("ams_sms_guardiant",array("school_id"=>$school_id));
		$obj->delete("ams_stationery",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_stationery_paymant",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_stationery_paymant_details",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_studenn_all_sms",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_student_account",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_student_attendance",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_student_group",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_student_login",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_subject",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_time_table_1",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_time_table_teacher",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_total_count",array("school_id"=>$school_id));
		$obj->delete("ams_transfer",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_transport_setting_profile",array("school_id"=>$_GET['eiin']));
		$obj->delete("ams_singup",array("eiin_number"=>$_GET['eiin']));
		
		$obj->Success("Successfully Deleted School Info.",$obj->filename());
		
	}
}

if(isset($_POST['updateschool']))
{
	extract($_POST);
	if($obj->update($table,array("eiin_number"=>$eiin,"sms_sander_id"=>$sms_sander_id,"acount_name"=>$acount_name,"name"=>$name,"number"=>$account_holder_contact,"email"=>$email,"password"=>$password))==1)
	{
		$obj->Success("Account Info Successfully Updated",$obj->filename()."?editschool=".$eiin);	
	}
	else
	{
		$obj->Error("Account Info Not Updated",$obj->filename()."?editschool=".$eiin);	
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>ADMINISTRATION</title>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<!--scroll script-->
    <script type="text/javascript" src="js/jquery_ui_min_1_8_8.js"></script>
    <script type="text/javascript" src="js/facescroll.js"></script>
    <!-- scroll script-->

<script>
            function accountdetails(str)
            {
                if (str == "")
                {
                    document.getElementById("table1").innerHTML = "";
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
						
                        document.getElementById("table1").innerHTML = xmlhttp.responseText;
						//load single data
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
							{
								
								document.getElementById("tab").innerHTML = xmlhttps.responseText;
								
							}
						}
						xmlhttps.open("GET", "ajx/account_setting2.php?r=" + str, true);
						xmlhttps.send()
						
						
						//load single data 
                    }
                }
                xmlhttp.open("GET", "ajx/account_setting.php?r=" + str, true);
                xmlhttp.send();
				
				
				
            }
        </script>


<script>
            function information(str)
            {
                if (str == "")
                {
                    document.getElementById("table2").innerHTML = "";
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
                        document.getElementById("table2").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/info.php?g=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function setting(str)
            {
                if (str == "")
                {
                    document.getElementById("table3").innerHTML = "";
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
                        document.getElementById("table3").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/setting.php?e=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showsquantity(str)
            {
                if (str == "")
                {
                    document.getElementById("sms").innerHTML = "";
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
                        document.getElementById("sms").innerHTML = xmlhttp.responseText;
                    }
                }
				
				number=document.getElementById('number').value;
				t_quantity=document.getElementById('t_quantity').value;
                xmlhttp.open("GET", "ajx/clint.php?q=" + str+"&t_quantity="+t_quantity+"&number="+number, true);
                xmlhttp.send();
            }
        </script>

<style>
	.TFtable{
		margin: 0 auto 0 auto;
		border-collapse:collapse;
		font-family:Tahoma, Geneva, sans-serif;
		font-size:13px;
		
		
	}
	.TFtable td{ 
		padding:5px; border:#09F 1px solid; 
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #D19500;

	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background:#dbe5f1;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background:#f2dbdb;
	}



.btn {
  background: #d93434;
  background-image: -webkit-linear-gradient(top, #d93434, #b82b2b);
  background-image: -moz-linear-gradient(top, #d93434, #b82b2b);
  background-image: -ms-linear-gradient(top, #d93434, #b82b2b);
  background-image: -o-linear-gradient(top, #d93434, #b82b2b);
  background-image: linear-gradient(to bottom, #d93434, #b82b2b);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 18px;
  padding: 6px 10px 6px 10px;
  text-decoration: none;
  border:none;
}

.btn:hover {
  background: #fc3c3c;
  background-image: -webkit-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -moz-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -ms-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -o-linear-gradient(top, #fc3c3c, #d93434);
  background-image: linear-gradient(to bottom, #fc3c3c, #d93434);
  text-decoration: none;
}
</style>
</head>

<body>
	<!-- body starts from here-->
        <?php include('include/head.php');?>
<div class="height-100 width_960 auto-position"> 
   <?php include('include/manu.php');?>
</div>
<div class="width_960 marging_left_right" >
  <?php include_once('class/esm.php'); ?>
</div>
<!----------body_all strart------------------------------------------------->
<div id="body_all" class="padding_top_5 padding_butttom_5">
   
   
   <!-----table_body start--------->
     <div class="table_body">
	 <?php if(isset($_GET['editschool'])){ ?>
        &nbsp;
        <?php }else{ ?>
     <!----------------head start-------------------->
       <div class="backgroung_3 height-50 width_100">
       <!---------manu start--------------------->
         <div id='cssmenu' class="left" style="margin-top:15px;">
            <ul>
                 <li class='has-sub last'><a href='#'><span>Sort by</span></a>
                  <ul>
                     <li><a href='#'><span>Type EIIN</span></a></li>
                     <li><a href='#'><span>Name</span></a></li>
                     <li><a href='#'><span>Date</span></a></li>
                     <li class='last'><a href='#'><span>Total Size</span></a></li>
                  </ul>
               </li>
            </ul>
        </div>
        
        <!---------manu end--------------------->
        
        <div class="left width_85 font_1 color_w">
          <h2 class="left">EIMS SOFTWARE USER</h2>
          <div class="right">
          
           <input type="search" name="search" placeholder="EIIN Number/Thana/District " class="padding_4 borber2 width-label-150"> <i class="fa fa-search font_20"></i>
             
          </div>
        </div>
        <div class="celr"></div>
        
        
       </div>
	   <?php } ?>
       <!----------------head end-------------------->
       <?php 
	   if(isset($_GET['editschool']))
	   {
		?>
        <div id="table1111" class="padding_5 width_99 height_auto" style="margin-top:-25px;">
             <?php 
   $array=array("eiin_number"=>$_GET['editschool']);
    $date=$obj->SelectAllByID("ams_singup", $array);
	 if(!empty($date))
	  foreach ($date as $row):
   ?>
   <form action="" method="post">
   <div class="backgroung_3 width_100 padding_bottom10 padding_top10 text_aling_center font_2 color_w" style="font-weight:bolder; font-size:22px;">
     <a class="color_w" id="eiin_number" onclick="information('<?php echo $row->eiin_number; ?>')" title="SMS Information Details" href="#"><i class="fa fa-cogs margin_left10 left font_20"></i></a> 
      Update User Account Details & Settings 
     <a class="right color_w" onclick="setting('<?php echo $row->eiin_number; ?>')" title="SMS Settings" href="#"><i class="fa fa-cogs margin_right10 font_20"></i></a>  
                 </div>
                 <div class="width_100">
                  <style type="text/css">
                   #dd tr td{ padding-left:30px; }
                  </style>
                   <table id="dd" class="width_100 font_2 color_b" cellpadding="0" cellspacing="1" border="0">
                     <tr class="backgroung_2">
                       <td class="padding_5" width="30%">EIIN Number</td>
                       <td class="padding_5">
					   <select name="eiin_new">
                       		<?php 
							$sqleiinnew=$obj->SelectAll("ams_admin_eiin_number");
							if(!empty($sqleiinnew))
							foreach($sqleiinnew as $eiinnew): 
							$chke=$obj->exists_multiple("ams_singup",array("eiin_number"=>$eiinnew->eiin));
							if($chke==0)
							{
							?>
                            <option value="<?php echo $eiinnew->eiin; ?>"><?php echo $eiinnew->eiin; ?></option>
                            <?php 
							}
							endforeach; ?>
                       </select>
					   Existing EIIN Number :  <?php echo $row->eiin_number; ?>
                       
                       </td>
                     </tr>
                     <input type="hidden" name="eiin" value="<?php echo $row->eiin_number; ?>" />
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Type</td>
                       <td class="padding_5">
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
					   <?php echo $row->acount_type; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Service Type</td>
                       <td class="padding_5"><?php echo $row->servic_type; ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Package Type</td>
                       <td class="padding_5"><?php echo $obj->SelectAllByVal("ams_package_type","id",$row->packs_type,"name"); ?></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Sender ID </td>
                       <td class="padding_5"><input type="text" name="sms_sander_id" value="<?php echo $row->sms_sander_id; ?>"  /></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Name </td>
                       <td class="padding_5"><input type="text" name="acount_name" value="<?php echo $row->acount_name; ?>"  /></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Holder Name </td>
                       <td class="padding_5"><input type="text" name="name" value="<?php echo $row->name; ?>"  /></td>
                       
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Account Holder Contact Number </td>
                       <td class="padding_5"><input type="text" name="account_holder_contact" value="<?php echo $row->number; ?>"  /></td>
                       
                     </tr>
                     
                    
                     <tr class="backgroung_2">
                       <td class="padding_5">Your Email </td>
                       <td class="padding_5"><input type="text" name="email" value="<?php echo $row->email; ?>"  /></td>
                      
                     </tr>
                     
                     <tr class="backgroung_2">
                       <td class="padding_5">Password </td>
                       <td class="padding_5"><input type="text" name="password" value="<?php echo $row->password; ?>"  /></td>
                      
                     </tr>
                     
                      <tr class="backgroung_2">
                       <td class="padding_5"></td>
                       <td class="padding_5"><button class="btn" type="submit" name="updateschool"> Change Updates </button> <a class="btn" href="<?php echo $obj->filename(); ?>"> Back To List </a></td>
                      
                     </tr>
                     
                     
                     
                   </table>
                 </div>
                 
       </form>
   <?php endforeach; ?>    
        </div>
        <?php   
	   }else{ ?>
       <!----------------Table Start-------------------->
       
         <div class="width_100 height_auto margin-top-10 padding_bottom10"  id="lastnewsscroll" style="height:auto; min-height:100px; max-height:500px; overflow:scroll;">
          
          
           
          <table class="TFtable width_98"  cellspacing="1" border="0" cellpadding="0" align="center">
                                <thead class="font_2">
                               <tr>
                                <td rowspan="4" class="center height-15 light_green">S.L</td>
                                <td rowspan="4" class="center height-15 light_green">EIIN</td>
                                <td rowspan="4" class="center height-15 light_green">Institute Name</td>
                                <td rowspan="4"  class="center height-15 light_green">Mobile</br>Number </td>
                                <td rowspan="4" class="center height-15 light_green">District</td>
                                <td rowspan="4" class="center height-15 light_green">Thana</td>
                                <td rowspan="4" class="center height-15 light_green">Package</br>Type</td>
                                <td rowspan="4" class="center height-15 light_green">Service</br>Status</td>
                                <td rowspan="4" class="center height-15 light_green">SMS</br>Status</td>
                                <td rowspan="4" class="center height-15 light_green">SMS</br>Quantity</td>
                                <td rowspan="2" colspan="2" class="center height-15 light_green">Service Validity</td>
                                <td rowspan="4" class="center height-15 light_green">Active</br>Date</td>
                                <td rowspan="4" class="center height-15 light_green">View</br> Details</td>
                                                              
                            </tr> 
                          <tr>
                          </tr>     
                                
                         <tr>         
                           <td rowspan="2" class="center height-15 light_yellow">Remaining</br>Day</td>
                            <td rowspan="2" class="center height-15 light_yellow">Expiry</br>Date</td>
                                     
                                       
                        </tr>
                        </thead> 
                        <tbody id="tab">    
                      <tr>        
                                                             
                   
    </tr>
    <?php 
		$data=$obj->SelectAll($table);
$s=1;
if(!empty($data))
foreach ($data as $row):

?>   
    <tr class="topgallery">
    <td class="center height-15"><?php echo $s; ?></td>
        <td class="center height-15"><?php echo $row->eiin_number; ?></td>
        <td class="center height-15"><?php echo $row->acount_name; ?></td>
        <td class="center height-15"><?php echo $row->number; ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("division","id",$row->divition,"name"); ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("thana","id",$row->zip_code,"name"); ?></td>
        <td class="center height-15"><?php echo $obj->SelectAllByVal("ams_package_type","id",$row->packs_type,"name"); ?></td>
        <td class="center height-15">
        <div id="manu2">
        <ul>
          <li>
            <?php $ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?>
                 <span class="color_red">Inactive</span>
				 <?php }else{ ?>
                 <span class="color_gr"><font color="#009900">Active</font></span>
				 <?php } ?>
                 </a>
                                    <ul class="backgroung_5">
                                      <li>
                                      <a name="update" href="eiin_number_setting2.php?update=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>"
		<?php 
			$ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
			if($ex==0){
		 ?>
                 <span class="color_red"><font color="#009900">Active</font></span>
				 <?php }else{ ?>
                 <span class="color_gr">Active</span>
				 <?php } ?>
                 </a>
                 </li>
                                      <li><span>
                                      <a name="update" href="eiin_number_setting2.php?update1=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>" >
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?><span class="color_w">Inactive</span><?php }else{ ?><span class="color_red">Inactive</span><?php } ?></a></span></li>
                                      <li><a href='#'><span>Pandding</span></a></li>
                                    </ul>
                                  </li>
                                </ul>
                             </div>
                            
        
        </td>
        <td class="center height-15">
        					<div id="manu3">
        							<ul>
          							<li class="has-sub">
                                    <a href="#">Active</a>
                                    
                                        <ul style="background:rgba(51,51,51,1); z-index:999;">
                                          <li><span><a href="#">Active</a></span></li>
                                          <li><span><a href="#">Inactive</a></span></li>
                                          <li><span><a href="#">Only Absent</a></span></li>
                                          <li><span><a href="#">Absent &amp; Present Both</a></span></li>
                                        </ul>
                                    </li>
									</ul>	                                    
                             </div>
                            </td>
        <td class="center height-15"><?php echo $ops->sms_available($row->eiin_number);  ?></td>
        <td class="center height-15"><?php 
		$rem=$obj->makedate($row->date,'365');
		$rr=$obj->duration(date('Y-m-d'),$rem); echo $rr; ?></td></td>
        <td class="center height-15"><?php  echo $rem; ?></td>
        <td class="center height-15"><?php echo $row->date; ?></td>
        <td class="center height-15">
         <a onclick="accountdetails('<?php echo $row->eiin_number; ?>')" class="color_b font_25" href="#"><!--<i class="fa fa-th-list"></i>--><img src="../images/contact_new.png" /></a>
         </td>
                   
    </tr>
    <?php 
	$s++; endforeach; ?>
   
   </tbody>
      
    </table>
</div>
             <!----------------Table End-------------------->
             <?php } ?>
             <!----------------Table_1 start-------------------->
               <div id="table1" class="padding_5 width_99 height_auto">
                 
               </div>
       <!----------------Table_1 End-------------------->
       
       
       
       <!----------------Table_2 start-------------------->
               <div id="table2" class="padding_5 width_99 height_auto">
                 
               </div>
       <!----------------Table_2 End-------------------->
       
       <!-----table_sms_setting start--------->
     <div  id="table3" class="width_100 height_auto  padding_butttom_5">
     
      
     
       <div class="celr"></div>
     </div>
   <!-----table_sms_setting start--------->
       
      <div class="celr"></div>
     </div>
   <!-----table_body end--------->
   
   
   
   
</div>
<!----------body_all end------------------------------------------------->  
              
 <!----------footer start------------------------------------------------->                
 <?php include ('./class/footer.php'); ?>
<!----------footer end------------------------------------------------->   
   <?php include('include/admin.php');?>
     
</body>
</html>