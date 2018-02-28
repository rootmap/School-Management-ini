<?php
include_once('class/auth.php');
$table="ams_payment";
$table2="ams_payment_details";
if(isset($_POST['save']))
{
    

    $obj->insert($table,array("roll"=>$_POST['roll'],"admission"=>$_POST['admission'],"receipt"=>$_POST['receipt'],"school_id"=>$school,"date"=>date('d-m-Y'),"school_id"=>$school));
			
        foreach($_POST['taka'] as $index=>$nn):
			if($obj->exists_multiple($table,array("roll"=>$_POST['roll'],"admission"=>$_POST['admission'][$index],"total_taka"=>$_POST['taka'][$index],"receipt"=>$_POST['receipt'],"school_id"=>$school))==0)
			{
        	
			
			$obj->insert($table2,array("roll"=>$_POST['roll'],"total"=>$_POST['taka_t'][$index],"account_id"=>$_POST['admission'],"amount"=>$_POST['taka'][$index],"receipt_number"=>$_POST['receipt'],"account_name_id"=>$_POST['account_name'][$index],"school_id"=>$school,"date"=>date('d-m-Y'),"status"=>1));
			
			
			}
			
        endforeach;
		$count=count($_POST['taka']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?receipt=".$_POST['receipt']);	
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
        <style>
         select{color:rgba(0,0,0,1); border:1px #990000 solid;}
        </style>
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
				
                xmlhttp.open("GET", "ajx/section.php?t="+str, true);
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
				
                xmlhttp.open("GET", "ajx/shift.php?s="+str, true);
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
				
                xmlhttp.open("GET", "ajx/group1.php?s="+str, true);
                xmlhttp.send();
            }
</script>

<script>
            function showallstd(str)
            {
                if (str == "")
                {
                    document.getElementById("dddd").innerHTML = "";
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
                        document.getElementById("dddd").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/student_account_1.php?k=" + str, true);
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
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/student_account_2.php?d=" + str, true);
                xmlhttp.send();
            }
        </script>
        
         <script>
            function showrecept(str)
            {
                if (str == "")
                {
                    document.getElementById("rrr").innerHTML = "";
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
                        document.getElementById("rrr").innerHTML = xmlhttp.responseText;
                    }
                }
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/student_account_2.php?d=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showreceipt(str)
            {
                if (str == "")
                {
                    document.getElementById("hmm").innerHTML = "";
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
                        document.getElementById("hmm").innerHTML = xmlhttp.responseText;
                    }
                }
				roll=document.getElementById('roll').value;
                xmlhttp.open("GET", "ajx/student_account_view.php?r=" + str, true);
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
                            <img src="images/Finance_icon.png"/>
                            <div class="topbar_small_div_text left height-30">FINANCE</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>STUDENTS' ACCOUNTS</h2></div>
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




                    <div class="st_fin_div_page" style="margin-top: 20px; height:auto; ">
                        <div class="attendance_reg_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <center>                              
                                <div class="width-col1 left" ><img src="images/direction_left.png"/></div>
                                <div class="attendance_reg_heading left width-label-250 auto-padding">
                                    <center><h4>
                                            Students' Accounts
                                        </h4></center>
                                </div>
                                <div class="width-col1 right" ><img src="images/direction_right.png"/></div></center>
                        </div>
                        
                        <div class="st_fin_small_form_div width-col5 auto-position" >
                        
                        	<div class="st_fin_small_div left margin_left5">
                            	<ul style="margin-left:30px;">
                           		<li class="add_st_form_div_label_view_details height-30 width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="session" id="session" onchange="showcls(this.value)" >
                                        <option>Select Session</option>
                                        <?php
										$array=array("school_id"=>$school); 
										 $data=$obj->SelectAllByID('ams_session',$array);
										 $x=1;
										 if(!empty($data))
										 foreach($data as $row):
										 ?>
                                         <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                         <?php endforeach;?>
                                    </select>
                                </li>
                                <li class="add_st_form_div_label_view_details center height-30 width-label-130 left">Class / Course:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="class" id="class" onchange="showsection(this.value)" >
                                        <option>Select Class / Course</option>
                                        
                                    </select>
                                </li>
                            <li class="add_st_form_div_label_view_details center height-30 width-label-70 left">Section:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-130 left">
                                    <select style="width:130px;" name="section" id="section" onchange="showshift(this.value)" >
                                        <option>Section</option>
                                    </select>
                                </li>
                                </ul>
                                <div style="clear:both !important;"></div>
                                <ul style="margin-left:30px;">
                            <li class="add_st_form_div_label_view_details height-30 center width-label-70 left">Shift:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-150 left">
                                    <select style="width:130px;" name="shift" id="shift" onchange="showgroup(this.value)">
                                        <option>Shift</option>
                                    </select>
                                </li>
                               
                            <li class="add_st_form_div_label_view_details width-label-110 height-30 left">Group:</li>
                                <li class="add_st_form_div_label_view_details height-30 width-label-100 left">
                                    <select style="width:130px;" name="group" id="group" onchange="showallstd(this.value)" >
                                        <option>Group</option>
                                    </select>
                                </li>
                                </ul>
                                <ul style="margin-left:30px;">
                            <li id="dddd" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                             <button type="submit"  name="login" class=" height-35 div_btn">                                Submit
                             </button>
                                </li>
                                </ul>
                        </ul>
                        </div>
                        
     <div id="dynamic1" class="st_fin_small_div_tt_1"  style=" width:50%; float:left; max-height:400px; overflow:auto;">
                            
                               
      </div>
                             
                            <?php
				       
						$data=$obj->lastid($table);
						if(!empty($data))
						foreach($data as $row1):
						?>  
                        
                        <?php endforeach; ?>
                                
                            
                            

                            <div class="left st_fin_small_div_tt" >
                                <!--tables code start from here-->
                                    <div id="dynamic" class="margin_right10">
                                       
                                     </div>
                                <!--tables code end from here-->
                                
                                
                            </div>
<div class="clear"></div>
                        </div>
                        <?php
						if(@$_GET['receipt'])
						 {
						 ?>
                <div id="rrr" style="margin-top:10px; margin-left:auto;margin-right:auto; width:50%; padding:10px;">
                   <?php
				       $array=array("receipt"=>$row1->receipt);
						$data=$obj->SelectAllByID($table,$array);
						if(!empty($data))
						foreach($data as $row):
						?>    
<table class="Fees_table shadow_inner" style="padding-bottom:10px; padding-bottom:10px;" cellspacing="1" align="center" >

                   <tr>
                    <td colspan="4" class="center height-70">
					  <a  style="font-size:20px;color:#09C; border-bottom:#09C 2px solid; padding:5px;"><?php echo $obj->SelectAllByVal("ams_singup","id",$row->school_id,"acount_name");?></a>
                     </td>
                                        </tr>
                                        
                                        <tr style="height:10px;">
                                            <td colspan="2"  class="a-left" style="padding-left:25px;">
                                            <span style="color:#333;">Date :</span> <?php echo $row->date;?></td>
                                            
                                            <td colspan="2" class="a-left" style="padding-left:25px;">
                                            <span style="color:#333;">Receipt No:</span> <?php echo $row->receipt;?></td>
                                            
                                        </tr>
                                            <tr>
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
                                            <span style="color:#333;">Class / Course:</span>
                                            
											<?php 
							$class_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"class_id"); 
							$session_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"session_id"); 
							$section_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"section_id"); 
							$shift_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"shift_id"); 
							$group_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"group_id");
							$name=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"name");  
							
											echo $obj->SelectAllByVal("ams_class","id",$class_id,"name");
											?>
											
                                            </td>
                                            
                                            <td colspan="2" class="a-left " style="padding-left:25px;" >
                                            <span style="color:#333;">Session:</span>
											<?php echo $obj->SelectAllByVal("ams_session","id",$session_id,"name");?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class=" a-left" style="padding-left:25px;">
                                            <span style="color:#333;">Section:</span>
                                            <?php echo $obj->SelectAllByVal("ams_section","id",$section_id,"name");?>
                                            </td>
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
                                            <span style="color:#333;">Shift:</span>
                                            <?php echo $obj->SelectAllByVal("ams_shift","id",$shift_id,"name");?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
                                            <span style="color:#333;">Class / Course Roll:</span>
											<?php echo $row->roll;?>
                                            </td>
                                            
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
											<span style="color:#333;">Group:</span>
											<?php echo $obj->SelectAllByVal("ams_student_group","id",$group_id,"name");?>
											</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
                                            <span style="color:#333;">Adm No:</span>
											<input type="hidden" name="admission" value="<?php echo $row->admition;?>"/>
											<?php echo $row->admission;?>
                                            </td>
                                            
                                            <td colspan="2" class=" a-left " style="padding-left:25px;">
                                            <input type="hidden" name="roll" value="<?php echo $row->roll;?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="a-left" colspan="4" style="padding-left:25px;">
                                            <span style="color:#333;">Student Name :</span> <?php echo $name;?></td>
                                          
                                        </tr>
                                          
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                 <td class="center" style="padding-left:25px;">S/L.</td>
                                                <td class="center">Accounts Title</td>
                                                <td class="center">Amount</td>
                                                 <td class="center">Paid Amount</td>

                                            </tr>
									 
                                     <?php  ?>
                                     <?php 
									    $array=array("receipt_number"=>$row->receipt);
										$data=$obj->SelectAllByID('ams_payment_details',$array);
										$s=1;
										$sum=0;
										$sum1=0;
										if(!empty($data))
										 foreach($data as $rww):
										 $sum+=$rww->amount;
										 $sum1+=$rww->total;
												
									 ?>
                                     
                                             <tr style="background:#ececec;">
                                             

                                                <td  class="center "><?php echo $s;?></td>
                                                <td  class=" a-left">
                                                <?php echo $obj->SelectAllByVal("ams_student_account","id",$rww->account_name_id,"name");?>
                                                </td>
                                                
                                                 <td  class="center" style="padding-left:10px;">
                                                 <?php echo $rww->total; ?>
                                                 </td>
                                                 
                                                 <td  class="center">
                                                 <?php echo $rww->amount; ?>
                                                 </td>
                                         
                                               
                                            </tr>
                                            
                                            <?php $s++; endforeach ; ?>
                                            <tr style="background:#d8d8d8; color:#000;">
                                            <td></td>
                                            <td colspan="2" class="center">Total Paid = </td>
                                            <td class="center"><?php echo $sum; ?> Tk</td>
                                            </tr>
                                            
                                            <tr style="background:#d8d8d8; color:#000;">
                                            <td></td>
                                            <td  colspan="2" class="center">Total Due =</td>
                                            <td class="center">
                                            <?php $due=$sum1-$sum; echo $due; ?> Tk
                                            </td>
                                            </tr>
                                            
                                            <tr style="background:#d8d8d8; color:#000;">
                                            <td style="padding-left:20px;" colspan="4">In Word:....</td>
                                            </tr>
                                            
                                           <tr style="color:#000;">
                                            <td colspan="2" style="padding-left:20px; padding-top:40px;">
                                              <a style="border-top:#666 dotted 2px;">Teken By</a>
                                            </td>
                                            <td colspan="2" style=" padding-top:40px;" class="center">
                                              <a style="border-top:#666 dotted 2px;">Given By</a>
                                            </td>
                                            </tr>
                                            


                               </table>

<?php endforeach; ?>

<ul style="margin-left:30px;">
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                   
                                    <button type="submit" id="save" name="save" onclick="showrecept('2')" class=" height-35 div_btn">Print</button>
                                   
                                </li>
                                </ul>
                                </form>
               <div class="clear"></div> 
                    </div>
                    <?php } ?>
                    
                    </div>

    </div>
                            <!----------------------select menu ends--------------------------------------------------------------------------------------->

                            


                    
                    </div>
                    <!--tables code end here-->
            </div>
                    <div class="footer_div_full">
                        <div class="footer_div">
                            <?php include ('./class/footer.php'); ?>
                        </div>
                    </div>   
                


                    
                </body>
                </html>