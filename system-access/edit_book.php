<?php
include_once('class/auth.php');
$table="ams_massages_book";
extract($_GET);
if(isset($_POST['save']))
{
    if($obj->exists_Multiple($table,array("name"=>$name,"details"=>$text,"school_id"=>$school,"status"=>1))==0 
	&& !empty($_POST['name']) 
	&& !empty($_POST['text']))
    {
       
       if( $obj->insert($table,array("name"=>$name,"details"=>$text,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
	
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
		echo $obj->Error("Somthing Wrong Please Try Agin....",$obj->filename());	
	}
}
if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name'],"details"=>$_POST['text']);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['name'])
	  {
		echo $obj->Success("Subject Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Subject Update Failed",$obj->filename());	
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
        <script>
            function subjectedit(str)
            {
                if (str == "")
                {
                    document.getElementById("subjectshow").innerHTML = "";
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
                        document.getElementById("subjectshow").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/edit_notice.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
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
                            <div class="topbar_small_div_text left height-30">BOOK</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>CREATE MASSAGES BOOK</h2></div>
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
                            <h2 class="margin_left30"><left>CREATE MASSAGES BOOK </left></h2>
                        </div>
                        <?php
								$aary=array("id"=>$id,"school_id"=>$school);
								$data=$obj->SelectAllByID_Multiple($table,$aary);
								$x=1;
								if(!empty($data))
									
								foreach($data as $row):
							?>
                        <div id="subjectshow" class="admission_form_div width-col2 auto-position" style="height:auto;">
                            <form method="post" name="addgroup" action="">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type MASSAGES Name" value="<?php echo $row->name; ?>" name="name" class="textbox"/>
                                    <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>" />
                                </li>
                                
                                
                                <li class="admission_form_div_label height-auto width-label-200 left">Details</li>
                                <li class="admission_form_div_label height-auto width-label-250 right">
                                    
                                </li>
                                <li class="admission_form_div_label height-auto width-auto right">
                                    <textarea name="text" placeholder="Type massages book" class="text_area"></textarea>                                  
                                       <script>
                                              CKEDITOR.replace( 'text', {
                                                 extraPlugins: 'magicline',	
                                                     allowedContent: true		
                                                    } );

                                      </script>  
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="save" class=" height-35 div_btn"> Submit </button>
                                </li>

                            </ul>
                            </form>

                        </div>
                        <?php endforeach; ?>
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