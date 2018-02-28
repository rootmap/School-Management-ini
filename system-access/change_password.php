<?php
include_once('class/auth.php');
$table="ams_singup";
if(isset($_GET['pass']))
{
	
	$array=array("eiin_number"=>$school,"password"=>$_GET['oldpass']);
	$arrays=array("eiin_number"=>$school,"password"=>$_GET['newpass']);
	if($obj->exists_multiple($table,$array)!=0)
	{
		extract($_GET);
		if($newpass!=$repass)
		{
				echo $obj->Error("New Password Mismatch, Please Try Again....",$obj->filename());	
		}
		else
		{
			if($obj->update($table,$arrays)==1)
			{
				echo $obj->Success("Password Successfully Change",$obj->filename());	
			}
			else
			{
				echo $obj->Error("Password Change Failed, Please Try Again....",$obj->filename());	
			}
		}
	}
	else
	{
		echo $obj->Error("Current Password is Wrong",$obj->filename());
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container ">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">Change Password</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Change Password</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>


                        </ul>
                       
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                         <?php include_once('class/esm.php'); ?>
                <div style="clear:both; ">
                    


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left> Change Password </left></h2>
                        </div>
                        <div class="admission_form_div width-col2 auto-position">
                            <form method="get" name="password" action="">
                            <ul>
                            
                                <li class="admission_form_div_label height-30 width-label-200 left">Current Password *<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                <input type="password" placeholder="Type Your Existing Password" name="oldpass" class="textbox"/>
                                </li>
                                
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">New Password *<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input type="password" placeholder="Type New Password Here" name="newpass" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Re-Type Password *<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input type="password" placeholder="Re-Enter" name="repass" class="textbox"/>
                                </li>
                                  


                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="pass" class=" height-35 div_btn"> Submit </button>
                                </li>

                            </ul>
                            </form>

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