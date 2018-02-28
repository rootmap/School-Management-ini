<?php include_once('class/auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function showcls(str){
				if (str == ""){
				document.getElementById("class").innerHTML = ""; 
				return; 
				}
				if (window.XMLHttpRequest)
				{
				xmlhttp = new XMLHttpRequest();
				}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function (){
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{
						document.getElementById("class").innerHTML = xmlhttp.responseText;
						}}
						xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
						xmlhttp.send();
						}
         </script>
        <script>

            function showsection(str){
				if (str == ""){document.getElementById("section").innerHTML = ""; 
				return; 
				}if (window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function (){
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
							xmlhttps = new XMLHttpRequest();
							xmlhttps.onreadystatechange = function (){
								if (xmlhttps.readyState == 4 && xmlhttps.status == 200){
									document.getElementById("group").innerHTML = xmlhttps.responseText;
									}}
									xmlhttps.open("GET", "ajx/group1.php?s=" + str, true);
									xmlhttps.send();
									//make a query ajax for group
									document.getElementById("section").innerHTML = xmlhttp.responseText;
									}}
									xmlhttp.open("GET", "ajx/section.php?t=" + str, true);
									xmlhttp.send();
									}
                                    </script>

        <script>

            function showshift(str){if (str == ""){document.getElementById("shift").innerHTML = ""; return; }if (window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}xmlhttp.onreadystatechange = function (){
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
							document.getElementById("shift").innerHTML = xmlhttp.responseText;
							}}
							xmlhttp.open("GET", "ajx/shift.php?s=" + str, true);
							xmlhttp.send();
							}
                            </script>

        <script>

            /*function showgroup(str){if (str == ""){document.getElementById("group").innerHTML = "";return;}if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safarixmlhttp = new XMLHttpRequest();}else{// code for IE6, IE5xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange = function(){if (xmlhttp.readyState == 4 && xmlhttp.status == 200){document.getElementById("group").innerHTML = xmlhttp.responseText;}}xmlhttp.open("GET", "ajx/group1.php?s=" + str, true);xmlhttp.send();}*/</script>

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

    <body>

        <!-- body starts from here---------------------------------------------------------------------------------------------->

        <div id="body_container">

            <div class="eims_soft_head_div">

                <?php include('class/homepage_header.php'); ?>

            </div>

            <div class="st_detail_body">

                <div class="st_detail_topbar">

                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/sdetail_icon.png"/>
                            <div class="topbar_small_div_text left height-30">
                                STUDENTS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h2>
                                ADD STUDENTS</h2>
                        </div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
                            <?php include('includes/back.php'); ?>
                        </ul>
                    </div>
                </div>
                <div class="border_top">
                </div>
                <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->
                <script>
                    $(document).ready(function (e) 
					{
						$("#save").on('click', (function (e) 
						{
							var name = $("#name").val(); 
							var session = $("#session").val(); 
							var class_name = $("#class").val(); 
							var roll = $("#roll").val(); 
							var section = $("#section").val(); 
							var hh_inpput = $("#shift").val(); 
							var group = $("#group").val(); 
							var g_name = $("#g_name").val(); 
							var number = $("#number").val(); 
							var admission=$("#admission").val();
							/*var number=$("#image").val();*/
							//alert($("#number").val());
							if (name.length == 0 || session.length == 0 || class_name.length == 0 || roll.length == 0 || section.length == 0 || hh_inpput.length == 0 || group.length == 0 || g_name.length == 0 || number.length == 0)
							{
								var imagess = "<div class='dash_label' style='margin-top:15px; padding-left:10px;  color:#f00; text-align:left;'>Both Field Should Not Be Empty< /div>";
								$("#wrong").html(imagess);
							}
							else
							{
								var imagess = "<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'><img src='images/loader-big.gif' style='margin-top:8px;'>Please Wait, We Are Processing Your Data..< /div>";
		
								$("#wrong").html(imagess);
								post_data = {'status': 1,'admission': admission,'name': name, 'session': session, 'class': class_name, 'roll': roll, 'section': section, 'shift': hh_inpput,'group':group, 'g_name': g_name, 'number': number};
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
										$("#wrong").html(datas +"Failed, Please Try Again.");
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
                
                <div style="clear:both; ">
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
                        <div class="add_st_div shadow_inner" style="margin-top: 20px;">
                            <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                                <h2 class="margin_left30">
                                    <left>
                                        Add Students :</left>
                                </h2>
                            </div>
                            <div class="add_st_form_div height-auto width-col2 auto-position">
                                <ul class="height-auto">
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Student Name<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <input type="text" id="name" name="name" placeholder="Type Student's Name Here" class="textbox"/>
                                    </li>
                                    <!-- <li class="add_st_form_div_label height-30 width-label-200 left">
                                    <span style="color:#C00;">
                                    &lowast;</span>
                                    Admission No<span class="right">
                                    :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                    <input type="text" value="<?php
                                    echo $school . "" . $obj->
                                            RandNumber(4);
                                    ?>
                                    " name="admission" placeholder="Type Admission No " class="textbox"/>
                                    </li>
                                    -->
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Select a Session<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <select id="session" class="hh_inpput" name="session" onchange="showcls(this.value)" >
                                            <option>
                                                Select Session</option>
                                            <?php
                                            $array = array("school_id"=>$school);
                                            $sec = $obj->SelectAllByID('ams_session',$array);
                                            if(!empty($sec))
                                                foreach($sec as $sc):
                                                    ?>
                                                    <option value="<?php echo $sc->id; ?>"><?php echo $sc->name; ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Select a Class / Course<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <select name="class" id="class" onchange="showsection(this.value)" class="hh_inpput" >
                                            <option>
                                                Select Class / Course</option>
                                        </select>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Roll Number<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <input type="text" id="roll" name="roll" placeholder="Type Roll Number Here" class="textbox"/>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Section<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <select name="section" id="section" onchange="showshift(this.value)" class="hh_inpput">
                                            <option>
                                                Select Section</option>
                                        </select>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">&lowast;</span>Select a Shift<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <!--onchange="showgroup(this.value)"-->
                                        <select name="shift" id="shift" class="hh_inpput">
                                            <option>Select Shift</option>
                                        </select>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>Group<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <select name="group" id="group" class="hh_inpput">
                                            <option>Select Group</option>
                                        </select>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Guardian's Name<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <input type="text" id="g_name" name="g_name" placeholder="Type Guardian's Name Here" class="textbox"/>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-200 left">
                                        <span style="color:#C00;">
                                            &lowast;</span>
                                        Mobile Number<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <input type="text" id="number" name="number" placeholder="Type Mobile Number Here" class="textbox"/>
                                    </li>
                                    <!--<li class="add_st_form_div_label height-30 width-label-200 left">
                                    Student Image<span class="right">
                                    :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                    <input type="file" id="image" name="image" class=""/>
                                    </li>
                                    -->
                                    <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                        <button type="button" id="save" name="save" class=" height-35 div_btn">
                                            Submit Now</button>
                                    </li>
                                </ul>
                            </div>
                    </form>
                </div>
                <div style="clear:both;">
                <div id="wrong2">
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
