<?php
include_once('class/auth.php');
$table="ams_transport_setting_profile";
extract($_GET);
if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    {
           echo $obj->Success("Successfully delete","transport_details.php");	 
     }
     else
     {
      echo $obj->Error("Data delete Failed",$obj->filename());	      
     }
            
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function fullprofile(str)
            {
                if (str == "")
                {
                    document.getElementById("profile").innerHTML = "";
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
                        document.getElementById("profile").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/full_profile.php?f=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function genarel(str)
            {
                if (str == "")
                {
                    document.getElementById("genarell").innerHTML = "";
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
                        document.getElementById("genarell").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/general.php?t=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function personal(str)
            {
                if (str == "")
                {
                    document.getElementById("personall").innerHTML = "";
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
                        document.getElementById("personall").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/personall.php?p=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function contact(str)
            {
                if (str == "")
                {
                    document.getElementById("contactt").innerHTML = "";
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
                        document.getElementById("contactt").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/contact.php?c=" + str, true);
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
                color:#888;
                border:none;
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
            label:after {
                /*content:'Dreams';*/
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
                /*content:'';*/
                right:6px; top:0px;
                width:20px; height:20px;
                background:#f8f8f8;
                position:absolute;
                pointer-events:none;
                display:block;
            }


	.TFtable{
		width:98%;
	 	margin: 0 auto 0 auto;
		border-collapse:collapse;
		
	}
	.TFtable td{ 
		padding:5.5px; border:#4e95f4 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #D19500;
	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd)>td:first-of-type{ 
	padding-left:20px;
			background: rgb(240,249,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */
color:#C00;
text-align:left;
	}
	.TFtable tr:nth-child(odd)>td:last-of-type
	{
		background-color:#D5FFFF; color:#333; text-align:left;
		padding-left:20px;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even)>td:first-of-type{
		background: rgb(179,220,237); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(179,220,237,1)), color-stop(50%,rgba(41,184,229,1)), color-stop(100%,rgba(188,224,238,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
color:#C00;
text-align:left;
padding-left:20px;
	}
	.TFtable tr:nth-child(even)>td:last-of-type
	{
		background-color: #ECFFFF; color:#333; text-align:left;
		padding-left:20px;
	}
	
	.label_block{ width:180px; height:180px; margin-left:589px; top:666px;  display:block; z-index:99999; position:absolute; overflow:hidden; }
	.label_block_flag{ width:280px; height:40px;  margin-top:30px;
		-ms-transform: rotate(45deg); /* IE 9 */
		-webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
		transform: rotate(45deg);
		text-align:center;
		color:#FFF;
		line-height:40px;
		font-size:22px;
		background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,0.77) 50%, rgba(109,0,25,1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(169,3,41,1)), color-stop(50%,rgba(143,2,34,0.77)), color-stop(100%,rgba(109,0,25,1)));
		background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,0.77) 50%,rgba(109,0,25,1) 100%);
		background: -o-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,0.77) 50%,rgba(109,0,25,1) 100%);
		background: -ms-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,0.77) 50%,rgba(109,0,25,1) 100%);
		background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,0.77) 50%,rgba(109,0,25,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 );


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
                            <div class="topbar_small_div_text left height-30">PROFILE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>PROFILE INFORMATION</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
                           <?php include('includes/back.php'); ?>
                        </ul>
                       
						 <?php include_once('class/esm.php'); ?>
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                
                    
                                         
                    <div class="profile_info_div_page" style="margin-top: 20px; height:auto; ">
                      <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30 left"><left>PROFILE INFORMATION :</left></h2>
                            <ul style="text-decoration:none;text-transform:capitalize;" id="nav" class="right">
                                <li><a href="#">Profile</a>
                        <ul>
                                <li><a name="f" id="f" onclick="fullprofile('<?php echo $id; ?>')" href="#">full Profile</a></li>
                                <li><a name="g" id="g" onclick="genarel('<?php echo $id; ?>')" href="#">General</a></li>
                                <li><a name="h" id="h" onclick="personal('<?php echo $id; ?>')" href="#">Personal</a></li>
                                <li><a name="cc" id="cc" onclick="contact('<?php echo $id; ?>')" href="#">Contact Address</a></li>
                            </ul>
                        </li>
                        <li><a href="trancport_edit.php?id=<?php echo $id; ?>&amp;school=<?php echo $school; ?>">EDIT</a>
                            
                        </li>
                        <li><a onclick="<?php echo $obj->delete_confirm();?>" href="<?php echo $obj->filename(); ?>?id=<?php echo $id; ?>&amp;action=delete">DELETE</a>
                        </li>
                            </ul>
                        </div>
                    
                   
                        <?php 
								$array=array("id"=>$id,"school_id"=>$school);
							    $info=$obj->SelectAllByID_Multiple($table,$array);
								 if(!empty($info))
								  foreach($info as $in):
							  ?>
                        <div class="profile_info_form_div width-auto auto-position" style="height:auto;">
                         <div id="printableArea">
                        <div class="profile_info_top_div">
                            <div class="profile_pic_div left">
                                <img src="photo/<?php echo $in->photo;?>"/>
                            </div>
                            <div class="profile_info_small_div left margin-top-5">
                              
                                <ul style="font-size:14px;">
                                
    <li class=" width-label-120 left margin_left10">Name<span class="right" style="padding-right:20px;">:</span>
    </li>                                 <input type="hidden" name="show" value="<?php echo $in->id;?>" />
    <li class="width-label-290 left"><?php echo $in->name;?></li>
    <li class="width-label-120 left margin_left10">Driver ID<span class="right" style="padding-right:20px;">:</span></li>
    <li class="width-label-290 left">
      <?php echo $in->driver_id;?>
    </li>
    <li class="width-label-120 left margin_left10">Transport No<span class="right" style="padding-right:20px;">:</span></li>
    <li class="width-label-290 left">
       <?php echo $in->transport_number;?>
     </li>
    <li class="width-label-120 left margin_left10">Location<span class="right" style="padding-right:20px;">:</span></li><input type="hidden" id="st_profile_info.php<?php echo $in->id; ?>" name="id"/>

    <li class="width-label-290 left"><?php echo $in->area;?></li>
    
                                </ul>
                            </div>
                        </div>
                        
                        
                        
                       
                        <!--tables code start from here-->
                        
                        <div id="genarell"  style="margin-top:15px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;"></div>
                            <div id="profile"  style="margin-top:15px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;"></div>
                           
                         <div id="personall" style="margin-top:15px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;"></div>
                        <div id="contactt" style="margin-top:15px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;"></div></div>
                            <div class="clear"></div>
                            <!--tables code end here-->
                         <?php include ('./include/print.php'); ?>


                        </div>
                        <?php endforeach; ?>
                         <div class="clear"></div>
                    </div>
                     <div class="clear"></div>
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