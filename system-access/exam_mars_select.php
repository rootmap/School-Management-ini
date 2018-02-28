<?php
include_once('class/auth.php');
$table="ams_marks_select";
$table1="ams_marks_mode";
$table2="ams_report";
$table3="ams_report2";
$table4="ams_performance";
$table5="ams_performance2";
$fainal_exam=100;
extract($_GET);
if(isset($_POST['save']))

{
	      foreach($_POST['subject'] as $index=>$nn ):
		  
                
				   if($obj->exists_multiple($table,array("subject_id"=>$_POST['subject'][$index],
				   "pass_marks"=>$_POST['pass_markss'][$index],
				   "exam_id"=>$_POST['exam'],
				   "full_marks"=>$_POST['full_marks'][$index],
				   "shift_id"=>$_POST['shift'],
				   "section_id"=>$_POST['section'],
				   "class_id"=>$_POST['class'],
				   "session_id"=>$_POST['session'],
				   "group_id"=>$_POST['group'],
				   "school_id"=>$school))==0)
					
					{
					$obj->insert($table,array("subject_id"=>$nn,"pass_marks"=>$_POST['pass_markss'][$index],"full_marks"=>$_POST['full_marks'][$index],"exam_id"=>$_POST['exam'],"shift_id"=>$_POST['shift'],"section_id"=>$_POST['section'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"group_id"=>$_POST['group'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
					}
				 
		endforeach;
		$count=count($_POST['subject']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}



if(isset($_POST['mode']))

{
	     foreach($_POST['exam'] as $index=>$nn ):
		   
	       if($obj->exists_multiple($table1,array("exam_id"=>$nn,
		   "mode"=>$_POST['modee'][$index],
		   "session_id"=>$_POST['session'],
		   "class_id"=>$_POST['class'],
		   "group_id"=>$_POST['group'],
		   "school_id"=>$school))==0)
			
			{
        	$obj->insert($table1,array("exam_id"=>$nn,
			"mode"=>$_POST['modee'][$index],
			"session_id"=>$_POST['session'],
		    "class_id"=>$_POST['class'],
		    "group_id"=>$group,
			"school_id"=>$school,
			"date"=>date('Y-m-d'),
			"status"=>1));
			}
			
		endforeach;
		$count=count($_POST['exam']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}
if(@$_GET['schooll']== 'gered')
{
    $delet=array("school_id"=>$_GET['school']);
    if($obj->delete("ams_grading_system_dateils",$delet)==1)
	  {
		echo $obj->Success("Grading System Delete Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
	     else
	  {
		echo $obj->Error("Delete Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
} 

if(@$_GET['actionb']== 'deleteb')
{
    $delet=array("id"=>$_GET['id']);
    if($obj->delete($table1,$delet)==1)
	
    $count=count($_GET['id']);
      if($count!==0)
	  {
		echo $obj->Success("Delete Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
	     else
	  {
		echo $obj->Error("Delete Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
} 



if(isset($_POST['creat']))

{
		   
	       if($obj->exists_multiple($table2,array("name"=>$_POST['name'],"school_id"=>$school))==0)
			
			{
        	$obj->insert($table2,array("name"=>$_POST['name'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
			}
		
		$count=count($_POST['name']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}


if(isset($_POST['creat1']))

{
		   
	       if($obj->exists_multiple($table4,array("name"=>$_POST['performance'],"school_id"=>$school))==0)
			
			{
        	$obj->insert($table4,array("name"=>$_POST['performance'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
			}
		
		$count=count($_POST['performance']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}


if(isset($_GET['preport']))

{
		   
	       if($obj->exists_multiple($table3,array("report_id"=>$_GET['reaportt']))==0)
			
			{
        	$obj->insert($table3,array("report_id"=>$_GET['reaportt'],"school_id"=>$_GET['school'],"date"=>date('Y-m-d'),"status"=>$_GET['status']));
			}
		
		$count=count($_GET['reaportt']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}

if(isset($_GET['preport1']))

{
		   
	       if($obj->exists_multiple($table5,array("performance_id"=>$_GET['performancee']))==0)
			
			{
        	$obj->insert($table5,array("performance_id"=>$_GET['performancee'],"school_id"=>$_GET['school'],"date"=>date('Y-m-d'),"status"=>$_GET['status']));
			}
		
		$count=count($_GET['performancee']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}


if(@$_GET['actionw']== 'deletew')
{
    $delet=array("id"=>$_GET['id']);
    if($obj->delete($table3,$delet)==1)
	
    $count=count($_GET['id']);
      if($count!==0)
	  {
		echo $obj->Success("Examination Report Delete Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
	     else
	  {
		echo $obj->Error("Examination Report Delete Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
} 

if(@$_GET['actionn']== 'deletee')
{
    $delett=array("id"=>$_GET['id']);
    if($obj->delete($table5,$delett)==1)
	
    $count=count($_GET['id']);
      if($count!==0)
	  {
		echo $obj->Success("Performance Grading Delete Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
	     else
	  {
		echo $obj->Error("Performance Grading Delete Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
	  }
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
 
        <script>
            function selecttable(str,category)
            {
                if (str == "")
                {
                    document.getElementById("shoee").innerHTML = "";
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
						$('#shoee').fadeIn('slow');
						$('#shoee').fadeOut('slow');
                        document.getElementById("shoee").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/teble_select.php?dd=" + str+"&category="+category, true);
                xmlhttp.send();
            }
        </script>
		
        <script>
            function parcent(str)
            {
                if (str == "")
                {
                    document.getElementById("pass_markss").innerHTML = "";
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
                        document.getElementById("pass_markss").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/percent.php?t=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function marksselect(str)
            {
                if (str == "")
                {
                    document.getElementById("marks").innerHTML = "";
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
                        document.getElementById("marks").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/marks_select.php?t=" + str, true);
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
                             <img src="images/extra_images/examination_icon.png"/>
                            <div class="topbar_small_div_text left height-30">Marks</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>
                        MARKS SELECT
                        </h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>

                    </div>
                </div>
                <div id="shoee" class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                
                  


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination Marks Select to your Chooses </left></h2>
                        </div>
                        
                        
                       <div class="width-auto height-auto" style="padding:10px;">
                         <div class="width-label-300 left">
                         
                            <div class="height-30 width-label-250 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#CCC;">
                               Grading System Select/Create or Edit
                            </div>
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                  
                        
                          <tbody class="bg">
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",1,"name"); ?></td>
                                    <td colspan="1"><label> <input type="radio" name="mss" id="dd" onclick="selecttable('1','<?php echo $group; ?>')" /> Select</label><!--<a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=1&amp;school=<?php //echo $school; ?>"><i class="fa fa-edit"></i></a>--></td>
                                  
                                   <td colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=1&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></td>
                                  </tr>
                                  <?php
								  $array=array("category_id"=>1,"school_id"=>0,"status"=>1);
									$data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?> 
                                    <?php $fffggg=$row->school_id; ?>
                                    
                                  <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                               
                                  </tbody>
                                </table>
                                
                               
                                <table cellspacing="1" border="0" style="font-size:14px; margin-top:10px;" cellpadding="0" id="" class="display margin-top-15">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg" >
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",2,"name"); ?></td>
                                    <td colspan="1"> <label> <input type="radio" name="mss" id="dd" onclick="selecttable('2','<?php echo $group; ?>')" /> Select</label></td>
                                    <td colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=2&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></td>
                                  </tr>
                                   <?php
								  $array=array("category_id"=>2);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                 
                                  </tbody>
                                </table>
                         </div>
                        
                         <div class="left" style="margin-left:50px; padding-left:20px; width:500px;" >
                          
                           
                           
                           
                          
                            
                            <div class="width-label-150 margin_left10 margin-top-10 left">
                                Examination
                              <select class="select_option" id="exam" name="exam" onchange="marksselect(this.value)">
                                <option>Examination</option>
                                <?php
									$array=array("group_id"=>$group);
									$data=$obj->SelectAllByID("ams_exam_category",$array);
									if(!empty($data))
									foreach($data as $row):
									
									?>
									<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
									
									
									<?php endforeach; ?>
                                
                              </select>
                            </div>
                            <div class="height-auto padding_bottom10 left width-label-465 auto-position" style="font-size:12px; margin-left:10px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; margin-top:20px; background:#FFF;">
                              <div class="height-30 width-label-350 auto-position margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Marks Select to Subject 
                            </div>
                            
                            <div class="height-auto width-auto margin_left10 left center">
                            
                               <div class="height-30 width-label-140 left center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#CCC;">
                               Subject Select
                            </div>
                            
                            
                            <div class="height-30 margin_left10 width-label-140 left center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#CCC;">
                               Full Marks
                            </div>
                            
                            <div class="height-30 margin_left10 width-label-140 right center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#CCC;">
                               Full Marks
                            </div>
                            
                            <ul id="marks" style="margin-top:40px;">
                            
                              </ul>
                             
                            </div>
                            
                            
                            <div style="width:400px;height:1px; clear:both;"></div>
                            </div>
                         </div>
                         
                         <div class="clear"></div>
                       </div>
                        
                         
                        
         <!------------------------------------------------------------------------------------------------>               
                        <div class="width-auto height-auto" style="padding:10px;">
                         <div class="width-label-300 left">
                            
                           <table cellspacing="1" border="0" style="font-size:14px;" cellpadding="0" id="" class="display">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",3,"name"); ?></td>
                                    <td colspan="1"> <label> <input type="radio" name="mss" id="dd" onclick="selecttable('3','<?php echo $group; ?>')" /> Select</label></td>
                                     <td colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=3&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></td>
                                  </tr>
                                 <?php
								 $array=array("category_id"=>3);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  
                                  </tbody>
                                </table>
                                
                                <table cellspacing="1" border="0" style="font-size:14px; margin-top:10px;" cellpadding="0" id="" class="display margin-top-15">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",4,"name"); ?></td>
                                    <td colspan="1"> <label> <input type="radio" name="mss" id="dd" onclick="selecttable('4','<?php echo $group; ?>')" /> Select</label></td>
                                     <td colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=4&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></td>
                                  </tr>
                                  <?php
								  $array=array("category_id"=>4);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  </tbody>
                                </table>
                                 
                                <table cellspacing="1" border="0" style="font-size:14px; margin-top:10px;" cellpadding="0" id="" class="display margin-top-15">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",5,"name"); ?></td>
                                    <td colspan="1"><label> <input type="radio" name="mss" id="dd" onclick="selecttable('5','<?php echo $group; ?>')" /> Select</label></td>
                                     <td colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=5&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></td>
                                  </tr>
                                   <?php
								  $array=array("category_id"=>5);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                                  </tbody>
                                </table>
                                
                                 
                                <table cellspacing="1" border="0" style="font-size:14px; margin-top:10px;" cellpadding="0" id="" class="display margin-top-15">
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                    
                                   </thead>
                                    
                                 
                                  <tbody class="bg">
                                  <tr style="text-align:center; background:rgba(153,0,0,1);  color:rgba(255,255,255,1); font-size:16px;">
                                    <td colspan="1"><?php  $rrd=$obj->SelectAllByVal("ams_grading_system_dateils","school_id",$school,"category_id"); echo $obj->SelectAllByVal("ams_grading_system_name","id",$rrd,"name");?></td>
                                    <td colspan="1"><label> <input type="radio" name="mss" id="dd" onclick="selecttable('<?php echo $rrd; ?>','<?php echo $group; ?>')" /> Select</label></td>
                    <td colspan="1"><a title="Delete" style="color:rgba(255,255,255,1);" href="<?php echo $obj->filename();?>?school=<?php echo $school; ?>&schooll=gered"><i class="fa fa-trash-o"></i></a></td>
                                  </tr>
                                   <?php
								   $array=array("school_id"=>$school);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                   <tr>
                                    <td><?php echo $row->range_1; ?>-below<?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center"><?php echo $row->point; ?></td>
                                    
                                   </tr>
                                  <?php  endforeach;  ?>
                                   </tbody>
                                 </table>
                         </div>
                         
                         <div class="width-auto margin_left10 left">
                           <div class="height-30 width-label-350 auto-position margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Add Marks (%) with Annual/Final Exam 
                            </div>
                            <form action="" method="post" name="mode">
                            <div class="height-auto padding_bottom10 width-label-620 auto-position" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFF;">
                              
                              <div class="height-30 width-label-200 left auto-position margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Select Mode 
                            </div>
                            
                            <div class="height-30 width-label-200 right auto-position margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Marks (%) Count of Final Exam
                            </div>
                            
                            <div style="width:400px;height:1px; clear:both;"></div>
                            <div class="height-auto width-label-300 left bg1" style="margin-right:20px; padding:5px; border-radius:6px;" >
                            <div class="height-auto width-label-300 left margin_left10">
                               
                            <ul>
                             <?php 
							 $array=array("group_id"=>$group,"school_id"=>$school);
							 $data=$obj->SelectAllByID_Multiple("ams_annual_final",$array);
							 if(!empty($data))
							 foreach ($data as $row ):
							?>
                              <li class="width-label-300 height-35 margin-top-10">
                                <label class="left width-label-150" style="line-height:30px;">
                                  <input type="checkbox" name="exam[]" value="<?php echo $row->id; ?>"  /> 
                                     <span ><?php echo $row->name; ?></span>
                                  </label>
                                  
                                <label class="left">
                                  <input type="text" placeholder="Select (%)" class="width-label-100 center font_1 height-30" style="border:#C30 1px solid" name="modee[]"  />
                                  </label>
                                   <input type="hidden" name="group" value="<?php echo $id; ?>" />
                                   <input type="hidden" name="class" value="<?php echo $row->class_id; ?>" />
                                   <input type="hidden" name="session" value="<?php echo $row->session_id; ?>" />
                              </li>
                              <?php endforeach; ?>
                              </ul>
                            </div>
                            
                            </div>
                            
                            <div class="height-auto width-label-150 right center" style="margin-right:20px;" >
                               
                              <?php 
							 $array=array("group_id"=>$group,"school_id"=>$school);
							 $data=$obj->SelectAllByID_Multiple($table1,$array);
							 $df=100;
							 $ro=0;
							 if(!empty($data))
							 foreach ($data as $rowe ):
							?>
                                  
                          <?php  $ss=$rowe->mode; $ro+=$ss;  ?>
                          
                          <?php endforeach; ?>
                          
                            <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;">100%
                            </div>
                            
                            <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;"><?php  echo $ro; ?>%
                       <a href="edit_marks_mode.php?group=<?php echo $group; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit right"></i></a>
                            </div>
                            
                            <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;"><?php $df-=$ro; echo $df; ?>%
                           
                            </div>
                            
                          
                            <div class="height-50 width-label-150 center">
                             <button name="mode" type="submit" class="div_btn">Save</button>
                            </div>
                           
                            </div>
                           
                            
                            <div style="width:400px;height:1px; clear:both;"></div>
                            </div>
                      </form>
    <!-------------------------------------9----------------------->
    <div class="height-auto padding_bottom10 width-label-620 auto-position" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFF;">
                              
                              <div class="height-30 width-label-450 auto-position margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Format of Result Card/Progress Report  
                            </div>
                            
                            <div class="height-30 width-label-300 left  margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Student’s Examination Report 
                            </div>
                            
                            <div class="height-30 width-label-300 right margin-top-10 center" style="font-size:12px; border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                             Student’s Personal Report
                            </div>
                            
                            <div class="height-30 width-label-100 margin_left30 font_11 left margin-top-10 center" style="border-radius:6px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Choose
                            </div>
                            
                            <div class="height-30 width-label-100 left margin-top-10 font_11 center" style="border-radius:6px; margin-left:40px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Selected
                            </div>
                            
                            <div class="height-30 left margin-top-10 center" style="font-size:12px; border-radius:6px; margin-left:50px; border:#C30 1px solid; width:170px; margin-bottom:10px; background:#FFC;">
                              Performance Grading <span class="font_11">Choose</span>

                            </div>
                            
                            <div class="height-30 width-label-100 font_11 left margin-top-10 center" style="border-radius:6px; margin-left:5px; border:#C30 1px solid; margin-bottom:10px; background:#FFC;">
                              Selected
                            </div>
                            
                            <div style="width:400px;height:1px; clear:both;"></div>
                            <div class="height-auto width-label-300 left" style="margin-right:20px; padding:5px; border-radius:6px;" >
                            <div class="height-auto width-label-120 bg1 shadow_inner left margin_left10" style="padding:5px;">
                           
                            <ul>
                             <form action="" method="post" name="report">
                              <li class="width-label-130 margin-top-10">
                               
                                <input type="text" class="width-label-120 height-30 font_11 center" placeholder="Create Tex" name="name"  />
                                <button type="submit" name="creat" class="margin-top-10 doo font_11 shadow_inner">Creat</button>
                              </li>
                               </form>
                              <?php 
							 $array=array("school_id"=>$school);
							 $data=$obj->SelectAllByID($table2,$array);
							 if(!empty($data))
							 foreach ($data as $rowe ):
							?>
                              
                              <li class="width-label-130 margin-top-10">
                              
                                <label>
                                
                                  
                                    <a name="mm" class="colore-red" href="exam_mars_select.php?preport=yeas&amp;reaportt=<?php echo $rowe->id; ?>&school=<?php echo $rowe->school_id; ?>&amp;status=2">
                                    
                                    <?php $chk=$obj->exists_multiple($table3,array("status"=>2,"report_id"=>$rowe->id));
									if($chk==0){
									?>
                                   <span class="colore-red" > <input type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  />  <?php echo $rowe->name; ?></span> <?php } else { ?> 
								   <span><input checked="checked" type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  />  <?php echo $rowe->name; ?> <i class="fa fa-trash-o"></i> </span>
								   
								   <?php } ?>
                                    </a>
                                  
                                 </label>
                              </li>
                              
                              <?php endforeach; ?>
                              </ul>
                             
                            </div>
                            
                            <div class="height-auto width-label-120 shadow_inner bg1 left margin_left10" style="padding:5px;">
                               
                            <ul>
                              <?php 
							 $array=array("school_id"=>$school);
							 $data=$obj->SelectAllByID($table3,$array);
							 if(!empty($data))
							 foreach ($data as $roww ):
							?>
                              
                              <li class="width-label-130 margin-top-15">
                                <label class="margin_left10">
                                  
								   <a href="<?php echo $obj->filename();?>?id=<?php echo $roww->id;?>&amp;actionw=deletew"><img class="left" src="images/gnome_edit_delete.gif" /> 
                                   <div class="font_11 colore-red left">
								   <?php echo $obj->SelectAllByVal($table2,"id",$roww->report_id,"name"); ?>
                                   </div>
                                   </a>
								   
                                </label>
                              </li>
                              <?php endforeach; ?>
                              </ul>
                            </div>
                            
                            
                          
                            </div>
                            
                            <div class="height-auto width-label-280 right" style="padding:5px; border-radius:6px;" >
                            <div class="height-auto width-label-120 shadow_inner bg1 left margin_left10" style="padding:5px;">
                               
                            <ul>
                            <form action="" method="post" name="hhk">
                              <li class="width-label-130 margin-top-10">
                                <input type="text" class="width-label-120 center font_11 height-30" placeholder="Create Tex" name="performance"  />
                                <button type="submit" name="creat1" class="margin-top-10 doo font_11 shadow_inner">Creat</button>
                              </li>
                              </form>
                              <?php 
							 $array=array("school_id"=>$school);
							 $data=$obj->SelectAllByID($table4,$array);
							 if(!empty($data))
							 foreach ($data as $rowe ):
							?>
                              
                              <li class="width-label-130 margin-top-10">
                              
                                <label>
                               
                                  
                                    <a name="mm" class="colore-red" href="exam_mars_select.php?preport1=yeas&amp;performancee=<?php echo $rowe->id; ?>&school=<?php echo $rowe->school_id; ?>&amp;status=2">
                                    
                                    <?php $chk=$obj->exists_multiple($table5,array("status"=>2,"performance_id"=>$rowe->id));
									if($chk==0){
									?>
                                   <span class="colore-red" >  <input type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  /> <?php echo $rowe->name; ?></span> <?php } else { ?> 
								   <span style="color:#CCC;" >  <input checked="checked" type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  /> <?php echo $rowe->name; ?> </span>
								   
								   <?php } ?>
                                    </a>
                                  
                              </li>
                              <?php endforeach; ?>
                              </ul>
                            </div>
                            
                            <div class="height-auto width-label-120 bg1 shadow_inner left margin_left10" style="padding:5px;">
                               
                            <ul>
                            <?php 
							 $array=array("school_id"=>$school);
							 $data=$obj->SelectAllByID($table5,$array);
							 if(!empty($data))
							 foreach ($data as $rowr ):
							?>
                              <li class="width-label-130 margin-top-15">
                                <label class="margin_left10">
                                  
								   <a href="<?php echo $obj->filename();?>?id=<?php echo $rowr->id;?>&amp;actionn=deletee"><img class="left" src="images/gnome_edit_delete.gif" /> 
                                   <div class="font_11 colore-red left">
								   <?php echo $obj->SelectAllByVal($table4,"id",$rowr->performance_id,"name"); ?>
                                   </div>
                                   </a>
								   
                                </label>
                              </li>
                              <?php endforeach; ?>
                              </ul>
                            </div>
                          
                            </div>
                           
                            
                            <div style="width:400px;height:1px; clear:both;"></div>
                            </div>
                            <!-----------------------------9--------------------->
                         </div>
                         
                         <div class="clear"></div>
                       </div>
<!-------------------------------------------------------------------------------------------------->                        

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