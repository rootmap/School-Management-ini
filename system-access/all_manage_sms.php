<?php
include_once('class/auth.php');
$table="ams_contact";
$table1 = "ams_management_sms";
if (isset($_POST['save']))
 {
	 if($balanceuser!=0)
	 {
		 $time=date('h:i:s a');
			$phone=array();
			foreach($_POST['number'] as $ss):	
				$phone[]=$ss;			
			endforeach;
			
			$gotnumber=implode(",",$phone);
			$numbers=str_replace(",","|88",$gotnumber);
			//$obj->amsit_sms_send($numbers,$_POST['sms']);
			
			$count=count($_POST['number']);
			if($count!=0)
			{
				$ops->sms($numbers,$_POST['name'],$brand,$school);
				echo $obj->Success("SMS Sent Successfully","all_sms_manage.php");	
			}
			else
			{
				echo $obj->Error("Sent SMS Failed","all_sms_manage.php");	
			}
	 }
	 else
	 {
		$obj->Error("Insufficient Sms Quantity In Stock..",$obj->filename()); 
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
				
                xmlhttp.open("GET", "ajx/abotun3.php?s="+str, true);
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
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>SEND SMS TO GROUP</h3></div>
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
                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>Select Send SMS Group</left></h2>
                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="padding:8px; border:none; height:auto;">
                            <div id="dynamic">
                            
                            
                             <form action="" method="post" name="sms">
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                    <th><input type="checkbox" id="checkAll" name="all" value=""/> All</th>   
                                    <th>SL NO</th> 
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Information</th>
                                    <th>Number</th> 
                                    <th>Group</th>
                                   
                                    </thead>
                                    <tbody>
								 <?php
                                      $array=array("school_id"=>$school);
                                      $data=$obj->SelectAllByID($table,$array);
                                      $s=1;
                                      if(!empty($data))
                                      foreach($data as $row)
                            
                            {        ?>

                                 <tr name="all" id="all" class="">
                                    <td class="center">
									<input type="checkbox" id="slideThree" name="number[]" value="<?php echo $row->number; ?>"/>
									 </td>  
                                      <td class="center">
									 <?php echo $s;?>
                                     </td> 
                                     <td class="center"><?php echo $row->name;?></td>  
                                    <td class="center">
									 <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name");?>
                                    </td>
                                    
                                    <td class="center">
									<?php echo $row->info;?>
                                    </td>
                                    
                                    <td class="center">
									 <?php echo $row->number;?>
                                    </td>
                                    
                                    <td class="center">
									 <?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name");?>
                                    </td>
                                </tr>
							<?php $s++;
                                 }
                             ?>
                             </tbody>   
                           </table>
                                
                                <div>
                                    <div class="menu_div" style="margin-top:40px; background:none; color:#09F;">
            
                <ul>
                    <li style="margin-left:10px;">
                     <a class="sa" style="" href='#'><span>Choose From SMS Book</span></a></li>

                </ul>
            
            <div class="margin_left10 b_radius5" style="margin-top:5px;">
                <div id="char_namb" class="left arial bold">
                    <span id="remaining">160 /</span> 
                    <span id="messages">1</span>
                </div>
                <textarea name="name" value="" id="message" class="smsbox" placeholder="Write Message Here……"></textarea>
                </div>
    
                <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold "></div>
    
                <button type="submit" style="margin:0px; margin-left:190px;" class="div_btn" name="save">Send SMS</button>
          
        </div> 
</form>
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

</html>