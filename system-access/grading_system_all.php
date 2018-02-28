<?php
include_once('class/auth.php');
$table="ams_grading_system_dateils";
if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name'],"letter"=>$_POST['ff'],"point"=>$_POST['fff']);
	
	if($obj->update($table,$array)==1)
	  {
		echo $obj->Success("Grading System Update Successfully",$obj->filename()."?id=".$id."&school=".$school);	
	  }
	     else
	  {
		echo $obj->Error("Grading System Update Failed",$obj->filename()."?id=".$id."&school=".$school);	
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
                    document.getElementById("grading").innerHTML = "";
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
						//$('#grading').fadeIn();
						//$('#grading').fadeOut();
                        document.getElementById("grading").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/grading_edit.php?s=" + str, true);
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
                            <div class="topbar_small_div_text left height-30">Grading</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Grading System List</h2></div>
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
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left> All School Grading System List</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position" style="padding:10px;">
                        <!--tables code start from here-->
                         <div id="grading"  style="margin-top:15px;"></div>
                          <div style="margin-top:15px; width:100%;">
                             <div class="width-label-300 left" style="height:400px; margin-right:20px;">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                 
                                 <?php
								 $array=array("category_id"=>1);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                </div>
                                
                                <div class="width-label-300 left" style="height:400px;margin-right:20px;">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                 
                                 <?php
								 $array=array("category_id"=>2);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                </div>
                                
                                <div class="width-label-300 left" style="height:400px;">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                 
                                 <?php
								 $array=array("category_id"=>3);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                </div>
                                
                                <div class="width-label-300 left" style="height:400px;margin-right:20px;">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                 
                                 <?php
								 $array=array("category_id"=>4);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                </div>
                                
                                <div class="width-label-300 left" style="height:400px;margin-right:20px;">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                 
                                 <?php
								 $array=array("category_id"=>5);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                </div>
                                
                                
                        
                       </div>
                       
                                <div class="clear"></div>
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