<?php
include_once('class/auth.php');
$table="ams_exam_category";

if(isset($_POST['save']))

{
	     
	       if($obj->exists_multiple($table,array("name"=>$_POST['name'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"school_id"=>$school))==0 
		   && !empty($_POST['name']) 
		   && !empty($_POST['class']) 
		   && !empty($_POST['session']))
			{
				
        	if($obj->insert($table,array("name"=>$_POST['name'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		
		
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?class_id=".$_POST['class']."&session_id=".$_POST['session']);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?class_id=".$_POST['class']."&session_id=".$_POST['session']);		
		}
			}
			else
		{
			echo $obj->Error("Already exists",$obj->filename()."?class_id=".$_POST['class']."&session_id=".$_POST['session']);		
		}
}
if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name']);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['name'])
	  {
		echo $obj->Success("Class / Course Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Class / Course Update Failed",$obj->filename());	
	  }
}

if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    
    $count=count($_GET['id']);
      if($count!==0)
	  {
			echo $obj->Success("Data Delete Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Delete Failed",$obj->filename());	
		}
            
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function showclass(str)
            {
                if (str == "")
                {
                    document.getElementById("class").innerHTML = "";
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
                        document.getElementById("class").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <!--<script>
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
                xmlhttp.open("GET", "ajx/shift.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showroup(str)
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
                xmlhttp.open("GET", "ajx/group.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function shiftedit(str)
            {
                if (str == "")
                {
                    document.getElementById("shiftshow").innerHTML = "";
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
                        document.getElementById("shiftshow").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/edit_exam.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>-->
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
                            <div class="topbar_small_div_text left height-30">EXAMINATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>ADD EXAMINATION</h2></div>
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
                
                  


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>ADD EXAMINATION NAME :</left></h2>
                        </div>
                       
                        <div id="shiftshow" class="admission_form_div width-col2 auto-position">
                        <form action="" method="post" name="class">
                            <ul>
                            <?php if(isset($_GET['class_id'])){ ?>
                            <li class="admission_form_div_label height-30 width-label-200 left">Session<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="session" class="hh_inpput"  name="session" onchange="showclass(this.value)">
                                        <option>Select Session</option>
                                         <?php
										 $array=array("school_id"=>$school);
										 $sec=$obj->SelectAllByID('ams_session',$array);
										 if(!empty($sec))
										 foreach($sec as $sc):
										 ?>
                                        <option <?php if($_GET['session_id']==$sc->id){ ?> selected="selected" <?php } ?> value="<?php echo $sc->id; ?>"><?php echo $sc->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Class / Course<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="class" class="hh_inpput" name="class" >
                                        <option>Select Class / Course</option>
                                        <?php
										 $array2=array("school_id"=>$school,"session_id"=>$_GET['session_id']);
										 $sec2=$obj->SelectAllByID_Multiple('ams_class',$array2);
										 if(!empty($sec2))
										 foreach($sec2 as $sc2):
										 ?>
                                        <option <?php if($_GET['class_id']==$sc2->id){ ?> selected="selected" <?php } ?> value="<?php echo $sc2->id; ?>"><?php echo $sc2->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <!--<li class="admission_form_div_label height-30 width-label-200 left">Section<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="section" class="hh_inpput" name="section" >
                                        <option>Select Section</option>
                                        <?php
										 //$sec3=$obj->SelectAllByID('ams_section',$array);
										 //if(!empty($sec3))
										 //foreach($sec3 as $sc3):
										 ?>
                                        <option <?php //if($_GET['section_id']==$sc3->id){ ?> selected="selected" <?php //} ?> value="<?php //echo $sc3->id; ?>"><?php //echo $sc3->name; ?></option>
                                        <?php
                                          //endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Shift<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="shift" class="hh_inpput" name="shift" >
                                        <option>Select Shift</option>
                                        <?php
										 //$sec4=$obj->SelectAllByID('ams_shift',$array);
										 //if(!empty($sec4))
										 //foreach($sec4 as $sc4):
										 ?>
                                        <option <?php //if($_GET['shift_id']==$sc4->id){ ?> selected="selected" <?php //} ?> value="<?php //echo $sc4->id; ?>"><?php //echo $sc4->name; ?></option>
                                        <?php
                                          //endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="group" class="hh_inpput" name="group" >
                                        <option>Select Group</option>
                                        <?php
										 //$sec5=$obj->SelectAllByID('ams_student_group',$array);
										 //if(!empty($sec5))
										 //foreach($sec5 as $sc5):
										 ?>
                                        <option <?php //if($_GET['group_id']==$sc5->id){ ?> selected="selected" <?php //} ?> value="<?php //echo $sc5->id; ?>"><?php //echo $sc5->name; ?></option>
                                        <?php
                                          //endforeach;
										?>
                                    </select>
                                </li>-->
                            <?php }else{ ?>
                            <li class="admission_form_div_label height-30 width-label-200 left">Session<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="session" class="hh_inpput"  name="session" onchange="showclass(this.value)">
                                        <option>Select Session</option>
                                         <?php
										 $array=array("school_id"=>$school);
										 $sec=$obj->SelectAllByID('ams_session',$array);
										 if(!empty($sec))
										 foreach($sec as $sc):
										 ?>
                                        <option value="<?php echo $sc->id; ?>"><?php echo $sc->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Class / Course<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="class" class="hh_inpput" name="class" >
                                        <option>Select Class  / Course</option>
                                        
                                    </select>
                                </li>
                                
                                <?php /*?><li class="admission_form_div_label height-30 width-label-200 left">Section<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="section" class="hh_inpput" name="section" >
                                        <option>Select Section</option>
                                        <?php
										 $array=array("school_id"=>$school);
										 $secss=$obj->SelectAllByID('ams_section',$array);
										 if(!empty($secss))
										 foreach($secss as $scss):
										 ?>
                                        <option value="<?php echo $scss->id; ?>"><?php echo $scss->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Shift<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="shift" class="hh_inpput" name="shift" >
                                        <option>Select Shift</option>
                                        <?php
										 $secsa=$obj->SelectAllByID('ams_shift',$array);
										 if(!empty($secsa))
										 foreach($secsa as $scsa):
										 ?>
                                        <option value="<?php echo $scsa->id; ?>"><?php echo $scsa->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Group<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select id="group" class="hh_inpput" name="group" >
                                        <option>Select Group</option>
                                        <?php
										 $secg=$obj->SelectAllByID('ams_student_group',$array);
										 if(!empty($secg))
										 foreach($secg as $scg):
										 ?>
                                        <option value="<?php echo $scg->id; ?>"><?php echo $scg->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                    </select>
                                </li><?php */?>
                            <?php } ?>
                            
                               
                             <li class="admission_form_div_label height-30 width-label-200 left">Add Examination<span class="right">:</span></li>

                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="name" type="text" placeholder="Type Examination Name Here" class="textbox"/>
                                </li>
                              
                               
                               
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="" style="text-decoration:none">
                                    <button type="submit" name="save" class=" height-35 div_btn">Submit</button>
                                    </a>
                                </li>

                            </ul>
                            </form>

                        </div>
                        <div style="padding:10px;" class="width-auto height-auto">
                          <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th width="5%">S/L</th>
                                            <th>Session</th>
                                            <th>Class / Course</th>
                                            <!--<th>Section</th>
                                            <th>Shift</th>
                                            <th>Group</th>-->
                                            <th>Examation Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500;">
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
        <tr class="">
        <td><?php echo $x; ?></td>
        
        <td class="center"><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
        <!--<td class="center"><?php //echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?></td>
        <td class="center"><?php //echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?></td>
        <td class="center"><?php //echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?></td>-->
        
        <td class="center"><?php echo $row->name;  ?></td>
        <td class="center"><a href="#" id="edit" onclick="shiftedit('<?php echo $row->id; ?>')"><i class="fa fa-edit"></i></a></td>
        <td class="center">
        <a onclick="<?php echo $obj->delete_confirm();?>" href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&amp;action=delete"><img src="images/deletered.gif" /></a>
        </td>   
        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
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