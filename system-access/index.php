<?php
session_start();
$error_data[]='';
$error_flag=false;
include('class/db_Class.php');
$obj=new db_class();
if(isset($_POST['login']))
{
	if($obj->exists_multiple("ams_singup",array("eiin_number"=>$_POST['name'],"password"=>$_POST['password'],"status"=>3)))
	{
		session_regenerate_id();
		$_SESSION['SESS_AMSIT_USERLOGIN_KEY']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"id");
		$_SESSION['SESS_USERNAME']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"eiin_number");
		$_SESSION['SESS_STATUS']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"status");
		$_SESSION['SESS_SESSION_SCHOOL_ID']=$obj->SelectAllByVal("ams_singup","eiin_number",$_POST['name'],"id");
		session_write_close();
		header('location: homepage.php');
		//echo "login ";
		exit();	
	}
	else
	{
		if($obj->exists_multiple("ams_student_login",array("admition"=>$_POST['name'],"password"=>$_POST['password'],"status"=>1)))
	{
		session_regenerate_id();
		$_SESSION['SESS_AMSIT_STLOGIN_KEY']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"admition");
		$_SESSION['SESS_STSTATUS']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"status");
		$_SESSION['SESS_SESSION_STSCHOOL_ID']=$obj->SelectAllByVal("ams_student_login","admition",$_POST['name'],"school_id");
		session_write_close();
		header('location: student_panel.php');
		//echo $obj->Success("Successfully Login.....",$obj->filename());
		exit();	
	}else{
		echo $obj->Error("Login Failed",$obj->filename());	
	}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('class/head.php'); ?>
<link href="css/grid.css" rel="stylesheet" type="text/css" />
</head>
	
