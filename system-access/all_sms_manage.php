<?php
include_once('class/auth.php');
$table = "ams_management_sms";

if (isset($_POST['save']))
 {
	 
    foreach($_POST['id_number'] as $index=>$nn):
	
			if($obj->exists_multiple($table,array("id_number"=>$nn,"school_id"=>$school))==0)
			{
        	$obj->insert($table,array("id_number"=>$nn,"text"=>$_POST['text'],"group_id"=>$_POST['group'],"number"=>$_POST['number'][$index],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));
			}
			
			
        endforeach;
		
		$count=count($_POST['id_number']);
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
            function showsgroup(str)
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
				
                xmlhttp.open("GET", "ajx/manage_group_t.php?t="+str, true);
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
				
                xmlhttp.open("GET", "ajx/abotun9.php?s="+str, true);
                xmlhttp.send();
            }
</script>
        
<script>
            function showslist(str)
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
				
				category=document.getElementById('category').value;
                xmlhttp.open("GET", "ajx/show_managmant_group_list.php?m="+str+"&category="+category, true);
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
                            <img src="images/images.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>SMS TO ALL MANAGE GROUP</h3></div>
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

                    <div class="menu_div auto-position shadow_inner" style="margin-top:15px;">
                        

                       
                         <div class=" width-label-250 arial font-color-dark-red left space-top-5 bold margin_left10">&lowast; User Group Name :</div>
                        <div class="width-label-200 left">
                          <select id="group" name="group" onchange="showsgroup(this.value)" class="form-control secll select2">
                            <option value="" >Select Group</option>
                            <?php
							$array=array("school_id"=>$school);   
							 $data=$obj->SelectAllByID('ams_management_group',$array);
							 if(!empty($data))
							 foreach($data as $row):
							?>
                            <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                            <?php endforeach; ?>
                            
                        </select>
                        </div>
                        
                        <div class=" width-label-250 arial font-color-dark-red left space-top-5 bold">&lowast; User Group Category :</div>
                        <div class="width-label-200 left">
                          <select id="category" class="form-control secll select2" onchange="showee(this.value)">
                            <option value="">Select Category</option>
                            
                        </select>
                        </div>

                        <ul>
                             <li id="df" style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                
   <button type="submit" name="submit" class="height-35 div_btn" onclick="showallstd('3')">Show Class / Course</button>
                               
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>Select Send SMS Group</left></h2>
                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="padding:8px; border:none; height:auto;">
                            <div id="dynamic">
                            
                            
                            
                            
                            </div>
                               
<div class="clear"></div>
                            </div>


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