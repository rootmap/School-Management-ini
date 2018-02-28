<?php
include_once('class/auth.php');
$table="ams_massages_book";
extract($_GET);
if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['namee'],"details"=>$_POST['text']);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['namee'])
	  {
		echo $obj->Success("Class / Course Update Successfully","book_list.php");	
	  }
	     else
	  {
		echo $obj->Error("Class / Course Update Failed","book_list.php");	
	  }
}
if (@$_GET['action'] == 'delete') {
    if ($obj->delete($table, array("id" => $_GET['id'])) == 1) {
        $error_data[] = "<div class='sucess'>Group Name Successfully Deleted</div>";
        $error_flag = TRUE;
        if ($error_flag) {
            $_SESSION['SMSG_ARR'] = $error_data;
            session_write_close();
            header('location: ' . $obj->filename());
            exit();
        }
    } else {
        $error_data[] = "<div class='error_msg'>Group Name Delete Failed</div>";
        $error_flag = TRUE;
        if ($error_flag) {
            $_SESSION['ERRMSG_ARR'] = $error_data;
            session_write_close();
            header('location: ' . $obj->filename());
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
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">BOOK LIST</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>CREATE MASSAGES BOOK LIST</h2></div>
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
                            <h2 class="margin_left30"><left>CREATE MASSAGES BOOK LIST</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position" style="height:auto; padding:5px;">                         <div id="book">
                           
                           <form action="" method="post" name="uuu">
    <ul class="admission_form_div width-col2 auto-position">
                                <li class="admission_form_div_label height-30 width-label-200 left">Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
        <input placeholder="Type massages book Name" value="<?php echo $obj->SelectAllByVal($table,"id",$id,"name"); ?>" name="namee" id="namee" type="text" class="textbox"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                                </li>
                                
                                
                                <li class="admission_form_div_label height-auto width-label-200 left">Details<span class="right">:</span></li>
                                <li class="admission_form_div_label height-auto width-label-250 right">
                                    <textarea name="text" id="text" placeholder="Type massages book" class="text_area">
                                   <?php echo $obj->SelectAllByVal($table,"id",$id,"details"); ?>
                                    </textarea>
                                    
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="update" class=" height-35 div_btn"> Update </button>
                                </li>

                            </ul>
</form>
                        
                        </div>
                            <?php
								$aary=array("school_id"=>$school);
								$data=$obj->SelectAllByID($table,$aary);
								$x=1;
								if(!empty($data))
									
								foreach($data as $row):
							?>
                            <div class="book">
                               <div class="book_head">
                                 <?php echo $row->name; ?> <span style="margin-right:20px;" class="right">
                                 
                                <a style="color:#060;" href="#"><i class="fa fa-check-square-o"></i></a>
                                <a style="color:#33C;" href="edite_book.php?id=<?php echo $row->id; ?>&amp;school=<?php echo $school; ?>"> <i class="fa fa-edit"></i></a>
                                 <a style="color:#F00;" href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&action=delete"><i class="fa fa-cut"></i></a>
                                 </span>
                               </div>
                                 <p><?php echo $row->details; ?></p>
                            </div>
                            <?php endforeach; ?>
                            
                           
                            
                           
<div class="clear"></div>
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