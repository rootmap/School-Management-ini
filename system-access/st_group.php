<?php
include_once('class/auth.php');
$table="ams_management_group";
if(isset($_POST['save']))
{
   
    if($obj->exists($table,array("name"=>$_POST['name'],"school_id"=>$school))==0  && !empty($_POST['name']))
    {
        
        if($obj->insert($table,array("name"=>$_POST['name'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		
		
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
		}    
	}
	    else
		{
			echo $obj->Error("Somthing Wrong Please Try Again...",$obj->filename());	
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
                            <div class="topbar_small_div_text left height-30">MANAGE GROUP</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>CREATE GROUP</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="homepage.php" style="text-decoration:none;">
                                    <button type="submit" name="login" class="css_btn_class1 height-35 " 
                                            style="background: url('images/signin_new02.png') no-repeat center left #C8C8C8;
                                            margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px;
                                            padding-left: 35px; border:none;">Back</button>
                                </a>
                            </li>

                        </ul>
                       
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                         <?php include_once('class/esm.php'); ?>
                <div style="clear:both; ">
                    


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height: 200px;">
                        <div class="st_group_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left> Create New Group </left></h2>
                        </div>
                        <div class="admission_form_div width-col2 auto-position">
                            <form method="post" name="addgroup" action="">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Group Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Group Name Here" name="name" class="textbox"/>
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="save" class=" height-35 div_btn"> Submit </button>
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