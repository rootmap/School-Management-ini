<?php
include_once('class/auth.php');
$table="ams_marks_mode";
extract($_GET);
if(isset($_POST['update']))

{
      if($obj->update($table,array("id"=>$_POST['id'],
	   "mode"=>$_POST['modee']))==1)
		
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&school=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&school=".$school);	
		}
		
}

if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    
    $count=count($_GET['id']);
      if($count!==0)
	  {
			echo $obj->Success("Data Delete Successfully",$obj->filename()."?id=".$group."&school=".$school);	
		}
		else
		{
			echo $obj->Error("Data Delete Failed",$obj->filename()."?id=".$group."&school=".$school);	
		}
            
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
      
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
                xmlhttp.open("GET", "ajx/edit_marks_mode.php?s=" + str, true);
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
                            <div class="topbar_small_div_text left height-30">Mark's Mode</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EDIT MARK'S MODE</h2></div>
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
                            <h2 class="margin_left30"><left>EDIT MARK'S MODE :</left></h2>
                        </div>
                       
                        <div id="shiftshow" class="admission_form_div width-col2 auto-position">
                        
                        </div>
                        <div style="padding:10px;" class="width-auto height-auto">
                          <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th width="5%">S/L</th>
                                            <th>Session</th>
                                            <th>Class / Course</th>
                                            <th>Group</th>
                                            <th>Examation Name</th>
                                            <th>Mark Exam</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500; font-size:14px;">
                                        <?php 
										$array=array("school_id"=>$school,"group_id"=>$group);
                                        $data=$obj->SelectAllByID_Multiple($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
        <tr class="">
        <td><?php echo $x; ?></td>
        
        <td class="center"><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?></td>
        
        <td class="center"><?php echo $obj->SelectAllByVal("ams_exam_category","id",$row->exam_id,"name"); ?></td>
        <td class="center"><?php echo $row->mode; ?></td>
        <td class="center"><button style="background:none; border:none;" id="edit" onclick="shiftedit('<?php echo $row->id; ?>')">
        <i class="fa fa-edit"></i></button></td>
        
        <td class="center">
        <a href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&amp;action=delete"><img src="images/deletered.gif" /></a>
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