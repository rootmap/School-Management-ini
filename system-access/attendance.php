<?php
include_once('class/auth.php');
$table="ams_student_attendance";
if(isset($_GET['attendance']))
{
   
			
			if($obj->exists_multiple($table,array("admission"=>$_GET['admission'],"day_id"=>$_GET['day_id'],"attendance"=>$_GET['status'],"class_id"=>$_GET['class1']))==0)
			{
				
        	$obj->insert($table,array("admission"=>$_GET['admission'],"day_id"=>$_GET['day_id'],"attendance"=>$_GET['status'],"class_id"=>$_GET['class1'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
				
				
			}
		
		$count=count($_POST['admission']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		}
    
    
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        <script>
            function showsection(str)
            {
                if (str == "")
                {
                    document.getElementById("section").innerHTML = "";
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
                        document.getElementById("section").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/section.php?t=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showshift(str)
            {
                if (str == "")
                {
                    document.getElementById("shift").innerHTML = "";
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
                        document.getElementById("shift").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/shift1.php?v=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showgroup(str)
            {
                if (str == "")
                {
                    document.getElementById("group").innerHTML = "";
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
                        document.getElementById("group").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/group1.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showstudent(str)
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
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/attend.php?k=" + str+"&group="+group, true);
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
                            <img src="images/attendance_register.png"/>
                            <div class="topbar_small_div_text left height-30">ATTENDANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>ATTENDANCE REGISTER</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>


                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div>
                <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    
                    <div class="attendance_reg_div_top  shadow_inner">
                        <div class="attendance_reg_small_top ">
                        <ul>
                            <li class="attendance_reg_small_top_li height-40 width-label-150 left">Select a Class / Course:</li>
                                <li class="attendance_reg_small_top_li height-40 width-label-200 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Select a Class / Course</option>
                                       <?php 
									    $ro=$obj->SelectAll('ams_class');
										 if(!empty($ro))
										 foreach($ro as $rr):
									   ?>
                                        <option value="<?php echo $rr->id;?>"><?php echo $rr->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>

                            <li class="attendance_reg_small_top_li height-40 width-label-150 left">Select a Section:</li>
                                <li class="attendance_reg_small_top_li height-40 width-label-200 left">
                                    <select class="select_option" name="section" id="section" onchange="showshift(this.value)">
                                        <option>Select a Section</option>
                                         
                                    </select>
                                </li>
                            </ul>
                    </div>
                        <div class="attendance_reg_small_top ">
                        <ul>
                            <li class="attendance_reg_small_top_li height-40 width-label-150 left">Select a Shift:</li>
                                <li class="attendance_reg_small_top_li height-40 width-label-200 left">
                                    <select class="select_option" name="shift" id="shift" onchange="showgroup(this.value)"  >
                                        <option>Select a Shift</option>
                                        
                                    </select>
                                </li>

                            <li class="attendance_reg_small_top_li height-40 width-label-150 left">Select a Group:</li>
                                <li class="attendance_reg_small_top_li height-40 width-label-200 left">
                                    <select class="select_option" onchange="showstudent(this.value)" name="group" id="group" >
                                        <option>Select a Group</option>
                                        
                                    </select>
                                </li>
                            </ul>
                    
                        
                       
                         </div>   
                        
                    </div>
                                           
                    <div class="attendance_reg_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                        <div class="attendance_reg_heading left">
                            <center><h2 class="">
                                     <?php 
									   $dt=date('M Y');
									   {
										 echo $dt;
									    }
									 ?>
                                </h2></center>
                            </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div width-auto color_1 shadow_inner auto-position" style="overflow:auto; padding:10px;">
                        <!--tables code start from here-->
                       <div id="dynamic"  style="margin-top:15px;">
                      
                      <form action="" method="post" name="attendance"> 
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                              <thead>
                                <tr>
                                <td >SL.no</td>
                                <td >Name</td>
                                <td >Roll</td>
                                <?php
								  $data=$obj->SelectAllByID("ams_attendance_reg_stng",array("group_id"=>$group));
								  $r=1;
								  if(!empty($data))
								  foreach($data as $row1):
						
							   ?>

                                <td ><?php echo $obj->SelectAllByVal("ams_weekly","id",$row1->weekly_id,"name");?>
                                  </br>
                                     <?php echo $row1->date1;?>
                                </td>
                                <?php endforeach; ?>
                                          
                          </tr>
                       </thead>
                    <?php
          $array=array("group_id"=>$group);
          $data=$obj->SelectAllByID("ams_admission",$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row2)

{        ?>

<tbody>
		

        <tr class="gradeX">
                <td class="center">
				
				<?php echo $r;?>
                </td>
                <td class="center">
				
                <input type="hidden" name="class1" value="<?php echo $row2->class_id;?>" />
				<?php echo $row2->name;?>
                </td>
                <td class="center"><?php echo $row2->roll;?></td>
                <?php
				  $data=$obj->SelectAllByID("ams_attendance_reg_stng",array("group_id"=>$group));
				  $r=1;
				  if(!empty($data))
				  foreach($data as $row):
		
			   ?>
                <td class="center">
                <a name="attendance" href="attend.php?day_id=<?php echo $row->weekly_id;?>&amp;admission=<?php echo $row2->admition;?>&amp;status=1">p</a>
                
                <a name="attendance" href="attend.php?day_id=<?php echo $row->weekly_id;?>&amp;admission=<?php echo $row2->admition;?>&amp;status=2">A</a>
                </td>
                <?php endforeach; ?>
                                             
    </tbody>
    <?php $r++; } ?>
</table>

 </form>        
          
                           
                            </div>
                              
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