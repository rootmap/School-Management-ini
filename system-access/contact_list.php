<?php
include_once('class/auth.php');
$table="ams_contact";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
        
        <script>
            function showselectgroup(str)
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
				
                xmlhttp.open("GET", "ajx/managegroup.php?m="+str, true);
                xmlhttp.send();
            }
</script>

        	
        <!-----table ends------------------------------------------------------------------------------------------------------------->
       
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
                            <div class="topbar_small_div_text left height-30">MANAGE GROUP</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h2>CONTACT LIST</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>


                        </ul>
                        <?php include_once('class/esm.php'); ?>
                    </div>
                </div>
                <div class="border_top"></div>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->               
                <div style="clear:both; ">
                
           <div class="menu_div shadow_inner">
                    <div class=" width-label-175 arial font-color-dark-red left space-top-5 bold">
                             &lowast; Select User Group :
                     </div>
                     
                        <div class="width-label-250 left">
                          <select id="single" name="group" onchange="showselectgroup(this.value)" class="secll">
                            <option value="">Select Group</option>
                            <?php
							  $array=array("school_id"=>$school); 
							  $date=$obj->SelectAllByID("ams_management_group",$array);
							  if(!empty($date))
							  foreach($date as $row):
							?>
                            <option value="<?php echo $row->id;?>">
                            <?php echo $row->name;?>
                            </option>
                            <?php endforeach;?>
                            
                        </select>
    </div><div class="clear"></div>
          </div>
                
                  <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                      <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>Group CONTACT List</left></h2>
                    </div>
                        <div class="admission_div_page auto-position" style="border:none; height:auto; padding:10px;">


                            <!--tables code start from here-->
                           <div id="printableArea">
                                <div id="dynamic">
                                </div>
                            </div>
                             <div class="report_menu_div width-col3 right">
                                <ul>
                                    <li class="right">
                                        <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                            
                                            <img class="right" style="margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style="margin-top:5px;" src="images/excel_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style=" margin-top:5px;" src="images/mword_icon.png" />
                                        </button>
                                    </li>
                                </ul>
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