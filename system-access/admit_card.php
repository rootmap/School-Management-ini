<?php
include_once('class/auth.php');
$table="ams_exam_result";

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
                        document.getElementById("section").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/section.php?t=" + str, true);
                xmlhttp.send();
            }
        </script>
        
       
        <script>
            function showroll(str)
            {
                if (str == "")
                {
                    document.getElementById("roll").innerHTML = "";
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
                        document.getElementById("roll").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/rool1.php?r=" + str, true);
                xmlhttp.send();
            }
        </script>

      <script>
            function showname(str)
            {
                if (str == "")
                {
                    document.getElementById("name").innerHTML = "";
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
                        document.getElementById("name").innerHTML = xmlhttp.responseText;
                    }
                }
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/name.php?n=" + str+"&roll="+roll, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showadmitcard(str)
            {
                if (str == "")
                {
                    document.getElementById("result1").innerHTML = "";
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
                        document.getElementById("result1").innerHTML = xmlhttp.responseText;
                    }
                }
				category=document.getElementById('category').value;
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/show_admit_card.php?k=" + str+"&roll="+roll+"&category="+category, true);
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
                            <img src="images/exam2_small_icon.png"/>
                            <div class="topbar_small_div_text left height-30">ADMIT CARD</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EXAMINATION ADMIT CARD</h2></div>
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
                    
                    <div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                     
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
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


                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showroll(this.value)" >
                                        <option>Section</option>
                                       
                                    </select>
                                </li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Roll:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="roll" id="roll" onchange="showname(this.value)" >
                                        <option>Select Roll</option>
                                       
                                    </select>
                                </li>
                                
                                
                                
                              <ul id="name">
                              </ul>
                                
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                                    <button type="submit" onclick="showadmitcard('2')" name="submit" class=" height-35 div_btn" >Create View</button>
                                  
                                </li>
                        </ul>
                    </div>
                            
                       
                        
                    </div>
                    
             <!---------------------body start----------------------------------------------------------------->       
                                           
                   <div class="exam_result_div_page" style="margin-top: 20px;">
                   
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                
                                <div class="width-label-325 left" >
                                <img src="images/direction_left.png"/>
                                </div>
                                
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                    ADMIT CARD
                                </h2></center>
                            </div>
                            
                                <div class="width-label-325 right" >
                                <img src="images/direction_right.png"/>
                                </div>
                            </div>
                            
                        </center>
                        
                        
                       <div id="result1" class="result_sheet" style="padding-bottom:20px; padding-top:20px;">
                        <!-----------------sep_1 start---------------------------------->
                        <!-----------------sep_1 end----------------------------------> 
                          </div>
                                        
                       <div class="clear"></div>   
                       </div>

                    </div>
                    
<!---------------------body end----------------------------------------------------------------->             



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