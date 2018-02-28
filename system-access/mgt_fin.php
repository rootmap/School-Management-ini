<?php
include_once('class/auth.php');
$table="ams_manage_account_paymant";
$table2="ams_manage_account_paymant_details";
if(isset($_POST['save']))
{
    

    $obj->insert($table,array("group_id"=>$_POST['group'],"id_number"=>$_POST['number'],"receipt"=>$_POST['receipt'],"school_id"=>$school,"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1));
			
        foreach($_POST['taka'] as $index=>$nn):
			if($obj->exists_multiple($table,array("roll"=>$_POST['roll'],"admission"=>$_POST['admission'][$index],"total_taka"=>$_POST['taka'][$index],"receipt"=>$_POST['receipt'],"school_id"=>$school))==0)
			{
        	
			
			$obj->insert($table2,array("total"=>$_POST['taka_t'][$index],"id_number"=>$_POST['number'],"account_id"=>$_POST['ac_id'],"amount"=>$_POST['taka'][$index],"receipt_number"=>$_POST['receipt'],"account_name_id"=>$_POST['account_name'][$index],"school_id"=>$school,"group_id"=>$_POST['group'],"date"=>date('Y-m-d'),"status"=>1));
			
			
			}
			
        endforeach;
		$count=count($_POST['taka']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		}
    
    
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <script>
            function Management(str)
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
                xmlhttp.open("GET", "ajx/manage_account.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function management(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic1").innerHTML = "";
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
                        document.getElementById("dynamic1").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/manage_account_2.php?d=" + str, true);
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
                width: 150px;
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
                font-family: Tahoma, Geneva, sans-serif;background:#FFF;color:#999;font-weight:100;

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
        <!-- body starts from here---------------------------------------------------------------------------------------------->

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
                        <div class="topbar_small_div_text2 left height-30"><h2>MANAGEMENT ACCOUNTS</h2></div>
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




                    <div class="st_fin_div_page" style="margin-top: 20px; height:auto;overflow:hidden; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                                <div class="attendance_reg_heading left width-label-250 auto-padding">
                                    <center><h4>
                                            Management Accounts
                                        </h4></center>
                                </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div></center>
                        </div>
                        
                        <div class="st_fin_small_form_div width-col5 auto-position">
                            
                            
                            <div class="st_fin_small_div"  style="width:90%;" >
                            	<ul style="margin-left:30px;">
                           		<li class="add_st_form_div_label_view_details height-30 width-label-180 left"> Management Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select name="session" id="session" onchange="Management(this.value)" >
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
                                
                       </ul>
                              <ul id="dfdf" style="height:50px; width:100%;">
                            
                                </ul>
                            </div>
                            
                            <div id="" class="st_fin_small_div" style="width:100%;" >
                                    <div id="dynamic"  style="width:98%; float:left;">
                                    
                                    
                                    </div>
                                    <div id="dynamic1" style="width:50%; float:right;"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>

               </div>
                            <!----------------------select menu ends--------------------------------------------------------------------------------------->

                            


                    <div class="spacer"></div>
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