<?php
include_once('class/auth.php');
$table="ams_admission";
$table1="ams_student_login";
$w=80; $h=100; $thumb="photo/";
if(isset($_POST['save']))

{
	
	
    if($obj->exists_Multiple($table,array("name"=>$_POST['name'],
	"admition"=>$_POST['admition'],
	"class_id"=>$_POST['class'],
	"roll"=>$_POST['roll'],
	"section_id"=>$_POST['section'],
	"session_id"=>$_POST['session'],
	"shift_id"=>$_POST['shift'],
	"group_id"=>$_POST['group'],
	"dob"=>$_POST['dob'],
	"blood_group"=>$_POST['blood_group'],
	"gender"=>$_POST['gender'],
	"mother_name"=>$_POST['m_name'],
	"father_name"=>$_POST['f_name'],
	"guardian_name"=>$_POST['g_name'],
	"occupation"=>$_POST['occupation'],
	"income"=>$_POST['income'],
	"number"=>$_POST['number'],
	"serial_number"=>$_POST['serial'],
	"present_address"=>$_POST['ps_address'],
	"permanent_address"=>$_POST['pr_address'],
	"state"=>$_POST['state'],
	"city"=>$_POST['city'],
	"zip_code"=>$_POST['code'],
	"countryr"=>$_POST['country'],
	"phone_number"=>$_POST['p_number'],
	"email"=>$_POST['email'],
	"photo"=>$photo,
	"school_id"=>$school))==0 
	&& !empty($_POST['name']) 
	&& !empty($_POST['admition'])
	&& !empty($_POST['class'])
	&& !empty($_POST['roll'])
	&& !empty($_POST['section'])
	&& !empty($_POST['session'])
	&& !empty($_POST['shift'])
	&& !empty($_POST['group']))
	
	
	    
	{
			if(!empty($_FILES['image']['name']))
			{
				$files =$obj->image_bigcaption($w,$h,$thumb);
				$photo=substr($files,6,1600);
			}
			else 
			{
				$photo="";
			}
			
			//$obj->insert($table1,array("name"=>$_POST['name'],"admition"=>$_POST['admition'],"class_id"=>$_POST['class'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"session_id"=>$_POST['session'],"shift_id"=>$_POST['shift'],"group_id"=>$_POST['group'],"dob"=>$_POST['dob'],"blood_group"=>$_POST['blood_group'],"gender"=>$_POST['gender'],"nationality"=>$_POST['nationality'],"religion"=>$_POST['religion'],"language"=>$_POST['language'],"mother_name"=>$_POST['m_name'],"father_name"=>$_POST['f_name'],"guardian_name"=>$_POST['g_name'],"occupation"=>$_POST['occupation'],"income"=>$_POST['income'],"number"=>$_POST['number'],"serial_number"=>$_POST['serial'],"present_address"=>$_POST['ps_address'],"permanent_address"=>$_POST['pr_address'],"state"=>$_POST['state'],"city"=>$_POST['city'],"zip_code"=>$_POST['code'],"countryr"=>$_POST['country'],"phone_number"=>$_POST['p_number'],"email"=>$_POST['email'],"photo"=>$photo,"school_id"=>$school,"date"=>$_POST['date'],"password"=>$_POST['admition'],"status"=>1));
		
		
			if($obj->insert($table,array("name"=>$_POST['name'],
			"admition"=>$_POST['admition'],
			"class_id"=>$_POST['class'],
			"roll"=>$_POST['roll'],
			"section_id"=>$_POST['section'],
			"session_id"=>$_POST['session'],
			"shift_id"=>$_POST['shift'],
			"group_id"=>$_POST['group'],
			"dob"=>$_POST['dob'],
			"blood_group"=>$_POST['blood_group'],
			"gender"=>$_POST['gender'],
			"nationality"=>$_POST['nationality'],
			"religion"=>$_POST['religion'],
			"language"=>$_POST['language'],
			"mother_name"=>$_POST['m_name'],
			"father_name"=>$_POST['f_name'],
			"guardian_name"=>$_POST['g_name'],
			"occupation"=>$_POST['occupation'],
			"income"=>$_POST['income'],
			"number"=>$_POST['number'],
			"serial_number"=>$_POST['serial'],
			"present_address"=>$_POST['ps_address'],
			"permanent_address"=>$_POST['pr_address'],
			"state"=>$_POST['state'],
			"city"=>$_POST['city'],
			"zip_code"=>$_POST['code'],
			"countryr"=>$_POST['country'],
			"phone_number"=>$_POST['p_number'],
			"email"=>$_POST['email'],
			"photo"=>$photo,
			"school_id"=>$school,
			"date"=>$_POST['date'],
			"status"=>1))==1)
			
			
			{
				echo $obj->Success("You are Successfully Submitted Your Information",$obj->filename());
			}
			else
			{
				echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
			}
	
  }
		    else
			{
				echo $obj->Error("Somthing Wrong Please Try Again...",$obj->filename());	
			}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
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
						xmlhttpg = new XMLHttpRequest();
						xmlhttpg.onreadystatechange = function()
						{
							if (xmlhttpg.readyState == 4 && xmlhttpg.status == 200)
							{
								document.getElementById("group").innerHTML = xmlhttpg.responseText;
							}
						}
						xmlhttpg.open("GET", "ajx/group1.php?s=" + str, true);
						xmlhttpg.send();
						//show group end
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

      <style type="text/css">

            .CSSTableGenerator {				margin:0px;padding:0px;				width:100%;				box-shadow: 10px 10px 5px #888888;				border:1px solid #000000;				-moz-border-radius-bottomleft:0px;				-webkit-border-bottom-left-radius:0px;				border-bottom-left-radius:0px;				-moz-border-radius-bottomright:0px;				-webkit-border-bottom-right-radius:0px;				border-bottom-right-radius:0px;				-moz-border-radius-topright:0px;				-webkit-border-top-right-radius:0px;				border-top-right-radius:0px;				-moz-border-radius-topleft:0px;				-webkit-border-top-left-radius:0px;				border-top-left-radius:0px;				}.CSSTableGenerator table{				border-collapse: collapse;				border-spacing: 0;				width:100%;				height:100%;				margin:0px;padding:0px;				}.CSSTableGenerator tr:last-child td:last-child {				-moz-border-radius-bottomright:0px;				-webkit-border-bottom-right-radius:0px;				border-bottom-right-radius:0px;				}				.CSSTableGenerator table tr:first-child td:first-child {				-moz-border-radius-topleft:0px;				-webkit-border-top-left-radius:0px;				border-top-left-radius:0px;				}				.CSSTableGenerator table tr:first-child td:last-child {				-moz-border-radius-topright:0px;				-webkit-border-top-right-radius:0px;				border-top-right-radius:0px;				}.CSSTableGenerator tr:last-child td:first-child{				-moz-border-radius-bottomleft:0px;				-webkit-border-bottom-left-radius:0px;				border-bottom-left-radius:0px;				}.CSSTableGenerator tr:hover td{				}				.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }				.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{				vertical-align:middle;				border:1px solid #000000;				border-width:0px 1px 1px 0px;				text-align:left;				padding:7px;				font-size:10px;				font-family:Arial;				font-weight:normal;				color:#000000;				}.CSSTableGenerator tr:last-child td{				border-width:0px 1px 0px 0px;				}.CSSTableGenerator tr td:last-child{				border-width:0px 0px 1px 0px;				}.CSSTableGenerator tr:last-child td:last-child{				border-width:0px 0px 0px 0px;				}				.CSSTableGenerator tr:first-child td{				background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );				background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);				background-color:#005fbf;				border:0px solid #000000;				text-align:center;				border-width:0px 0px 1px 1px;				font-size:14px;				font-family:Arial;				font-weight:bold;				color:#ffffff;				}				.CSSTableGenerator tr:first-child:hover td{				background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );				background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);				background-color:#005fbf;				}				.CSSTableGenerator tr:first-child td:first-child{				border-width:0px 0px 1px 0px;				}				.CSSTableGenerator tr:first-child td:last-child{				border-width:0px 0px 1px 1px;				}				</style>

<style type="text/css">
.sms_plan_button1 {
    border: 1px solid #25729A;
    border-radius: 3px;
    font-size: 12px;
    font-family: arial,helvetica,sans-serif;
    padding: 5px;
    text-decoration: none;
    display: inline-block;
    text-shadow: -1px -1px 0px rgba(0, 0, 0, 0.3);
    font-weight: bold;
    color: #FFF;
    background-color: #00FF33;
    background-image: linear-gradient(to bottom, #00FF33, #33CC00);
}

.sms_plan_button2 {
    border: 1px solid #25729A;
    border-radius: 3px;
    font-size: 12px;
    font-family: arial,helvetica,sans-serif;
    padding: 5px;
    text-decoration: none;
    display: inline-block;
    text-shadow: -1px -1px 0px rgba(0, 0, 0, 0.3);
    font-weight: bold;
    color: #FFF;
    background-color: #3093C7;
    background-image: linear-gradient(to bottom, #3093C7, #1C5A85);
}

.sms_plan_button3 {
    border: 1px solid #25729A;
    border-radius: 3px;
    font-size: 12px;
    font-family: arial,helvetica,sans-serif;
    padding: 5px;
    text-decoration: none;
    display: inline-block;
    text-shadow: -1px -1px 0px rgba(0, 0, 0, 0.3);
    font-weight: bold;
    color: #FFF;
    background-color: #FF9900;
    background-image: linear-gradient(to bottom, #FF9900, #FFCC00);
}
</style>

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
                            <img src="images/extra_images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">ADMISSION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>ADMISSION</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <script>
                    $(document).ready(function (e) 
					{
						$("#save").on('click', (function (e) 
						{
							//alert("Success");
							var name = $("#name").val(); 
							var session = $("#session").val(); 
							var class_name = $("#class").val(); 
							var group = $("#group").val(); 
							
							var section = $("#section").val(); 
							var hh_inpput = $("#shift").val();
							 
							var roll = $("#roll").val(); 
							
							var dob = $("#calendar2").val(); 
							var blood_group = $("#blood_group").val(); 
							var gender = $("#gender").val(); 
							var nationality = $("#nationality").val(); 
							var religion = $("#religion").val(); 
							var language = $("#language").val(); 
							var m_name = $("#m_name").val(); 
							var f_name = $("#f_name").val();
							var g_name = $("#g_name").val(); 
							var occupation = $("#occupation").val(); 
							var income = $("#income").val(); 
							var number = $("#number").val(); 
							var ps_address = $("#ps_address").val(); 
							var pr_address = $("#pr_address").val(); 
							var country = $("#country").val();
							var division = $("#division").val();
							var district = $("#district").val();
							var thana = $("#thana").val();
							var p_number = $("#p_number").val();
							var email = $("#email").val();
							
							var admission=$("#admission").val();
							if (name.length == 0 || session.length == 0 || class_name.length == 0 || roll.length == 0 || section.length == 0 || hh_inpput.length == 0 || group.length == 0 || g_name.length == 0 || dob.length == 0 || blood_group.length == 0 || gender.length == 0 || nationality.length == 0 || religion.length == 0 || language.length == 0 || m_name.length == 0 || f_name.length == 0 || occupation.length == 0 || income.length == 0 || number.length == 0 || number.length == 0)
							{
								var imagess = "<div class='dash_label' style='margin-top:15px; padding-left:10px;  color:#f00; text-align:left;'>Both Field Should Not Be Empty </div>";
								$("#wrong").html(imagess);
							}
							else
							{
								var imagess = "<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'><img src='images/loader-big.gif' style='margin-top:8px;'>Please Wait, We Are Processing Your Data.. </div>";
		
								$("#wrong").html(imagess);
								post_data = {'status': 11,'admission': admission,'name': name, 'session': session, 'class': class_name, 'roll': roll, 'section': section, 'shift': hh_inpput,'group':group, 'g_name': g_name, 'dob': dob, 'blood_group': blood_group, 'gender': gender, 'nationality': nationality, 'religion': religion, 'language': language, 'm_name': m_name, 'f_name': f_name, 'occupation': occupation, 'income': income, 'number': number, 'ps_address': ps_address, 'pr_address': pr_address, 'country': country, 'division': division, 'district': district, 'thana': thana, 'p_number': p_number, 'email': email};
								$.post('json/student.php', post_data, function (datas) 
								{
									
									if(datas==1)
									{
										$("#wrong").html("Student Info Successfully Added.");
										post_data2 = {'status': 3,'session': session, 'class': class_name,'group': group,'admission': admission};
										$.post('json/student.php', post_data2, function (datas2) 
										{
											$("#load_all_subject").html(datas2);
											//$("#wrong").css("height", "auto");
										});
									}
									else if(datas==2)
									{
										alert("This Student Data Already Exists, In System");
									}
									else
									{
										$("#wrong").html("Error : "+datas +", Failed, Please Try Again.");
										$("#wrong").css("height", "auto");
									}
								});
								
								
							}
						}));
						
					});
				</script>
            <script>

            function student_subjects(subject_id,session_id,class_id,group_id,admission,st)
			{
				if (window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function ()
					{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//$(this).closest('tr').remove();
							if(st==1)
							{
								var imagess="Compulsory Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':4,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_mandatory").html(datas2);
									$("#m"+subject_id).css("background","#000");
								});
							}
							else if(st==2)
							{
								var imagess="Optional Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':5,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_optional").html(datas2);
									$("#o"+subject_id).css("background","#000");
								});
							}
							else if(st==3)
							{
								var imagess="Fourth Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':6,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_fourth").html(datas2);
									$("#f"+subject_id).css("background","#000");
								});
							}
							else
							{
								alert('Failed, Please Reload Again.');
							}
							//document.getElementById("section").innerHTML = xmlhttp.responseText;
							
						}
					}
					xmlhttp.open("GET", "ajx/subject_add.php?subject_id="+subject_id+"&class_id="+class_id+"&group_id="+group_id+"&admission="+admission+"&session="+session_id+"&sts="+st, true);
					xmlhttp.send();
				}
				
			function del_student_subjects(id,st)
			{
				if (window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function ()
					{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//$(this).closest('tr').remove();
							if(st==1)
							{
								var imagess="Compulsory Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':4,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_mandatory").html(datas2);
									$("#mhide"+subject_id).css("background","#000");
								});
							}
							else if(st==2)
							{
								var imagess="Optional Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':5,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_optional").html(datas2);
									$("#o"+subject_id).css("background","#000");
								});
							}
							else if(st==3)
							{
								var imagess="Fourth Subject Added  Successfully .";
								$("#wrong2").html(imagess);
								post_data2 = {'status':6,'session': session_id, 'class': class_id,'group': group_id,'admission': admission};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									$("#load_all_subject_fourth").html(datas2);
									$("#f"+subject_id).css("background","#000");
								});
							}
							else
							{
								alert('Failed, Please Reload Again.');
							}
							//document.getElementById("section").innerHTML = xmlhttp.responseText;
							
						}
					}
					xmlhttp.open("GET", "ajx/subject_add.php?subject_id="+subject_id+"&class_id="+class_id+"&group_id="+group_id+"&admission="+admission+"&session="+session_id+"&sts="+st, true);
					xmlhttp.send();
				}
                </script>
                <script>
					$(document).ready(function () {
						$('#mdisplay').on('click', 'input[type="radio"]', function(e){  
							var chkclass=$(this).closest('tr').attr('id');
						   	var imagess="Compulsory Subject Deleted  Successfully .";
							
							post_data2 = {'status':7,'id':chkclass};
							$.post('json/student.php', post_data2, function (datas2) 
							{
								$("#wrong2").html(imagess);
								
							});	
							$(this).closest('tr').remove();
						})
					});
					
					$(document).ready(function () {
						$('#odisplay').on('click', 'input[type="radio"]', function(e){  
							var chkclass=$(this).closest('tr').attr('id');
						   	var imagess="Optional Subject Deleted  Successfully .";
							
							post_data2 = {'status':7,'id':chkclass};
							$.post('json/student.php', post_data2, function (datas2) 
							{
								$("#wrong2").html(imagess);
								
							});	
							$(this).closest('tr').remove();
						})
					});
					
					$(document).ready(function () {
						$('#fdisplay').on('click', 'input[type="radio"]', function(e){  
							var chkclass=$(this).closest('tr').attr('id');
						   	var imagess="Fourth Subject Deleted  Successfully .";
							
							post_data2 = {'status':7,'id':chkclass};
							$.post('json/student.php', post_data2, function (datas2) 
							{
								$("#wrong2").html(imagess);
								
							});	
							$(this).closest('tr').remove();
						})
					});
					</script>
                <script type="text/javascript" src="json/upload_image.js"></script>
                
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both;" >
                	<div id="wrong">
                    </div>
                    <div class="admission_div_top shadow_inner" style="color:#339;">
                    
                      
                        <div class="width-label-450 height-100 left margin-top-10 margin_left10">
                            <ul>
                                <li class="add_st_form_div_label height-30 width-label-200 left margin-top-10 margin_bottom10 ">
                                    Admission Serial Number<span class="right">
                                        :</span>
                                </li>
                                <li class="add_st_form_div_label height-30 width-label-100 left margin-top-10 margin_bottom10">
