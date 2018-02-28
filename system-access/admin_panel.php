<?php
include_once('class/auth.php');
$table="tsms_group";
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
                padding:5px;
                margin: 0;
                /*-webkit-border-radius:4px;
                -moz-border-radius:4px;
                border-radius:4px;
                -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
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
                width: 150px;
				height:30px;
				line-height:30px;
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
		margin: 0 auto 0 auto;
		border-collapse:collapse;
		font-family:Times New Roman;
		font-size:auto;
		
		
	}
	.TFtable td{ 
		padding:2px; border:#4e95f4 1px solid;
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
            <div class="st_detail_body ">
                <div class="st_detail_topbar margin-top-75">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/admin_icon.png"/>
                            <div class="topbar_small_div_text left height-30">ADMINISTRATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>DREAMS TECH</h2></div>
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
                    <div class="menu_div">
                    
                    	<!--nav Menu Start From Here-->
                    <ul id="nav" class="left">
                    	<li><a href="#">Sort By</a>
                        <ul>
                                <li><a href="#">Type EIIN</a></li>
                                <li><a href="#">Name</a></li>
                                <li><a href="#">Date</a></li>
                                <li><a href="#">Total Size</a></li>
                         </ul>
                        </li>
					</ul>
                    
                    <ul id="nav" class="right arial bold">
                    	<li><a href="#">EIMS Software User</a>
                        <ul>
                                <li><a href="#">All EIMS Software User</a></li>
                                <li><a href="#">Search by EIIN Number</a></li>
                                <li><a href="#">Search by Thana</a></li>
                                <li><a href="#">Search by District </a></li>
                            </ul>
                        </li>
                        <li><a href="#">EIIN Number & SMS Settings </a>
                        <ul>
                                <li><a href="#">Create EIIN Number</a></li>
                                <li><a href="#">All EIIN Number Lists</a></li>
                                <li><a href="#">Recent Active EIIN Number</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Edit</a>
                            
                        </li>
                        <li><a href="#">Delete</a>
                        
                        </li>
                        
                    </ul>

                    
                    </div>                       
                    <div class="staff_profile_info_div_page" style="margin-top: 20px; ">
                        <div class="administration_user_info_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">eims software users' information</h2>
                        </div>
                        <!--tables code start from here-->
                           <div id="dynamic" class="default_width auto-position margin_left-5" >
                                <table class="TFtable" align="center">
                                			<tr>
                                                <td rowspan="4" class="center height-15 light_green">S.L</td>
                                                   <td rowspan="4" class="center height-15 light_green">EIIN</td>
                                                    <td rowspan="4" class="center height-15 light_green">Institute Name</td>
                                                      <td rowspan="4"  class="center height-15 light_green">Mobile</br>Number </td>
                                                     <td rowspan="4" class="center height-15 light_green">Thana</td>
                                                      <td rowspan="4" class="center height-15 light_green">District</td>
                                                        <td rowspan="4" class="center height-15 light_green">Package</br>Type</td>
                                                        <td rowspan="4" class="center height-15 light_green">Service</br>Status</td>
                                                         <td rowspan="4" class="center height-15 light_green">SMS</br>Status</td>
                                                          <td rowspan="4" class="center height-15 light_green">SMS</br>Quantity</td>
                                                           <td rowspan="2" colspan="2" class="center height-15 light_green">Service Validity</td>
                                                             <td rowspan="4" class="center height-15 light_green">Active</br>Date</td>
                                                              <td rowspan="4" class="center height-15 light_green">View</br> Details</td>
                                                              
                                                </tr>
                                        					
                                                   
                                                  <tr>
                                                  </tr>
                                                
                                                  
                                                    
                                                      
                                                     
                                                     
                                                        
                                                        
                                                 <tr>         
                                                           <td rowspan="2" class="center height-15 light_yellow">Remaining</br>Day</td>
                                                            <td rowspan="2" class="center height-15 light_yellow">Expiry</br>Date</td>
                                                             
                                                               
                                                </tr>
                                                
                                                   
                                                   
                                                     
                                                     
                                              <tr>        
                                                        
                                                          
                                                           
                                                            
                                                             
                                                              
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">1</td>
                                                   <td class="center height-15">4001</td>
                                                    <td class="center height-15">Dolphin Pre- Cadet School</td>
                                                     <td class="center height-15">01789564283</td>
                                                     <td class="center height-15">Kadamtoli</td>
                                                      <td class="center height-15">Dhaka</td>
                                                        <td class="center height-15">Standard</td>
                                                         <td class="center height-15">Active</td>
                                                          <td class="center height-15">Active</td>
                                                           <td class="center height-15">5500</td>
                                                            <td class="center height-15">365</td>
                                                             <td class="center height-15">09/03/2015</td>
                                                              <td class="center height-15">09/03/2014</td>
                                                              <td class="center height-15">Details</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">2</td>
                                                   <td class="center height-15">4002</td>
                                                    <td class="center height-15">City Ideal School</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">3</td>
                                                   <td class="center height-15">4003</td>
                                                    <td class="center height-15">National Pre-Cadet School</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">4</td>
                                                   <td class="center height-15">4004</td>
                                                    <td class="center height-15">Morning Star School</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                              
                                                </tr>
                                                <tr>
                                                <td class="center height-15">5</td>
                                                   <td class="center height-15">4005</td>
                                                    <td class="center height-15">Purbo Jurain School</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                              
                                                </tr>
                                                <tr>
                                                <td class="center height-15">6</td>
                                                   <td class="center height-15">4006</td>
                                                    <td class="center height-15">Popy Kinder Garden</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">7</td>
                                                   <td class="center height-15">4007</td>
                                                    <td class="center height-15">Dania College</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">8</td>
                                                   <td class="center height-15">4008</td>
                                                    <td class="center height-15">Ideal College</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">9</td>
                                                   <td class="center height-15">4009</td>
                                                    <td class="center height-15">Kobi Nazrul Govt. College</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                               <td class="center height-15">10</td>
                                                   <td class="center height-15">4010</td>
                                                    <td class="center height-15">A.K. High School &amp; College</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                                <tr>
                                                <td class="center height-15">11</td>
                                                   <td class="center height-15">4011</td>
                                                    <td class="center height-15">Shamsul Haque Khan College</td>
                                                     <td class="center height-15">4</td>
                                                     <td class="center height-15">5</td>
                                                      <td class="center height-15">6</td>
                                                        <td class="center height-15">7</td>
                                                         <td class="center height-15">8</td>
                                                          <td class="center height-15">9</td>
                                                           <td class="center height-15">10</td>
                                                            <td class="center height-15">11</td>
                                                             <td class="center height-15">12</td>
                                                              <td class="center height-15">13</td>
                                                              <td class="center height-15">14</td>
                                                               
                                                </tr>
                                  
                                </table>
                            </div>
                        

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