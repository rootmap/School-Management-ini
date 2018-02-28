<?php
include_once('class/auth.php');
$table2="ams_exam_result";
extract($_GET);
if(isset($_POST['save']))
{
  
       	$rr=array("school_id"=>$school);
		$dat=$obj->SelectAllByID("ams_report2",$rr);
		$tt=$obj->exists_multiple("ams_report2",$rr); 
         
        foreach($_POST['name'] as $index=>$nn):
			
			$chkresult_check=$obj->exists_multiple($table2,array("name_id"=>$nn,"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"exam_cateory_id"=>$_POST['category'][$index],"school_id"=>$school));
			if($chkresult_check!=0)
			{
				$chkresult_fid_id=$obj->SelectAllByVal5($table2,"name_id",$nn,"admission_id",$_POST['admission'][$index],"subject_id",$_POST['subject'][$index],"exam_cateory_id",$_POST['category'][$index],"school_id",$school,"id");
				if($tt==1)
				{	
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index]));
				}
				elseif($tt==2)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index]));
				}
				elseif($tt==3)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index]));
				}
				elseif($tt==4)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index]));
				}
				elseif($tt==5)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index]));
				}
				elseif($tt==6)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index]));
				}
				elseif($tt==7)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index]));
				}
				elseif($tt==8)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index]));
				}
				elseif($tt==9)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index],"marks9"=>$_POST['rep9'][$index]));
				}
				elseif($tt==10)
				{
					$obj->update($table2,array("id"=>$chkresult_fid_id,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index],"marks9"=>$_POST['rep9'][$index],"marks10"=>$_POST['rep10'][$index]));
				}
			}
			else
			{
				if($tt==1)
				{	
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index]));
				}
				elseif($tt==2)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index]));
				}
				elseif($tt==3)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index]));
				}
				elseif($tt==4)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index]));
				}
				elseif($tt==5)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index]));
				}
				elseif($tt==6)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index]));
				}
				elseif($tt==7)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index]));
				}
				elseif($tt==8)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index]));
				}
				elseif($tt==9)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index],"marks9"=>$_POST['rep9'][$index]));
				}
				elseif($tt==10)
				{
					$obj->insert($table2,array("id"=>$chkresult_fid_id,"name_id"=>$nn,"session_id"=>$_POST['session'][$index],"roll"=>$_POST['roll'][$index],"class_id"=>$_POST['class'][$index],"group_id"=>$_POST['group'][$index],"shift_id"=>$_POST['shift'][$index],"admission_id"=>$_POST['admission'][$index],"subject_id"=>$_POST['subject'][$index],"section_id"=>$_POST['section'][$index],"exam_cateory_id"=>$_POST['category'][$index],"date"=>date('Y-m-d'),"school_id"=>$school,"status"=>1,"marks"=>$_POST['rep1'][$index],"marks2"=>$_POST['rep2'][$index],"marks3"=>$_POST['rep3'][$index],"marks4"=>$_POST['rep4'][$index],"marks5"=>$_POST['rep5'][$index],"marks6"=>$_POST['rep6'][$index],"marks7"=>$_POST['rep7'][$index],"marks8"=>$_POST['rep8'][$index],"marks9"=>$_POST['rep9'][$index],"marks10"=>$_POST['rep10'][$index]));
				}
			}
        endforeach;
		
		$count=count($_POST['name']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )","result_in.php?id=".$_POST['group_id']."&showstudent=".$school."&exam=".$_POST['exam_id']."&subject=".$_POST['subject_id']."&session_id=".$_POST['session_id']."&class_id=".$_POST['class_id']);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )","result_in.php?id=".$_POST['group_id']."&showstudent=".$school."&exam=".$_POST['exam_id']."&subject=".$_POST['subject_id']."&session_id=".$_POST['session_id']."&class_id=".$_POST['class_id']);	
		}
    
    
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        
         <script>
            function showcls(str)
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
        
        <script>
            function showsection(str)
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
            function showsubjecti(str)
            {
                if (str == "")
                {
                    document.getElementById("subject").innerHTML = "";
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
                        document.getElementById("subject").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/r.php?f="+ str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showxam(str)
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
                xmlhttp.open("GET", "ajx/exam_show.php?f="+ str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showee(str)
            {
                if (str == "")
                {
                    document.getElementById("df").innerHTML = "";
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
                        document.getElementById("df").innerHTML = xmlhttp.responseText;
                    }
                }
				group=document.getElementById('group').value;
				subject=document.getElementById('subject').value;
				
				session=document.getElementById('session').value;
				aclass=document.getElementById('class').value;
				//alert("aclass"+aclass);
				if(str=='')
				{
					window.alert("Please Select A Exam.");
				}
				else
				{
					window.location.replace("<?php echo $obj->baseUrl('result_in.php'); ?>?id="+group+"&showstudent=<?php echo $school; ?>&exam="+str+"&subject="+subject+"&session_id="+session+"&class_id="+aclass);	
				}
				
                //xmlhttp.open("GET", "ajx/abotun11.php?s="+str+"&group="+group+"&subject="+subject, true);
                ///xmlhttp.send();
            }
		</script>
        
        
        <script>
            function CreateResult(str)
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
				session=document.getElementById('session').value;
				aclass=document.getElementById('class').value;
				rsection=document.getElementById('section').value;
				category=document.getElementById('category').value;
				subject=document.getElementById('subject').value;
                xmlhttp.open("GET", "ajx/result.php?d="+str+"&session="+session+"&class="+aclass+"&section="+rsection+"&category="+category+"&subject="+subject, true);
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
                            <img src="images/class_time_Icon.png"/>
                            <div class="topbar_small_div_text left height-30">EXAMINATION</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>RESULT INPUT</h2></div>
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
                    
                    <div class="exam_result_div_top shadow_inner" >
                        <ul>
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="session" id="session" onchange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									   if(isset($_GET['session_id']))
									   {
										   $sesid=$_GET['session_id'];
									   }
									   else
									   {
										   $sesid=0;   
									   }
									   $array=array("school_id"=>$school);
									    $section=$obj->SelectAllByID("ams_session",$array);
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option <?php if($sesid==$sec->id){ ?> selected="selected" <?php } ?>  value="<?php echo $sec->id?>"><?php echo $sec->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>

                            <li class="add_st_form_div_label_view_details height-30 width-label-130 left" style="text-align:right;">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                        <?php 
										if(isset($_GET['class_id']))
										{
                                            $array=array("session_id"=>$_GET['session_id'],"school_id"=>$school,"id"=>$_GET['class_id']);
                                            $data=$obj->SelectAllByID_Multiple("ams_class",$array);
                                            //if(!empty($data))
                                            foreach($data as $row)
                                            {
                                            ?>
                                               <option value="<?php echo $row->id;?>" selected="selected"><?php echo $row->name; ?></option>
                                            <?php
                                            }
                                            
										}
										?>
                                    </select>
                                </li>
                            
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-190 left" style="margin-right:50px;">
                                    <select class="select_option" name="group" id="group" onchange="showsubjecti(this.value)" >
                                        <option>Group</option>
                                        <?php 
										if(isset($_GET['id']))
										{
											$array=array("id"=>$_GET['id']);
											$data2=$obj->SelectAllByID_Multiple("ams_student_group",$array);
											if(!empty($data2))
											foreach($data2 as $row)
											{
											?>
											   <option <?php if($_GET['id']==$row->id){ ?> selected="selected" <?php } ?> value="<?php echo $row->id;?>">
											   <?php echo $row->name; ?>
											   
											   </option>
											<?php
											}	
										}
										?>
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details height-30 width-label-110 left" style="text-align:right;">Subject:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select class="select_option" onchange="showxam(this.value)" name="subject" id="subject" >
                                        <option>Subject</option>
                                        <?php 
										if(isset($_GET['subject']))
										{
											$array=array("id"=>$_GET['subject']);
											$data3=$obj->SelectAllByID_Multiple("ams_subject",$array);
											if(!empty($data3))
											foreach($data3 as $row)
											{
											?>
											   <option <?php if($_GET['subject']==$row->id){ ?> selected="selected" <?php } ?> value="<?php echo $row->id;?>"><?php echo $row->name; ?></option>
											<?php
											}	
										}
										?>
                                    </select>
                                </li>
                                
                                 <li class="add_st_form_div_label_view_details height-30 width-label-130 left"  style="text-align:right;">Exam : </li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select class="select_option" name="category" id="category" onchange="showee(this.value)" >
                                        <option>Category</option>
                                       	<?php 
										if(isset($_GET['exam']))
										{
											$array4=array("id"=>$_GET['exam']);
											$data4=$obj->SelectAllByID_Multiple("ams_exam_category",$array4);
											if(!empty($data4))
											foreach($data4 as $row)
											{
											?>
											   <option <?php if($_GET['exam']==$row->id){ ?> selected="selected" <?php } ?> value="<?php echo $row->id;?>"><?php echo $row->name; ?></option>
											<?php
											}	
										}
										?>
                                    </select>
                                </li>
                                </ul>
                                
                            
                            <ul>
                        </ul>
                        
                    </div>
                            
                       
                        
                    </div>
                                           
                    <div class="exam_result_div_page" style="margin-top: 20px; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-label-325 left" ><img src="images/direction_left.png"/></div>
                        <div class="class_time_heading left">
                            <center><h2 class="">
                                     INPUT RESULT
                                </h2></center>
                            </div>
                                <div class="width-label-325 right" ><img src="images/direction_right.png"/></div>
                            </div>
                        </center>
                        <div class="admission_form_div shadow_inner width-col5 auto-position">
                        <!--tables code start from here-->
                           <div id="dynamic"  style="margin-top:15px; font-weight:200; padding:10px; overflow:auto;">
                             <form action="" method="post" name="result">
                             	<input type="hidden" name="group_id" value="<?php echo $_GET['id']; ?>" />
                                <input type="hidden" name="exam_id" value="<?php echo $_GET['exam']; ?>" />
                                <input type="hidden" name="subject_id" value="<?php echo $_GET['subject']; ?>" />
                                <input type="hidden" name="session_id" value="<?php echo $_GET['session_id']; ?>" />
                                <input type="hidden" name="class_id" value="<?php echo $_GET['class_id']; ?>" />
				<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                     <thead>
                        <th class="center height-10" >SL.No</th>
                        <th class="center height-10" >Student Name</th>
                        <th class="center height-10" >Roll</th>
                        <th class="center height-10" >Section</th>
                        <th class="center height-10"> Shift</th>
                        <?php 
						$rr=array("school_id"=>$school);
						$dat=$obj->SelectAllByID_Order("ams_report2",$rr,"ASC");
						 if(!empty($dat))
						 foreach ( $dat as $rot):
						?>
                        <th class="center height-10" ><?php echo $obj->SelectAllByVal("ams_report","id",$rot->report_id,"name");?></th>
                         <?php endforeach; ?>
                       </thead>  
                       <tbody style="font-size:14px;">
                       <?php 
						 $rokl=$obj->SelectAllByID_Multiple("ams_admission",array("group_id"=>$id,"school_id"=>$showstudent));
						 $s=1;
						  if(!empty($rokl))
						  foreach($rokl as $ting):
					   ?>
                     <tr>
                       
                        <td class="center"><?php echo $s; ?></td>
                        
                        
                        <td class="center"><?php echo $ting->name;?>
                        <input type="hidden" name="name[]" value="<?php echo $ting->id;?>" />
                        </td>
                        
                        <td class="center"><input type="hidden" name="roll[]" value="<?php echo $ting->roll;?>"/>
						  <?php echo $ting->roll;?></td>
                          
                          <input type="hidden" name="class[]" value="<?php echo $ting->class_id; ?>"/>
                          
                         <td class="center"><input type="hidden" name="section[]" value="<?php echo $ting->section_id; ?>" />
						  <?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?> </td>
                          
                          <td class="center"><input type="hidden" name="shift[]" value="<?php echo $ting->shift_id; ?>"/>
                          <?php echo $obj->SelectAllByVal("ams_shift","id",$ting->shift_id,"name");?></td>
                          
                             
                        <input type="hidden" name="group[]" value="<?php echo $ting->group_id; ?>"/>
                          
                        
                       <input type="hidden" name="session[]" value="<?php echo $ting->session_id; ?>"/>
                          
                        
                       
                          
                        
                          
                        
                          
                        <input type="hidden" name="category[]" value="<?php echo $exam; ?>" />
                            <input type="hidden" name="subject[]" value="<?php echo $subject; ?>" />
                            <input type="hidden" name="admission[]" value="<?php echo $ting->admition; ?>"/>
                            
                       
                        
                        <?php 
						$rr=array("school_id"=>$school);
						$ft=$obj->exists_multiple("ams_report2",$rr);
						
						for($i=1; $i<=$ft; $i++):
							if($i==1)
							{
								$fet_fid="marks";	
							}
							else
							{
								$fet_fid="marks".$i;
							}
							?>
                            <td class="center">
                              <?php 
							  	$chkresult=$obj->exists_multiple($table2,array("name_id"=>$ting->id,"admission_id"=>$ting->admition,"subject_id"=>$subject,"exam_cateory_id"=>$exam,"school_id"=>$school));
								if($chkresult!=0)
								{
									$fid_value=$obj->SelectAllByVal5($table2,"name_id",$ting->id,"admission_id",$ting->admition,"subject_id",$subject,"exam_cateory_id",$exam,"school_id",$school,$fet_fid);
									$sub_fid_st=$fid_value;	
								}
								else
								{
									$sub_fid_st=0;	
								}
							  ?>
                              <input type="text" value="<?php echo $sub_fid_st; ?>" placeholder=" 100 " name="rep<?php echo $i; ?>[]" class="div_in" />
                            </td>
                            <?php
						endfor;
						
						/*if($ft==1)
						{
						?>
                         <td class="center">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <?php 
						}
						elseif($ft==2)
						{
						 ?>
                          <td class="center">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                        <?php
						}
						elseif($ft==3)
						{
						 ?>
                         <td class="center">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep3[]" class="div_in" />
                        </td>
                        <?php }elseif($ft==4){ ?>
                         <td class="center">
                          <input type="text" placeholder=" 100 " name="rep1[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep2[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep3[]" class="div_in" />
                        </td>
                        <td class="center">
                          <input type="text" placeholder=" 100 " name="rep4[]" class="div_in" />
                        </td>
                        <?php }*/ ?>
                        
                    </tr>
                    <?php $s++; endforeach;?>
                    </tbody>
             
                   
                     
            </table>
            <button class="div_btn" name="save" style="margin-left:400px;">Submit</button>
          </form>   
                           </div>
                             
                            
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

<script>

            var placeholder = "Please Select";

            $('.select2, .select2-multiple').select2({placeholder: placeholder});

            $(".select2, .select2-multiple, .select2-allow-clear, .select2-remote").on(select2OpenEventName, function() {
                if ($(this).parents('[class*="has-"]').length) {
                    var classNames = $(this).parents('[class*="has-"]')[0].className.split(/\s+/);
                    for (var i = 0; i < classNames.length; ++i) {
                        if (classNames[i].match("has-")) {
                            $('#select2-drop').addClass(classNames[i]);
                        }
                    }
                }

            });

        </script>


    </body>
</html>