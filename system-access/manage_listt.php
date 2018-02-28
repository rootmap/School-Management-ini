<?php
include_once('class/auth.php');
$table="ams_management_profile";
extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
      
    
       <script>
            function showscategory(str)
            {
                if (str == "")
                {
                    document.getElementById("category").innerHTML = "";
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
                        document.getElementById("category").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/manage_group_t.php?t="+str, true);
                xmlhttp.send();
            }
</script>
        
        <script>
            function showmanage(str)
            {
                if (str == "")
                {
                    document.getElementById("fff").innerHTML = "";
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
                        document.getElementById("fff").innerHTML = xmlhttp.responseText;
                    }
                }
				user=document.getElementById('user').value
                xmlhttp.open("GET", "ajx/manage_show_all.php?s=" + str+"&user="+user, true);
                xmlhttp.send();
            }
        </script>
        <!-----table ends------------------------------------------------------------------------------------------------------------->
        
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
                            <img src="images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">DETAIL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Manage Details about Users</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul><?php include('includes/back.php'); ?></ul>
                       

                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    <div class="admission_div_top shadow_inner" style="padding-bottom:70px; height:60px;">
                     
                       <ul>
                            <li class="add_st_form_div_label_view_details center height-30 width-label-200 left">Search Manage Users   :</li>
                                <li class="add_st_form_div_label_view_details height-auto width-auto left">
                                    <select name="user" id="user" class="secll" onchange="showscategory(this.value)" >
                                    <option>Select Group</option>
                                      <?php 
									   $array=array("school_id"=>$school);
									    $management=$obj->SelectAllByID("ams_management_group",$array);
										 if(!empty($management))
										 foreach($management as $sec ):
									  ?>
                                        <option value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            
                            
                            <li class="add_st_form_div_label_view_details height-30 center width-label-210 left">Select a Category  :</li>
                                <li class="add_st_form_div_label_view_details height-30 width-auto left">
                                    <select class="hh_inpput" id="category" onchange="showmanage(this.value)" name="category" >
                                        <option>Category</option>
                                        <!--<option value="Teacher">Teacher</option>
                                        <option value="Office Staff">Office Staff</option>
                                        <option value="Head Master">Security</option>
                                        <option value="Lab Assistant">Lab Assistant</option>
                                        <option value="System Admin">System Admin</option>
                                        <option value="Driver">Driver</option>
                                        <option value="Other's">Other's</option>
-->
                                       
                                    </select>
                                </li>
                            <li id="fff" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                  <!--
                                    <button type="submit" onclick="showmanage('2')" name="submit" class=" height-35 div_btn" >Create View</button>-->
                                   
                                </li>
                        </ul>
                    </div>
                         <?php include_once('class/esm.php'); ?>                  
                    <div class="admission_div_page height-auto color_1 shadow_inner" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>List of Managmant :</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->

                            <div id="printableArea">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>
											<?php echo $obj->SelectAllByVal("ams_management_group","id",$group,"name"); ?> Name</th>
                                            <th>Category</th>
                                            <th>Information</th>
                                            <th>Mobile Number</th>
                                            <th>Group Name</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$array=array("school_id"=>$school,"category_id"=>$id,"group_id"=>$group); 
                                        $data=$obj->SelectAllByID_Multiple($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $obj->SelectAllByVal("ams_category","id",$id,"name"); ?></td>
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
                                        <tr>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                               
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
                             <?php include ('./include/print.php'); ?>
                                <div class="clear"></div>
                            
                        </div>
                        
<div class="clear"></div>
                    </div>

<div class="clear"></div>

                </div>

<div class="clear"></div>
            </div>
<div class="clear"></div>

            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>