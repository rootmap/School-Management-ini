<?php
include_once('class/auth.php');
extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    
        
      <script>
            function managemant(str)
            {
                if (str == "")
                {
                    document.getElementById("dfdf").innerHTML = "";
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
                        document.getElementById("dfdf").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/show_view_manage.php?k=" + str, true);
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
				
                xmlhttp.open("GET", "ajx/managmant_account_view.php?r=" + str, true);
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
				receipt=document.getElementById('receipt').value;
                xmlhttp.open("GET", "ajx/managemant_account_view1.php?r=" + str, true);
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

            .Fees_table{
                width:98%;
                margin: 0 auto 0 10px;
                font-size:14px;
                font-family: Tahoma, Geneva, sans-serif; background:#FFF;color:#999;

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
                            <div class="topbar_small_div_text left height-30">FINANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>ACADEMIC MANAGMANT' ACCOUNTS</h3></div>
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
                                            Accounts
                                        </h3></center>
                                </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div></center>
                        </div>
                        
                        <div class="st_fin_small_form_div width-col5 auto-position">
                            <!---------------------------------------------select menu starts------------------------------------------------------------>
                            <div class="st_finance_div_top ">
                                <div class="attendance_report_small_top ">
                                     <ul>
                                        <li class="attendance_report_small_top_li height-40 width-label-175 left">Select a Class / Course:</li>
                                        <li class="attendance_report_small_top_li height-40 width-label-200 left">
                                            <select name="session" id="session" class="select_option" onchange="managemant(this.value)" >
                                        <option>Select Class / Course</option>
                                        <?php
										$array=array("school_id"=>$school); 
										 $data=$obj->SelectAllByID('ams_management_group',$array);
										 $x=1;
										 if(!empty($data))
										 foreach($data as $row):
										 ?>
                                         <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                         <?php endforeach;?>
                                    </select>
                                        </li>
                                        
                                        
                                    </ul>
                                    
                                     <ul style="margin-left:30px;">
                            <li id="dfdf" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                </li>
                       </ul>
                                </div>
                                

                            </div>
                            <!----------------------select menu ends--------------------------------------------------------------------------------------->

                            <div class="st_fin_small_form_div width-col5 auto-position" style="width:95%; overflow:hidden;">
                               <div id="dynamic1" style="width:100%;" class="st_fin_small_div left margin_left5" >
             <table style="font-size:12px;" cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                     <thead>
                     <tr>
                        <th class="center">SL</th>
                        <th class="center"><?php echo $obj->SelectAllByVal("ams_management_group","id",$id,"name");?>'s Name</th>
                        <th class="center">Catagory</th>
                        <th class="center">Group Name</th>
                        <th class="center">Accounts</th>
                        
                </tr>
                </thead>
                     <?php
                          $array=array("group_id"=>$id,"school_id"=>$school);
                          $data=$obj->SelectAllByID_Multiple("ams_management_profile",$array);
                          $s=1;
                          if(!empty($data))
                          foreach($data as $row)
                
                {        ?>
                
                <tr>
                        <td class="center">
                          
                          <?php echo $s;?>
                         </td>
                        <td><?php echo $row->name; ?></td>
                        
                        <td class="center">
                          <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name");?>
                        </td>
                        
                        <td class="center"><?php echo $obj->SelectAllByVal("ams_management_group","id",$id,"name");?></td>
                        <td class="center"><a href="#" onclick="showview('<?php echo $row->id_number; ?>')" type="radio" name="id_number" id="id_number"><img src="images/Calculator-icon.gif" /></a></td>
                        
                </tr>
                <?php $s++; } ?>
                </table>
</div>
  <div id="dynamic2" class="st_fin_small_div right" style="width:98%; margin-top:30px;" ></div>     
     </div>
  <div id="printableArea">                        
      <div id="ddddd" class="auto-position"  style=" width:70%;"></div>
   </div>
    <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
        <button type="button" onClick="printDiv('printableArea')" class=" height-35 div_btn">Print</button>        
    </li>
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