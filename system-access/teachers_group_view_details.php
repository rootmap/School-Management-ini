<?php
include_once('class/auth.php');
$table = "ams_management_profile";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
 

<script>
            function showlist(str)
            {
                if (str == "")
                {
                    document.getElementById("dynamic").innerHTML = "";
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
                        document.getElementById("dynamic").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/show_manae_list.php?k="+str, true);
                xmlhttp.send();
            }
</script>

     
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
                            <img src="images/sdetail_icon.png"/>
                            <div class="topbar_small_div_text left height-30">MANAGE USER</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>DETAILS ABOUT USERS</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
 <?php include('includes/back.php'); ?>

                        </ul>

                        <?php include_once('class/esm.php'); ?>
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    <div class="menu_div shadow_inner">
                        <ul class="auto-position width-label-350 margin-top-20 ">
                            
                            
                            <li class="add_st_form_div_label_view_details height-35 width-label-210 left arial bold" style="text-align:center; margin-left:-20px; margin-top:-2px; ">
&lowast; Select User Group				
                                <span class="right">:</span></li>
                            <li class="add_st_form_div_label_view_details height-35 width-label-100 left " style="margin-right:40px; margin-top:-2px;">
                                <select class="select_option" name="group" id="group" onchange="showlist(this.value)"  class="arial bold b_radius5">                          <option>Select a group</option>
                                   
                                    <?php
									 $array=array("school_id"=>$school); 
									 $data=$obj->SelectAllByID('ams_management_group',$array);
									 if(!empty($data))
									 foreach($data as $row):
									?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                    
                                    
                                    <?php endforeach; ?>
                                </select>
                            </li>
                            
                            
                             <div id="manage" style="float:left; width:auto; height:auto;">
                             
                             </div>
                          
                        </ul>
                        <ul>

                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
                            </li>

                        </ul>
                    </div> 
                    
                    <div class="admission_div_page" style="margin-top: 10px; height: auto; padding-bottom:50px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Group List :</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position shadow_inner color_1" style="height:auto; padding:10px;">
                            <!--tables code start from here-->
                            <div id="printableArea">
                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                                    <thead>
                                         <tr>
                                             <th>S/L</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Information</th>
                                            <th>Mobile Number</th>
                                            <th>Group Name</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$array=array("school_id"=>$school);
                                        $data = $obj->SelectAllByID($table,$array);
                                        $x = 1;
                                        if (!empty($data))
                                            foreach ($data as $row):
                                                ?>
                                              <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?></td>
                                                <td><?php echo $row->department_id; ?></td>
                                                
                                                <td class="center"><?php echo $row->number; ?></td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?></td>
                                                <td class="center"><a target="new" href="manage_user_profile_info.php?id=<?php echo $row->id;?>&amp;school=<?php echo $school; ?>"><img src="images/contact_new.png" /></a></td>
                                        </tr>
                                                <?php
                                                $x++;
                                            endforeach;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->                     
                            <?php include ('./include/print.php'); ?>

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
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
    </body>
</html>