<body>
	<!-- body starts from here-->
       <div id="body_container">
                <?php include('class/header.php'); ?>
                <div class="body">
                   <div class="body_left">
                   		<div class="menu2_div">
                            <ul id="nav" style="margin-top:10px;">
                                <li ><a href="sms_service.php" style="color:#09F;" target="_blank">SMS Service</a></li>
                                <li><a href="eims_software.php" style="color:#09F;"  target="_blank">EIMS Software</a></li>
								<?php include_once('class/esm.php'); ?>
                            </ul>
                    	</div>
                    <div class="body_bottom_left">
                    
                   	  <p>Send SMS through Skeleton</p>
                        <a href="signup.php" target="_blank"><img src="images/join_01.png" alt="Join Skeleton Tech" title="Join Skeleton Tech today" /></a>
                    
                    </div>
                  </div>
                   <div class="body_right"><img src="images/Untitled_01.png" alt="" /></div>
                   <div class="clear"></div>
                 
                 <div class="container">
                 
                 	<div class="back_shade"></div>
                    <h2 class="headline">Details Features of Skeleton Tech EIMS Software</h2>
                    
                    <div class="feature_box_container">
                    
                    <!-- 1st row starts -->
                    <div class="row">
                    
                    	<!-- 1st box starts -->
                        <div class="feature_box">
                        
                        	<p>Student&rsquo;s admission</p>
                            
                            <ul>
                            	<li>Comprehensive admission form</li>
                                <li>Unique ID for all students</li>
                                <li>Details information entry</li>
                                <li>Emergency contact facility</li>
                                <li>Photo upload facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/admission_icon.png" alt="" />
                            </div>
                           
                        </div>
                        <!-- 1st box ends -->
                        
                        <!-- 2nd box starts -->
                        <div class="feature_box">
                        
                        	<p>Student&rsquo;s details</p>
                            
                            <ul>
                            	<li>View student details to profile</li>
                                <li>View reports of student</li>
                                <li>Profile &amp; reports download/save</li>
                                <li>Academic payment check</li>
                                <li>Edit, delete &amp; more facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/details_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 2nd box ends -->
                        
                        <!-- 3rd box starts -->
                        <div class="feature_box">
                        
                        	<p>Examinations</p>
                            
                            <ul>
                            	<li>Create different types of result Card</li>
                                <li>Customizable progress report</li>
                                <li>Automatic report generate</li>
                                <li>Extensive tabulation shit</li>
                                <li>Merit list, GPA and CGPA methods</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/examination_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 3rd box ends -->
                        
                        <div class="clear"></div>
                    
                    </div>
                    <!-- 1st row ends -->
                    
                    <!-- 2nd row starts -->
                    <div class="row">
                    
                    	<!-- 1st box starts -->
                        <div class="feature_box">
                        
                        	<p>Timetable</p>
                            
                            <ul>
                            	<li>View students time&minus;table</li>
                                <li>View teachers time&minus;table</li>
                                <li>View details class routine</li>
                                <li>Time&minus;table creation advance</li>
                                <li>Edit/Delete time-table facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/timetable_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 1st box ends -->
                        
                        <!-- 2nd box starts -->
                        <div class="feature_box">
                        
                        	<p>Attendance</p>
                            
                            <ul>
                            	<li>Attendance register maintains facility</li>
                                <li>Attendance report of students monthly &amp; yearly mode wise</li>
                                <li>View percent of attendance working day wise</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/attendance_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 2nd box ends -->
                        
                        <!-- 3rd box starts -->
                        <div class="feature_box">
                        
                        	<p>Manage user</p>
                            
                            <ul>
                            	<li>Search for any group/user using the search bar</li>
                                <li>View profile of all users based on the roles</li>
                                <li>Edit, delete &amp; more facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/manage_user_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 3rd box ends -->
                        
                        <div class="clear"></div>
                    
                    </div>
                    <!-- 2nd row ends -->
                    
                    <!-- 3rd row starts -->
                    <div class="row">
                    
                    	<!-- 1st box starts -->
                        <div class="feature_box">
                        
                        	<p>Finance (Accounts)</p>
                            
                            <ul>
                            	<li>Comprehensive fee collection system</li>
                                <li>Easy fee submission system</li>
                                <li>Pay slip approval system</li>
                                <li>Manage &amp; Pay instant fees</li>
                                <li>Manage inter expenses and income</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/finance_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 1st box ends -->
                        
                        <!-- 2nd box starts -->
                        <div class="feature_box">
                        
                        	<p>Transports</p>
                            
                            <ul>
                            	<li>View details information of school/college vehicles</li>
                                <li>View details profile of driver</li>
                                <li>Add destination and cost details</li>
                                <li>Edit, delete &amp; more facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/transports_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 2nd box ends -->
                        
                        <!-- 3rd box starts -->
                        <div class="feature_box">
                        
                        	<p>SMS service</p>
                            
                            <ul>
                            	<li>SMS send to your contact list</li>
                                <li>View details of total send SMS</li>
                                <li>Send SMS check day to day wise</li>
                                <li>View details purchase, expend &amp; current SMS</li>
                                <li>Day to day wise SMS check facility</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/sms_icon.png" alt="" />
                            </div>
                            
                        </div>
                        <!-- 3rd box ends -->
                        
                        <div class="clear"></div>
                    
                    </div>
                    <!-- 3rd row ends -->
                    
                    <!-- 4th row starts -->
                    <div class="row">
                    
                    	<!-- 1st box starts -->
                        <div class="feature_box">
                        
                        	<p>Academic calendars</p>
                            
                            <ul>
                            	<li>Display Events, Examination, Holiday and Dues in the calendars</li>
                                <li>Separate color for each action as categorized item above</li>
                                <li>Monthly view of all items</li>
                                <li>Easy navigation of calendar month</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/calendar_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 1st box ends -->
                        
                        <!-- 2nd box starts -->
                        <div class="feature_box">
                        
                        	<p>Students/Parents Login</p>
                            
                            <ul>
                            	<li>Get login access to all students or parents anywhere for knowing their academic information</li>
                                <li>View institute information as profile, examination, result, attendance, routine, class schedule and others etc.</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/stu_prnt_login_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 2nd box ends -->
                        
                        <!-- 3rd box starts -->
                        <div class="feature_box">
                        
                        	<p>Teachers/Employee Login</p>
                            
                            <ul>
                            	<li>Get login access to all students or parents anywhere for knowing their academic information</li>
                                <li>View institute information as profile, examination, result, attendance, routine, class schedule and others etc.</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/tchr_emply_login_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 3rd box ends -->
                        
                        <div class="clear"></div>
                    
                    </div>
                    <!-- 4th row ends -->
                    
                    <!-- 5th row starts -->
                    <div class="row">
                    
                    	<!-- 1st box starts -->
                        <div class="feature_box">
                        
                        	<p>EIMS messengers</p>
                            
                            <ul>
                            	<li>An internal messaging system</li>
                                <li>Written communication with another institution</li>
                                <li>Chatting facility an institution to another</li>
                                <li>Idea, planning or information sharing with another institution</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/eims_msngr_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 1st box ends -->
                        
                        <!-- 2nd box starts -->
                        <div class="feature_box">
                        
                        	<p>And many others</p>
                            
                            <ul>
                            	<li>Institution Logo/image set</li>
                                <li>Change the application color if your necessity</li>
                                <li>Create new group</li>
                                <li>Students statistics report</li>
                                <li>Student promote to next class</li>
                                <li>Notice, message book etc.</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/others_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 2nd box ends -->
                        
                        <!-- 3rd box starts -->
                        <div class="feature_box">
                        
                        	<p>Settings</p>
                            
                            <ul>
                            	<li>Attendance register settings</li>
                                <li>Exam configurations</li>
                                <li>Students and teachers timetable settings</li>
                                <li>Manage group create and settings</li>
                                <li>Finance (Accounts) settings</li>
                                <li>Transports settings</li>
                            </ul>
                            
                            <div class="feature_box_header">
                            	<img src="images/extra_images/settings_icon.png" alt="" />
                            </div>
                        
                        </div>
                        <!-- 3rd box ends -->
                        
                        <div class="clear"></div>
                    
                    </div>
                    <!-- 5th row ends -->
                    
                    </div>
                    
                    <p>A fully flexible and integrated system for school/college management and SMS service.</p>
                    <p>We provide 24*7 hours service with thoroughly safety and security.</p>
                    <ul>
                    	<li>Technical support</li>
                        <li>Customization support</li>
                        <li>Priority support</li>
                        <li>And no hidden fees</li>
                    </ul>
                    <p>This is not just a word to say.....This is true and our promise. So, move forward your institution with Skeleton Tech EIMS software.</p>
                 
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