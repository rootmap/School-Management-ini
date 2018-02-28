<?php
include_once('class/auth.php');
$table="ams_management_group";
if(isset($_POST['save']))
{
    $exist_array=array("name"=>$_POST['name']);
	$insert_array=array("name"=>$_POST['name'],"date"=>date('Y-m-d'),"status"=>1);
	
    if($obj->exists($table,$exist_array)==1)
    {
        $error_data[]="<div class='error_msg'>Group Name Already Exists</div>";
        $error_flag=TRUE;
        if($error_flag)
        {
            $_SESSION['ERRMSG_ARR']=$error_data;
            session_write_close();
            header('location: '.$obj->filename());
            exit();
        }
    }
    else 
    {
        
        if($obj->insert($table,$insert_array)==1)
        {
                $error_data[]="<div class='sucess'>Group Name Successfully Saved</div>";
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
                $error_data[]="<div class='error_msg'>Group Name Saved Failed</div>";
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
    
}

if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    {
             $error_data[]="<div class='sucess'>Group Name Successfully Deleted</div>";
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
             $error_data[]="<div class='error_msg'>Group Name Delete Failed</div>";
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
        <div id="body_container ">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>CREATE MANAGEMENT GROUP</h3></div>
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
                                    <button type="submit" name="save" class=" height-35 " style="background: url('images/signin_new.png') no-repeat center right #FFF; margin-top: 15px; margin-left: auto; margin-right: auto; margin-bottom: 10px; height: 37px; padding-right: 35px;  border: 1px #C00 solid; border-radius:5px; font-weight:bold; padding-bottom:2px; padding-left:5px; color:#09F; ">Create Now </button>
                                </li>

                            </ul>
                            </form>

                        </div>


                    </div>

                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Management Group List</left></h2>
                        </div>
                        <div class="admission_div_page auto-position" style="border:none; padding:10px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Group Name</th>
                                            <th>Creation Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $data=$obj->SelectAllByID_Multiple($table,array("school_id"=>$school));
                                       
                                            $x=1;
											 if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td class="center">edit</td>
                                                <td class="center"><a href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&amp;action=delete">Delete</a></td>
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="clear"></div>
                            <!--tables code end here-->


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