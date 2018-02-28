<?php
include_once('class/auth.php');
$table="ams_transport_setting_profile";


if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    {
             $error_data[]="<div class='sucess'>Successfully Deleted</div>";
             $error_flag=TRUE;
             if($error_flag)
             {
                 $_SESSION['SMSG_ARR']=$error_data;
                 session_write_close();
                 header('location: '.$obj->filename());
                 exit();
             } 
     }
     else
     {
             $error_data[]="<div class='error_msg'>Delete Failed</div>";
             $error_flag=TRUE;
             if($error_flag)
             {
                 $_SESSION['ERRMSG_ARR']=$error_data;
                 session_write_close();
                 header('location: '.$obj->filename());
                 exit();
             } 
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
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/stat_icon.png"/>
                            <div class="topbar_small_div_text left height-30">Transport</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h2>ALL Transport </h2></div>
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
                    
                    
                                           
                    <div class="admission_div_page" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>ALL transport profile LIST:</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position color_1 shadow_inner" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="printableArea">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th width="5%">S/L</th>
                                            <th width="24%">NAME</th>
                                            <th width="24%">transport</th>
                                            <th width="24%">Area</th>
                                            <th width="23%">Gender</th>
                                            <th width="24%">Address</th>
                                            <th width="24%">email</th>
                                            <th width="24%">Number</th>
                                            <th width="24%">Image</th>
                                            <th width="24%">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>

                                        <tr class="">
                                                <td><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                 <td class="center">
												    <?php echo $row->transport_number; ?>
                                                   </td>
                                                <td class="center"><?php echo $row->area; ?></td>
                                                <td class="center">
												<?php echo $row->gnder; ?>
                                                </td>
                                                <td class="center">
												<?php echo $row->present_address; ?>
                                                </td>
                                                <td class="center">
												  <?php echo $row->email; ?>
                                                </td>
                                                <td class="center"><?php echo $row->email; ?></td>
                                                <td class="center">
                                                <img src="photo/<?php echo $row->photo;?>" height="35" width="40" />
                                                </td>
                                                <td class="center"><a onclick="<?php echo $obj->delete_confirm();?>" href="<?php echo $obj->filename();?>?id=<?php echo $row->id; ?>&AMP;action=delete"><img src="images/deletered.gif" /></a></td>
                                        </tr>
                                        <?php $x++; endforeach; ?>                              
                                    </tbody>
                                </table>
                               </div>
                                 <?php include ('./include/print.php'); ?>
                              <div class="clear"></div>
                            </div>
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