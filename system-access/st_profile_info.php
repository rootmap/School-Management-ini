<?php
include_once('class/auth.php');
$table="ams_admission";
extract($_GET);
if(@$_GET['action']=='delete')
{
      if($obj->delete($table,array("id"=>$_GET['id']))==1)
	  {
		  echo $obj->Success("Successfully Deleted","st_list_setting.php");
	  }
	   else
	  {
		  echo $obj->Error("Delete Failed","st_list_setting.php");	
	  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
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
	
	.label_block{ width:130px; height:130px; margin-left:639px;   display:block; z-index:99999; position:absolute; overflow:hidden; /*background:rgba(0,0,0,1);*/ margin-top:15px; }
	.label_block_flag{ 
	width:240px; height:40px;  margin-top:32px;
	margin-left:-40px;
	-ms-transform: rotate(45deg);
-webkit-transform: rotate(45deg); 
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
                            <img src="images/sds.jpg"/>
                            <div class="topbar_small_div_text left height-30">STUDENT DETAIL</div>
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
                
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                 <?php 
								$array=array("id"=>$student_details);
							    $info=$obj->SelectAllByID_Multiple($table,$array);
								if(!empty($info))
								foreach($info as $in):
							  ?>
                    <!--<div class="menu_div">
                    	
                    
                    <div class="clear"></div>
                    </div>  -->                     
                    <div class="profile_info_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30 left"><left>PROFILE INFORMATION :</left></h2>
                            <ul style="text-decoration:none; margin-top:10px; text-transform:capitalize;" id="nav" class="right">
                                <li>
                                <a href="#">Reports +</a>
                                 <ul>
                                        <li><a target="new" href="progrecreport.php?student_details=<?php echo $in->id;?>&amp;school_id=<?php echo $school; ?>&amp;admission=<?php echo $in->admition; ?>&amp;group=<?php echo $in->group_id; ?>">Progress Report</a></li>
                                        <li><a target="new" href="attendance_student.php?student_details=<?php echo $in->id;?>&amp;school_id=<?php echo $school; ?>&amp;admission=<?php echo $in->admition; ?>">Attendance Report</a></li>
                                    </ul>    
                                </li>
                                <li><a href="#">More +</a>
                                <ul>
                                        <li><a href="transfar_view.php?id=<?php echo $in->admition; ?>&amp;group_id=<?php echo $in->group_id; ?>&amp;school=<?php echo $school ?>">Transfer Certificate</a></li>
                                        <li><a href="student_admitcard.php?idnumber=<?php echo $in->id; ?>&amp;roll=<?php echo $in->roll; ?>&amp;admission=<?php echo $in->admition; ?>&amp;exam=<?php echo $school ?>&amp;school_id=<?php echo $school; ?>">Admit Card</a></li>
                                        <li><a href="testimonial_view.php?id=<?php echo $in->admition; ?>&amp;group_id=<?php echo $in->group_id; ?>&amp;school=<?php echo $school ?>">Testimonial</a></li>
                                    </ul>
                                </li>
                                <li><a href="student_profile_edit.php?student_id=<?php echo $in->id; ?>&eiinnumber=<?php echo $school; ?>">Edit</a>
                                    
                                </li>
                                <li><a href="<?php echo $obj->filename(); ?>?id=<?php echo $in->id; ?>&amp;action=delete">Delete</a>
                                
                                </li>
                                
                            </ul>
                        </div>
                        <div id="printableArea" class="profile_info_form_div width-col5 auto-position"  style="height:auto !important;">
                           
                        <div class="profile_info_top_div">
                            <div class="profile_pic_div left">
                                <img src="photo/<?php echo $in->photo;?>"/>
                            </div>
                            <div class="profile_info_small_div left margin-top-5">
                              
                                <ul>
                                
    <li class=" width-label-150 left margin_left10">Name<span class="right" style="padding-right:20px;">:</span>
    </li>                                 <input type="hidden" name="show" value="<?php echo $in->id;?>" />
    <li class="width-label-200 left"><?php echo $in->name;?></li>
    <li class="width-label-150 left margin_left10">Class / Course<span class="right" style="padding-right:20px;">:</span></li>
    <li class="width-label-200 left">
    <?php echo $obj->SelectAllByVal("ams_class","id",$in->class_id,"name");?>
    </li>
    <li class="width-label-150 left margin_left10">Section<span class="right" style="padding-right:20px;">:</span></li>
    <li class="width-label-200 left">
       <?php echo $obj->SelectAllByVal("ams_section","id",$in->section_id,"name");?>
     </li>
    <li class="width-label-150 left margin_left10">Roll<span class="right" style="padding-right:20px;">:</span></li><input type="hidden" id="st_profile_info.php<?php echo $in->id; ?>" name="id"/>

    <li class="width-label-200 left"><?php echo $in->roll;?></li>
    <li class="width-label-150 left margin_left10" style="font">Adm. ID<span class="right" style="padding-right:20px;">:</span></li>

    <li class="width-label-200 left"><?php echo $in->admition;?></li>
    
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!--tables code start from here-->
                        <div class="label_block">
                        	<div class="label_block_flag">Details</div>
                        </div>
                        <div id="dynamic"  style="margin-top:15px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;">
                        		
                                <table class="TFtable" align="center"  style="z-index:-1;">
                                	
                                        <tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center"><?php echo $in->name;?></td>
                                        </tr>
                                        <tr>
                                                <td>Father’s Name</td>
                                                <td class="center"><?php echo $in->father_name;?></td>
                                        </tr><tr>
                                                <td>Mother’s Name</td>
                                                <td class="center"><?php echo $in->mother_name;?></td>
                                        </tr><tr>
                                                <td>Admission Date</td>
                                                <td class="center"><?php echo $in->date;?></td>
                                        </tr><tr>
                                                <td>Date of Birth</td>
                                                <td class="center"><?php echo $in->dob;?></td>
                                        </tr>
                                        <tr>
                                                <td>Blood Group </td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_blood_group","id", $in->blood_group,"name");?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Gender</td>
                                                <td class="center"><?php echo $in->gender;?></td>
                                        </tr>
                                        <tr>
                                                <td>Nationality</td>
                                                <td class="center"><?php echo $in->nationality;?></td>
                                        </tr>
                                        <tr>
                                                <td>Language</td>
                                                <td class="center"><?php echo $in->language;?></td>
                                        </tr>
                                        <tr>
                                                <td>Religion</td>
                                                <td class="center"><?php echo $in->religion;?></td>
                                        </tr>
                                        <tr>
                                                <td>Address</td>
                                                <td class="center"><?php echo $in->present_address;?></td>
                                        </tr>
                                        <tr>
                                                <td>Thana/Zip Code</td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("thana","id",$in->zip_code,"name"); ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>District/City</td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("district","id",$in->city,"name"); ?>
                                                </td>
                                        </tr>
                                         <tr>
                                                <td> Country</td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("country","id",$in->countryr,"name");?></td>
                                        </tr>
                                         <tr>
                                                <td>Mobile No</td>
                                                <td class="center"><?php echo $in->phone_number;?></td>
                                        </tr>
                                         <tr>
                                                <td> Email</td>
                                                <td class="center"><?php echo $in->email;?></td>
                                        </tr>
                                </table>
                            </div>
                            
                            <!--tables code end here-->
                        
<?php endforeach; ?>
                           
                            
                            <div class="right" style="padding:20px;">
                               
                                   
                                        <button style="background:none; border:none;" type="button" onclick="printDiv('printableArea')">
                                            
                                            <img style="margin-top:5px; " src="images/excel_icon.png" />
                                        </button>
                                        
                                   
                                    <button style="background:none; border:none;" type="button" onclick="printDiv('printableArea')">
                                            
                                            <img style="margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </button>
                                    
                            
</div>
                        </div>
                        <div class="clear"></div>

                    </div>



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