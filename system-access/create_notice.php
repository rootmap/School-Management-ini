<?php
include_once('class/auth.php');
$table="ams_notice";
if(isset($_POST['save']))
{
	
    if($obj->exists_Multiple($table,array("name"=>$_POST['name'],"details"=>$_POST['text'],"school_id"=>$school,"status"=>1))==0 
	&& !empty($_POST['name']) 
	&& !empty($_POST['text']))
    {
		$uf=$obj->pdf("word",time(),"pdf");
        
       if( $obj->insert($table,array("name"=>$_POST['name'],"word"=>$uf,"details"=>$_POST['text'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
	
	{
		echo $obj->Success("Student Notice Data Saved Successfully( ".$count." )",$obj->filename());
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
		echo $obj->Success("Student Notice Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Student Notice  Update Failed",$obj->filename());	
	  }
}

if (@$_GET['action'] == 'delete') {
    if ($obj->delete($table, array("id" => $_GET['id'])) == 1) {
        $error_data[] = "<div class='sucess'>Student Notice  Successfully Deleted</div>";
        $error_flag = TRUE;
        if ($error_flag) {
            $_SESSION['SMSG_ARR'] = $error_data;
            session_write_close();
            header('location: ' . $obj->filename());
            exit();
        }
    } else {
        $error_data[] = "<div class='error_msg'>Student Notice  Delete Failed</div>";
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
                            <img src="images/ssss.png"/>
                            <div class="topbar_small_div_text left height-30">NOTICE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Create Student Notice</h2></div>
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
                            <h2 class="margin_left30"><left> Create New Student Notice </left></h2>
                        </div>
                        <div id="subjectshow" class="admission_form_div width-col2 auto-position" style="height:auto;">
                            <form method="post" name="addgroup" action="" enctype="multipart/form-data">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Notice Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Notice Name Here" name="name" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Add Option<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="word" class="textbox" type="file"/>
                                </li>
                                
                                
                                <li class="admission_form_div_label height-auto width-label-200 left">Details<span class="right">:</span></li>
                                <li class="admission_form_div_label height-auto width-label-250 right">
                                    <textarea name="text" placeholder="Type Notice Here" class="text_area"></textarea>
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="save" class=" height-35 div_btn"> Submit </button>
                                </li>

                            </ul>
                            </form>

                        </div>
<div class="clear"></div>

                    </div>

                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Student Notice List</left></h2>
                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Notice Name</th>
                                            <th>Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$aary=array("school_id"=>$school,"status"=>1);
                                        $data=$obj->SelectAllByID_Multiple($table,$aary);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                <td class="center" ><?php echo $row->details; ?></td>
                                                <td><a title="clik to Edit" onclick="subjectedit('<?php echo $row->id; ?>')" href="#"><i class="fa fa-edit"></i></a></td>
                                                <td class="center" >
                                                <a href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete"><img src="images/deletered.gif"/></a></td>
                                                
                                                
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><div class="clear"></div>
                            <div class="spacer"></div>
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