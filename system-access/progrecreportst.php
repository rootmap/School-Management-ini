<?php
include_once('class/auth_st.php');
$table1="ams_admission";
extract($_GET);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
       

     <script>
            function showresult(str,session,examid)
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
				
                xmlhttp.open("GET", "ajx/progreessst.php?d=" +str+"&session="+session+"&examid="+examid, true);
                xmlhttp.send();
            }
        </script>
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('include/student_profile_head.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo");?>"/>
                            <div class="topbar_small_div_text left height-30">STUDENT DETAIL</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2><?php echo $obj->SelectAllByVal("ams_student_login","admition",$input_by,"name");?></h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
                        

                        </ul>
                       
						 <?php include_once('class/esm.php'); ?>
                    </div>
                </div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                
                 
                    

                    <div class="admission_div shadow_inner" style="margin-top: 20px; color:#666; height:auto;">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30 left"><left>Proggrec Report :</left></h2>
                            <?php include('include/menust.php'); ?>
                        </div>
                        
                        <div id="dynamic"  style="margin-top:15px; padding:10px; overflow:auto;">
                           <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                            <thead>
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Session</th>
                                    <th>Class / Course</th>
                                    <th>Section</th>
                                    <th>Group</th>
                                    <th>Shift</th> 
                                    <th>Name Of Exam</th>
                                </tr>
                            </thead>
                            
                        
                            <tbody>
                                 <?php
                                  $array=array("school_id"=>$school,"admition"=>$input_by);
                                  $data=$obj->SelectAllByID_Multiple($table1,$array);
                                  $r=1;
                                  if(!empty($data))
                                  foreach($data as $row)
                        
                        {        ?>
                        
                                <tr class="">
                                <td class="center"><?php echo $r;?></td>
                                        <td class="center"><?php echo $row->name;?> </td>
                                         <td class="center"><?php echo $row->roll;?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?></td>
                        
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_group","id",$row->group_id,"name");?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?></td>
                                                       
                                          <input type="hidden" id="admission" name="admission" value="<?php echo $admission; ?>" />
                                        
                                        <td class="center">
                                          <select name="category" class="select_option" id="category">
                                           <option selected="selected">Select Category</option>
                                          <?php
                                          $data=$obj->SelectAllByID_Multiple("ams_exam_category",array("school_id"=>$school,"group_id"=>$row->group_id,"session_id"=>$row->session_id));
                                            if(!empty($data))
                                            foreach($data as $ro):
                                          ?>
                                           
                                           <option onclick="showresult('1','<?php echo $row->session_id; ?>','<?php echo $ro->id;?>')" value="<?php echo $ro->id;?>"><?php echo $ro->name;?>
                                           </option>
                                           
                                          <?php endforeach;?>
                                              <option onclick="showresult('2','<?php echo $row->session_id; ?>','1000')" value="<?php echo $ro->id;?>">
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