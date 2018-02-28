<?php
include_once('class/auth.php');
$table="ams_grading_system_dateils";
extract($_GET);
$rand=rand();
if(isset($_POST['save']))
{
	$coun = count ($_POST['letter']);
	if($coun!=0)
	{
		$obj->delete("ams_grading_system_dateils",array("school_id"=>$school));	
	}
	
	foreach($_POST['letter'] as $index=>$nn): 
		if($obj->exists_Multiple($table,array("letter"=>$nn,"category_id"=>$id,"school_id"=>$school))==0)
		 {
		   if(!empty($_POST['letter'][$index]))
		   {	 
			   $obj->insert($table,array(
			   "letter"=>$_POST['letter'][$index],
			   "Point"=>$_POST['point'][$index],
			   "Point_2"=>$_POST['point_2'][$index],
			   "category_id"=>$_POST['cat_id'],
			   "range_1"=>$_POST['rangeone'][$index],
			   "range_2"=>$_POST['rangetwo'][$index],
			   "date"=>date('Y-m-d'),
			   "school_id"=>$school,
			   "status"=>2));
		   }
		 }
	  endforeach ;
	
	if($coun!==0)
	{
		echo $obj->Success("Data Saved Successfully","exam_setting_manu.php");
	}
	else
	{
		echo $obj->Error("Data Saved Failed",$obj->filename()."?id=".$id."&school=".$school);	
	}
	
  }
    

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function subjectedit(str)
            {
                if (str == "")
                {
                    document.getElementById("grading").innerHTML = "";
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
						//$('#grading').fadeIn();
						//$('#grading').fadeOut();
                        document.getElementById("grading").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/grading_edit.php?s=" + str, true);
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
                        <div class="topbar_small_div left">
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">Grading</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Grading System Select</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>

                          <?php include('includes/back.php'); ?>
                        </ul>
                       
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                         <?php include_once('class/esm.php'); ?>
                <div style="clear:both; ">
                    


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left> Grading System Select</left></h2>
                        </div>
                        <div class="admission_form_div width-auto auto-position" style="padding:10px;">
                        <!--tables code start from here-->
                         <div id="grading"  style="margin-top:15px;"></div>
                         <form action="" method="post" name="grebd">
                          <div id="dynamic"  style="margin-top:15px;">
                              <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                             <thead>
                                   
                                    <th>Sl No.</th>
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                   </thead>
                                  
                            
                        
                            <tbody>
                                	<?php
									$chkgrading=$obj->exists_multiple("ams_grading_system_dateils",array("school_id"=>$school));
									if($chkgrading!=0)
									{
										$array=array("school_id"=>$school);
									}
									else
									{
										$array=array("category_id"=>$_GET['id']);
									}
								  	
									$data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                  <tr>
                                    <td><?php echo $x; ?></td>
                                     <td>
                                     <input value="<?php echo $row->range_1; ?>" style="width:37px;" placeholder="Range One" name="rangeone[]" class="textbox"/>
                                     -below
                                     <input value="<?php echo $row->range_2; ?>" style="width:37px;" placeholder="Range One" name="rangetwo[]" class="textbox"/>
                                     </td>
                                    <td class="center">
									  <input value="<?php echo $row->letter; ?>" style="width:37px;" placeholder="Range One" name="letter[]" class="textbox"/>
                                      </td>
                                    <td class="center">
									  <input value="<?php echo $row->point; ?>" style="width:37px;" placeholder="Range One" name="point[]" class="textbox" /> - Below - 
									  <input value="<?php echo $row->point_2; ?>" style="width:37px;" placeholder="Range Two" name="point_2[]" class="textbox" /></td>  
									<!--</td>
                                    <td class="center"><button style="border:none; background:none;" type="button" name="ebb" id="ebb" onclick="subjectedit('<?php //echo $row->id; ?>')"><i class="fa fa-edit"></i></button></td>
                                    -->
                                  </tr>
                                 <?php $x++; endforeach;  ?>                                    
                            </tbody>
                           
                        </table> 
                          <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <input type="hidden" name="cat_id" value="<?php echo $_GET['id']; ?>" />
                                    <button type="submit" name="save" class=" height-35 div_btn"> Submit </button>
                                </li> 
                       </div>
                       </form>
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