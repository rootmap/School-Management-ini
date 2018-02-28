<?php
include_once('class/auth.php');
$table1="ams_admission";
extract($_GET);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
       

     <script>
            function showresult(str,admission,status)
            {
                if (str == "")
                {
                    document.getElementById("tabulation").innerHTML = "";
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
                        document.getElementById("tabulation").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/progreess.php?d=" +str+"&admission="+admission+"&status="+status, true);
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
                        <div class="topbar_small_div left ">
                            <img src="images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">Tabulation</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TABULATION	</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                
                 <!--<div class="admission_div_top shadow_inner" style="padding-bottom:70px;">
                     
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                       
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)" >
                                        <option>Shift</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-70 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="group" id="group" >
                                        <option>Group</option>
                                        
                                    </select>
                                </li>
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    
                                    <button type="submit" onclick="showstudent('2')" name="submit" class=" height-35 div_btn" >Create View</button>
                                </li>
                        </ul>
                    </div>-->
                            
                    

                    <div class="admission_div shadow_inner" style="margin-top: 20px; color:#666; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination Tabulation </left></h2>
                        </div>
                        
                        <div id="dynamic"  style="margin-top:15px; padding:10px; overflow:auto;">
                           <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                            <thead>
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class / Course</th>
                                    <th>Section</th>
                                    <th>Group</th>
                                    <th>Shift</th> 
                                    <th>Name Of Exam</th>
                                </tr>
                            </thead>
                            
                        
                            <tbody>
                                 <?php
                                  $array=array("id"=>$student_details,"school_id"=>$school_id,"admition"=>$admission);
                                  $data=$obj->SelectAllByID_Multiple($table1,$array);
                                  $r=1;
                                  if(!empty($data))
                                  foreach($data as $row)
                        
                        {        ?>
                        
                                <tr class="">
                                <td class="center"><?php echo $r;?></td>
                                        <td class="center"><?php echo $row->name;?> </td>
                                         <td class="center"><?php echo $row->roll;?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                        
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                                       
                                          <input type="hidden" id="admission" name="admission" value="<?php echo $admission; ?>" />
                                        
                                        <td class="center">
                                          <select name="category" class="select_option" id="category">
                                           <option selected="selected">Select Category</option>
                                          <?php
                                          $data=$obj->SelectAllByID_Multiple("ams_exam_category",array("school_id"=>$school,"group_id"=>$group));
                                            if(!empty($data))
                                            foreach($data as $ro):
                                          ?>
                                           
                                           <option onclick="showresult(<?php echo $ro->id;?>,<?php echo $admission; ?>,1)" value="<?php echo $ro->id;?>"><?php echo $ro->name;?>
                                           </option>
                                           
                                          <?php endforeach;?>
                                              <option onclick="showresult(1000,<?php echo $admission; ?>,2)" value="<?php echo $ro->id;?>">
                                                 Total Result
                                              </option>
                                          </select>
                                        </td>
                                        
                                </tr>
                               <?php $r++; } ?>
                                                                     
                            </tbody>
                            
                            
                        </table>
      
                        </div>
                        
                        <div id="tabulation" class="height-auto width-auto">
                      
                         
                        
                     <div class="clear"></div>
                        
                   </div>

                </div>


            </div></div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>