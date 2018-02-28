<?php
include_once('class/auth.php');
$table="ams_grading_system_dateils";
extract($_POST);
if(isset($_POST['save']))
{
	
    if($obj->exists_Multiple($table,array("Letter"=>$ff,"Point"=>$fff,"category_id"=>$ffff))==0  
	&& !empty($ff)
	&& !empty($fff)
	&& !empty($ffff)
	&& !empty($rangeone)
	&& !empty($rangetwo))
    {
		
        
       if( $obj->insert($table,array(
	   "Letter"=>$ff,
	   "Point"=>$fff,
	   "category_id"=>$ffff,
	   "range_1"=>$rangeone,
	   "range_2"=>$rangetwo,
	   "date"=>date('Y-m-d'),
	   "status"=>1))==1)
	
	{
		echo $obj->Success("Data Saved Successfully( ".$count." )",$obj->filename());
	}
	else
	{
		echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
	}
  }
     else
	{
		echo $obj->Error("Somthing Wrong Please Try Agin....",$obj->filename());	
	}
}
if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name'],"details"=>$_POST['text']);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['name'])
	  {
		echo $obj->Success("Subject Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Subject Update Failed",$obj->filename());	
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
                    document.getElementById("subjectshow").innerHTML = "";
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
                        document.getElementById("subjectshow").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/edit_notice.php?s=" + str, true);
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
                        <div id="subjectshow" class="admission_form_div width-col2 auto-position" style="height:auto;">
                            <form method="post" name="addgroup" action="" enctype="multipart/form-data">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Range of marks(%)<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Range of marks(%) Here" name="name" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Range <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input style="width:37%;" placeholder="Range One" name="rangeone" class="textbox left"/>
                                    <input style="width:37%;" placeholder="Range Two" name="rangetwo" class="textbox left"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Letter Grade<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Letter Grade Here" name="ff" class="textbox"/>
                                </li>
                                
                                 <li class="admission_form_div_label height-30 width-label-200 left">Grade Point<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Grade Point Here" name="fff" class="textbox"/>
                                </li>
                                 <li class="admission_form_div_label height-30 width-label-200 left">list <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="ffff" class="select_option">
                                      <option>select grading system</option>
                                      <?php
                                        $data=$obj->SelectAll("ams_grading_system_name");
                                        $x=1;
                                        if(!empty($data))
                                            
                                        foreach($data as $row):
                                        ?>
                                      <option><?php echo $row->name; ?></option>
                                      <?php  endforeach;  ?>
                                    </select>
                                </li>
                                
                               
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="save" class=" height-35 div_btn"> Submit </button>
                                </li>

                            </ul>
                            </form>

                        </div>
<div class="clear"></div>

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