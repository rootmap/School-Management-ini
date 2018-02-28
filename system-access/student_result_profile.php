<?php
include_once('class/auth.php');
$table="ams_exam_result";

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
                xmlhttp.open("GET", "ajx/class.php?c="+ str, true);
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
                xmlhttp.open("GET", "ajx/rool1.php?r="+ str, true);
                xmlhttp.send();
            }
        </script>
     
     
      <script>
            function showsname(str)
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
                xmlhttp.open("GET", "ajx/name.php?n="+ str+"&roll="+roll, true);
                xmlhttp.send();
            }
        </script>
     
        
        <script>
            function showresult(str)
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
				
				addmission=document.getElementById('admission').value;
                xmlhttp.open("GET", "ajx/show_result.php?d="+str+"&admission="+addmission, true);
                xmlhttp.send();
            }
        </script>
        <!-----table starts------------------------------------------------------------------------------------------------------------->
        
        <!-----table ends------------------------------------------------------------------------------------------------------------->
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
                border:1px #C00 solid;
                outline:none;
                display: inline-block;
                -webkit-appearance:none;
                -moz-appearance:none;
                appearance:none;
                cursor:pointer;
                width: 130px;
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
			
			
			.textbox_exm { 
    border: 1px #CC0000 solid; 
    height: 18px; 
    width: 355px; 
    font-size: 13px; 
    padding: 3px 4px 3px 4px; 
    margin-top: -5px;
    margin-right: 5px;
	margin-left: 11px;
    border-radius: 5px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 5px; 
    box-shadow: 0px 0px 5px #d9d9d9; 
    -moz-box-shadow: 0px 0px 5px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 5px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
} 
			
			.TFtable{
		width:98%;
	 	margin: 0 auto 0 10px;
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
	.TFtable tr:nth-child(odd){ 
		background:#dbe5f1;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background:#f2dbdb;
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
                            <img src="images/class_time_Icon.png"/>
                            <div class="topbar_small_div_text left height-30">EXAMINATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>RESULT LIST</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                
                    
             <!---------------------body start----------------------------------------------------------------->       
                                           
                   <div class="exam_result_div_page" style="margin-top: 20px; ">
                   
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                
                                <div class="width-label-325 left" >
                                <img src="images/direction_left.png"/>
                                </div>
                                
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                     SHOW RESULT
                                </h2></center>
                            </div>
                            
                                <div class="width-label-325 right" >
                                <img src="images/direction_right.png"/>
                                </div>
                            </div>
                            
                        </center>
                        
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->
                           <div id="dynamic"  style="margin-top:15px; overflow:auto;">
                                
                           </div>
                             
                            
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
                        </div>
             
                       <div class="result_sheet">
                        <?php 
								$array=array("id"=>$student_details);
							    $info=$obj->SelectAllByID($table,$array);
								 if(!empty($info))
								  foreach($info as $in):
					?>
                        <!-----------------sep_1 start---------------------------------->
                          <div class="left result_sheet_1">
                          
                             <div class="result_sheet_1_img left">
                              <img src="images/admission_icon.png" />
                             </div>
                            <input type="hidden" value="<?php echo $in->id;?>" />
                             <div class="result_sheet_name left">
                              <div class="result_sheet_name_1">School/College Name</div>
                              <div class="result_sheet_name_2">2nd Semester Examination-2014 </div>
                               <div class="result_sheet_name_3">Progress Report Card</div>
                             </div>
                             
                             <div class="result_sheet_photo left">
                              <div class="result_sheet_photo_id">ID No: 12345678555</div>
                              <div class="result_sheet_photo_img">
                               <img src="images/admission_icon.png" />
                              </div>
                             </div>
                              
                              <div class="result_sheet_table left">
                                <table>
                                  <tr>
                                    <td>Name of Examinee   :</td>
                                    <td>Sheikh Rasel</td>
                                    <td>Roll Number   :</td>
                                    <td>1234566</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>Father’s Name :</td>
                                    <td>Sheikh Rasel</td>
                                    <td>Section :</td>
                                    <td>G</td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mother’s Name :</td>
                                    <td>Mother’s Name</td>
                                    <td>Group Name :</td>
                                    <td>B</td>
                                  </tr>
                                </table>
                              </div>
                              
                          </div>
                          <?php endforeach; ?>
                          
                          
                          <div class="result_sheet_2 left">
                           <table cellspacing="0">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  
                                  <tr>
                                    <td>80 of avobe</td>
                                    <td class="center">A+</td>
                                    <td class="center">4.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>75-below 80</td>
                                    <td class="center">A</td>
                                    <td class="center">3.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>70-below 75</td>
                                    <td class="center">A-</td>
                                    <td class="center">3.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>65-below 70</td>
                                    <td class="center">B+</td>
                                    <td class="center">3.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>60-below 65</td>
                                    <td class="center">B</td>
                                    <td class="center">3.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>55-below 60</td>
                                    <td class="center">B-</td>
                                    <td class="center">2.75</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>50-below 55</td>
                                    <td class="center">C+</td>
                                    <td class="center">2.50</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>45-below 50</td>
                                    <td class="center">C</td>
                                    <td class="center">2.25</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>40-below 45</td>
                                    <td class="center">D</td>
                                    <td class="center">2.00</td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>below 40</td>
                                    <td class="center">F</td>
                                    <td class="center">0.00</td>
                                    
                                  </tr>
                                </table>
                          </div>
            <!-----------------sep_1 end---------------------------------->  
            
      <!-----------------sep_next start---------------------------------->  
        <div class="result_sheet_next left">
          <div class="result_sheet_next_table left">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" >1st Semester</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <td colspan="2"class="center">Marks Obtained</td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                    </tr>
                    <tr>         
                        <td class="center">Essay</td>
                        <td class="center">M.C.Q</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                         4
                        </td>
                        <td class="center">
                        4
                        </td>
                        <td class="center">
                         4
                        </td> 
                    </tr>
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             
             <div class="table_next_report_1 left">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:left;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                 
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">54 days</td>
                        <td colspan="2" class="center">90%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center">60 days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                    
                
            </table>
             </div>
            </div>
           <div>
          </div>
         </div>
          
<!-----------------sep_next_1 end---------------------------------->            
          
 <!-----------------sep_next_table_2 start---------------------------------->           
          
          
          
          
          <div class="result_sheet_next_table right">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" > Half Yearly Examination Result</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <td colspan="2"class="center">Marks Obtained</td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                    </tr>
                    <tr>         
                        <td class="center">Essay</td>
                        <td class="center">M.C.Q</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                         4
                        </td>
                        <td class="center">
                        4
                        </td>
                        <td class="center">
                         4
                        </td> 
                    </tr>
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             
             <div class="table_next_report_1 left">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:left;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                 
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">54 days</td>
                        <td colspan="2" class="center">90%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center">60 days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                    
                
            </table>
             </div>
            </div>        
           <div>
          </div>
         </div>
  <!-----------------sep_next_table_2 end---------------------------------->  
  
  <!-----------------sep_next_table_3 start---------------------------------->           
          
          
          
          
          <div class="result_sheet_next_table left">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                        <td rowspan="3" class="center">Subject</td>
                        <td colspan="7" class="center" >Final Examination Result</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Full</br>Marks</td>
                        <td rowspan="2" class="center">Pass</br>Marks</td>
                        <td colspan="2"class="center">Marks Obtained</td>
                        <td rowspan="2" class="center"> Total</br>Marks</td>
                        <td rowspan="2" class="center">Letter</br>Grade </td>
                        <td rowspan="2" class="center"> Grade</br>Point</td>
                    </tr>
                    <tr>         
                        <td class="center">Essay</td>
                        <td class="center">M.C.Q</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 Bangla
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        <td class="center">
                         66
                        </td>
                        <td class="center">
                         A
                        </td>
                        <td class="center">
                         3.00
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                        <td class="center">
						 
                        </td>
                        <td colspan="4" class="center">Grand Total=</td>
                        
                        <td class="center">
                         4
                        </td>
                        <td class="center">
                        4
                        </td>
                        <td class="center">
                         4
                        </td> 
                    </tr>
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             
             <div class="table_next_report_1 left">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:left;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                 
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">54 days</td>
                        <td colspan="2" class="center">90%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center">60 days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                    
                
            </table>
             </div>
            </div>        
           <div>
          </div>
         </div>
  <!-----------------sep_next_table_3 end---------------------------------->  
  
  <!-----------------sep_next_table_4 start---------------------------------->           
          
          
          
          
          <div class="result_sheet_next_table right">
                       
                 <table cellspacing="0">
                  <thead>  
                    <tr>
                       
                        <td colspan="7" class="center" >All Semester Marks</td>
                                                
                     </tr>
                    <tr>
                        <td rowspan="2" class="center">Total Marks</td>
                        <td rowspan="2" class="center">Average Marks</td>
                        <td rowspan="2" class="center">Letter Grade</td>
                        <td rowspan="2" class="center">Grade Point</td>
                    </tr>
                    
                  </thead>
                  <tbody>
                     <tr>
                      
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                       
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        
                        
                            
                    </tr>
                    
                    <tr>
                      
                       
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                        
                            
                    </tr>
                    
                    <tr>
                      
                       
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        
                    </tr>
                    
                    <tr>
                      
                      
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                        
                            
                    </tr>
                    
                    <tr>
                      
                       
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                            
                    </tr>
                    
                    <tr>
                      
                        
                        <td colspan="2" class="center">Grand Total=</td>
                        
                        <td class="center">
                         4
                        </td>
                        <td class="center">
                        4
                        </td>
                       
                    </tr>
                 </tbody>
            </table>
            
            <div class="result_sheet_next_table_next">
            
             <div class="table_next_report left">
               <ul>
                 <li class="left">GPA =</li>
                 <li class="left">3.00</li>
                 <li class="left">Grade =</li>
                 <li class="left">A</li>
               </ul>
             </div>
             <div class="table_next_report_1 left">
                Student’s Personal Report
             </div>
             
             <div class="table_next_report_1_table left">
                <table  style="padding:0px; text-align:left;" cellpadding="0" cellspacing="0" border="0">
                  <thead>  
                    <tr>
                        <th rowspan="2" class="center">Performance <br /> Grading</th>
                        <th colspan="6" class="center" >1st Semester</th>
                                                
                     </tr>
                    <tr>
                        <th rowspan="2" class="center">A</th>
                        <th rowspan="2" class="center">B</th>
                        <th rowspan="2"class="center">C</th>
                        <th rowspan="2" class="center">D</th>
                       
                        
                    </tr>
                    
                  </thead>
                 
                     <tr>
                      
                        <td>
						 Attentiveness
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Discipline
                        </td>
                        <td class="center">100</td>
                        <td class="center">40</td>
                        <td class="center">
						 33
                        </td>
                        <td class="center">
                          33
                        </td>
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Position 
                        </td>
                        <td colspan="4" class="center">100</td>
                        
                       
                    </tr>
                    
                    <tr>
                      
                        <td>
						 Total Attendance
                        </td>
                        <td colspan="2" class="center">54 days</td>
                        <td colspan="2" class="center">90%</td>
                       
                    </tr>
                    
                     <tr>
                      
                        <td>
						 Working Days
                        </td>
                        <td colspan="2" class="center">60 days</td>
                        <td colspan="2" class="center">100%</td>
                        
                       
                       
                    </tr>
                    
                    
                
            </table>
             </div>
            
            </div>        
           <div>
          </div>
         </div>
  <!-----------------sep_next_table_4 end---------------------------------->          
          
          
          
          
 
            
       </div>
<!-----------------sep_next end---------------------------------->                    
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