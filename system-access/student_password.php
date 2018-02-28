<?php
include_once('class/auth_st.php');
$table="ams_student_login";
extract($_POST);
if(isset($_POST['submit']))
{
	if($obj->exists_multiple($table,array("admition"=>$input_by,"school_id"=>$school,"password"=>$oldpass)))
	{
		if($newpass!= $repass)
		 {
			 echo $obj->Error("New Password And Re-typ Password Are Not Match..Please Try Again...",$obj->filename());	
		 }else{
			 if($obj->update($table,array("admition"=>$input_by,"password"=>$newpass))==1)
			 {
				 echo $obj->Success("Your Password Successfully Change.....",$obj->filename());
			 }else{
				 echo $obj->Error("Your Password Change Failed..Please Try Again...",$obj->filename());	
			 }
		 }
	}else{
		echo $obj->Error("Your Old Password Are Not Match..Please Try Again...",$obj->filename());
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <style type="text/css">

	.TFtable{
		width:98%;
	 	margin: 0 auto 0 auto;
		border-collapse:collapse;
		
	}
	.TFtable td{ 
		padding:5.5px;
	}
	
</style>

    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('include/student_profile_head.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo");?>"/>
                            <div class="topbar_small_div_text left height-30">STUDENT DETAIL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2><?php echo $obj->SelectAllByVal($table,"admition",$input_by,"name");?></h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
                        

                        </ul>
                       
						
                    </div>
                </div>
                 <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                 <?php 
								$array=array("admition"=>$input_by,"school_id"=>$school);
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
                            <?php include('include/menust.php'); ?>
                        </div>
                        <div id="printableArea" class="profile_info_form_div width-col5 auto-position">
                           
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
                        <!--tables code start from here-->
                        
                        <div id="dynamic"  style="margin-top:25px; width:600px; margin-left:auto; margin-right:auto; z-index:-1;">
                        		<form action="" method="post" name="pa">
                                <table class="TFtable" align="center"  style="z-index:-1;">
                                	
                                        <tr>
                                                <td class="width-label-150">Old Password</td>
                                                <td class="center"><input type="password" name="oldpass" placeholder="Old Password" class="textbox" /></td>
                                        </tr>
                                        <tr>
                                                <td>New Password</td>
                                                <td class="center"><input type="password" name="newpass" placeholder="New Password" class="textbox" /></td>
                                        </tr>
                                        <tr>
                                                <td>Re-type Password</td>
                                                <td class="center"><input type="password" placeholder="Re-type Password" name="repass" class="textbox" /></td>
                                        </tr>
                                         <tr>
                                           <td colspan="2" class="center"><button type="submit" name="submit" class="height-35 div_btn">Change Password</button></td>
                                        </tr>
                                        
                                </table>
                                </form>
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