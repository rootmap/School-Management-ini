<?php
include_once('class/auth.php');
$table="ams_attendance_reg_stng";
if(isset($_POST['save']))
{
    
	$rand_id=time();

    
        foreach($_POST['weekly'] as $index=>$nn):
			
			if($obj->exists_multiple($table,array("weekly_id"=>$nn,"date1"=>$_POST['dt'][$index],"rand_id"=>$rand_id,"session_id"=>$_POST['session'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],"class_id"=>$_POST['class']))==0)
			{
				
        	$obj->insert($table,array("weekly_id"=>$nn,"date1"=>$_POST['dt'][$index],"rand_id"=>$rand_id,"session_id"=>$_POST['session'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],"class_id"=>$_POST['class'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
				
				
					
				
			}
			
        endforeach;
		$count=count($_POST['weekly']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
		}
    
    
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        
        
        <script>
            function showsession(str)
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
                xmlhttp.open("GET", "ajx/show_class_all.php?t=" + str, true);
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
                            <img src="images/attendance_register.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>ATTENDANCE REGISTER SETTING</h3></div>
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
                    <form action="" method="post" name="wekly">
                    <div class="attendance_reg_setting_div_top shadow_inner color_1">
                        <div class="attendance_reg_setting_small_top">
                        <ul>
                        	<li class="attendance_report_small_top_li height-40 width-label-70 left">Session:</li>
                                <li class="attendance_report_small_top_li height-40 width-label-150 left">
                                    <select class="select_option" id="session" onchange="showsession(this.value)" name="session" >
                                        <option>Select a Session</option>
                                        <?php
										$array=array("school_id"=>$school); 
								 $session=$obj->SelectAllByID("ams_session",$array);
								  if(!empty($session))
								  foreach($session as $ses):
								 ?>
                                <option value="<?php echo $ses->id;?>"><?php echo $ses->name;?></option>
                                <?php endforeach; ?>
                                    </select>
                                </li>
                            
                           
                            </ul>
                    </div>
                        
                    
                        <div id="class" class="attendance_reg_setting_days margin-top-20 auto-position">
                        
                        	
                   
                              
                            
                           
                    </div>
                    <div class="clear"></div> 
                    </div>

</form>

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