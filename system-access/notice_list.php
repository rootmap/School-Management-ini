<?php
include_once('class/auth.php');
$table = "ams_notice";
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
            function shownotice(str)
            {
                if (str == "")
                {
                    document.getElementById("notice").innerHTML = "";
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
						$("#notice").fadeOut();
                        $("#notice").fadeIn();
                        document.getElementById("notice").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/notice.php?s="+str, true);
                xmlhttp.send();
            }
</script>

      <style>
	  a{color:rgba(0,102,153,1);}
        .jjj:hover{color:rgba(204,0,0,1); font-size:18px;-moz-transition:all 600ms ease-in-out;-ms-transition:all 600ms ease-in-out;-o-transition:all 600ms ease-in-out;-webkit-transition:all 600ms ease-in-out;transition:all 600ms ease-in-out;}
      </style> 
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
                            <div class="topbar_small_div_text left height-30">MORE +</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>NOTICE
                    </h3></div></a>
                    <div class="topbar_small_div right">
                        <ul>
 <?php include('includes/back.php'); ?>

                        </ul>

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->               
                           <?php include_once('class/esm.php'); ?>
                <div style="clear:both; ">
                    


                    <div class="admission_div shadow_inner" style="margin-top: 20px; background:none; height:auto;">
                        <div class="st_group_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>NOTICE BOARD</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position" style="height:auto; padding:5px;">               <div id="book"></div>
                            
                            <div class="" style="background:rgba(0,153,255,.1); float:left; width:30%; color:rgba(0,102,153,1); padding:15px;">
                            <?php
								$aary=array("school_id"=>$school);
								$data=$obj->SelectAllByID($table,$aary);
								$x=1;
								if(!empty($data))
									
								foreach($data as $row):
							?>
                              <ul>
                                <li style="height:30px;" >
                                 <a class="jjj" title="" id="show" onclick="shownotice('<?php echo $row->id; ?>')" href="#"><?php echo $row->name; ?><span style="color:rgba(51,51,51,1);" class="right"><?php echo $row->date; ?></span></a>
                                  </li>
                               </ul> 
                                <?php endforeach; ?>
                            </div>
                            
                            <div id="notice" class="" style="float:left; margin-left:10px; width:60%; color:rgba(0,102,153,1);">
                            
                            </div>
                           
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