<?php 
set_time_limit(90000000);
include_once('class/auth.php'); 
if(isset($_POST['save']))
{
	include 'class/reader.php';
	$excel = new Spreadsheet_Excel_Reader();
	
	$xlfile=$obj->excel("file",time(),"class");
	if($xlfile==0)
	{
		$obj->Error("This is not a Excel File Please Upload excel file in 97/2003 format which has (.xls) extension",$obj->filename());	
	}
	
	$excel->setOutputEncoding('CP1251');
	$excel->read('class/'.$xlfile); 
  	$s=0;   
	$x=1;
	while($x<=$excel->sheets[0]['numRows'])
	{
		if($x!=1)
		{
			if(@strlen($excel->sheets[0]['cells'][$x][2])!=0)
			{	
				$exists=$obj->exists_multiple("ams_admission",array("name"=>@$excel->sheets[0]['cells'][$x][2],
				"admition"=>@$excel->sheets[0]['cells'][$x][1],
				"class_id"=>$_POST['class'],
				"session_id"=>$_POST['session'],
				"roll"=>@$excel->sheets[0]['cells'][$x][1],
				"section_id"=>$_POST['section'],
				"group_id"=>$_POST['group'],
				"shift_id"=>$_POST['shift'],
				"guardian_name"=>@$excel->sheets[0]['cells'][$x][3],
				"phone_number"=>"0".@$excel->sheets[0]['cells'][$x][5],
				"school_id"=>$school,
				"date"=>date('Y-m-d'),
				"status"=>1));
				if($exists==0)
				{
					$obj->insert("ams_admission",
					array("name"=>@$excel->sheets[0]['cells'][$x][2],
					"admition"=>@$excel->sheets[0]['cells'][$x][1],
					"class_id"=>$_POST['class'],
					"session_id"=>$_POST['session'],
					"roll"=>@$excel->sheets[0]['cells'][$x][1],
					"section_id"=>$_POST['section'],
					"group_id"=>$_POST['group'],
					"shift_id"=>$_POST['shift'],
					"guardian_name"=>@$excel->sheets[0]['cells'][$x][3],
					"phone_number"=>"0".@$excel->sheets[0]['cells'][$x][5],
					"school_id"=>$school,
					"date"=>date('Y-m-d'),
					"status"=>1));
					
					$s+=1;
					
				}
				else
				{
					$s+=0;
				}
			}
			else
			{
				$s+=0;	
			}
		}
	  $x++;
	}

	if($s==0)
	{
		$obj->Error("No Info Found in Excel / Or All Data Already Exists. ",$obj->filename());	
	}
	else
	{
		$obj->Success($s." Student data is added Successfully.",$obj->filename());	
	} 
}
?>
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
							xmlhttps.onreadystatechange = function ()
							{
								if (xmlhttps.readyState == 4 && xmlhttps.status == 200){
									document.getElementById("group").innerHTML = xmlhttps.responseText;
								}
							}
							xmlhttps.open("GET", "ajx/group1.php?s=" + str, true);
							xmlhttps.send();
			//make a query ajax for group
							document.getElementById("section").innerHTML = xmlhttp.responseText;
			}
			}
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
                            <div class="topbar_small_div_text left height-30">STUDENTS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h4>ADD STUDENTS FROM EXCEL</h4>
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
               
                <form action="" method="post" enctype="multipart/form-data">
                <div style="clear:both; ">
                        <div class="add_st_div shadow_inner" style="margin-top: 20px;">
                            <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                                <h2 class="margin_left30">
                                    <left>Select Students Existing Session/Class/Group/Shift </left>
                                </h2>
                            </div>
                            <div class="add_st_form_div height-auto width-col2 auto-position">
                                <ul class="height-auto">
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
                                            &lowast;</span>Upload File<span class="right">
                                            :</span>
                                    </li>
                                    <li class="add_st_form_div_label height-30 width-label-250 right">
                                        <input type="file" name="file" id="file" class="hh_inpput" />
                                    </li>
                                    
                                    <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                        <button type="submit" id="save" name="save" class=" height-35 div_btn">
                                            Submit Now</button>
                                    </li>
                                </ul>
                            </div>
                    </form>
                </div>


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
