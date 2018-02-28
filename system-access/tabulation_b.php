<?php
include_once('class/auth.php');
$table1="ams_admission";
$table="ams_exam_result";
$tablee="ams_singup";
extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        
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
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttp.readyState == 4 && xmlhttps.status == 200)
							{
								document.getElementById("group").innerHTML = xmlhttps.responseText;
							}
						}
						xmlhttps.open("GET", "ajx/group1.php?s=" + str, true);
						xmlhttps.send();
						//show group
						
						//show exam
						xmlhttpt = new XMLHttpRequest();
						xmlhttpt.onreadystatechange = function()
						{
							if (xmlhttpt.readyState == 4 && xmlhttpt.status == 200)
							{
								document.getElementById("category").innerHTML = xmlhttpt.responseText;
							}
						}
						xmlhttpt.open("GET", "ajx/exammm.php?f="+ str, true);
						xmlhttpt.send();
						//show exam end
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
            function showsubjecti(str)
            {
                if (str == "")
                {
                    document.getElementById("category").innerHTML = "";
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
                        document.getElementById("category").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/exammm.php?f="+ str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showee(str)
            {
                if (str == "")
                {
                    document.getElementById("df").innerHTML = "";
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
                        document.getElementById("df").innerHTML = xmlhttp.responseText;
                    }
                }
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/abotun13.php?s="+str+"&group="+group, true);
                xmlhttp.send();
            }
		</script>
        
        
        <script>
            function CreateResult(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic").innerHTML = "";
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
                        document.getElementById("dynamic").innerHTML = xmlhttp.responseText;
                    }
                }
				session=document.getElementById('session').value;
				aclass=document.getElementById('class').value;
				rsection=document.getElementById('section').value;
				category=document.getElementById('category').value;
				subject=document.getElementById('subject').value;
                xmlhttp.open("GET", "ajx/result.php?d="+str+"&session="+session+"&class="+aclass+"&section="+rsection+"&category="+category+"&subject="+subject, true);
                xmlhttp.send();
            }
        </script>
      
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
                            <img src="images/Exam_icon.png"/>
                            <div class="topbar_small_div_text left height-30">TABULATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TABULATION</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
							<?php include('includes/back.php'); ?>
                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    <div class="exam_result_div_top shadow_inner" >
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									   $array=array("school_id"=>$school);
									    $section=$obj->SelectAllByID("ams_session",$array);
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                                
                                
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left" style="clear:right;">
                                    <select class="select_option" name="group" id="group">
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="clear:left; text-align:right;">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                       
                                    </select>
                                </li>
                                
                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift">
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                                
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Exam :</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left" style="margin-right:40px;">
                                    <select class="select_option" name="category" id="category" onchange="showee(this.value)" >
                                        <option>Category</option>
                                       
                                    </select>
                                </li>
                                </ul>
                                
                            
                            <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                                <button type="submit" name="save" class=" height-35 div_btn" onclick="CreateResult(2)">SHOW STUDENT</button>
                            </li>
                        </ul>
                        
                    </div>
                            
                       
                        
                    </div>
                    <?php if(isset($_GET['id'])){ ?>                       
                    <div class="exam_result_div_page shadow_inner" style="margin-top: 20px;padding:10px;">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-label-325 left" ><img src="images/direction_left.png"/></div>
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                     TABULATION
                                </h2></center>
                            </div>
                                <div class="width-label-325 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div id="printableArea" class="admission_form_div width-col5 auto-position" >
                        
                       <div style="height:140px; background:rgba(204,204,204,.5);" class="width-auto auto-position">
                       
                           <div style="height:100%; width:20%;" class="left">
                             <div style="width:180px; margin-top:50px; margin-left:5px; text-align:center;line-height:45px;border-radius:5px; color:rgba(0,51,102,1); background:rgba(204,204,204,1); height:50px;">
                               Tabulation Shit
                             </div>
                           </div>
                           
                           <div style="height:100%; width:12%;" class="left">
                             <div style="height:100px; float:right; border-radius:6px; width:100px;">
                                <img width="100%" style="border-radius:6px;" height="100%" src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$showstudent,"photo"); ?>" />
                             </div>
                           </div>
                           
                           <div style="height:100%; width:55%; color:rgba(0,51,102,1);" class="left">
                             <div style="height:80px; text-align:center; background:rgba(153,153,153,1); float:right; border-radius:6px; width:98%;">
                                <ul>
                                  <li class="auto-position" style="margin-top:20px; font-size:18px; width:95%; border-bottom:rgba(0,51,51,1) 2px solid;"> <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$showstudent,"acount_name"); ?></li>
                                  <li style="font-size:12px;"> <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$showstudent,"address"); ?>, Phone : <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$showstudent,"number"); ?></li>
                                </ul>
                             </div>
                             
                             <div style="height:20px; padding:8px; margin-left:80px; margin-top:4px; text-align:center; background:rgba(153,153,153,1); float:left; border-radius:6px; width:70%;">
                             <?php echo $obj->SelectAllByVal("ams_exam_category","id",$exam,"name"); ?> Examination
                             <?php $session=$obj->SelectAllByVal($table1,"group_id",$id,"session_id");
							  echo $obj->SelectAllByVal("ams_session","id",$session,"name")
							  ?> 
                             </div>
                           </div>
                           
                        </div>
                        <!--tables code start from here-->
                          
                   
              <?php $ex=$obj->exists_multiple($tablee,array("board_id"=>2,"eiin_number"=>$showstudent));
				   if($ex==0){
			   ?>
                   <?php include ('./class/tabulation.php'); ?>
				 <?php }else{ ?>
                    
                    
                     <?php include ('./class/genarell.php'); ?>
                    
              
                    
                    
                    
				 <?php } ?>
                       
                            
                           <div style="height:140px; background:rgba(204,204,204,.5); padding-top:30px;" class="width-auto auto-position">
                       
                           <div style="height:100%; width:30%;" class="left">
                             <div style="width:100%; border-top:rgba(102,102,102,1) dotted 2px; margin-top:50px; margin-left:5px; text-align:center;color:rgba(0,51,102,1); height:50px;">
                               Signiture & Date of Principal
                             </div>
                           </div>
                           
                           
                           
                           <div style="height:80%; margin-left:20px; width:55%; color:rgba(0,51,102,1); border-radius:6px; background:rgba(153,153,153,.5);" class="left">
                             <div class="left" style="height:80px; text-align:center; width:50%;">
                                <ul>
                                  <li class="auto-position" style=" padding-top:10px;font-size:14px; width:95%;"> 
                                  Signiture & Date of Class / Course Teachers :
                                  </li>
                                </ul>
                             </div>
                             
                             <div class="left" style="height:80px; text-align:center; width:50%;">
                                <ul>
                                  <li class="auto-position" style="font-size:14px; margin-top:10px; width:95%;"> 
                                   1. ..............................................
                                  </li>
                                  <li class="auto-position" style="font-size:14px; margin-top:10px; width:95%;"> 
                                   2. ..............................................
                                  </li>
                                  <li class="auto-position" style="font-size:14px; margin-top:10px; width:95%;"> 
                                   3. ..............................................
                                  </li>
                                  <li class="auto-position" style="font-size:14px; margin-top:10px; width:95%;"> 
                                   4. ..............................................
                                  </li>
                                  
                                </ul>
                             </div>
                             
                           </div>
                           
                        </div>        
                            
                            
                            <div class="clear"></div>
                            <!--tables code end here-->

                            <?php } ?>
                        </div>
                        <?php if(isset($_GET['id'])){ ?>   
<li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
  <button type="button" onClick="printDiv('printableArea')" class="div_btn" value="print a div!" />    Print</button>
                               
                            </li>
                            
                            <?php } ?>
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