<input name="admission" type="text" placeholder="Type Serial Number Here" value="<?php $admission_id=$school."".$obj->RandNumber(4);  echo $admission_id;  ?>" name="serial" class="textbox" />
                                </li>

                                <li class="add_st_form_div_label height-30 width-label-200 left margin-top-10 margin_bottom10 ">
                                    Admission Date<span class="right">
                                        :</span>
                                </li>
                                <li class="add_st_form_div_label height-30 width-label-100 left margin-top-10 margin_bottom10">
                                    <input type="date" name="date" readonly="readonly" size="12" id="calendar" value="<?php echo date('d-m-y'); ?>" placeholder="Type Admission Date Here" class="textbox"/>
                                </li>
                            </ul>
                        </div>
                        <div class="width-label-450 height-100 right margin-top-10 margin_right10">
                            <div class="width-label-100 left">
                                <ul>
                                    <li class="add_st_form_div_label height-30 width-label-150 margin-top-35 left"></li>
                                </ul>
                            </div>
                            
                            <div id="upc" class="width-label-150 margin_left50 margin-top-5 right" style="overflow:hidden; line-height:20px;">
                                <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                                    <div id="selectImage" style="height:90px;">
                                        <span style="border-bottom:1px #333333 solid; display:block; text-align:center; margin-bottom:10px;">Student Image</span>
                                        <input type="file" name="file" id="file" required />
                                        <input type="hidden" name="admission_id" id="admission_id" value="<?php echo $admission_id; ?>" />
                                        <input type="submit" value="Upload" class="submit" />
                                    </div>
                                </form>
                            </div>
                            <div id="image_preview" class="width-label-80 height-80 margin_left10 margin-top-10 right border_red1 b_radius5"  style="background:#FFF; overflow:hidden;">
                                <img id="previewing" width="80" height="80" src="images/noimage.png" />
                            </div>
                        </div>
                        <!--<li class="add_st_form_div_label height-30 width-label-200 right margin-top-10 margin_bottom10">
                        <input type="file" id="image" name="image" class=""/>
                        </li>
                        -->
                        </ul>
                    </div>

					<form action="#" method="post" name="adm" enctype="multipart/form-data">
                    	<input name="admission" id="admission" type="hidden" value="<?php echo $admission_id;  ?>" name="serial"  />
                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Personal Detail :</left></h2>
                        </div>
                       
                        <div class="admission_form_div width-col2 auto-position" style="color:#339;">
                        

                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Student Name <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="name" id="name" placeholder="Type Student's Name Here" class="textbox"/>
                                </li>
                                
                               <input type="hidden" name="school" id="school" value="<?php echo $school; ?>" />
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Session <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="session" class="hh_inpput" name="session" onchange="showcls(this.value)" >
                                        <option>Select Session</option>
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
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Class / Course <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                     <select name="class" id="class" onchange="showsection(this.value)" class="hh_inpput" >
                                        <option>Select Class / Course</option>
                                       
                                        
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Group <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="group" id="group" class="hh_inpput">
                                        <option>Select Section</option>
                                          
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> Section <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                     <select name="section" id="section" onchange="showshift(this.value)" class="hh_inpput">
                                        <option>Select Section</option>
                                          
                                    </select>
                                </li>
                                
                                 
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Shift <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                  <select name="shift" id="shift" class="hh_inpput">
                                      <option>Select Shift</option>
                                        
                                    </select>
                                </li>
                                
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Roll <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="roll" id="roll" placeholder="Type Roll Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Date of Birth<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input id="calendar2" name="dob" placeholder="Type Date of Birth Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Blood Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="blood_group" id="blood_group" class="hh_inpput" >
                                        <option>Select Blood Group</option>
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
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Gender <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="gender" id="gender" class="hh_inpput" >
                                        <option>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Nationality <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="nationality" id="nationality" class="hh_inpput">
                                        <option>Nationality</option>
                                        <option value="Bangladeshi">Bangladeshi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Religion <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="religion" id="religion" class="hh_inpput" >
                                        <option>Religion</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Language <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="language" id="language" class="hh_inpput">
                                        <option>Language</option>
                                        <option value="Bangali">Bangla</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Mother's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="m_name" id="m_name" placeholder="Type Mother's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Father's Name<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="f_name" id="f_name" placeholder="Type Father's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Guardian's Name <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="g_name" id="g_name" placeholder="Type Guardian's Name Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Occupation<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="occupation" id="occupation" placeholder="Type Guardian's Occupation Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Income<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="income" id="income" placeholder="Type Guardian's Monthly Income Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Mobile Number <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="number" id="number" placeholder="Type Mobile Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Present Address <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="ps_address" id="ps_address" placeholder="Type Present Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left"> Permanent Address <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                 <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="pr_address" id="pr_address" placeholder="Type Permanent Address Here" class="textbox"/>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Country <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="country" id="country" onchange="showdivision(this.value)"  class="hh_inpput">
                                       <option>Country</option>
                                       <?php  $sqlcountry=$obj->SelectAll("country");
									   if(!empty($sqlcountry))
									   foreach($sqlcountry as $country): ?>
                                       <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                </li>
                                                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Division / State <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="state" onchange="showdistrict(this.value)" id="division" class="hh_inpput">
                                        <option>Division / State</option>
                                        <?php  $sqlcountry=$obj->SelectAll("division");
									   if(!empty($sqlcountry))
									   foreach($sqlcountry as $country): ?>
                                       <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                       <?php endforeach; ?>
                                   </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">District / City <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="city" onchange="showthana(this.value)"  id="district" class="hh_inpput">
                                        <option>District / City</option>
                                        <?php 
										 $city=$obj->SelectAll('district');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Thana / Zip code <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <!--<input name="code" placeholder="Type zipe code / thana" class="textbox"/>-->
                                    <select name="code" id="thana" class="hh_inpput">
                                        <option>Thana / Zip Code</option>
                                        <?php 
										 $city=$obj->SelectAll('thana');
										 if(!empty($city))
										 foreach($city as $ct):
										 ?>
                                        <option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </li>
                                
                                
                                                               
                                <li class="admission_form_div_label height-30 width-label-200 left"> Phone Number <span style="color:#C00;">&lowast;</span><span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="p_number" id="p_number" placeholder="Type Phone Number Here" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left"> Email<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="email" id="email" placeholder="Type Email Id Here" class="textbox"/>
                                </li>
                                
                                                              
                                <!--<li class="admission_form_div_label height-30 width-label-200 left"> Upload Profile Photo</br>(60 KB Max.)
                                <span class="right">:</span></li>
                                <li class="admission_form_div_label height-35 width-label-250 right margin-top-25">
                                    <input type="file" name="image" placeholder=" " class="textbox"/>
                                </li>-->
                                
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                      				<button type="button" id="save" name="save" class=" height-35 div_btn">Add Admission Full Record</button>
                                   
                                </li>

                            </ul>
                            </form>

                        </div>
                        

                    </div>



                </div>


            </div>
            
            <!--add subject panel starts here------------------------------------------------------------------------------------------------------->
                <div class="add_st_div shadow_inner" style="margin-top: 20px;">
                    <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                        <h2 class="margin_left30">
                            <left>
                                Add Subject To Student :</left>
                        </h2>
                    </div>
                    <form action="" method="post" name="add_sub">
                        <div style="padding:10px; width:450px; min-height:150px !important;" class="subject_table left">
                            <table cellpadding="0" cellspacing="1" border="0" class="display">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                        	SL
                                        </th>
                                        <th>
                                            Choose Subject&nbsp; Name (<i class="fa fa-check-square margin_right5 margin_left5"></i>)
                                        </th>
                                        <th width="10%">
                                            Compulsory
                                        </th>
                                        <th width="10%">
                                            Optional
                                        </th>
                                        <th width="10%">
                                            Fourth
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="load_all_subject">
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Selected compulsory subjects starts here------------------------------------------------------------------------------------>
                        <div style="padding:10px; width:450px;" class="subject_table right">
                            <table cellpadding="0" cellspacing="1" border="0" id="mdisplay" class="display">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                            SL
                                        </th>
                                        <th>
                                            Subject Name (<i class="fa fa-list-ol margin_right5 margin_left5">
                                            </i>
                                            Selected Compulsory Subjects&nbsp;)
                                        </th>
                                        <th>
											Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="load_all_subject_mandatory">
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- Selected compulsory subjects ends here------------------------------------------------------------------------------------>
                        <!-- Selected optional subjects starts here------------------------------------------------------------------------------------>
                        <div style="padding:10px; width:450px;" class="subject_table right">
                            <table cellpadding="0" cellspacing="1"  id="odisplay" border="0" class="display">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                            SL
                                        </th>
                                        <th>
                                            Subject Name (<i class="fa fa-list-ol margin_right5 margin_left5">
                                            </i>
                                            Selected Optional Subjects&nbsp;)
                                        </th>
                                        <th>
											Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="load_all_subject_optional">
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- Selected optional subjects ends here------------------------------------------------------------------------------------>
                        <!-- Selected fourth subjects starts here------------------------------------------------------------------------------------>
                        <div style="padding:10px; width:450px;" class="subject_table right">
                            <table cellpadding="0" cellspacing="1"  id="fdisplay" border="0" class="display">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                            SL
                                        </th>
                                        <th>
                                            Subject Name (<i class="fa fa-list-ol margin_right5 margin_left5">
                                            </i>
                                            Selected Fourth Subject&nbsp;)
                                        </th>
                                        <th>
											Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="load_all_subject_fourth">
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- Selected fourth subjects ends here------------------------------------------------------------------------------------>
                        <div style="clear:both;">
                        <script>
                    $(document).ready(function (e) 
					{
						
						
						$("#save_record").on('click', (function (e) 
						{
							
							var previous_exam_id = $("#previous_exam_id").val(); 
							var institute_name = $("#institute_name").val(); 
							var roll_num = $("#roll_num").val(); 
							var reg_no = $("#reg_no").val(); 
							var previous_exam_board_id = $("#previous_exam_board_id").val(); 
							var previous_exam_group_id = $("#previous_exam_group_id").val(); 
							var previous_exam_year = $("#previous_exam_year").val(); 
							var previous_exam_session = $("#previous_exam_session").val(); 
							var gpa = $("#gpa").val(); 
							
							//alert(previous_exam_year);
							if(previous_exam_id.length==0 || institute_name.length==0 || roll_num.length==0 || previous_exam_board_id.length==0 || previous_exam_group_id.length==0 || previous_exam_year.length==0 || previous_exam_session.length==0 || gpa.length==0)
							{
								var imagess3 = "<div class='dash_label' style='margin-top:15px; padding-left:10px;  color:#f00; text-align:left;'>Both Field Should Not Be Empty </div>";
								$("#wrong3").html(imagess3);
							}
							else
							{
								var imagess3 = "<div class='dash_label' style='margin-top:15px; padding-left:10px;  color:#060; text-align:left;'>Your Data is Processing Please Wait... </div>";
								$("#wrong3").html(imagess3);
								post_data2 = {'status': 8,'admission_id': <?php echo $admission_id; ?>,'exam_id': previous_exam_id, 'institute_name': institute_name,'roll': roll_num,'regno': reg_no,'board_id': previous_exam_board_id,'group_id': previous_exam_group_id,'passing_year': previous_exam_year,'passing_session': previous_exam_session,'gpa': gpa};
								$.post('json/student.php', post_data2, function (datas2) 
								{
									var imagess4 = "<div class='dash_label' style='margin-top:15px; padding-left:10px;  color:#09f; text-align:left;'>"+datas2+"</div>";
									$("#wrong3").html(imagess4);
								});
							}
							
						}));
						
						
					});
				</script>
                        </div>
                        <div id="wrong3"></div>
                        <!-- Select Classwise subject starts here------------------------------------------------------------------------------------>
                        <div class="width-col6 auto_pos_x margin_top10 shadow_inner  bold subject_table">
                        	<table cellpadding="0" cellspacing="1" border="0" class="display">
                                <thead>
                                    <tr>
                                        <th>
                                        	EXAM
                                        </th>
                                        <th>
                                            Name of Institution
                                        </th>
                                        <th>Roll</th>
                                        <th>Reg. No.</th>
                                        <th>
                                            Board
                                        </th>
                                        <th>
                                            Group
                                        </th>
                                        <th>
                                            Session
                                        </th>
                                        <th>
                                            Pass.Year
                                        </th>
                                        <th>
                                            GPA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="center">
                                    	<td>
                                        	<select id="previous_exam_id" style="width:50px;">
                                            	<?php 
												$sqlpreexam=$obj->SelectAll("previous_exam");
												if(!empty($sqlpreexam))
												foreach($sqlpreexam as $exam): 
												?>
                                          <option value="<?php echo $exam->id; ?>"><?php echo $exam->name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                        	<input type="text" id="institute_name" placeholder="Institution Name Here" class="width-label-90 textbox space-top-2	"/>
                                        </td>
                                        <td>
                                        	<input type="text" id="roll_num" style="width:50px;" placeholder="Roll Here" class="width-label-90 textbox space-top-2"/>
                                        </td>
                                        <td>
                                        	<input type="text" id="reg_no" placeholder="Registration No" class="width-label-90 textbox space-top-2"/>
                                        </td>
                                        <td>
                                        	<select id="previous_exam_board_id" style="width:70px;">
                                            <?php 
											$sqlprevious_exam_board=$obj->SelectAll("previous_exam_board");
											if(!empty($sqlprevious_exam_board))
											foreach($sqlprevious_exam_board as $board):
											 ?>
                                            	<option value="<?php echo $board->id; ?>"><?php echo $board->name; ?></option>
                                            <?php endforeach; ?>                                                    
                                            </select>
                                        </td>
                                        <td>
                                        	<select id="previous_exam_group_id" style="width:60px;">
                                            	<?php 
												$sqlprevious_exam_group=$obj->SelectAll("previous_exam_group"); 
												if(!empty($sqlprevious_exam_group))
												foreach($sqlprevious_exam_group as $group):
												?>
                                            	<option value="<?php echo $group->id; ?>"><?php echo $group->name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                        	<input type="text" id="previous_exam_session" placeholder="2015-2016"  class="width-label-70 textbox space-top-2" />
                                        </td>
                                        <td>
                                        	<select id="previous_exam_year" style="width:50px;">
                                            	<?php for($i=date('Y'); $i>=date('Y')-10; $i--): ?>
                                            	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </td>
                                        <td>
                                        	<input type="text" id="gpa" placeholder="GPA Here" class="width-label-70 textbox space-top-2"/>
                                        </td>
                                    </tr>
                                </tbody>
                           </table>
                                <div style="clear: both; display: block; width: 100%; padding: 10px; text-align: left;" class="">
                            <button type="button" id="save_record" class="width-label-70 button-success pure-button auto_pos_y"><i class="fa fa-floppy-o margin_right5"></i>Save</button>
                        </div>
                            
                        </div>
                        <!-- Select Classwise subject ends here------------------------------------------------------------------------------------>
                        <div style="clear: both; display: block; width: 100%; padding: 10px; text-align: center; font-weight:bold;">
                            <a class=" height-35 div_btn" href="class/invoice.php?admissionid=<?php echo $admission_id; ?>&amp;pager=<?php echo $obj->filename(); ?>">Generate Student Invoice</a>
                        </div>
                        <div style="clear:both;">
                        </div>
                    </form>
                </div>
            </div>
            <!--add subject panel ends here----------------------------------------------------------------------------------------------------------->
        </div>
        <div style="clear:both;">
        </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>