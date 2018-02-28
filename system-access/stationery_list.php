<?php
include_once('class/auth.php');
$table="ams_payment";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        
        <script>
            function showclass(str)
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
				
                xmlhttp.open("GET", "ajx/session.php?s="+str, true);
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
        
        
       <script>
            function showallstd(str)
            {
                if (str == "")
                {
                    document.getElementById("ggg").innerHTML = "";
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
                        document.getElementById("ggg").innerHTML = xmlhttp.responseText;
                    }
                }
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/dd.php?k=" + str+"&group="+group, true);
                xmlhttp.send();
            }
        </script>

        
         <script>
            function showview(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic2").innerHTML = "";
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
                        document.getElementById("dynamic2").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/stationary_veiw_1.php?r=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showreceipt(str)
            {
                if (str == "")
                {
                    document.getElementById("ddddd").innerHTML = "";
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
                        document.getElementById("ddddd").innerHTML = xmlhttp.responseText;
                    }
                }
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/stationary_veiw.php?r=" + str, true);
                xmlhttp.send();
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
                /*-webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;*/
                background: #f8f8f8;
                color:#000;
                border:1px #CC0000 solid;
                outline:none;
                display: inline-block;
                -webkit-appearance:none;
                -moz-appearance:none;
                appearance:none;
                cursor:pointer;
                width: 100px;
            }

            /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
            @media screen and (-webkit-min-device-pixel-ratio:0) {
                select {padding-right:18px}
            }

            label {position:relative}
            

            .TFtable{
                width:98%;
                margin: 0 auto 0 10px;

            }
            .TFtable td{ 
                padding:5.5px;
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

            .Fees_table{
                width:98%;
                margin: 0 auto 0 10px;
                font-size:14px;
                font-family: Tahoma, Geneva, sans-serif; background:#FFF; color:#666;

            }
            .Fees_table td{ 
                padding:5.5px;
            }
            /* provide some minimal visual accomodation for IE8 and below */
            .Fees_table tr{
                
            }
            /*  Define the background color for all the ODD background rows  */
            .Fees_table tr:nth-child(odd){ 
              
            }
            /*  Define the background color for all the EVEN background rows  */
            .Fees_table tr:nth-child(even){
                
            }

        </style>

    </head>

    <body>
        <!-- body starts from ---------------------------------------------------------------->

        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Finance_icon.png"/>
                            <div class="topbar_small_div_text left height-30">STATIONARY</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>ACADEMIC STATIONARY' ACCOUNTS</h3></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                        </ul>
                       
                    </div>
                </div>
                <div class="border_top"></div> <?php include_once('class/esm.php'); ?>

                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">




                    <div class="st_fin_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                                <div class="attendance_reg_heading left width-label-250 auto-padding">
                                    <center><h3>
                                            STATIONARY
                                        </h3></center>
                                </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div></center>
                        </div>
                        
                        <div class="st_fin_small_form_div width-col5 auto-position">
                            <!---------------------------------------------select menu starts------------------------------------------------------------>
                            <div class="st_fin_small_form_div width-col5 auto-position" >
                        
                        	<div class="st_fin_small_div left margin_left5">
                            	<ul style="margin-left:30px;">
                           		<li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="session" id="session" onchange="showclass(this.value)" >
                                        <option>Select Session</option>
                                        <?php
										$array=array("school_id"=>$school); 
										 $data=$obj->SelectAllByID('ams_session',$array);
										 $x=1;
										 if(!empty($data))
										 foreach($data as $row):
										 ?>
                                         <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                         <?php endforeach;?>
                                    </select>
                                </li>
                                <li class="add_st_form_div_label_view_details center height-30 width-label-130 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Select Class / Course</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details center height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                    </select>
                                </li>
                                </ul>
                            <div style="clear:both !important;"></div>
                            <ul style="margin-left:30px;">   
                            <li class="add_st_form_div_label_view_details height-30 center width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select style="width:130px;" name="shift" id="shift" onchange="showgroup(this.value)">
                                        <option>Shift</option>
                                    </select>
                                </li>
                               
                            <li class="add_st_form_div_label_view_details width-label-110 height-30 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select style="width:130px;" name="group" id="group" onchange="showallstd(this.value)" >
                                        <option>Group</option>
                                    </select>
                                </li>
                                </ul>
                                <ul style="margin-left:30px;">
                            <li id="ggg" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                </li>
                                </ul>
                        </ul>
                        </div>
    
<div class="clear"></div>
                        </div>
                            <!----------------------select menu ends--------------------------------------------------------------------------------------->


                            <div class="st_fin_small_form_div width-col5 auto-position" style="overflow:hidden;" >
                        	<div id="dynamic1" style="width:48%;" class="st_fin_small_div left margin_left5" ></div>
                            

                            <div id="dynamic2" class="st_fin_small_div right" style="width:48%;" ></div>
                           
                           
                           <div style=" width:100%;float:left;">
                           <div id="ddddd" class="auto-position"  style=" width:50%;"></div>
                           </div>
                        </div>
                            
                      
                        </div>

                    </div>
<div class="clear"></div>

                   
                    </div>
                    <!--tables code end here-->
            </div>
                    <div class="footer_div_full">
                        <div class="footer_div">
                            <?php include ('./class/footer.php'); ?>
                        </div>
                    </div>   
                


                    
                </body>
                </html>